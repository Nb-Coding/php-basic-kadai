<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array, $order)
        {
            if ($order === true) {
                sort($array);
                echo '昇順にソートします。<br>';
            } else {
                rsort($array);
                echo '降順にソートします<br>';
            }

            foreach ($array as $arr) {
                echo $arr . '<br>';
            }
        };

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        echo sort_2way($nums, true);
        echo sort_2way($nums, false);
        ?>
    </p>
</body>

</html>