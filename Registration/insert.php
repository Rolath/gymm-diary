<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "salasana", "liikkeet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$setnumbers = mysqli_real_escape_string($link, $_REQUEST['setnumbers']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$reps = mysqli_real_escape_string($link, $_REQUEST['reps']);
 
// Attempt insert query execution
$sql = "INSERT INTO chest (setnumbers, weight, reps) VALUES ('$setnumbers', '$weight', '$reps')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "SELECT * FROM chest";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
                echo "<th>Sets</th>";
                echo "<th>Weight</th>";
                echo "<th>Reps</th>";
				echo "<th>Date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['setnumbers'] . "</td>";
                echo "<td>" . $row['weight'] . "</td>";
                echo "<td>" . $row['reps'] . "</td>";
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