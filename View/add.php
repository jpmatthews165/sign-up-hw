<?php
session_start()
?>
<html>
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Todo - Add a Task</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Add Task</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action="../Controller/addtask.php" >
      <div class="form-group">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task">
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="duedate" class="form-control" id="duedate">
      </div>
      <div class="form-group">
        <input type="submit" value="Add New Task" class="btn btn-success">
      </div>
    </form>
  </div>

</body>
</html>