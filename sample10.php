<<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="title" content="WEB開発7回目" />
    </head>
    <body>
        <form action="sample9.php" method="post">
            <label for="name">お名前:</label>
            <input id="name" type="text" name="name" value="嶋津文奈">
            <input type="submit" value="送信する">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
                    echo "お名前: " . $name;
                }
            ?>

        </form>
    </body>
</html>
