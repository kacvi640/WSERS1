<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="background-color: rgb(237, 56, 243); text-align: center;">Тут вы можете связаться с нами:</h1>
    <div id="mainPage">
    <?php
    include_once("commonCode.php");
    navigationBar("Contact", "Ru");
    ?>

        
        <div class="mainPageContent">

            <?php
            if (isset($_GET["username"])) {
                print "Hello" . $_GET["username"];
            } else {
            ?>
                <form method="GET">
                    Напишите свое имя: <input type="text" name="username">
                    Напишите свой пароль: <input type="password" name="psw">
                    <button type="submit">Отправить</button>
                </form>
            <?php
            }
            ?>

            <h3 style="background-color: aliceblue; text-align: center;">Наша почта: NailShop@gmai.com</h3>
            <h3 style="background-color: aliceblue; text-align: center;">Номер телефона: +352 661 761 865</h3>
            <h3 style="background-color: aliceblue; text-align: center;">А так же вы можете прийти к нам в офис: 27 Rue du Luxembourg, L-4323 Luxembourg</h3>
        </div>
    </div>
</body>

</html>