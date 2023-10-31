<?php 

var_dump($_POST['todoTask']);

$json_string = file_get_contents('tasks.json');

var_dump($json_string);

$list = json_decode($json_string, true);


if(isset($_POST['todoTask'])) {
  $newTask = $_POST['todoTask'];

  $taskObj = [
    'text' => $newTask,
    'done' => false
  ];

  if(isset($_POST['doneTask'])) {
    $taskDone = $_POST['doneTask'];
    $taskObj = [
      'text' => $newTask,
      'done' => true
    ];
  }
  
  // Aggiungo (push) LA NUOVA TASK alla lista esistente
  $list[] = $taskObj;

  // salvo il dato nel file json 
  file_put_contents('tasks.json', json_encode($list));
}

if(isset($_POST['removedTask'])) {
  $taskToRemove = $_POST['removedTask'];

    array_splice($list, $taskToRemove, 1);

    file_put_contents("tasks.json", json_encode($list));
}


// trasformo il file php in file json 
header('Content-Type: application/json');
// stampo la lista ricodificata - la lista php torna ad essere stringa e viene stampata

echo json_encode($list);

?>