<?php
session_start();
$item_id = $_POST['item_id'];
$_SESSION['item_id'] = $item_id;
require('../Model/db.php');
$sql = "select * from todos where id = '$item_id';";
$results = runQuery($sql);
?>
<html>
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Edit Task</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action=../Controller/edittask.php>
      <div class="form-group">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" value= "<?php echo $results[0][message] ?>" />
      </div>
      <div class="form-group">
        <input type="hidden" name="item_id" class="form-control" id="item_id" value="<?php echo $item_id;?>" />
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="duedate" class="form-control" id="duedate" value="<?php echo $results[0][createddate] ?>"/>
      </div>
      <div class="form-group">
        <input type="hidden" name="action" class="form-control" value="after_edit">
      </div>
      <div class="form-group">
        <input type="submit" value="Finish Editing" class="btn btn-info" />
      </div>
    </form>
  </div>
  
</body>
</html>