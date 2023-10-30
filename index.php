<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Vue  -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- axios  -->
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
  <title>todo-list</title>
</head>
<body>

<div class="container my-5 py-2 bg-warning" id="App">
  <h2>To Do List</h2>
  

  <ul v-if="taskList.length > 0" class="list-group">
  <p>Your tasks:</p>
    <li v-for="(task, index) in taskList" class="list-group-item">{{ task }}</li>
  </ul>

  <p v-else>You don't have tasks to do, if you want add them to list</p>

  <div class="insert-task text-center py-2">
    <input @keyup.enter="addTask" v-model.trim="newTask" type="text" class="rounded-2 py-1 px-1">
    <button @click="addTask" class="btn btn-primary ms-2 ">Add Task</button>
  </div>


</div>

<script src="./script.js"></script>
</body>
</html>