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
     <nav>
    <ul>
       <h1><li><a href="index.php">Home</a></li></h1>
        <h1><li><a href="products.php" class="active">Products</a></li></h1>
        <h1><li><a href="aboutUs.php">About Us</a></li></h1>
        <h1><li><a href="contact.php">Contact Us</a></li></h1>

    </ul>
</nav>
    <div class="products">

        <?php
        for($i=0;$i<3;$i++)
            {
            ?>
        <div class="OneItem">
            <img src="images/GelSet.webp" alt="Gel Set" width="300" height="300" >
            <div style="background-color: #f386ea; font-size: 24px;margin-top: 10px;text-align:left ;border-radius: 20px;">Gel Set-Price: 12,99$</div>
        </div>    
            <?php
            }
        ?>

        






        <div class="OneItem">
            <img src="images/NailDrill.webp" alt="Nail Drill" width="300" height="300">
            <div style="background-color: #f386ea; font-size: 24px;margin-top: 10px;text-align:left ;border-radius: 20px;">Nail Drill-Price: 35,56$</div>
        </div>

        <div class="OneItem">
            <img src="images/NailFile.webp" alt="Nail Files" width="300" height="300">
            <div style="background-color: #f386ea; font-size: 24px;margin-top: 10px;text-align:left ;border-radius: 20px;">Nail Files-Price:5,00$</div>
        </div>

        <div class="OneItem">
            <img src="images/NailSet.webp" alt="Nail Set" width="300" height="300">
            <div style="background-color: #f386ea; font-size: 24px;margin-top: 10px;text-align:left ;border-radius: 20px;">Nail Set-Price: 55,89$</div>
        </div>
             

    </div>
</body>
</html>