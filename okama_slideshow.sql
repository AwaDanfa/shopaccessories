

CREATE DATABASE IF NOT EXISTS okama_slideshow;
USE okama_slideshow;


CREATE TABLE IF NOT EXISTS categories( 
    category_id INT(10) NOT NULL AUTO_INCREMENT,
    category_name VARCHAR(50) NOT NULL,
    slogan TEXT NOT NULL,
    PRIMARY KEY(category_id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO categories(category_name, slogan)
VALUES
("Necklaces","Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet!"),
("Grand Necklaces","Express your Magnificience in Style"),
("Horizon Necklaces","Be ready to shine!"),
("Mini Necklaces","Small Is Powerful"),
("Sunburst Necklaces","A Burst of Sunlight"), 
("Choker Necklaces","Embrace a 90s favourite with our range of choker necklaces"),
("Earrings","For final flourishes"),
("Headbands","Elevate your ethnic look"),
("Bracelets","Dress up your wrists!");

CREATE TABLE IF NOT EXISTS product(
    product_id INT(10) NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(50) NOT NULL, 
    category_id INT(10) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    collection VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    picture VARCHAR(50) NOT NULL,
    PRIMARY KEY(product_id),
    FOREIGN KEY(category_id) REFERENCES categories(category_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO product(product_name, category_id, collection, price, description, picture)
VALUES
("Caliza",1,"Grand",110.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","caliza_grand.jpg"),

("Napenabena",1,"Grand",95.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","napenabena_grand.jpg"),

("Konaza",1,"Grand",100.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is also fair trade, waterproof and there’s only one available! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","konaza_grand.jpg"),

("Quinguara",1,"Grand",85.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is also fair trade, waterproof and there’s only one available! The neck is adjustable at 35/36 cms. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","quinguara_grand.jpg"),

("Keratuma",1,"Horizon",85.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is also fair trade, waterproof and there’s only one available! It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","keratuma_horizon.jpg"),

("Gueracanai",1,"Horizon",65.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is also fair trade, waterproof and there’s only one available! The neck is adjustable at 39/40 cms. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","gueracanai_horizon.jpg"),

("Chami",1,"Horizon",80.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is also fair trade, waterproof and there’s only one available! The neck is adjustable at 36/37 cms. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","chami_horizon.jpg"),

("Tila",1,"Mini",40.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","tila_mini.jpg"),

("Potina",1,"Mini",40.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","potina_mini.jpg"),

("Polina",1,"Mini",40.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","polina_mini.jpg"),

("Lopa",1,"Mini",40.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","lopa_mini.jpg"),

("Paruna",1,"Sunburst",62.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. The neck is adjustable at 33/34 cms. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","paruna_sunburst.jpg"),

("Dakiuru",1,"Sunburst",44.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","dakiuru_sunburst.jpg"),

("Era Era",1,"Sunburst",72.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","eraera_sunburst.jpg"),

("Umada",1,"Sunburst",72.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","umada_sunburst.jpg"),

("Bombua",1,"ZigZag",44.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","bombua_zigzag.jpg"),

("Bucapatai",1,"ZigZag",64.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","bucapatai_zigzag.jpg"),

("Encheque",1,"ZigZag",60.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","encheque_zigzag.jpg"),

("Jaido",1,"ZigZag",60.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","jaido_zigzag.jpg"),

("Black & White Drops",7,"N/A",15.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","bw_drops.jpg"),

("Rainbow Drops",7,"N/A",15.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","rainbow_drops.jpg"),

("Water Rings",7,"N/A",20.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","waterrings.jpg"),

("Fire Flowers",7,"N/A",15.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","fireflowers.jpg"),

("Ifono Headband",8,"N/A",32.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","ifono_headband.jpg"),

("Iuma Headband",8,"N/A",32.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigenous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","iuma_headband.jpg"),

("Blue Bur Bracelet",9,"N/A",28.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigeneous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","blue_bur.jpg"),

("Orange Bur Bracelet",9,"N/A",28.00,"Made with a traditional technique over several days of hard work, this stunning piece of wearable tribal art is handwoven with love by indigeneous hands. It is one of our most elegant and spectacular pieces yet! The art of weaving is an ancestral legacy passed on from generation to generation within the members of the Embera nation. While some okamas are perfect and some are not, they're all the expression of the highest and most authentic level of human creativity and skill.","orange_bur.jpg");


CREATE TABLE IF NOT EXISTS enquiry( 
    enquiry_id INT(10) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    message TEXT NOT NULL,
    PRIMARY KEY(enquiry_id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
