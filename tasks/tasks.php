<?php 

include_once("config.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$connection){
    throw new Exception("Database cannot be connected");
}
else{
    $action =  $_POST['action'] ?? '';
    if(!$action){
        header("Location: index.php");
        die();
    }else{
        if('add' == $action){
           $task = $_POST['taskText'];
           $date = $_POST['taskDate']; 
    
           if($task && $date){
              $query = "INSERT INTO ".DB_TABLE."(task,date)VALUES('{$task}','{$date}')";
                //  $query = "INSERT INTO tasks(task,date)VALUES('{$task}','$date')";
              mysqli_query($connection,$query);
              header("Location: index.php?added=true");             
           }
        }
        else if('complete' == $action){
            $taskid = $_POST['taskid'];
            if($taskid){
                $taskUpdateQuery = "UPDATE tasks SET complete = 1 WHERE id = {$taskid} LIMIT 1";
                mysqli_query($connection,$taskUpdateQuery);
            }
            header("Location: index.php");
        }
        else if('incomplete' == $action){
            $taskid = $_POST['taskid'];
            if($taskid){
                $incompletQuery = "UPDATE tasks SET complete = 0 WHERE id = {$taskid} LIMIT 1";
                mysqli_query($connection,$incompletQuery);
            }
            header("Location: index.php"); 
        }
        else if("completeDataDelete" == $action){ 
            $taskid = $_POST['taskid'];
            // echo "DELETING ID = {$taskid}";
            // die();
            if($taskid){
                $comDelQuery = "DELETE FROM tasks WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection,$comDelQuery);
            }  
            header("Location: index.php");
        }
        else if("unCompleteDataDelete" == $action){
            $taskid = $_POST['taskid'];
            // echo "DELETING ID = {$taskid}";
            // die();
            if($taskid){
                $unCompleteQuery = "DELETE FROM tasks WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection,$unCompleteQuery);
            }
            header("Location: index.php");
        }
        else if("bulkcomplete" == $action){
            $taskids = $_POST['taskids'];
            $_tasks = join(",",$taskids);
            if($taskids){
                $multiCompleteQuery = "UPDATE tasks SET complete = 1 WHERE id IN($_tasks)";
                mysqli_query($connection,$multiCompleteQuery);
            }
            header("Location: index.php");  
        }
        else if("bulkdelete" == $action){
            $taskids = $_POST["taskids"];
            $_tasksDel = join(",",$taskids);
            if($taskids){
                $multipleTasksDelQuery = "DELETE FROM tasks WHERE id IN ($_tasksDel)";
                mysqli_query($connection,$multipleTasksDelQuery);   
            }
            header("Location: index.php");
        }
    }
}

mysqli_close($connection);

?>