<?php 
$lang = "EN";
if(isset($_GET["lang"]))
    {
        $lang = $_GET["lang"];
    }
$translations = [];
 
$fileTranslation = fopen("translations.csv", "r");
while (!feof($fileTranslation)) {
    $anotherLineOfText = fgets($fileTranslation);
    $oneLineArray = explode(";", $anotherLineOfText);
   
    if (count($oneLineArray)) {
        $translations[$oneLineArray[0]] = $oneLineArray[1]; } 
        else {
        $translations[$oneLineArray[0]] = $oneLineArray[2];
    }
}
 
 function navigationBar($activePage , $language){
    ?>
    <?php 
    if ($language=="En"){
        ?>
        <nav>
    <ul>
       <h1><li><a href="index.php" <?php if ($activePage=="Home"){print "class='active'";}?>>Home</a></li></h1>
        <h1><li><a href="products.php" <?php if ($activePage=="Products"){print "class='active'";}?>>Products</a></li></h1>
        <h1><li><a href="aboutUs.php" <?php if ($activePage=="About Us"){print "class='active'";}?>>About</a></li></h1>
        <h1><li><a href="contact.php" <?php if ($activePage=="Contact"){print "class='active'";}?>>Contact</a></li></h1>

    </ul>
     <ul id="language-selector">
            <li><a href="index.php" class="active">English</a></li>
            <li><a href="index-ru.php">Russian</a></li>
        </ul>
</nav>
<?php 
    }
    ?>
    <?php
    if($language=="Ru"){
        ?>
        <nav>
    <ul>
       <h1><li><a href="index-ru.php" <?php if ($activePage=="Home"){print "class='active'";}?>>Главная</a></li></h1>
        <h1><li><a href="products-ru.php" <?php if ($activePage=="Products"){print "class='active'";}?>>Товары</a></li></h1>
        <h1><li><a href="aboutUs-ru.php" <?php if ($activePage=="About Us"){print "class='active'";}?>>Про нас</a></li></h1>
        <h1><li><a href="contact-ru.php" <?php if ($activePage=="Contact"){print "class='active'";}?>>Контакты</a></li></h1>
    </ul>
    <ul id="language-selector">
            <li><a href="index.php">English</a></li>
            <li><a href="index-ru.php" class="active">Russian</a></li>
        </ul>
    </nav>
</nav>
<?php
    }
    ?>
<?php
 }
 ?>

 
 
 
 