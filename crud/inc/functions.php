<?php 

    // define('DB_NAME','C:\\xampp\\htdocs\\php\\crud\\data\\db.txt');

   function seed($filename){

        $data = array(
            array(
                'id' => 1,
                'fname' => 'Al',
                'lname' => 'Sakib',
                'roll' =>'28'
            ),
            array(
                'id' => 2,
                'fname' => 'Ariyan',
                'lname' => 'Ayon',
                'roll' =>'89'
            ),array(
                'id' => 3,
                'fname' => 'Nishan',
                'lname' => 'Ali',
                'roll' =>'25'
            ),array(
                'id' => 4,
                'fname' => 'Shabbir',
                'lname' => 'Bin Zia',
                'roll' =>'37'
            ),array(
                'id' => 5,
                'fname' => 'H Rahman',
                'lname' => 'Jim',
                'roll' =>'91'
            ),array(
                'id' => 6,
                'fname' => 'Sayed Najmul',
                'lname' => 'Hasan',
                'roll' =>'95'
            )
        );
     
        $serializedData = serialize($data);
       
        file_put_contents($filename,$serializedData,LOCK_EX); 

    }
?>
<?php 
    function generateReport($filename){
        $serializedData = file_get_contents($filename);
        $students = unserialize($serializedData); 
?>
    <table class="table table-success table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Id</th>
                <?php if(isAdmin() || isEditor()): ?> 
                   <th>Action</th>
                <?php endif; ?>   
            </tr>
            <?php 
                foreach($students as $student){
            ?>
                <tr>
                    <td><?php printf("%s %s",$student['fname'],$student['lname']);  ?></td>
                    <td><?php printf("%s",$student['roll']); ?></td>
                    <?php if (isAdmin()): ?>
                       <td><?php printf("<a href='./index.php?task=edit&id=%s' class='text-decoration-none'>Edit</a> : <a class='delete' href='./index.php?task=delete&id=%s' class='text-decoration-none'>Delete</a>",$student['id'],$student['id']); ?></td>
                    <?php elseif(isEditor()): ?>
                        <td> <?php printf("<a href='./index.php?task=edit&id=%s' class='text-decoration-none'>Edit</a>",$student['id']); ?> </td>
                    <?php endif; ?> 
                </tr>
            <?php          
                }
            ?>
        </thead> 
    </table>   
<?php
    }
?>

<?php 
    function addStudent($fname,$lname,$id,$filename){
        $found = false;
        $serializedData = file_get_contents($filename);
        $students = unserialize($serializedData);
        foreach($students as $_student){
            if($_student['roll'] == $id){
                $found = true;
                break;
            }
        }
        if(!$found){
        //   $newId = count($students) + 1;
          $newId = endId($students);
          $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $id
          );
          array_push($students,$student);
          $serializedNewData = serialize($students);
          file_put_contents($filename,$serializedNewData,LOCK_EX);
          return true;
      }
          return false;  
    }
 
    function deleteStudent($id,$filename){
        $unserializeData = file_get_contents($filename);
        $students = unserialize($unserializeData);

        foreach($students as $offset=>$student){
           if($student['id'] == $id){
             unset($students[$offset]);
           } 
        }
    
        $serializeData = serialize($students);
        file_put_contents($filename,$serializeData,LOCK_EX);

    }

    function endId($students){
        $maxId = max(array_column($students,'id'));
        return $maxId + 1;
    }

    function isAdmin(){
      if(isset($_SESSION['role']))  
        return ('admin' == $_SESSION['role']);
    }

    function isEditor(){
       if(isset($_SESSION['role']))  
        return ('editor' == $_SESSION['role']);
    }

    function hasPrivilege(){
        return (isAdmin() || isEditor());
    }

?>