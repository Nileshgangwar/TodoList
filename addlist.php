<?php include("connection.php"); ?>
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
             Add ToDo
         </div>
         <div class="form">
             <div class="input_feild">
                 <label>Name</label>
                 <input type="text" class="input" name="fname">
             </div>
             <div class="input_feild">
                 <label>Email</label>
                 <input type="email" class="input" name="email">
             </div>
             <div class="input_feild">
                 <label>phone</label>
                 <input type="number" class="input" name="phone">
             </div>
             <div class="input_feild">
                 <label>Date of Brith</label>
                 <input type="date" class="input" name="date">
             </div>
             <div class="input_feild">
                 <label>Zip Code</label>
                 <input type="zip" class="input" name="zip">
             </div>
             <div class="input_feild">
                 <label>Address</label>
                 <input type="text" class="input" name="address">
             </div>
             <div class="input_feild">
                <input type="submit" value="Register" class="btn" name="add">
             </div>
         </div>
         </form>
    </div>
</body>
</html>

<?php
    if($_POST['add'])
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

        $data  = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into database";
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