<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?t=<?= time(); ?>">
<body>
    <div id="mainPage">

  <?php
   include_once("commonCode.php");
   navigationBar("About Us",$lang);
   ?>
    <h1><?= $translations["AboutPageMain"] ?></h1>
   
     <div class="mainPageContent">
    <h2><?= $translations["AboutPageMain"] ?></h2>
    <img src="images/Beautiful-Flowers.jpg.webp" width="300" height="300">
    <style>
    img {
        display: block;
        margin: 0 auto;
    }
    
</style>
     </div>
   </div>
</body>
</html>