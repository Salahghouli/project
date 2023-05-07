<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/framwork.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="./css/pdf.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet">
        <title>Healthy Care</title>
    </head>
<body>
    <div class="pdf">
        <div class="header-pdf">
        <div class="logo">
            <i class="fa-solid fa-stethoscope"></i>
        </div>
        <div class="dr">
            <h1>
               <span>Dr.<?php echo $_POST['drName']?></span>
            </h1>
            <p>QUALIFICATION</p>
        </div>
        </div>
        <div class="hosb">
            <h1>HOSPITAL</h1>
            <p>Certification</p>
        </div>
        <div class="content-pdf">
            <p class="name">Name:<?php echo $_POST['userName']?></p>
            <p class="age">Age :<?php echo $_POST['age']?></p>
            <p class="Date">Date:<?php     $newDate = date('Y-m-d');
  
  echo $newDate;
?></p>
        </div>
        <div class="content-rx">
            <h1>RX</h1>
            <ol>
                
                <li><?php echo $_POST['p1']?></li>
                <li><?php echo $_POST['p2']?></li>
                <li><?php echo $_POST['p3']?></li>
                <li><?php echo $_POST['p4']?></li>
                <li><?php echo $_POST['p5']?></li>
                <li><?php echo $_POST['p6']?></li>
                <li><?php echo $_POST['p7']?></li>
            </ol>
        </div>
        <div class="Signature">
            <p>Signature</p>
        </div>
        <div class="footer-pdf">
            <p><i class="fa-solid fa-mobile"></i>   Email:hospi@dz.com</p>
            <p><i class="fa-solid fa-envelope"></i> Phone:2222</p>
        </div>
    </div>
</body>
</html>