<?php
    ob_start();
    session_start();
    if(isset($_SESSION['usertype'])=="Faculty")
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="dashboard.js" type="text/javascript"></script>
    <link href="dashboard.css" rel="stylesheet" type="text/css"/>
    <title>Hello, world!</title>
  </head>
  <body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SIS</a>
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
            <a class="nav-link " href="#">
              <span data-feather="home"></span>
              Home   <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="file"></span>
              Leave Request
            </a>
          </li>
        </ul>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Leave Request</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <?php 
                require_once './Connection.php';
                if (isset($_GET['aid']))
                {
                    $query="UPDATE `tbl_leave` SET `Status`=1 WHERE lid=".$_GET['aid'].";";
                    $sql_insert=  mysqli_query($con, $query);
                    if ($sql_insert)
                    {}
                    else 
                    { 
                        die('Failed');
                    }
                }
                elseif (isset($_GET['rid'])) 
                {
                    $query="UPDATE `tbl_leave` SET `Status`=2 WHERE lid=".$_GET['rid'].";";
                    $sql_insert=  mysqli_query($con, $query);
                    if ($sql_insert)
                    {}
                    else 
                    { 
                        die('Failed');
                    }
                }
            ?>
        </div>
      </div>
        <div class="table-responsive">
            <?php        
            $sql_Fetch_table="SELECT *,(SELECT tbl_user.Username FROM tbl_user WHERE tbl_user.uid=tbl_leave.student_id) as Student FROM `tbl_leave`";
            $result=  mysqli_query($con, $sql_Fetch_table);
            $count=1;

            ?>
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row=$result->fetch_assoc())
                 {          
                 ?> 
                    <tr>
                        <td class="text-center"><?php echo $count;?></td>
                        <td><?php echo $row['Student']; ?></td>
                        <td><a><?php echo $row['Reason'];?>"</a></td>
                        <td><a><?php echo $row['from_Date'];?></a></td>
                        <td><a><?php echo $row['to_Date'];?></a></td>
                        <td><?php if($row['Status']==0){echo 'Pending';}elseif ($row['Status']==1){echo "Accepted";}elseif($row['Status']==2){echo "Rejected";} ?></td>
                        <td class="td-actions text-center">
                        <a href="Faculty.php?aid=<?php echo $row['lid']; ?>" style="cursor: pointer; margin-right: 5PX;"class="text-success">
                            <i class="fas fa-check"></i>
                         </a>
                          <a href="Faculty.php?rid=<?php echo $row['lid']; ?>" style="cursor: pointer;"class="text-danger">
                            <i class="fas fa-times"></i>
                          </a>
                        </td>
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
  </body>
</html>