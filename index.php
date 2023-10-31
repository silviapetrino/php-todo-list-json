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
  <style>
    .done {
      text-decoration: line-through;
    }
  </style>
</head>
<body>

<div class="container my-5 py-2 bg-warning" id="App">
  <h2>To Do List</h2>
  
  <!-- tasks list  -->
  <ul v-if="taskList.length > 0" class="list-group">
  <p>Your tasks:</p>
    <li @click="toggleTaskDone()" v-for="(task, index) in taskList" class="list-group-item d-flex justify-content-between">
      <span :class="{done: done}">{{ task }}</span>
      
      <button @click="removeTask(index)" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
      </svg>
    </button>
    
    </li>
  </ul>
  <p v-else>You don't have any task to do, if you want add them to list</p>

  <!-- add an item to list  -->
  <div class="insert-task text-center py-2">
      <input name="taskAdded" @keyup.enter="addTask" v-model.trim="newTask" type="text" class="rounded-2 py-1 px-1">
      <button type="submit" @click="addTask" class="btn btn-primary ms-2 ">Add Task</button>
  </div>

</div>



<script src="./script.js"></script>
</body>
</html>