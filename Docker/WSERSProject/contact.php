<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?t=<?= time(); ?>">
</head>

<body>
    <h1 style="background-color: rgb(237, 56, 243); text-align: center;">Here are our contact information:</h1>

    <div id="mainPage">
        <?php
        include_once("commonCode.php");
        navigationBar("Contact", "En");
        ?>
        <div class="mainPageContent">

        <?php
        if (isset($_GET["username"])) {
            print "Hello" . $_GET["username"];
        } else {
        ?>
            <form method="GET">
                Please type your name here: <input type="text" name="username">
                Please type your password: <input type="password" name="psw">
                <button type="submit">Send data</button>
            </form>
        <?php
        }
        ?>

        <h3 style="background-color: aliceblue; text-align: center;">Email address: NailShop@gmai.com</h3>
        <h3 style="background-color: aliceblue; text-align: center;">Phone number: +352 661 761 865</h3>
        <h3 style="background-color: aliceblue; text-align: center;">Also you could come to our office at address: 27 Rue du Luxembourg, L-4323 Luxembourg</h3>
        </div>  
    </div>
</body>

</html>