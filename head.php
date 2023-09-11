<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/jquery.min.js">
    <link rel="stylesheet" href="./bootstrap/umd/popper.min.js">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">

    
<script src="./bootstrap/js/bootstrap.min.js"></script>

   
</head>
    <style>
        
        .navbar {
            background-color: #446557;
        }
        .navbar-nav {
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
        .nav-item {
            background-color: #656E86;
            margin: 10px;
            border-radius: 30px;
            padding:5px;
            text-align:center;
        }
        /* .nav-link {
            color: white;
        } */
           .navbar-nav .nav-item {
            margin-right: 45px; /* Adjust this value to increase or decrease spacing */
        }
        /* .navbar-nav:hover .nav-item {
            background-color: green;
        } */
        .lo {
            margin-top: 14px;
            margin-right: 45px; 
        }

        /* Show the dropdown menu on hover */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            background-color: none;
        }
        .dropdown-item {
            margin-bottom: 0.1px;
            border-radius: 10px;
            margin-top: 0px;
            
        }
        
        p{
            margin-left: 5px;
        }
    </style>
</head>
<body>
<div class="head1">
    <div class="ip">
        <b><p>IPFUNDO LIFE SYSTEM<br> IPFUNDO Life system is solution of All 
        problem about health counseling<br>services</p></b>
    </div>
<nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">HOME &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">About Us &nbsp&nbsp&nbsp&nbsp&nbsp</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">Data analytics</a>
        </li>
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" id="programsDropdown" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                PROGRAMS
            </a>
        
          <div class="dropdown-menu" > 
            <a class="dropdown-item active" href="#" style="background-color:#656E86">CHILDREN SERVICES</a>
            <a class="dropdown-item active" href="user_account.php" style="background-color:#656E86">WOMEN SERVICES</a>
            <a class="dropdown-item active" href="#" style="background-color:#656E86">Health councellor services</a>
            <a class="dropdown-item active" href="#" style="background-color:#656E86">MALNUTRITION SERVICES</a>
            <a class="dropdown-item active" href="#" style="background-color:#656E86">FIGHT OBESITY SERVICES</a>
          </div>

        </li>
        <li class="lo">
            <a class="nav-link" href="#" style="color:white;">Sign Up</a>
           
        </li>
        <li class="lo">
            <a class="nav-link" href="#" style="color:white;">Login</a>
        </li>
    </ul>
</nav>

</div>
</body>
</html>