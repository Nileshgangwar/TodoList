<html>
<head>
    <title>To Do List</title>
    <style>
        body{
            background-color: #D071f9;
        }
        table
        {
            background-color: white;
        }
        .edit{
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 3px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete{
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 3px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .add{
            position: relative;
            top: 49px;
            text-decoration: none;
            left: 136px;
            padding: 11px 18px;
            color: #fff;
            background-color: #0677e3;
            border-radius: 6px;
        }
    </style>
</head>
  

<?php
 include("connection.php");
 error_reporting(0);

 $query = "SELECT * FROM TODOS";

 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);
 

 
 
//  echo $total;
if($total != 0)
{
    ?>
      <a href="addlist.php" class="add">Add LIST</a>
     <h2 align='center'>To Do List</h2>
    <center><table border="3" cellspacing="7" width="85%">
        <tr>
            <th width='5%'>Id</th>
            <th width='12%'>Name</th>
            <th width='12%'>Email</th>
            <th width='10%'>Phone</th>
            <th width='10%'>Date of Brith</th>
            <th width='10%'>Zip Code</th>
            <th width='20%'>Address</th>
            <th width='15%'>Operations</th>
        </tr>
   
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td >".$result['id']."</td>
                <td >".$result['name']."</td>
                <td >".$result['email']."</td>
                <td >".$result['phone']."</td>
                <td >".$result['dob']."</td>
                <td >".$result['zip']."</td>
                <td >".$result['address']."</td>

                <td><a href='edit.php?id=$result[id]'><input type='submit' value='Edit' class='edit'</a>
                <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete'</a></td>
            </tr>
        ";
    }
}
else
{
    echo "No recoreds found";
}
?>
</table></center>
 