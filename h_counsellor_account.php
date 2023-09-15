<?php include ('head2.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form with First Name</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/jquery.min.js">
    <link rel="stylesheet" href="./bootstrap/umd/popper.min.js">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <!-- Include Bootstrap CSS -->
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
    <center><p>COUNSELLOR CREATE YOUR ACCOUNT HERE</p></center>
    <form method="get" action="">
    <div class="user-icon">
            <img src="user_icon.png" id="user-icon-img" alt="User Icon">
        </div>
    <label for=""> &nbsp &nbsp FULL NAME &nbsp &nbsp&nbsp &nbsp&nbsp;</label>
        <input type="text" name="firstname"><br><br>
       <label for=""> &nbsp &nbsp CODE NUMBER</label>
        <input type="number" name="phonenumber"><br><br>

       <label for="">&nbsp &nbsp DISTRICT &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label> 
        <select name="district" id="" value="">
            <option>rwamagana</option>
        </select><br><br>
        
    
       <label for="sector"> &nbsp &nbsp SECTOR &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp</label>
    
        <select id="" name="department">
            <option value="IT">byimana</option>
            <option value="karenge">karenge</option>
            <option value="gasabo">gasabo</option>
        </select><br><br>
        
    
       <label for=""> &nbsp &nbsp CELL  &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
        <input type="text" name="firstname"><br><br>
        
    
       <label for=""> &nbsp &nbsp VILLAGE &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp</label>
        <input type="text" name="firstname"><br><br>
        
    
       <label for=""> &nbsp &nbsp PASSWORD &nbsp &nbsp&nbsp &nbsp&nbsp </label>
            <input type="password" name="password"><br><br>
           <center> <input type="submit" value="CREATE ACCOUNT" style="background-color: #446557;";>&nbsp&nbsp
           &nbsp&nbsp<input type="reset" value="CANCEL" style="background-color: #446557;">
           </center>
    </form>


</body>
</html>
