<?php
$db = new PDO('mysql:host=localhost; dbname=blog', 'admin', 'H3hnq5ZEQ92ABUyf');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$add_account_stmt = $db->prepare('INSERT INTO users(username, email, password, fullname, dob ) VALUES(?,?,?,?,?)');
$get_accounts_stmt = $db->prepare('SELECT * FROM users');

/*$username = '';
$fullname = '';
$email = '';
$password = '';
$dob='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_REQUEST['username'];
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    $add_account_stmt->execute(array($username, $email, $password, $fullname, $dob));
}*/
?>