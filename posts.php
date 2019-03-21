<?php
    include_once './header.php';
	include_once './database.php';
?>    

<h1>Objave</h1>

<?php 
$sql = "SELECT * FROM posts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Naslov</th>";
                echo "<th>Vsebina</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['content'] . "</td>";
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
?>

<a href="post_add.php" class="button alt">Dodaj objavo</a>

<?php
    include_once './footer.php';
?>