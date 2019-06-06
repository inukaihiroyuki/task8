<!DOCTYPE html>
<html lang=jp>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

//1.  DB接続します
include "funcs.php";
$pdo = db_con();

  
  //２．データ表示SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_an_table");
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
           
     
      $view .= '<tr><th>';
      $view .='<a href="detail.php?id=' . $result["id"] . '">';
      $view .=$result["id"].'</th><td>'.$result["postcode"].'</td><td>'.$result["pref"].'</td><td>'.$result["city"].'</td><td>'.$result["block"].'</td><td>'.$result["name"].'</td><td>'.$result["age"].'</td><td>'.$result["phone"].'</td><td>'.$result["mail"].'</td><td>'.$result["distance"].'</td><td>'.$result["budjet"].'</td><td>'.$result["width"].'</td><td>'.$result["madori"].'</td><td>'.$result["comment"].'</td>';
      $view .='</a><td>';
      $view .='<a href="delete.php?id=' . $result["id"] . '">';
      $view .='[削除]'.'</td></tr>';
      $view .='</a>';
    }
  }
  ?>

<table id="list">
            <!-- ここに追加データが挿入される -->
            <tr><th>No.</th><td>郵便番号</td><td>都道府県</td><td>市区町村</td><td>番地</td><td>氏名</td><td>年齢</td><td>電話番号</td><td>mail</td><td>駅距離</td><td>予算</td><td>広さ</td><td>間取り</td><td>その他</td><td>削除ボタン</td></tr>
            <div><?=$view?></div>


</table>


<ul>
<li><a href="post.php">登録フォーム</a></li>
</ul>


</body>
</html>