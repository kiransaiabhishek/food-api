<?php

include '../config/config.php';

$result = array();

$queryfood = "SELECT * FROM foods"; 

$queryresult = mysqli_query($conn,$queryfood);

while($row= mysqli_fetch_assoc($queryresult))
{
    array_push($result,$row);
}
echo json_encode($result);   

?>