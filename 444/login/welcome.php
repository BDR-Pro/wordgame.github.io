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




    <b>GUESS THE WORD</b>
    


    
        <br>
        <div id="board">
        </div>

        <br>
        <h1 id="answer"></h1>
        
  </body>
</html>


<html>
   

        
  
    <body>
       
       
    </body>
</html>
