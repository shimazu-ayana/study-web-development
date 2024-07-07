<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "ファイルがアップロードされました。<br>";
        
        // ファイル情報の表示
        echo "ファイル名: " . $_FILES["fileToUpload"]["name"] . "<br>";
        echo "ファイルタイプ: " . $_FILES["fileToUpload"]["type"] . "<br>";
        echo "ファイルサイズ: " . ($_FILES["fileToUpload"]["size"] / 1024) . " KB<br>";
        
        // 画像の表示
        echo "<img src='" . $target_file . "' alt='アップロードされた画像'>";
    } else {
        echo "ファイルのアップロードに失敗しました。エラー: " . $_FILES["fileToUpload"]["error"];
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    画像を選択してください:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="アップロード" name="submit">
</form>
</body>
</html>