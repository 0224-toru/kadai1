<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "style2.css">
    <title>アカウント登録確認画面</title>
</head>
    <body>
     <h1>アカウント登録確認画面</h1>
    
    <div class = "confirm">
        <p>名前（姓）</p>
         <?php echo $_POST['family_name']; ?>
        
        <p>名前（名）</p>
         <?php echo $_POST['last_name']; ?>
        
        <p>カナ（姓）</p>
         <?php echo $_POST['family_name_kana']; ?>
        
        <p>カナ（名）</p>
         <?php echo $_POST['last_name_kana']; ?>
        
        <p>メールアドレス</p>
         <?php echo $_POST['mail']; ?>
        
        <p>パスワード</p>
         <?php echo $_POST['password']; ?>
        
        <p>性別</p>
         <?php echo $_POST['gender']; ?>
        
        <p>郵便番号</p>
         <?php echo $_POST['postal_code']; ?>
        
        <p>住所（都道府県）</p>
         <?php echo $_POST['perfectrue']; ?>
        
        <p>住所（市町村）</p>
         <?php echo $_POST['address_1']; ?>
        
        <p>住所（番地）</p>
         <?php echo $_POST['address_2']; ?>
        
        <p>アカウント権限</p>
         <?php echo $_POST['authority']; ?>
        
        <form action = "regist.php">
            <input type = "submit" class = "button1" value = "前に戻る">
        </form>
        
        <form action = "regist_complete.php">
         <input type = "submit" class = "button2" value = "登録する">
            
         <input type = "hidden" value = "<?php echo $_POST['family_name']; ?>" name = "family_name">
        <input tyoe = "hidden" value = "<?php echo $_POST['last_name']; ?>" name = "last_name">
        <input type = "hidden" value = "<?php echo $_POST['family_name_kana']; ?>" name = "family_name_kana">
        <input type = "hidden" value = "<?php echo $_POST['last_name_kana']; ?>" name = "last_name_kana">
        <input type = "hidden" value = "<?php echo $_POST['mail']; ?>" name = "mail">
        <input type = "hidden" value = "<?php echo $_POST['password']; ?>" name = "password">
        <input type = "hidden" value = "<?php echo $_POST['gender']; ?>" name = "gender">
        <input type = "hidden" value = "<?php echo $_POST['postal_code']; ?>" name = "postal_code">
        <input type = "hidden" value = "<?php echo $_POST['perfecture']; ?>" name = "perfecture">
        <input type = "hidden" value = "<?php echo $_POST['address_1']; ?>" name = "address_1">
        <input type = "hidden" value = "<?php echo $_POST['address_2']; ?>" name = "address_2">
        <input type = "hidden" value = "<?php echo $_POST['authority']; ?>" name = "authority">
            
        </form>
        
      </div>
    </body>
    
</html>