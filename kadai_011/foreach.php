<!DOCTYPE html>
<html lang=ja>
    
<head>
    <meta charset = "utf-8">
    <title>PHP基礎編_課題11</title>
</head>

<body>
    <p>
        <?php
        $onion = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        foreach ($onion as $key => $value) {
            echo "{$key} : {$value} <br>";
        }
        ?>
    </p>
</body>

</html>