<?php
session_start();


    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="readmore.css">
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
        <h1>About Me</h1>
        
      

        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
           
            <div class="form-container">
      <form class="form">
       
        <h4>In the vibrant city of Shikarpur, I find myself immersed in the final year of my academic journey at the esteemed University of Sindh. At the age of 23, I'm navigating the intricate tapestry of academia, balancing the demands of coursework and the excitement of upcoming graduation.

As a dedicated student, I approach each assignment as a unique opportunity for learning and growth. The University of Sindh has played a pivotal role in shaping my academic pursuits, providing a rich environment that fosters both knowledge and personal development. From lectures that challenge my intellect to engaging discussions with fellow students, every moment on campus contributes to my holistic educational experience.

Being a resident of Shikarpur, I've had the privilege of immersing myself in the local culture and community. The city's vibrancy, history, and diversity have added depth to my university years, creating a unique backdrop for both study and recreation. Beyond the academic realm, I actively engage with my surroundings, embracing the blend of tradition and modernity that characterizes Shikarpur.

As I tread the final steps towards graduation, I reflect on the myriad experiences that have shaped me. The friendships forged, the challenges overcome, and the knowledge gained have all contributed to my growth as an individual. With an eye towards the future, I am eager to apply the skills and insights acquired during my university years to the professional world that awaits.

In this transitional phase, the excitement of completing my degree is accompanied by a sense of anticipation for the opportunities that lie ahead. Whether it be pursuing a career in my field of study or exploring new avenues, I approach the future with enthusiasm and a readiness to embark on the next chapter of my life.

In essence, my journey as a final-year student in Shikarpur is not just about academic accomplishments but also about the myriad experiences that have sculpted my character and prepared me for the adventures that await beyond the university gates.</h4>
        <button type="submit" class="form-submit-btn" name="contact">contact</button>
      </form>
    </div>
        </form>
    </div>
</body>
</html>
