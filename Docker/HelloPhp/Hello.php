<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title> 
    <style>
        .box{
            width: 50px;
            height: 50px;
        }
        .red{
            background-color:red;
        }
        .blue{
            background-color:blue;
        }
    </style>
</head>
<body>
   
    <?php
     $twoDivs='<div class="red box"></div>
     <div class="blue box"></div>';
    for($i=0;$i<3;$i++){
        echo $twoDivs;
    }
    ?>
    
    
</body>
</html>