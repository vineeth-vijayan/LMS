<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
      font-family: "Serif";
    }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .row.content {height: 450px}

    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><p style="margin-top:-3px;color:white;"><img src="assets/image/logo-book.png" alt="" width="40" height="35">&nbsp;LMS</p></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_admin.php">Home</a></li>
        <li><a href="admin_book.php">Books</a></li>
        <li><a href="admin_stud.php">Students</a></li>
        <li class="active"><a href="">Issue Book</a></li>
        <li><a href="admin_return.php">Return Book</a></li>
        <li><a href="admin_issued.php">Issued Book</a></li>
        <li><a href="admin_appr.php">Approvals</a></li>
        <li><a href="admin_fine.php">Fines</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="chnge_psswd.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 text-left">
      <h1>Issue Book</h1>
      <hr>
    </div>
  </div>
  <div class="row content" style="margin-top:-20%;">
    <div class="col-sm-2 text-left">
    </div>
    <div class="col-sm-10 text-left">
      <div class="form-group row">
        <div class="col-xs-2">
          <label for="ex2">BookID</label>
          <input class="form-control" id="ex2" type="text">
        </div>
        <div class="col-xs-2">
          <label for="ex2">Student Rollno</label>
          <input class="form-control" id="ex2" type="text">
        </div>
        <div class="col-xs-2">
          <label for="ex2">BookName</label>
          <input class="form-control" id="ex2" type="text" readonly>
        </div>
        <div class="col-xs-2">
          <label for="ex2">Student Name</label>
          <input class="form-control" id="ex2" type="text" readonly>
        </div>
        <div class="col-xs-2">
          <label for="date">Issue Date</label>
          <input id="date" class="form-control" type="date">
          <script>
            document.getElementById('date').valueAsDate = new Date();
          </script>
        </div>
        <div class="col-xs-2" style="margin-top:2%;">
          <button class="btn btn-success" type="button" name="add">Issue</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
