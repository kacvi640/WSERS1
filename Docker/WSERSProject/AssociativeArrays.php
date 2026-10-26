<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //print ($height ["Thomas"]);
    $count = [1,2,3,4,5,6,7];
    $height = ["Valerii" => 180, "Anastasia" => 177, "Thomas" => 175, "Lidia" => 165, "Violetta" => 159];
    $height["David"] = 198;
    $height["Oleksandr"] = 208;
    foreach ($height as $key => $value) {
        print $key . " has a height of " . $value . "<br>";
    }

    ?>
    <table>
        <tr>
            <th>Count</th>
            <th>Name</th>
            <th>Height</th>
        </tr>
        <?php
        $count=1;
        foreach ($height as $key => $value) {
        ?>
            <tr>
                <td><?php print $count; ?></td>
                <td><?php print $key; ?></td>
                <td><?php print $value; ?></td>
            </tr>
        <?php
        $count++;
        }
        ?>
    </table>

</body>

</html>