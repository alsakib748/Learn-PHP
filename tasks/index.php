<?php 
include_once("config.php");
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Database cannot be connect");
}

/// when complete = 0
$retrieveQuery = "SELECT * FROM tasks WHERE complete = 0 ORDER BY date ASC";
$retrieveData = mysqli_query($connection,$retrieveQuery);
/// when complete = 1
$retrieveQueryComplete = "SELECT * FROM tasks WHERE complete = 1 ORDER BY date ASC";
$retrieveCompleteData = mysqli_query($connection,$retrieveQueryComplete);


?>
<!Doctype html>
<html>
<head>
     <title>Task</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.violet{
    color: #8f00ff;
}
.txt-font{
    font-size: 0.9rem; 
}
.bg-violet{
    background-color: #8f00ff;
}
</style>
</head>
<body>
      
<div class="container">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded">
          <h3 class="violet text-center"><b>Tasks Manager</b></h3>
          <small class="text-muted text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </small>
          <!-- <h5 class="pt-3 violet">All Task</h5> -->
          <br/><br/>
<?php 
    if(mysqli_num_rows($retrieveCompleteData) > 0){    
?>        
     <h6 class="violet">Complete Tasks</h6>  
    <table class="table">
        
        <thead class="thead">
          <tr>
             <th>Check</th>
             <th>Id</th>
             <th>Task</th>
             <th>Date</th>
             <th>Action</th>
          </tr>
        </thead>
        <tbody class="tbody">
<?php $j=0; while($cdata = mysqli_fetch_assoc($retrieveCompleteData)){ 
      $j++;
      $timeStamp = strtotime($cdata['date']);
      $cdate = date("jS M, Y",$timeStamp);
?>
         <tr>
            <td><input type="checkbox" name="checkbox<?php echo $i; ?>" value="<?php echo $cdata['id']; ?>" /></td>
            <td><?php echo $cdata['id']; ?></td>
            <td><?php echo $cdata['task'] ?></td>
            <td><?php echo $cdate; ?></td>
            <td>
                <a href="#" class="completeDataDelete text-decoration-none violet txt-font" data-taskid="<?php echo $cdata['id']; ?>" >Delete</a> | 
                <a href="#" class="incomplete text-decoration-none violet txt-font" data-itaskid="<?php echo $cdata['id']; ?>">Mark Incomplete</a>
            </td>
         </tr>       
<?php } ?>    
        </tbody>
    </table>      

<?php } ?>   
                  
<br/>

<?php if(mysqli_num_rows($retrieveData) <= 0){  ?>
        <p class="violet mt-1 mb-1">No Task Found</p>
<?php }else{ ?>               
          <div class="">
             <h6 class="violet">Upcoming Tasks</h6>
        <form action="tasks.php" method="POST">      
             <table class="table">
                 <thead class="thead">
                     <tr class="violet">
                        <th>Check</th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Data</th>
                        <th>Action</th>
                     </tr>
                 </thead>                
                 <tbody class="tbody">
<?php $i=0; while($data = mysqli_fetch_assoc($retrieveData)){  
    $i++; 
    $timeStamp = strtotime($data['date']);
    $date = date('jS M Y',$timeStamp);    
?>                     
                     <tr>
                        <td>
                            <input  type="checkbox" name="taskids[]" value="<?php echo $data['id']; ?>" />
                        </td>
                        <td class="txt-font">
                            <?php  echo $data['id']; ?>
                        </td>
                        <td>
                             <span class="txt-font"><?php echo $data['task']; ?></span>  
                        </td>
                        <td>
                            <span class="txt-font"><?php echo $date; ?></span>
                        </td>
                        <td class="txt-font">
                            <a href="#" class="unCompleteDataDelete text-decoration-none violet" data-taskid="<?php echo $data['id']; ?>" >Delete</a> |
                            <a href="#" class="complete text-decoration-none violet" data-taskid="<?php echo $data['id']; ?>">Complete</a>
                        </td>
                     </tr>
<?php  } mysqli_close($connection); ?>                     
                 </tbody>
             </table> 
           
          </div> 
<?php   }  ?>      
          <div class="input-group">
              <select class="custom-select" name="action" id="bulkaction" aria-label="Example select with button addon">
                <option selected disabled value="0">With Selected</option>
                <option value="bulkdelete">Delete</option>
                <option value="bulkcomplete">Mark As Complete</option>
             </select>
             <div class="input-group-append">
                <button class="btn btn-success bg-violet" id="bulksubmit" name="submit" type="submit">Submit</button>
             </div>
           </div>
    </form>       
           <div class="">
              <h5 class="violet mt-4 mb-1 ">Add Tasks</h5>
              <form action="tasks.php" method="POST">
                  <label for="task" class="form-label">Task</label>
                  <input type="text" name="taskText" class="form-control" placeholder="Task Details" /><br/>
                  <label for="task" class="form-label">Date</label>
                  <input type="date" name="taskDate" class="form-control" placeholder="Task Date" />
                  <center><button type="submit" name="taskSubmit" class="btn btn-success bg-violet mt-2 mb-2">ADD TASK</button></center>
                  <input type="hidden" name="action" value="add" />
              </form>
               <?php 
                   if(isset($_GET['added']) && $_GET['added'] == true){
                ?>
                   <script type="text/javascript"> alert("Task added successfully"); </script>
               <?php        
                   }
               ?>
           </div>
           
      </div>
      <div class="col-md-2"></div>
   </div>        
</div> 

<div class="">
   <form action="tasks.php" method="POST" id="completeform">
       <input type="hidden" id="action" name="action" value="complete" />
       <input type="hidden" id="taskid" name="taskid" />
   </form>
   <form action="tasks.php" method="POST" id="incompleteform">
       <input type="hidden" id="action" name="action" value="incomplete" />
       <input type="hidden" id="itaskid" name="taskid" />
   </form>
   <form action="tasks.php" method="POST" id="comDelForm">
       <input type="hidden" name="action" value="completeDataDelete" />
       <input type="hidden" id="dtaskid" name="taskid" /> 
   </form>
   <form action="tasks.php" method="POST" id="unComDelForm">
       <input type="hidden" name="action" value="unCompleteDataDelete" />
       <input type="hidden" name="taskid" id="utaskid" />
   </form>
</div>

</body>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

     <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" type="text/javascript"></script>
     <script type="text/javascript">
         ;(function($){
              $(document).ready(function(){
                  $(".complete").on("click",function(){
                        var id = $(this).data("taskid");
                        $("#taskid").val(id);
                        $("#completeform").submit();
                  });
                  $(".incomplete").on("click",function(){
                        var id = $(this).data("itaskid");
                        $("#itaskid").val(id);
                        $("#incompleteform").submit();
                  });
                  $(".completeDataDelete").on("click",function(){
                     if(confirm("Are you sure you want to delete this task??")){ 
                        var id = $(this).data("taskid");
                        $("#dtaskid").val(id);
                        $("#comDelForm").submit();
                     }   
                  });
                  $(".unCompleteDataDelete").on("click",function(){
                      if(confirm("Are you sure you want to delete this task?")){
                         var id = $(this).data("taskid");
                         $("#utaskid").val(id);
                         $("#unComDelForm").submit();
                      }  
                  });
                  $("#bulksubmit").on("click",function(){
                      if($("#bulkaction").val() == "bulkdelete"){
                          if(!confirm("Are you sure do you want to delete this multiple tasks ???")){
                              return false;
                          }
                      } 
                  });
              }); 
         })(jQuery); 
     </script>
</html>