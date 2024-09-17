<?php

$taskList = ["first task", "second task"];

function showAllTask($inputTasks) {
    foreach($inputTasks as $task) {
        echo $task . "\n";
    }
}

function addTask(&$inputTasks){
    $task = readLine("Ievadiet jaunu uzdevumu: ");
    array_push($inputTasks, $task);
}

function showTask($inputTasks){
    $index = readLine("Ievadiet uzdevuma index: ");
    if ($index >= 0 && count($inputTasks) > $index) {
        echo $inputTasks[$index] . "\n";
    } else {
        echo "Invalid number\n";
        return;
    }
}
// uztaisit do-while ciklu

    //$name = readLine("Ievadi savu vardu: \n");
    //echo "Your name is $name";


    do {
        echo "Uzdevumu parvaldnieks\n";
        echo "Apskatit visus uzdevumus => 1\n ";
        echo "Ievadit jaunu uzdevumu => 2\n ";
        echo "Apskatit vienu uzdevumu => 3\n ";
        
        $choice = readLine("Izvelies darbibu:");

        switch ($choice) {
            case '1':
              showAllTask($taskList);
              break;
            case '2':
              addTask($taskList);
              break;
            case '3':
              showTask($taskList);
              break;
            default:
              echo "Invalid option";
          }
      $continue = readLine("Vai velies turpinat?");
      } while ($continue != "N");
      
    