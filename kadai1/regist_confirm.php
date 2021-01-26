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
        <div>
         <label>名前（姓）</label>
         <?php echo $_POST['family_name']; ?>
        </div>
         
        <div>
         <label>名前（名）</label>
         <?php echo $_POST['last_name']; ?>
        </div>
        
        <div>
         <label>カナ（姓）</label>
         <?php echo $_POST['family_name_kana']; ?>
        </div>
        
        <div>
         <label>カナ（名）</label>
         <?php echo $_POST['last_name_kana']; ?>
        </div>
        
        <div>
         <label>メールアドレス</label>
         <?php echo $_POST['mail']; ?>
        </div>
        
        <div>
         <label>パスワード</label>
         <?php echo $_POST['password']; ?>
        </div>
        
        <div>
         <label>性別</label>
         <?php
            $_POST['gender'];
            if ($_POST['gender']==0){
                echo "男";
            }elseif($_POST['gender']== 1){
                echo "女";
            } 
            ?>
        </div>
        
        <div>
         <label>郵便番号</label>
         <?php 
            echo $_POST['potal_code'];
          ?>
        </div>
        
        <div>
         <label>住所（都道府県）</label>
         <?php 
            echo $_POST['perfecture'];
        ?>
        </div>
        
        <div>
         <label>住所（市町村）</label>
         <?php echo $_POST['address_1']; ?>
        </div>
        
        <div>
         <label>住所（番地）</label>
         <?php echo $_POST['address_2']; ?>
        </div>
        
        <div>
         <label>アカウント権限</label>
         <?php  
            $_POST['authority'];
             if ($_POST['authority']==0){
             echo "一般";
             }elseif ($_POST['authority']==1){
             echo "管理者";}
            ?>
        </div>
        
        <form action = "regist.php">
            
            <input type = "submit" class = "button1" value = "前に戻る">
        </form>
        
        <form action = "regist_complete.php">
         <input type = "submit" class = "button2" value = "登録する">
            
         <input type = "hidden" value = "<?php echo $_POST['family_name']; ?>" name = "family_name">
            
        <input type = "hidden" value = "<?php echo $_POST['last_name']; ?>" name = "last_name">
            
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