<?php
include 'app/db.php';

/*
$users_table = $mysql->db()->prepare("SELECT * FROM `users`");
$users_table->execute();
while($users = $users_table -> fetch(PDO::FETCH_ASSOC)) {
    echo($users['username']);
    echo("<br>");
}
*/

if(isset($_POST['login'])) {
    $user_check_code = $mysql->db()->prepare("SELECT * FROM `users` WHERE `code` = :code");
    $user_check_code->execute(array(":code" => $_POST['code']));
    
    if($user_check_code->rowCount() == NULL) {
        echo("Code invalid");
    } else {
        $user_set_pw = true;
    }
}

if(isset($_POST['setPw'])) {
    $user_check_code = $mysql->db()->prepare("UPDATE `users` SET `password` = :password WHERE `code` = :code");
    $user_check_code->execute(array(":code" => $_POST['code'], ":password" => $_POST['password']));
    
    if($user_check_code->rowCount() == NULL) {
        echo("Code invalid");
    } else {
        $user_set_pw = true;
    }
}
 
if(empty($_POST['code'])) {
    echo('
    <form method="POST">
    <input name="username" type="text">
    <input name="code" type="text">
    <button name="login" type="submit">Login</button>
    </form>
    ');
}

if(isset($user_set_pw)) {
    echo('
    <form method="POST">
    <input name="code" value="'.$_POST['code'].'" hidden>
    <input name="password" type="text">
    <button name="setPw" type="submit">Set your pw</button>
    </form>
    ');
}
?>