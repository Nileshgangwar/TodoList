<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="Style.css">
    <title>To do list</title>
    <style>
        #login{
            text-decoration: none;
            color: #fff;
            border: 1px solid;
            padding: 9px 25px;
            border-radius: 4px;
            background-color: #f107f1;

        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
         <div class="title">
            Login
         </div>
         <div class="form">
             <div class="input_feild">
                 <label>Username</label>
                 <input type="email"  class="input" name="fname" required>
             </div>
             <div class="input_feild">
                 <label>Password</label>
                 <input type="password"  class="input" name="email" reduried >
             </div>
             <div class="input_feild">
               <a href="display.php" id="login">Login</a>
             </div>
         </div>
         </form>
    </div>
</body>
</html>