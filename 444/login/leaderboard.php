<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="wordle.css">
<style>
th, td {
  border-bottom: 1px solid #ddd;
  width: 153px;
height: 153px;

}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
    
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
    <!DOCTYPE html>
<html>
	<head>
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<!--/Style-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--//Style-CSS -->



	</head>

	<body>
    
		<h2>Players</h2>
		<table class="center">
			<tr>
      <td>Ranking</td>
				<td>UserName</td>
				<td>Marks</td>
			</tr>

  
<?php


/* Connection Variable ("Servername",
"username","password","database") */
$con = mysqli_connect("localhost",
		"root", "", "users");

/* Mysqli query to fetch rows
in descending order of marks */
$result = mysqli_query($con, "SELECT name,
marks FROM users ORDER BY marks DESC");

/* First rank will be 1 and
	second be 2 and so on */
$ranking = 1;

/* Fetch Rows from the SQL query */
if (mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<td>{$ranking}</td>
		<td>{$row['name']}</td>
		<td>{$row['marks']}</td>";
		$ranking++;
	}
}






?>

