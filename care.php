<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Simply Succulents</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    </style>
</head>
<style>
    html {
        scroll-behavior: smooth;
        font-family: 'Poppins', sans-serif;
    }
    body {
        background-image: url(https://images.unsplash.com/photo-1505333201693-150bb240ef16?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHN1Y2N1bGVudHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80);
        background-size: contain;
        background-repeat: repeat;
        background-attachment: fixed;
        padding: 0;
        margin: 0;
    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 25%;
    }
    .left {
        display: block;
        margin-left: 0%;
        width: 12.5%;
    }
    .cart {
        background-color: rgba(0, 0, 0, 0.2);
        width: 10%;
        position: sticky;
        top: 0;
        right: 0;
        border-radius: 10px;
        float: right;
        z-index: 1;
        margin: 10px;
        
    }
    .cart a {
        text-decoration: none;
        font-size: 6vw;
        color: white;
        margin-left: 20px;
        text-align: center;
    }
    .navbar{
        font-size: 3.22vw;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: transparent;
    }
    li {
        float: left;
        width: 25%;
    }
    li a {
        background-color: white;
        display: block;
        color: black;
        text-align: center;
        text-decoration: none;
        padding: 1vw 4.14vw;
        border: 2px solid rgb(11, 140, 46); 
        border-radius: 10px;
        transition-duration: .4s;
    }
    li a:hover{
        background-color: rgb(11, 140, 46);
        color: white;

    }
    .active {
        text-decoration: underline;
    }
    .footer_cont {
        padding: 3vw;
        background-color: rgb(11, 140, 46);
        color: white;
        font-size: 2vw;
    }
    .footer_links img {
        width: 4vw;
        padding-right: 2vw;
    }
    
    .btt {
        float: right;
        padding: .5vh 1vw;
        margin: 2vw;
        background-color: white;
        text-decoration: none;
        border: 2px solid rgb(11, 140, 46);
        border-radius: 15px;
        transition-duration: .4s;
        font-weight: bold;
        font-size: 2.6vw;
    }
    .btt:hover {
        background-color: rgb(11, 140, 46);
        color: white;
    }
</style>
<body>
    <a id="top_of_page"></a>
    <div class="cart">
        <a class="fa fa-shopping-cart" href="cart.php"></a>
    </div>
    <div class="title">
        <img src="https://i.ibb.co/ZGQ998t/Copy-of-Simply-Succulents-Logo-1.png" alt="" class="left">
    </div>
<!-- nav bar -->
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a><li>
            <li><a href="extra.php">Extras</a></li>
            <li><a class="active" href="care.php">Care</a></li>
        </ul>
    </div>
<!-- /nav bar -->
<br>
<!-- footer -->
    <a href="#top_of_page" class="btt">&#9650;To Top</a>
    <div class="footer_cont">
        <div class="Footer_search">
            <p>Looking for more?</p>
            <a href="index.php">Home Page</a>
            <a href="">Shop Succulents</a>
            <a href="">something</a>
            <a href="">something</a>
        </div>
        <br>
        <div class="footer_links">
            <a href=""><img src="https://i.ibb.co/wQT8BBX/image.png" alt="Instagram Logo" class="center1"></a>
            <a href=""><img src="https://i.ibb.co/WPC2TDK/image.png" alt="Facebook Logo" class="center1"></a>
            <a href=""><img src="https://i.ibb.co/25DWLzy/image.png" alt="Youtube Logo" class="center1"></a>
        </div>
        <br>
        <div class="footer_not">This website is fake!</div>
    </div>
<!-- /footer -->
</body>
</html>