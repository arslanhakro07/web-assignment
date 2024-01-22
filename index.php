<?php
session_start();

require_once 'utilities/user.php';

$user_name = "";
$login_fail_message = ""; 

if(isset($_POST['user-name'])) {
	$user_name = $_POST['user-name'];
	$user_pass = $_POST['user-pass'];

	$user = do_login($user_name, $user_pass);
	
	if($user != null) {
		$_SESSION["_user"] = $user;
		header("Location: home.php");
	}
	$login_fail_message = "Username or password mismatched";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="applystyle.css">
		<title>Main</title>
	</head>
	<body>
		
		<div class="card">
		<div id="login">
			<h1 >Login</h1>
			<?php if($login_fail_message):?>
			<div class="error-message"><?=$login_fail_message;?></div>
			<?php endif;?>

			<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
				<div>
						<input type="text" name="user-name" class="input" placeholder="username" value="<?=$user_name?>" required/>
				</div>
				<div>
				
				<div>
				<input type="passwrod"name="user-pass" class="input" placeholder="password" required>
					
				</div>
				<div>
				<button>
    <span class="circle1"></span>
    <span class="circle2"></span>
    <span class="circle3"></span>
    <span class="circle4"></span>
    <span class="circle5"></span>
    <span class="text" value="submit">Login</span>
</button>
					
				</div>
			</form>
		</div>
		</div>
	</body>
</html>
