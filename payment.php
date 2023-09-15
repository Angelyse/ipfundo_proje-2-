<?php include('head2.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mtn{
            margin-top: 20px;
            margin-left: 200px;
            border-radius: 10px;
            flex: 1; 

            padding: 20px; 
        }
        .airtel{
        
            border-radius: 10px;
            flex: 1; 
            padding: 20px;
        }

        .container {
            display: flex;
        }
        .para{
            text-align: center;
            margin-top: 30px;
        }


    </style>
</head>
<body>
    <div class="para"><p>SELECT PAYMENT TYPE</p></div>
    <div class="container">
    <div class="mtn">
        <img src="mtn.jpeg" alt=""><br><br><br>
        <input type="number" placeholder="enter your phone number"><br>
        <input type="submit" value="SELECT"  style="background-color: #446557;">


    </div>
    <div class="airtel">
    <img src="airtel.jpeg" alt=""><br><br>
        <input type="number" placeholder="enter your phone number"><br>
        <input type="submit" value="SELECT"  style="background-color: #446557;">
    </div>


</div>
</body>
</html>