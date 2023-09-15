<?php include('head2.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/jquery.min.js">
    <link rel="stylesheet" href="./bootstrap/umd/popper.min.js">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <title>login page</title>
    <style>
        form{
            background-color: #656E86;
            margin-left: 350px;
            margin-right: 450px;
        }
        .user-icon {
    text-align: center;
    margin-bottom: 20px;
}

#user-icon-img {
    max-width: 150px;
    max-height: 150px;
    border-radius: 50%;
}

    </style>
</head>
<body>
    <center><p>USER LOGIN</p></center>
    <form method="get" action="">
    <div class="user-icon">
            <img src="user_icon.png" id="user-icon-img" alt="User Icon">
        </div>
    <label for=""> &nbsp &nbsp ACCOUNT TYPE &nbsp &nbsp&nbsp;</label>
        <select name="account_type" id="">
            <option value="">choose your account type</option>
            <option value="">other user</option>
            <option value="">health counsello</option>
            
        </select><br><br>
       <label for=""> &nbsp &nbsp USERNAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="fullname"><br><br>

       
    
       <label for=""> &nbsp &nbsp PASSWORD &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
            <input type="password" name="password"><br><br>
           <center> <input type="submit" value="LOGIN" style="background-color: #446557; border-radius:10px;";>&nbsp&nbsp
           &nbsp&nbsp <a href="#" style="color: red;">Forgot Password ?</a><br><br>
           </center>
    </form>




</body>
</html>