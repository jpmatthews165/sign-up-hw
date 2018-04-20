<?php
session_start();
require "../Model/db.php";
$fname=$_SESSION['fname'];
if (is_null($fname)){
  header("Location: ../index.php");
} 
echo "Welcome ".$_SESSION['fname']." ".$_SESSION['lname'];
$id=$_SESSION['ownerid'];

$sql = "SELECT * FROM jm775.todos WHERE ownerid = $id";
$results = runQuery($sql);
//if(count($results) > 0)
//{
//	echo "<table border=\"1\"><tr><th>Due Date</th><th>Message</th><th>Creation Date</th><th>Edit</th></tr>";
//	foreach ($results as $row) {
//		echo "<tr><td>".$row["duedate"]."</td><td>".$row["message"]."</td><td>".$row["createddate"]."</td><td><a href='../Controller/edit.php' class='button'>Edit</a></td></tr>";
//	}
	
//}else{
//    echo '0 results';
//}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>To-dos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<div class="container">
  <hr class="colorgraph">
    <div class="row">
      <div class="col-md-12">
        <h4>My Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 0){
                      ?>
                        <td> <?php echo $res['message'];?></td>
                        <td> <?php echo $res['duedate'];?></td>
                        <td>
                          <form action = 'edit.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td>
                          <form action = '../View/delete.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'complete.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="complete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id'];?>"/>
                            <input type="submit" class="btn btn-danger" value="Complete"/>
                          </form>
                        </td>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>
            </table>
            <form action="add.php">
              <input type="submit" value="Add New Task" class="btn btn-info" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>




<div class="container">
  <br><hr class="colorgraph"><br>
    <div class="row">
      <div class="col-md-12">
        <h4>Completed Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 1){
                      ?>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['message'];?></span></td>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['duedate'];?></span></td>
                        <td>
                          <form action = 'edit.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td>
                          <form action = '../View/delete.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'uncomplete.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="incomplete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['id'];?>"/>
                            <input type="submit" class="btn btn-danger" value="Incomplete"/>
                          </form>
                        </td>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>

            </table>
          </div>
      </div>
    </div>
    <hr class="colorgraph">
    <form action = 'logout.php' method = 'post' >
      <input type="submit" class="btn btn-warning" value="Log Out"/>
    </form>
  </div>
</div>
</html>




