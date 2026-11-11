<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
    $names =["John","Angelina","Shakira","Ronaldo","Michelle","Michael"];
    for($i=0;$i<count($names);$i++){
        print "<li>" .$names[$i] . "</li> \n";
    }
    ?>
    </ul>
     <ul>
    <?php
    $lastnames =["Doe","Joly","Rey","Crhistian","Andrade","Galustyn"];
    for($i=0;$i<count($lastnames);$i++){
        print "<li>" .$lastnames[$i] . "</li> \n";
    }
    ?>
    </ul>
    
<table>
  <tr>
    <th>Name</th>
    <th>LastName</th>
  </tr>
<?php
for($i=0; $i<count($names);$i++){
    ?>
<tr>
    <td><?php print $names[$i] ?></td>
    <td><?php print $lastnames[$i]; ?></td>
</tr>
<?php
}
?>

  
</table>
</body>
</html>