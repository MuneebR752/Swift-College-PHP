let addTaskBtn = document.getElementById("addTaskBtn");
let task = document.getElementById("task");
let list = document.getElementById("list");
addTaskBtn.addEventListener("click", function (event) {
  event.preventDefault();
  let newTask = document.createElement("li");
  newTask.innerHTML = task.value;
  list.appendChild(newTask);
});
