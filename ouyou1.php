<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="title" contect="WWEB開発4回目" />
    <head>
    <body>
        <?php
            $date1 = strtotime('2024.5/29');
            $date2 = strtotime('+1 year');

            for ($current_date = $date1; $current_date <= $date2; $current_date = strtotime('+1 day', $current_date)) {
                echo date('n/j(D)', $current_date) . "<br>";
            }
        ?>
    <body>
<html>

