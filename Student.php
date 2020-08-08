<?php
ob_start();
session_start();
require_once './Connection.php';
if(isset($_SESSION['usertype'])=="Student")
{
    $username=$_SESSION['username'];
    $userid=$_SESSION['userid'];
}
else 
{
    echo"<script>window.location.href='index.php?error=invalid_user';</script>";
}
?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="dashboard.js" type="text/javascript"></script>
    <link href="dashboard.css" rel="stylesheet" type="text/css"/>
    <title>SIS</title>
  </head>
  <body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Student Information System</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <a class="nav-link" href="Logout.php"><?php echo "<b>$username</b>"?> <br>Sign out</a>
    </li>
  </ul>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link " href="Student_Apply.php">
              <span data-feather="home"></span>
              Apply Leave <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="file"></span>
              Leave History
            </a>
          </li>
        </ul>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Leave Record</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
        <div class="table-responsive">
                <?php        
                $sql_Fetch_table="SELECT `lid`,Faculty_id,"
                                . " `student_id`, `Reason`, `from_Date`, `from_Time`, `to_Date`, `to_Time`, `Status` FROM `tbl_leave` WHERE `student_id`=$userid;";
                $result=  mysqli_query($con, $sql_Fetch_table);
                $count=1;

                ?>
                <table class="table table-hover">
                        <thead >
                                <tr>
                                        <th class="text-center">#</th>
                                        <th>Reason</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Status</th>
                                </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=$result->fetch_assoc())
                         {          
                         ?> 
                                <tr>
                                        <td class="text-center"><?php echo $count;?></td>
                                        <td><a><?php echo $row['Reason'];?></a></td>
                                        <td><a><?php echo $row['from_Date'];?></a></td>
                                        <td><a><?php echo $row['to_Date'];?></a></td>
                                        <td><?php if($row['Status']==0){echo 'Pending';}elseif ($row['Status']==1){echo "Accepted";}elseif($row['Status']==2){echo "Rejected";} ?></td>
                                </tr>
                                <?php
                                $count++;
                         }
                                ?>
                        </tbody>
                </table>
        </div>
    </main>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  
    <div class="footer">
	        <div class="container text-center">
	             Student Information System Made by <a href="http://www.creative-tim.com"> Rinam Panchal.</a>
	        </div>
	    </div>
   
</body>
</html>