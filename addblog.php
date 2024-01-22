<?php
session_start();

require_once 'utilities/user.php';
require_once 'utilities/blogposts.php';

$login_fail_message = '';
$title = '';
$text = ''; 

if (!is_user_loggedin()) {
    header("Location: index.php");
    exit(); // Always exit after sending a header redirect
}

if(isset($_POST["blog-title"]) && isset($_POST["blog-text"])) {
    $title = $_POST["blog-title"];
    $text = $_POST["blog-text"];
	$public = isset($_POST['publish']) ? 'true' : 'false';

    $success = add_post($title, $text, $public);

    $_SESSION["flash_message"] = $success ? "Post added" : "Post not added";
    
    if ($success) {
        header("Location: home.php");
        exit(); // Always exit after sending a header redirect
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="applystyle.css">
    <title>Add Blogs</title>
</head>
<body>
    <?php include "header.php";?>
    
    <?php if(isset($_SESSION["flash_message"])):?>
        <div class="error-message"><?=$_SESSION["flash_message"];?></div>
        <?php unset($_SESSION["flash_message"]);
    endif;
    ?>

    <div style="text-align: center">
        <h1>Create a Blog</h1>
        
        <?php if($login_fail_message):?>
        <div class="error-message"><?=$login_fail_message;?></div>
        <?php endif;?>

        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
           
            <div class="form-container">
      <form class="form">
        <div class="form-group">
          <label for="email">Blog Title</label>
          <input required="" name="blog-title" id="email" type="text" value="<?=$title?>" required >
        </div>
        <div class="form-group">
          <label for="textarea">Text</label>
          <textarea required="" cols="50" rows="10" id="textarea" name="blog-text"required><?=$text?></textarea>
        </div>
        <button type="submit" class="form-submit-btn" name="publish">Publish</button>
        <button type="submit" class="form-submit-btn" name="save-button">Save</button>
      </form>
    </div>
        </form>
    </div>
</body>
</html>
