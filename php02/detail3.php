<?php
$id = $_GET["id"];

include "funcs.php";
// データベースを取得。
$pdo = db_con();

//２．データ登録SQL作成  :idはバインド変数と呼ばれている。
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id"); //指定したidの人のデータだけ引っ張ることができる。
$stmt -> bindvalue(":id", $id, PDO::PARAM_INT); //第三変数を指定することで型を制限でき、セキュリティ向上
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
}

$row = $stmt->fetch();
?>

<!-- index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存） -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー修正</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select3.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update3.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー情報の修正を行います</legend>
     <label>氏名：<input type="text" name="name" value=" <?=$row["name"]?> "></label><br>
     <label>ID：<input type="lid" name="lid" value=" <?=$row["lid"]?> "></label><br>
     <label>PW：<input type="lpw" name="lpw" value=" <?=$row["lpw"]?> "></label><br>
     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$row["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>

