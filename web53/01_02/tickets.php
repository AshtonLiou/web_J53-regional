<?php
session_start();
    if($_SESSION['veri']==$_POST['veri']){
        $dsn="mysql:host=localhost;charset=utf8;dbname=db01";
        $pdo=new PDO($dsn,'root','');
        $sql="INSERT INTO `tickets` (`First name`,`Last name`,`Phone`,`Password`)
           values('{$_POST['first_name']}',
                  '{$_POST['last_name']}',
                  '{$_POST['phone']}',
                  '{$_POST['password']}')";
        $pdo->exec($sql);
    
        header("location:home.html"); 
    }else{
?>
    <script>
        alert("驗證碼錯誤，請重新輸入")
        location.href="tickets.html";
    </script>

<?php
    }
?>