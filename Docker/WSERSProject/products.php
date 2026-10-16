<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
    <style>img {
               border: 1px solid #6e0707;
               border-radius: 50px;
               padding: 35px;
               width: 300px;}
          .products {
               display: grid;
               grid-template-columns: 1fr 1fr;
               gap: 10px;}
  </style>
</head>
<body>

    <h2>Here is you can fing thing for going your nails!</h2>
   <?php
   include_once("commonCode.php");
   navigationBar("Products","En");
   $nameofproducts=["GelSet","NailDrill","NailFiles","NailSet","PolyGel"];
   $imageofproducts=["images/GelSet.webp","images/NailDrill.webp","images/NailFile.webp","images/NailSet.webp","images/Polygel.webp"];
   $priceofproducts=["12,99","35,56","5,00","55,89","34,99"];
   ?>
    <div class="products">

       <?php
       for($i=0;$i<count($nameofproducts);$i++){
        ?>
        <div class="OneItem">
        <img src="<?php print $imageofproducts [$i] ?>"alt="$nameofproducts[$i]">
        <div><?php print $nameofproducts[$i] ?></div>
        <div> Price: $<?php print $priceofproducts[$i]?></div>
        </div>
        <?php
       }
       ?>
             

    </div>
</body>
</html>