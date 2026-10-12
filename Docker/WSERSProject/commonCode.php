 <?php 
 function navigationBar($activePage){
    ?>
<nav>
    <ul>
       <h1><li><a href="index.php" <?php if ($activePage=="Home"){print "class='active'";}?>>Home</a></li></h1>
        <h1><li><a href="products.php" <?php if ($activePage=="Products"){print "class='active'";}?>>Products</a></li></h1>
        <h1><li><a href="aboutUs.php" <?php if ($activePage=="About Us"){print "class='active'";}?>>About Us</a></li></h1>
        <h1><li><a href="contact.php" <?php if ($activePage=="Contact"){print "class='active'";}?>>Contact Us</a></li></h1>

    </ul>
</nav>
<?php
 }
 ?>
 
 
 
 