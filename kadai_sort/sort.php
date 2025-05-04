<!DOCTYPE html>
<html lang=ja>
    
<head>
    <meta charset = "utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way ($array, $order) {
            if ($order === 'asc') {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }
        return $array;
        }

        $nums = [15, 4, 18, 23, 10];
        
        $sorted = sort_2way($nums, 'asc');
        foreach ($sorted as $num) {
            echo $num . '<br>';
        }

        $sorted = sort_2way($nums, 'desc');
        foreach ($sorted as $num) {
            echo $num . '<br>';
        }

        ?>
    </p>
</body>

</html>