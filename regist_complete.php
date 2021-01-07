<?php 

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname = lesson01; host = localhost;","root","");

$pdo -> exec("inset into all_acounts(family_name,last_name,family)")




<!DOCTYPE html>

<html lang = "ja">
<head>
<meta charset = "UTF-8">
    <title>アカウント登録完了</title>
<link rel = "stylesheet" type = "text/css" href = "style3.css">
</head>

<body>
    
    <h1>アカウント登録完了画面</h1>
    
    <div class = complete> 
        <p>登録完了しました</p>
    </div>
     
     <div>
      <input type = "submit" value = "TOPページへ戻る">
     </div>
    
</body></html>