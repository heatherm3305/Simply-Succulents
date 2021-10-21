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
    .shop_page {
        background-color: rgb(184, 209, 174);
        border: 2px solid rgb(11, 140, 46);
        border-radius: 10px;
    }
    .prod_sect {
        padding: 2em;
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
            <li><a class="active" href="shop.php">Shop</a><li>
            <li><a href="extra.php">Extras</a></li>
            <li><a href="care.php">Care</a></li>
        </ul>
    </div>
<!-- /nav bar -->
<br>
<!-- Shop Page -->
    <div class="shop_page">
        <div class="prod_sect">
            <div class="ft_prod">
                <h1>All Succulents</h1>
            </div>
            <div class="prod_cont">
<!-- 1 product -->
                <div class="prod_card">
                    <div class="prod_title">Blue Rosette (Echeveria Minima)</div>
                    <div class="prod_img">
                        <img src="https://microplantstudio.com/wp-content/uploads/2019/10/ECHEVERIA-MINIMA-BLUE-ROSETTE.jpg" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /1 product -->
<!-- 2 product -->
                <div class="prod_card">
                    <div class="prod_title">Red Pagoda (Crassula Capitella)</div>
                    <div class="prod_img">
                        <img src="https://i.pinimg.com/736x/19/c3/fa/19c3fac89164c325d8e8fc9510d3190d.jpg" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /2 product -->
<!-- 3 product -->
                <div class="prod_card">
                    <div class="prod_title">Pickle Plant (Delosperma Echinatum)</div>
                    <div class="prod_img">
                        <img src="https://microplantstudio.com/wp-content/uploads/2020/09/pickle-plant.jpg" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /3 product -->
<!-- 4 product -->
                <div class="prod_card">
                    <div class="prod_title">Jade Plant (crassula ovata)</div>
                    <div class="prod_img">
                        <img src="https://media.istockphoto.com/photos/crassula-portulacea-plant-picture-id905155676?k=20&m=905155676&s=612x612&w=0&h=U2wnwMuJtzCj2YMdxGOmQpGPExvZmdUyf8xvUM3k8h8=" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /4 product -->
<!-- 5 product -->
                <div class="prod_card">
                    <div class="prod_title">Panda Plant (kalanchoe tomentosa)</div>
                    <div class="prod_img">
                        <img src="https://i.ibb.co/qBqxJzD/image.png" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /5 product -->
<!-- 6 product -->
                <div class="prod_card">
                    <div class="prod_title">Pincushion Cactus (mammillaria crinita)</div>
                    <div class="prod_img">
                        <img src="https://i.ibb.co/VYHqXxD/image.png" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /6 product -->
<!-- 7 product -->
                <div class="prod_card">
                    <div class="prod_title">String of Pearls (senecio rowleyanus)</div>
                    <div class="prod_img">
                        <img src="https://cdn.shopify.com/s/files/1/2203/9263/products/d78dcdfa33d8222900781bd1364f95ba.jpg?v=1581029332" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /7 product -->
<!-- 8 product -->
                <div class="prod_card">
                    <div class="prod_title">Zwartkop (aeonium arboreum)</div>
                    <div class="prod_img">
                        <img src="https://i.ibb.co/MBLwSqc/image.png" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /8 product -->
<!-- 9 product -->
                <div class="prod_card">
                    <div class="prod_title">Tiger Aloe (gonialoe variegata)</div>
                    <div class="prod_img">
                        <img src="https://i.ibb.co/PNmHYwz/image.png" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /9 product -->
<!-- 10 -->
                <div class="prod_card">
                    <div class="prod_title">Snake Plant (sansevieria trifasciata)</div>
                    <div class="prod_img">
                        <img src="https://media.istockphoto.com/photos/house-plant-sansevieria-trifasciata-picture-id951908336?k=20&m=951908336&s=612x612&w=0&h=z-nEk3t7USo_g9G7tUSyCgTtSGY4h8RpNZOFiuYDDHs=" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /10 product -->
<!-- 11 product -->
                <div class="prod_card">
                    <div class="prod_title">Sweetheart Hoya (hoya kerrii)</div>
                    <div class="prod_img">
                        <img src="https://m.media-amazon.com/images/I/51MRfb22dHL._AC_SX425_.jpg" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /11 product -->
<!-- 12 product -->
                <div class="prod_card">
                    <div class="prod_title">Silver Ball Cactus (Notocactus scopa)</div>
                    <div class="prod_img">
                        <img src="https://cdn.shopify.com/s/files/1/2203/9263/products/feeb71c14b1bf7cc6b0c00e03321d543.jpg?v=1607726278" alt="">
                    </div>
                    <div class="prod_text">10$</div>
                    <div class="prod_btn">Buy Now</div>
                </div>
<!-- /12 product -->
            </div>
        </div>
    </div>
<!-- /Shop Page -->
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