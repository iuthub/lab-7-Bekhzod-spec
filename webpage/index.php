<?php
include('connection.php');
$db = new PDO('mysql:host=localhost; dbname=blog', 'admin', 'H3hnq5ZEQ92ABUyf');

$password='';
$username='';
$check=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check_stmt = $db->prepare('SELECT password FROM users');
    $rows=$check_stmt->fetchAll();
    $password = $_REQUEST['pwd'];
    foreach($rows as $row){
        if ($row['password']==$password) {
            $check++;
            break;
            }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>My Personal Page</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php include('header.php'); ?>
        <div class="<?= $check ? '' : 'yes' ?>posts">
		<!-- Show this part if user is not signed in yet -->
		<div class="twocols">
			<form action="index.php" method="post" class="twocols_col">
				<ul class="form">
					<li>
						<label for="username">Username</label>
						<input type="text" name="username" id="username" value="<?=$username?>" />
					</li>
					<li>
						<label for="pwd">Password</label>
						<input type="password" name="pwd" id="pwd" value="<?=$password?>"/>
					</li>
					<li>
						<label for="remember">Remember Me</label>
						<input type="checkbox" name="remember" id="remember" checked />
					</li>
					<li>
						<input type="submit" value="Submit" /> &nbsp; Not registered? <a href="register.php">Register</a>
					</li>
				</ul>
			</form>
			<div class="twocols_col">
				<h2>About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur libero nostrum consequatur dolor. Nesciunt eos dolorem enim accusantium libero impedit ipsa perspiciatis vel dolore reiciendis ratione quam, non sequi sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nobis vero ullam quae. Repellendus dolores quis tenetur enim distinctio, optio vero, cupiditate commodi eligendi similique laboriosam maxime corporis quasi labore!</p>
			</div>
		</div>
        </div>
		<!-- Show this part after user signed in successfully -->
        <div class="<?= $check ? 'yes' : '' ?>posts">
		<div class="logout_panel"><a href="register.php">My Profile</a>&nbsp;|&nbsp;<a href="index.php?logout=1">Log Out</a></div>
		<h2>New Post</h2>
		<form action="index.php" method="post">
			<ul class="form">
				<li>
					<label for="title">Title</label>
					<input type="text" name="title" id="title" />
				</li>
				<li>
					<label for="body">Body</label>
					<textarea name="body" id="body" cols="30" rows="10"></textarea>
				</li>
				<li>
					<input type="submit" value="Post" />
				</li>
			</ul>
		</form>
		<div class="onecol">
			<div class="card">
				<h2>TITLE HEADING</h2>
				<h5>Author, Sep 2, 2017</h5>
				<p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div class="card">
				<h2>TITLE HEADING</h2>
				<h5>Author, Sep 2, 2017</h5>
				<p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		</div>
        </div>
	</body>
</html>