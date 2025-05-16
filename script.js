let p1 = document.getElementById("p1");

p1.innerHTML = "<i>This is Italic</i>";

p1.style.color = "red";
p1.style.backgroundColor = "yellow";

let a = document.getElementById("a");

a.setAttribute("href", "https://www.w3schools.com/");
a.innerHTML = "Go to W3Schools";

console.log(a.getAttribute("href"));

let newElement = document.createElement("p");

newElement.innerHTML = "<u> New Element </u>";

document.body.appendChild(newElement);

a.remove();

function changeTextColor() {}

let p2 = document.getElementById("p2");

p2.addEventListener("click", function () {
  p2.style.fontSize = "24px";
});
