<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="title" contect="WWEB開発4回目" />
    <head>
    <body>
        <?php
            $taxrate = 0.08;

            $items = [
                ['name' => 'りんご', 'quantity' => 2, 'price' => 100],
                ['name' => 'お肉', 'quantity' => 1, 'price' => 1000],
                ['name' => '卵', 'quantity' => 2, 'price' => 200]
            ];

            $total1 = 0;
            foreach ($items as $item) {
                $total1 += $item['quantity'] * $item['price'];
            }

            $total2 = $total1 * (1 + $taxrate);

            echo "税抜合計金額: " . $total1 . "円<br>";
            echo "税込合計金額: " . $total2 . "円";
        ?>


    <body>
<html>