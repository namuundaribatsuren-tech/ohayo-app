<?php
$username = $_POST['username'] ?? 'ゲスト';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>オハ用｜ホーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="center">

  <div class="card">
    <h2>こんにちは、<?php echo htmlspecialchars($username); ?> さん</h2>

    <p>本日の配達状況</p>

    <button class="success">配達完了</button>

    <a href="index.php" class="link">ログアウト</a>
  </div>

</body>
</html>
