<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM todos WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "data delete";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/To%20Do%20list/display.php" />
    <?php
}
else{
    echo "failed";
}
?>