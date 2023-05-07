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
                <h2 class="mt-0 mb-20">Medical Case Report</h2>
                <div class="patient-info ">
                    <h3>Patient Information</h3>
                    <div class="content-p">
                        <div class="info">
                        <p>ID: <br><span class="c-grey"><?php echo $_SESSION['ID'] ?></span></p>
                        <p>Name: <br><span class="c-grey"><?php echo $_SESSION['Name'] ?></span></p>
                        <p >Age: <br><span class="c-grey"><?php echo $_SESSION['age'] ?></span></p>
                        <p >Phone Number: <br><span class="c-grey"><?php echo $_SESSION['phone'] ?></span></p>
                        <p >Email: <br><span class="c-grey"><?php echo $_SESSION['email'] ?></span></p>
                        <p >Gender: <br><span class="c-grey"><?php echo $_SESSION['gender'] ?></span></p>
                        <p >Status: <br><span class="c-grey"><?php echo $_SESSION['Status'] ?></span></p>
                        <p >Emergency Content Person: <br><span class="c-grey"><?php echo $_SESSION['emergencyName'] ?></span></p>
                        <p >Emergency Content Person Phone:  <br><span class="c-grey"><?php echo $_SESSION['emergencyPhone'] ?></span></p>
                    </div>
                </div>
                <div class="addimision">
                    <p>adimision date: <br> <span  class="c-grey"><?php echo $_SESSION['adimisiondate'] ?></span></p>
                    <p>Chief Complaint: <br> <span class="c-grey"><?php echo $_SESSION['ChiefComplaint'] ?></span></p>
                    <p>Current Medical History: <br> <span class="c-grey"><?php echo $_SESSION['CurrentMedicalHistory']?></span></p>
                </div>
                <div class="medication">

                       <p>medication: <br><span  class="c-grey"><?php echo $_SESSION['medication'] ?></span></p>

                    <p>Smoking:<br> <span class="c-grey"><?php echo $_SESSION['Smoking'] ?></span></p>
                    <p>Alcohol :<br> <span class="c-grey"><?php echo $_SESSION['Alcohol'] ?></span ></p>
                    <p>Physical Exam Date :<br> <span  class="c-grey"><?php echo $_SESSION['Physical'] ?></span></p>
                </div>
                <h3>REVIEW OF BODY SYSTEMS</h3>
                <div class="body">
                    
                    <p>Sensory:  <span class="c-grey"><?php echo $_SESSION['Sensory'] ?></span></p>
                    <p>Respirtory:  <span class="c-grey"><?php echo $_SESSION['Respirtory'] ?></span></p>
                    <p>Cardiovascular:  <span class="c-grey"><?php echo $_SESSION['Cardio'] ?></span></p>
                    <p>Digestive:  <span class="c-grey"><?php echo $_SESSION['Digestive'] ?></span></p>
                    <p>Skin:  <span class="c-grey"><?php echo $_SESSION['Skin'] ?></span></p>
                    <p>Bone:  <span class="c-grey"><?php echo $_SESSION['Bone'] ?></span></p>
                    <p>Spinal Cord:  <span class="c-grey"><?php echo $_SESSION['SpinalCord'] ?></span></p>
                    <p>Neurological:  <span class="c-grey"><?php echo $_SESSION['Neurological'] ?></span></p>
                    <p>Joints:  <span class="c-grey"><?php echo $_SESSION['Joints'] ?></span></p>
                </div>
                <h3>CURRENT MEDICAL CONDITIONS</h3>
                <div class="conditions-m">
                    <p class="w-full fw-bold">Kindly indicate if you have the following medical condition:</p>
                    <div class="conditions"></div>
                    <p>Eye Problems :<span class="c-grey"><?php echo $_SESSION['EyeProblems'] ?></span></p>
                    <p>Seizures: <span class="c-grey"><?php echo $_SESSION['Seizures']?></span></p>
                    <p>Epilepsy: <span class="c-grey"><?php echo$_SESSION['Epilepsy'] ?></span></p>
                    <p>Hearing problems:<span class="c-grey"><?php echo $_SESSION['Hearingproblems'] ?></span></p>
                    <p>Diabetes: <span class="c-grey"><?php echo $_SESSION['Diabetes'] ?></span></p>
                    <p>CardioVascular Disease: <span class="c-grey"><?php echo $_SESSION['CardioVascular'] ?></span></p>
                    <p>Respiratory Problems :<span class="c-grey"><?php echo $_SESSION['RespiratoryProblems'] ?></span></p>
                    <p>Kidney Problems:<span class="c-grey"><?php echo $_SESSION['KidneyProblems'] ?></span></p>
                    <p>Stomach Ad liver problems :<span class="c-grey"><?php echo $_SESSION['StomachAndliver'] ?></span></p>
                    <p>Paniceatic Problems :<span class="c-grey"><?php echo $_SESSION['PaniceaticProblems']?></span></p>
                    <p>Anxiety and Depression:<span class="c-grey"><?php echo $_SESSION['AnxietyandDepression'] ?></span></p>
                    <p>Other mental health issues :<span class="c-grey"><?php echo $_SESSION['Othermentalhealthissues'] ?></span></p>
                    <p>Sleep Disorders :<span class="c-grey"><?php echo $_SESSION['SleepDisorders'] ?></span></p>
                    <p>Neck or Back problems:<span class="c-grey"><?php echo $_SESSION['NeckorBackproblems'] ?></span></p>
                </div>
            </div>
            <?php 
if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header("location:http://localhost/server/index.php",true);
    }

    ?>


        </div>
    </div>
</body>
</html>