<?php include("connection.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM TODOS where id = '$id' ";

 $data = mysqli_query($conn, $query);
 $result = mysqli_fetch_assoc($data);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>To do list</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
         <div class="title">
             Edit To Do List
         </div>
         <div class="form">
             <div class="input_feild">
                 <label>Name</label>
                 <input type="text" value="<?php echo $result['name'] ?>" class="input" name="fname">
             </div>
             <div class="input_feild">
                 <label>Email</label>
                 <input type="email" value="<?php echo $result['email'] ?>" class="input" name="email">
             </div>
             <div class="input_feild">
                 <label>phone</label>
                 <input type="number" value="<?php echo $result['phone'] ?>" class="input" name="phone">
             </div>
             <div class="input_feild">
                 <label>Date of Brith</label>
                 <input type="date" value="<?php echo $result['dob'] ?>" class="input" name="date">
             </div>
             <div class="input_feild">
                 <label>Zip Code</label>
                 <input type="zip" value="<?php echo $result['zip'] ?>" class="input" name="zip">
             </div>
             <div class="input_feild">
                 <label>Address</label>
                 <input type="text" value="<?php echo $result['address'] ?>" class="input" name="address">
             </div>
             <div class="input_feild">
                <input type="submit" value="Edit" class="btn" name="Edit">
             </div>
         </div>
         </form>
    </div>
</body>
</html>

<?php
    if($_POST['Edit'])
    {
        $fname   = $_POST['fname'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $date    = $_POST['date'];
        $zip     = $_POST['zip'];
        $address = $_POST['address'];

        if($fname != "" && $email != "" && $phone != "" && $date != "" && $zip != "" && $address != "")

        {

        $query =  "INSERT INTO todos (name,email,phone,dob,zip,address) values('$fname','$email','$phone','$date','$zip','$address')";

        $query = "UPDATE todos set name='$fname', email='$email', phone='$phone', dob='$date', zip='$zip', address='$address' WHERE id='$id'"; 

        $data  = mysqli_query($conn,$query);

        if($data)
        {
            echo "record updated";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/To%20Do%20list/display.php" />

            <?php
        }else
        {
            echo "Failed";
        }
    }
    else
    {
        echo "please fill the form";
    }
    }
?>