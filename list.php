<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dynamic List</title>
</head>

<body>
    <h1>To-Do List</h1>
    <ul id="list">
        <li>Create Presentation</li>
        <li>Prepare CSS Quiz</li>
        <li>Create a Mini JavaScript Project</li>
    </ul>

    <h2>Insert a New Task</h2>
    <form action="">
        <label for="task">Task : </label>
        <input type="text" name="task" id="task" />
        <button id="addTaskBtn">Add Task</button>
    </form>

    <script src="list.js"></script>
</body>

</html>