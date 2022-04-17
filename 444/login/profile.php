<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

       
    }

    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="wordle.css">
        
        <script src="wordle.js"></script>
    
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">WORD GAME</label>
      <ul>
        <li><a  href="welcome.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="Howto.php">How to play</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
<?php


?>
<!DOCTYPE html>
<html>
<head>
<!-- <style>
body{
background-color:white;
}
*:focus{
outline: none;
}
.box{
box-sizing: border-box;
width: 153px;
height: 153px;
border:2px solid #3498db;
box-shadow: -3px -3px 7px #598170,
3px 3px 5px rgba(94,104,121,0.288);
border-radius: 50%;
background-color:#00C16E;
margin-top: 50px;
overflow: hidden;
transition: all 1s;
}
.box:hover{
width: 360px;
height: 600px;
border-radius: 5px;
}

.box:hover img{
width: 100px;
height: 100px;
margin:20px 35% ;
}
hr{
width:500px;
line-height:20px;
margin:10px 10px 10px 10px;
}
input[type="text"],
input[type="email"],
input[type="number"] {
display: block;
box-sizing: border-box;
color: white;
margin-bottom: 30px;
padding: 4px;
width: 220px;
height: 32px;
border: none;
border-bottom: 1px solid white;
font-family: 'Roboto', sans-serif;
font-weight: 400;
font-size: 15px;
transition: 0.2s ease;
background: none;
}
input[type="text"]{
margin-top: 25px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus {
border-bottom: 2px solid white;
border-bottom-right-radius:20px;
color: wheat;
transition: 0.2s ease;
background: white;
border-top: none;
}


button{
border:1px solid #3498db;
background-color: black;
color:white;
height: 30px;
width: 100px;
border-radius: 5px;
left:0;
margin:0px;
transition: all .3s;
}
button:hover{
transform: scale(1.1);
background-color: #566573;
}
input[type="file"]{
display:none;
}
label{
box-sizing: border-box;
width:40px;
height:20px;
background-color: black;
color:white;
border:1px solid #3498db;

color:white;
padding: 4px;
border-radius: 2px;
}
label:hover{
background-color: #566573;
transform: scale(1.1);
}
</style> -->
<link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<!--/Style-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--//Style-CSS -->

<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<title>Eidt Profile Page</title>
<!-- </head>
<body>
<center>
<div class="box">



<input type="text" placeholder="User Name" name="" >
<input type="Email" placeholder="Email ID" name="" >
<input type="text" placeholder="password" name="" >


<button style="float: left;margin: 10px 0 0 18.2%;">CANCEL</button>

<button
name="done" style="float: right;margin:10px 18.2% 0 0;">DONE</button>

</div>


</center>

</body>
</html> -->
</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert">
                        
                    
                    <div class="content-wthree">
                        <h2>My profile </h2>
                        <p>You can edit your personal info</p>
                      
                        <form action="" method="post">
                       
                            <input type="text" class="name" name="name" placeholder=<?php echo ($row['name'])?>  required> 
                            <input type="email" class="email" name="email" placeholder= <?php echo ($row['email'])?>  required>
                            <input type="password" class="password" name="password" placeholder=<?php echo ($row['password'])?>  style="margin-bottom: 2px;" required>
                            <p></p>
                            <button name="submit" name="update" class="btn" type="submit">Edit</button>
                        </form>
                        <div class="social-icons">
                        
                        
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
         <?php
         $conn = mysqli_connect("localhost", "root", "", "users");
         $db = mysqli_select_db($connection, 'users');
         

         if(isset($_POST['update']))
         {
            $id=$_POST['id'];
            $sql="UPDATE users SET name='$_POST[name]', email='$_POST[email]' ,password='$_POST[password]' WHERE id='$_POST[id]'" ;
            // $query_run = mysqli_query($connection,$query);

          
           if($query_run)
         {
            $msg = "<div class='alert alert-danger'>Data Updated</div>";
//    echo '<script type="text/javascript"> alert("Data Updated") </script>';
         }
          else
          {
            $msg = "<div class='alert alert-danger'>Data Not Updated</div>";

//    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
        } 



            }
        
         ?>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>
