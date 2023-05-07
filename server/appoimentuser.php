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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Healthy Care</title>
    
</head>
<body>
    <div class="page d-flex">
        <div class="sidebar p-relative bg-white p-20">
            <h3 class="txt-c p-relative mt-0">Healthy Care</h3>
            <ul>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="fishier.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">DashBored</span></a>
                </li>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="appoimentuser.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">Make Apoiment</span></a>
                </li>
            </ul>
            <?php
            echo
            '<form>
            <button class="btn-shape c-white bg-red b-none" type="submit" name="logout"></a>Logout</button>
            </form>';
            
            if(isset($_GET['logout'])){
                session_unset();
                session_destroy();
                header("location:http://localhost/server/index.php",true);
            }
            ?>
        </div>
        <div class="content w-full">
            <div class="projects m-20 bg-white red-10 p-20">
                <h2 class="mt-0 mb-20">Appoiment</h2>
                <div class="patient-info ">
                    <h3>Appoiment Information</h3>
                    <div class="content-p">
                        <div class="info">
                        <form action="" method="post">
            
                        <p>ID: <br><span class="c-grey"><?php echo $_SESSION['ID'] ?></span></p>
                        <label class="d-block mb-10 fw-bold" for="Doctors">Doctors</label>
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required checked>
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required >
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required checked>
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required >
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required checked>
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required >
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required checked>
                                <span>Dr.</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Dr" name="Doctors" id="Doctors" required >
                        <label class="d-block mb-10 fw-bold pt-10" for="date_appoi">Ur Date for Appoiment</label> 
                        <input class="b-none bg-eee red-10" type="date" name="dateApp" id="date_appoi" required>
                        <label class="d-block mb-10 fw-bold" for="Hour">Hour</label>
                        <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">7:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="7" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">8:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="8" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">9:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="9" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">10:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="10" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">11:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="11" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">12:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="12" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">13:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="13" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">14:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="14" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">15:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="15" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">16:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="16" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">17:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="17" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">18:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="18" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">19:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="19" name="Hour" id="Hour" required ></span>
                                <span class="p-20 fs-18 c-blue mb-10" style=" display: inline-flex;">20:00<input class="b-none bg-eee red-10 radio-btn" type="radio" value="20" name="Hour" id="Hour" required ></span>
                        <label class="d-block fw-bold pt-10 mb-10" for="StatusApp">Status</label>
                                <span>Urgent case</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Urgent case" name="StatusApp" id="StatusApp" required checked>
                                <span>normal condition</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="normal condition" name="StatusApp" id="StatusApp" required >
                                <input class="btn-shape bg-blue b-none d-block mt-10 w-full" type="submit" value="Add Appoiment" name="appoiment">
                         </form>
                    
                    </div>

                </div>
               
            </div>
            <?php 
    if(isset($_POST['appoiment'])){
        $dbuser ="root";
        $dbpassword="";
        $database = new PDO("mysql:host=localhost;dbname=project;",$dbuser,$dbpassword);
    $appoiment = $database->prepare("SELECT * FROM appoiment WHERE Date = :date AND hour = :hour AND dr =:dr");
    $appoiment->bindParam("date",$_POST['dateApp']);
    $appoiment->bindParam("hour",$_POST['Hour']);
    $appoiment->bindParam("dr",$_POST['Doctors']);
    $appoiment->execute();
    if($appoiment->rowCount()===1){
        echo '<div class="c-red" role="alert">
        This Time is Already Take!
        Take another Time
      </div>';
}else{
   echo $ID =$_SESSION['ID'];
   echo $Doctor=$_POST['Doctors'];
   echo $DateApp=$_POST['dateApp'];
   echo $hour=$_POST['Hour'];
   echo $StatusApp=$_POST['StatusApp'];
   $dbuser ="root";
        $dbpassword="";
        $database = new PDO("mysql:host=localhost;dbname=project;",$dbuser,$dbpassword);
   $addappoiment = $database->prepare("INSERT INTO appoiment(ID, dr, Date, Status, hour) VALUES ('$ID','$Doctor','$DateApp','$StatusApp','$hour')");
    $addappoiment->execute();
}}?>

        </div>
    </div>
</body>
</html>