<?php
//1.  DB接続します
include "funcs.php";
$pdo = db_con();

//２．データ表示SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    sqlError($stmt);    
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){  //ftecの説明はPDF参照
    //$resultにデータが入ってくるのでそれを活用して[html]に表示させる為の変数を作成して代入する
    
    $view .='<p>';
    $view .='<a href="detail3.php?id=' . $result["id"] . '">';
    $view .= $result["name"] . "," . $result["lid"]. "," . $result["lpw"];
    $view .='</a>';
    $view .=' ';
    $view .='<a href="delete3.php?id=' . $result["id"] . '">';
    $view .='[削除]' . "<br>";
    $view .='</a>';
    $view .='</p>';

  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーザーリスト</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index3.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
