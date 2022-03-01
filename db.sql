CREATE TABLE products( 
    productID INT NOT NULL AUTO_INCREMENT, 
    productPrice FLOAT(4,2),
    productName VARCHAR(50) UNIQUE,
    productImage VARCHAR(50) UNIQUE,
    PRIMARY KEY (productID) 
); 

CREATE TABLE cardInfo( 
    cardID INT NOT NULL AUTO_INCREMENT, 
    cardNumber INT(16) NOT NULL UNIQUE,
    cardCVV INT(3) NOT NULL UNIQUE, 
    expDate TIMESTAMP NOT NULL,
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    billingAddress VARCHAR(255) NOT NULL,
    shippingAddress VARCHAR(255) NOT NULL, 
    PRIMARY KEY (cardID)
);

-- product name, price, image 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Blue Rosette','5.00','/images/blue_rosette.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Red Pagoda','7.00','/images/red_pagoda.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Pickle Plant','10.00','/images/pickle_plant.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Jade Plant','11.00','/images/jade_plant.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Panda Plant','6.00','/images/panda_plant.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Pincushion Cactus','12.00','/images/pincushion_cactus.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('String of Pearls','6.00','/images/string_of_pearls.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Zwartkop','7.00','/images/zwartkop.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Tiger Aloe','11.00','/images/tiger_aloe.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Snake Plant','10.00','/images/snake_plant.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Sweetheart Hoya','20.00','/images/sweetheart_hoya.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Silver Ball Cactus','4.00','/images/silver_ball_cactus.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('?Mystery Box?','15.00','/images/mystery_box.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Sedum Donkeys Tail','6.00','/images/sedum_donkeys_tail.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Senecio Cocoon','5.00','/images/senecio_cocoon.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Devils Backbone','5.00','/images/devils_backbone.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Bunny Ear Cactus','12.00','/images/bunny_ear_cactus.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Fence Post Cactus','6.00','/images/fence_post_cactus.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Red Lion','7.00','/images/red_lion.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Ivory Towers','6.00','/images/ivory_towers.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Frizzle Sizzle','10.00','/images/frizzle_sizzle.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Little Missy','7.00','/images/little_missy.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Coral Aloe Vera','10.00','/images/coral_aloe_vera.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Air Plant','7.00','/images/air_plant.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Pentagon Pot','15.00','/images/pentagon_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Hanging Pot','20.00','/images/hanging_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Head Pot','20.00','/images/head_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Speckled Pot','12.00','/images/speckled_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Standing Pot','18.00','/images/standing_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Ramp Pot','16.00','/images/ramp_pot.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Simply Succulent Fertilizer','8.00','/images/ss_fertilizer.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('3 Piece Hand Shovel Set','10.00','/images/3_piece_hand_shovel_set.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Succulent Potting Soil','30.00','/images/succulent_potting_soil.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Thorn Proof Leather Gloves','11.00','/images/thorn_proof_leather_gloves.jpg'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Long Handled Pruning Shears','10.00','/images/long_handled_pruning_shears.jpg');

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Long Spouted Watering Jug','6.00','/images/long_spouted_watering_jug.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('White Hoodie','35.00','/images/white_hoodie.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Grey Longsleeve','20.00','/images/grey_longsleeve.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Black T-shirt','15.00','/images/black_tshirt.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('White Joggers','25.00','/images/white_joggers.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Grey Sweatpants','22.00','/images/grey_sweatpants.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Black Shorts','10.00','/images/black_shorts.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Purple Sticker','3.00','/images/purple_sticker.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Tan Sticker','3.00','/images/tan_sticker.png'); 

INSERT INTO products (productName, productPrice, productImage)
VALUES ('Yellow Sticker','3.00','/images/yellow_sticker.png'); 


