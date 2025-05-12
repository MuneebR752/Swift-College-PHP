<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p id="p1">ABC</p>
    <p id="p2">XYZ</p>


    <script>
        function changeContentOfP(element, content) {
            element.innerHTML = content;
        }

        let p1 = document.getElementById("p1");
        let p2 = document.getElementById("p2");

        changeContentOfP(p2, "Hello, I'm Good");
        changeContentOfP(p1, "Hello, World");
    </script>
</body>

</html>