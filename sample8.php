<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="title" contect="WWEB開発4回目" />
    <head>
    <body>
    <?php
        $array = [
            'apple' => ['英語' => 'apple', '日本語' => 'りんご'],
            'lemon' => ['英語' => 'lemon', '日本語' => 'レモン'],
            'grape' => ['英語' => 'grape', '日本語' => 'ぶどう'],
            'tomato' => ['英語' => 'tomato', '日本語' => 'トマト']
        ];
        
        foreach ($array as $key) {
            echo "英語: " . $key['英語'] . ", 日本語: " . $key['日本語'] . "<br>";
        }
        ?>


    <body>
<html>

