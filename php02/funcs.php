<?php
//共通に使う関数を記述

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=gs_bookreview;charset=utf8;host=localhost','root','');
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());
      }      
}

function redirect($page){
    header("Location: ".$page);
    exit;
}

function sqlError($stmt){ 
    $error = $stmt->errorInfo();
    exit("ErrorSQL:".$error[2]);
  }



function ymdhis(){ 
    echo date("y年m月d日 h時i分s秒");
  }

  
function ymd(){ 
    echo date("y/m/d");
  }
  
  function his(){ 
    echo date("h:i:s");
  }