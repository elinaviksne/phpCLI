<?php

//$name = readline("Ievadi savu vārdu:\n");
//echo "Your name is $name \n";

$taskList = ["first task", "second task"];

function showAllTasks($inputTasks) {
    foreach($inputTasks as $task){
        echo $task . "\n";
    }
}

function addTask($inputTasks) {
    echo "To be implemented";
}

do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Ievadīt jaunu uzdevumu => 1\n";
    echo "Apskatīt uzdevumus => 2\n";
    $choice = readline("Izvēlies darbību: ");

    switch ($choice) {
        case '1':
          echo addTask();
          break;
        case '2':
          echo showAllTasks($taskList);
          break;
        case '3':
          echo "To be implemented\n";
          break;
        default:
          echo "Invalid option!\n";
      }

    $continue = readline("Vai vēlies turpināt?\n");
  } while ($continue != "N");
