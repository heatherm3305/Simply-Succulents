<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Succulents</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        width: 50%;
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
    .prod_sect {
        background-color: rgb(184, 209, 174);
        padding: 3em;
        border-radius: 15px;
    }
    .ft_prod {
        font-size: 2.5vw;
    }
    .prod_cont {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-column-gap: 20px;
        grid-row-gap: 25px;
    }
    .prod_sect .prod_card {
        background-color: white;
        border-radius: 10px;
        padding: 2vw;
        text-align: center;
        border: 2px solid rgb(11, 140, 46);
    }
    .prod_card .prod_title {
        font-size: 2.6vw;
        font-weight: bold;
    }
    .prod_card img {
        max-width: 100%;
    }
    .prod_card .prod_text {
        font-size: 2.6vw;
        margin-bottom: .5em;
    }
    .prod_btn {
        background-color: white;
        text-decoration: none;
        font-size: 2.6vw;
        border: 2px solid rgb(11, 140, 46);
        border-radius: 6px;
        transition-duration: .4s;
        font-weight: bold;
    }
    .prod_btn:hover {
        background-color: rgb(11, 140, 46);
        color: white;
        box-shadow: 0px 5px 5px gray;
    }
    .char_sect {
        background-color: rgb(184, 209, 174);
        padding: 3em;
        border-radius: 15px;
    }
    .char_sect .char_card {
        text-align: center;
        padding-top: 1.5vw;
    }
    .char_desc {
        font-size: 2.5vw;
    }
    .char_link {
        font-size: 2.5vw;
    }
    .footer_cont {
        padding: 3vw;
        background-color: rgb(11, 140, 46);
        color: white;
        font-size: 2vw;
    }
    .footer_search a {
        color: white;
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
    <div class="title" style="margin-left: 13%;">
        <img src="https://i.ibb.co/K7Yn6L3/oie-sad-RDdjf-GJh9.png" alt="" class="center">
    </div>
<!-- nav bar -->
    <div class="navbar">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a><li>
            <li><a href="extra.php">Extras</a></li>
            <li><a href="care.php">Care</a></li>
        </ul>
    </div>
<!-- /nav bar -->
<br>
    <div class="prod_sect">
        <div class="ft_prod">
            <h1>Featured Products</h1>
        </div>
        <div class="prod_cont">
<!-- first product -->
            <div class="prod_card">
                <div class="prod_title">Blue Rosette (Echeveria Minima)</div>
                <div class="prod_img">
                    <img src="https://microplantstudio.com/wp-content/uploads/2019/10/ECHEVERIA-MINIMA-BLUE-ROSETTE.jpg" alt="">
                </div>
                <div class="prod_text">10$</div>
                <div class="prod_btn">Buy Now</div>
            </div>
<!-- /first product -->
<!-- second product -->
            <div class="prod_card">
                <div class="prod_title">Red Pagoda (Crassula Capitella)</div>
                <div class="prod_img">
                    <img src="https://i.pinimg.com/736x/19/c3/fa/19c3fac89164c325d8e8fc9510d3190d.jpg" alt="">
                </div>
                <div class="prod_text">10$</div>
                <div class="prod_btn">Buy Now</div>
            </div>
<!-- /second product -->
<!-- third product -->
            <div class="prod_card">
                <div class="prod_title">Pickle Plant (Delosperma Echinatum)</div>
                <div class="prod_img">
                    <img src="https://microplantstudio.com/wp-content/uploads/2020/09/pickle-plant.jpg" alt="">
                </div>
                <div class="prod_text">10$</div>
                <div class="prod_btn">Buy Now</div>
            </div>
<!-- /thrird product -->
        </div>
    </div>
    <br>
    <div class="char_sect">
        <div class="char_head">
        <h1>Our Contributions:</h1>    
        </div>
        <div class="char_logo">
            <img src="https://cdn.shopify.com/s/files/1/0326/7189/files/one-tree-planted-logo-white.svg?v=1619731262" alt="Charity Logo" class="center">
        </div>
        <div class="char cont">
            <div class="char_card">
                <div class="char_desc">One Tree Planted is a 501(c)(3) non-profit organization. As an environmental charity, they're on a mission to make it simple for anyone to help the environment by planting trees!</div>
                <br>
                <div class="char_desc">We donate 10% of all purchases to One Tree Planted.</div>
                <div class="char_link">
                <br>
                    <a href="https://onetreeplanted.org/collections/all" target="_blank">Donate Here!</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="#top_of_page" class="btt">&#9650;To Top</a>
    <div class="footer_cont">
        <div class="footer_search">
            <p>Looking for more?</p>
            <a href="index.php">Home Page</a>
            <a href="shop.php">Shop Succulents</a>
            <a href="extra.php">Extras</a>
            <a href="care.php">Care</a>
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
    
</body>
</html>