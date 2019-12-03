
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Results</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
			<style>
		h1 {text-align: center;}
				.jumbotron {background-color:#211E1E; color:#E1D9DA;}
		body {font-size: 120%; background:#211E1E;}
			h1 {font-size: 75px; text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;}
	</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Gym diary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="joku.php">Workouts</a>
      </li>
      <li class="nav-item">
   <a class="nav-link" href="index.php?logout='1'" onclick="return confirm('Are you sure ?');">Log out</a>

      </li>
      
      
    </ul>
  </div>
</nav>
		<div class="jumbotron"> <h1>GYM DIARY</h1></div>
<h1>All records</h1>
			
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$bodyweight = mysqli_real_escape_string($link, $_REQUEST['bodyweight']);
$exercise = mysqli_real_escape_string($link, $_REQUEST['exercise']);
$reps = mysqli_real_escape_string($link, $_REQUEST['reps']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);

 
// Attempt insert query execution
$sql = "INSERT INTO chest (name, age, bodyweight, exercise, reps, weight) VALUES ('$name', '$age', '$bodyweight', '$exercise','$reps', '$weight' )";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "SELECT * FROM chest";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-dark'>";
            echo "<tr>";
                
                echo "<th scope='col'>Name</th>";
				echo "<th scope='col'>Age</th>";
				echo "<th scope='col'>Bodyweight</th>";
                echo "<th scope='col'>Exercise</th>";
                echo "<th scope='col'>Reps</th>";
				echo "<th scope='col'>Weight</th>";
				echo "<th scope='col'>Date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
				echo "<td>" . $row['bodyweight'] . "</td>";
                echo "<td>" . $row['exercise'] . "</td>";
                echo "<td>" . $row['reps'] . "</td>";
				echo "<td>" . $row['weight'] . "</td>";
				echo "<td>" . $row['rdate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>

