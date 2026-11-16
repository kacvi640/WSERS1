<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?t=<?= time(); ?>">
</head>

<body>
    <h1 style="background-color: rgb(237, 56, 243); text-align: center;"<?= $translations["ContactBtn"] ?></h1>

    <div id="mainPage">
        <?php
        include_once("commonCode.php");
        navigationBar("Contact",$lang);
        ?>
        <div class="mainPageContent">

        <?php
        if (isset($_GET["username"])) {
            print "Hello" . $_GET["username"];
        } else {
        ?>
            <form method="GET">
                <?= $translations["ContactBtnAsk"] ?> <input type="text" name="username">
                <?= $translations["ContactBtnPasw"] ?> <input type="password" name="psw">
                <button type="submit"><?= $translations["ContactBtnData"] ?></button>
            </form>
        <?php
        }
        ?>

        <h3 style="background-color: aliceblue; text-align: center;"><?= $translations["ContactEmail"] ?> NailShop@gmai.com</h3>
        <h3 style="background-color: aliceblue; text-align: center;"><?= $translations["ContactPhone"] ?> +352 661 761 865</h3>
        <h3 style="background-color: aliceblue; text-align: center;"><?= $translations["ContactAddress"] ?> 27 Rue du Luxembourg, L-4323 Luxembourg</h3>
        </div>  
    </div>
</body>

</html>