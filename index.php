<?php ob_flush(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" href="css/main.css" rel="stylesheet">
</head>
<body>



<div class="navbar">
    
  <a href="#" class="active">Home</a>
 
  <a href="#" class="right" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
</div>


 

    <?PHP
        require_once './Connection.php';
        if(isset($_POST['btn_login']))
        {
           $query="SELECT * FROM `tbl_user` WHERE `Username`='".$_POST['uname']."' AND `Password`=MD5('".$_POST['psw']."')"; 
           $sql_select=  mysqli_query($con,$query);
           while ($rows = $sql_select -> fetch_assoc())
           {
               $Type=$rows['Type'];
               $uid=$rows['uid'];
           }
           if(isset($Type))
           {
               session_start();
               if($Type=="Student")
               {
                   
                   $_SESSION['username']=$_POST['uname'];
                   $_SESSION['usertype']="Student";
                   $_SESSION['userid']=$uid;
                   header("Location:Student.php");
               }
               elseif($Type=="Faculty")
               {
                   $_SESSION['username']=$_POST['uname'];
                   $_SESSION['usertype']="Faculty";
                   $_SESSION['userid']=$uid;
                   header("Location:Faculty.php");                   
               }
                   
           }
        }
    ?>
   

        <form class="modal-content animate" action="" method="Post">
        <div class="imgcontainer">
          <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
          <img src="img/IMG_2356.JPG" style="height:150px; width: 150px;" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" name="btn_login">Login</button>
         
        </div>

        
      </form>
 
<!--    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->
  
</div>

<div class="footer">
  <p> &copy; Student Management system <?php echo date('Y'); ?></p>
</div>

</body>
</html>
<?php ob_end_flush(); ?>