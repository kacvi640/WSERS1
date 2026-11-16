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
   
    if (count($oneLineArray) == 3) {
        if ($lang == "EN"){
        $translations[$oneLineArray[0]] = $oneLineArray[1];
        }
        else {
        $translations[$oneLineArray[0]] = $oneLineArray[2];
    }
}
} 
 
 function navigationBar($activePage , $language){
    global $translations;
    ?>
        <nav>
    <ul>
       <h1><li><a href="index.php?lang?<?= $language ?>" <?php if ($activePage=="Home"){print "class='active'";}?>><?= $translations["HomeBtn"] ?></a></li></h1>
        <h1><li><a href="products.php?lang?<?= $language ?>" <?php if ($activePage=="Products"){print "class='active'";}?>><?= $translations["ProductsBtn"] ?></a></li></h1>
        <h1><li><a href="aboutUs.php?lang?<?= $language ?>" <?php if ($activePage=="About Us"){print "class='active'";}?>><?= $translations["AboutBtn"] ?></a></li></h1>
        <h1><li><a href="contact.php?lang?<?= $language ?>" <?php if ($activePage=="Contact"){print "class='active'";}?>><?= $translations["ContactBtn"] ?></a></li></h1>

    </ul>
     <ul id="language-selector">
            <li><a href="index.php?lang=EN" <?php if ($language =="EN") print ('class="active"')?>;>English</a></li>
            <li><a href="index.php?lang=RU"<?php if ($language =="RU") print ('class="active"')?>;>Russian</a></li>
        </ul>
</nav>
<?php
    }  ?>
