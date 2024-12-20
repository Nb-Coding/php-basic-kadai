<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHPの基礎を学ぼう 5章課題</title>
</head>

<body>
    <p>
        <?php
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9  = 30;
        $score10 = 60;

        $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        $student_score = $total / 10;
        echo $student_score;
        //echo "生徒のテストの平均点は {$student_score} 点です";
        ?>
    </p>
</body>

</html>