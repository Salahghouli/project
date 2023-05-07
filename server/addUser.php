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
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="admin.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">DashBored</span></a>
                </li>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="admin.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">Add New User</span></a>
                </li>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="admin.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">Make Apoiment</span></a>
                </li>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="ordonens.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">ordonnens</span></a>
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
                <h2 class="mt-0 mb-20">Add New User</h2>
                <div class="patient-info ">
                    <form action=""method="POST">
                    <div class="content-info">
                        <div class="info info-user">
                           <div class="addnewuser ">
                                <h3>Patient Information</h3>
                                <label class="d-block" for="ID">ID</label>
                                <input class="b-none bg-eee red-10" type="text" name="ID" id="ID" required>
                                <label class="d-block" for="user">User Name</label>
                                <input class="b-none bg-eee red-10" type="text"id="user" name="userName" required>
                                <label class="d-block" for="password">Password</label>
                                <input class="b-none bg-eee red-10" type="password"id="password" name="password" required>
                                <label class="d-block" for="age">User Age</label>
                                <input class="b-none bg-eee red-10" type="number" name="age" id="age" required>
                                <label class="d-block" for="phone">Phone</label>
                                <input class="b-none bg-eee red-10" type="tel" name="numberUser" id="phone" required>
                                <label class="d-block" for="email">Email</label>
                                <input class="b-none bg-eee red-10" type="email" name="email" id="email" required>
                                <label class="d-block" for="Gender">Gender</label>
                                <input class="b-none bg-eee red-10" type="text"id="Gender" name="gender" required>
                                <label class="d-block" for="Status">Status</label>
                                <span>Urgent case</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Urgent case" name="Status" id="Status" required checked>
                                <span>normal condition</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="normal condition" name="Status" id="Status" required >
                                <label class="d-block" for="Emergencyuser">Emergency Content Person:</label>
                                <input class="b-none bg-eee red-10" type="text"id="Emergencyuser" name="EMEName" required>
                                <label class="d-block" for="Emergencyphone">Emergency Content Phone:</label>
                                <input class="b-none bg-eee red-10" type="text" name="numberEME" id="Emergencyphone" required>
                                <label class="d-block" for="adimisiondate">adimision date</label>
                                <input class="b-none bg-eee red-10" type="date" name="adimisionDate" id="adimisiondate" required>
                                <label class="d-block" for="ChiefComplaint">Chief Complaint</label>
                                <input class="b-none bg-eee red-10" type="text"id="ChiefComplaint" name="ChiefComplaint" required>
                                <label class="d-block" for="CurrentMedicalHistory">Current Medical History</label>
                                <input class="b-none bg-eee red-10" type="text"id="CurrentMedicalHistory" name="CurrentMedicalHistory" required>
                                <label class="d-block" for="medication">medication</label>
                                <input class="b-none bg-eee red-10" type="text" name="medication" id="medication" required>
                                <label class="d-block" for="Smoking">Smoking</label>
                                <span>NONE</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Smoking" id="Smoking" required checked>
                                <span>YES</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Smoking" id="Smoking" required >
                                <label class="d-block" for="Alcohol">Alcohol</label>
                                <span>NONE</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Alcohol" id="Alcohol" required checked>
                                <span>YES</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Alcohol" id="Alcohol" required >
                                <label class="d-block" for="Physical">Physical Exam Date</label>
                                <input class="b-none bg-eee red-10" type="date"id="Physical" name="Physical" required>
                            
                        </div>
                    </div>
                        <!-- REVIEW OF BODY SYSTEMS -->
                    <div class="info info-user">
                        <div class="addnewuser ">
                             <h3>REVIEW OF BODY SYSTEMS</h3>
                             <label class="d-block" for="Sensory">Sensory</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Sensory" id="Sensory" required checked>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Sensory" id="Sensory" required>
                             <label class="d-block" for="Bone">Bone</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Bone" id="Bone" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Bone" id="Bone" required>
                             <label class="d-block" for="Respirtory">Respirtory</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Respirtory" id="Respirtory" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Respirtory" id="Respirtory" required>
                             <label class="d-block" for="SpinalCord">Spinal Cord</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="SpinalCord" id="SpinalCord" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="SpinalCord" id="SpinalCord" required>
                             <label class="d-block" for="Cardiovascular">Cardiovascular</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Cardio" id="Cardiovascular" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Cardio" id="Cardiovascular" required>
                             <label class="d-block" for="Neurological">Neurological</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Neurological" id="Neurological" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Neurological" id="Neurological" required>
                             <label class="d-block" for="Digestive">Digestive</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Digestive" id="Digestive" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Digestive" id="Digestive" required>
                             <label class="d-block" for="Joints"> Joints</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Joints" id="Joints" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Joints" id="Joints" required>
                             <label class="d-block" for="Skin">Skin</label>
                             <span>Normal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Normal" name="Skin" id="Skin" required>
                             <span>Abnormal</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Abnormal" name="Skin" id="Skin" required>
                     </div>
                 </div>
                 <div class="info info-user">
                    <div class="addnewuser ">
                         <h3>CURRENT MEDICAL CONDITIONS</h3>
                         <label class="d-block" for="EyeProblems">Eye Problems</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="EyeProblems" id="EyeProblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="EyeProblems" id="EyeProblems" required>
                         <label class="d-block" for="Seizures">Seizures</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Seizures" id="Seizures" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Seizures" id="Seizures" required>
                         <label class="d-block" for="Epilepsy">Epilepsy</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Epilepsy" id="Epilepsy" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Epilepsy" id="Epilepsy" required>
                         <label class="d-block" for="Hearingproblems">Hearing problems</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Hearingproblems" id="Hearingproblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Hearingproblems" id="Hearingproblems" required>
                         <label class="d-block" for="Diabetes">Diabetes</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Diabetes" id="Diabetes" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Diabetes" id="Diabetes" required>
                         <label class="d-block" for="CardioVascular">CardioVascular Disease:</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="CardioVascular" id="CardioVascular" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="CardioVascular" id="CardioVascular" required>
                         <label class="d-block" for="RespiratoryProblems">RespiratoryProblems </label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="RespiratoryProblems" id="RespiratoryProblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="RespiratoryProblems" id="RespiratoryProblems" required>
                         <label class="d-block" for="KidneyProblems">KidneyProblems</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="KidneyProblems" id="KidneyProblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="KidneyProblems" id="KidneyProblems" required>
                         <label class="d-block" for="StomachAndliver">Stomach And liver problems</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="StomachAndliver" id="StomachAndliver" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="StomachAndliver" id="StomachAndliver" required>
                         <label class="d-block" for="PaniceaticProblems">Paniceatic Problems </label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="PaniceaticProblems" id="PaniceaticProblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="PaniceaticProblems" id="PaniceaticProblems" required>
                         <label class="d-block" for="AnxietyandDepression">Anxiety and Depression</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="AnxietyandDepression" id="AnxietyandDepression" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="AnxietyandDepression" id="AnxietyandDepression" required>
                         <label class="d-block" for="Othermentalhealthissues">Other mental health issues</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="Othermentalhealthissues" id="Othermentalhealthissues" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="Othermentalhealthissues" id="Othermentalhealthissues" required>
                         <label class="d-block" for="SleepDisorders">SleepDisorders</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="SleepDisorders" id="SleepDisorders" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="SleepDisorders" id="SleepDisorders" required>
                         <label class="d-block" for="NeckorBackproblems">Neck or Back problems</label>
                         <span>Yes</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="Yes" name="NeckorBackproblems" id="NeckorBackproblems" required>
                         <span>None</span><input class="b-none bg-eee red-10 radio-btn" type="radio" value="None" name="NeckorBackproblems" id="NeckorBackproblems" required>
                         
                     
                 </div>
             </div>
                    </div>
                    <input class="btn-shape bg-blue b-none d-block mt-10 w-full" type="submit" value="Add New User" name="newUser">
                </form>
                </div>
        </div>
    </div>
    <?php 
        $dbuser ="root";
        $dbpassword="";
        $database = new PDO("mysql:host=localhost;dbname=project;",$dbuser,$dbpassword);
    if (isset($_POST['newUser'])){
        $ID =$_POST["ID"];
        $Name = $_POST["userName"];
        $password =$_POST['password'];
        $age =$_POST["age"];
        $phone =$_POST["numberUser"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $emergencyName=$_POST["EMEName"];
        $emergencyPhone=$_POST["numberEME"];
        $adimisiondate=$_POST["adimisionDate"];
        $ChiefComplaint=$_POST["ChiefComplaint"];
        $medication=$_POST["medication"];
        $CurrentMedicalHistory=$_POST["CurrentMedicalHistory"];
        $Smoking=$_POST["Smoking"];
        $Alcohol=$_POST["Alcohol"];
        $Physical=$_POST["Physical"];
        $Sensory=$_POST["Sensory"];
        $Bone=$_POST["Bone"];
        $Respirtory=$_POST["Respirtory"];
        $SpinalCord=$_POST["SpinalCord"];
        $Cardio=$_POST["Cardio"];
        $Neurological=$_POST["Neurological"];
        $Digestive=$_POST["Digestive"];
        $Joints=$_POST["Joints"];
        $Skin=$_POST["Skin"];
        $EyeProblems=$_POST["EyeProblems"];
        $Seizures=$_POST["Seizures"];
        $Epilepsy=$_POST["Epilepsy"];
        $Hearingproblems=$_POST["Hearingproblems"];
        $Diabetes=$_POST["Diabetes"];
        $Cardiovascular=$_POST["CardioVascular"];
        $RespiratoryProblems=$_POST["RespiratoryProblems"];
        $KidneyProblems=$_POST["KidneyProblems"];
        $StomachAndliver=$_POST["StomachAndliver"];
        $PaniceaticProblems=$_POST["PaniceaticProblems"];
        $AnxietyandDepression=$_POST["AnxietyandDepression"];
        $Othermentalhealthissues=$_POST["Othermentalhealthissues"];
        $NeckorBackproblems=$_POST["NeckorBackproblems"];
        $SleepDisorders=$_POST["SleepDisorders"];
        $Status=$_POST["Status"];
        $addnewUser = $database->prepare("INSERT INTO users (ID, password, adimisiondate, ChiefComplaint, CurrentMedicalHistory, medication, Smoking, Alcohol, Physical,Sensory,Bone, Respirtory, SpinalCord,Cardio, Neurological, Digestive, Joints, Skin, EyeProblems, Seizures, Epilepsy, Hearingproblems, Diabetes, CardioVascular, RespiratoryProblems, KidneyProblems, StomachAndliver, PaniceaticProblems, AnxietyandDepression, Othermentalhealthissues, SleepDisorders, NeckorBackproblems, age, phone, email, gender, emergencyName, emergencyPhone, Name,ROLE,Status) VALUES ('$ID','$password','$adimisiondate','$ChiefComplaint','$CurrentMedicalHistory','$medication','$Smoking','$Alcohol','$Physical','$Sensory','$Bone','$Respirtory','$SpinalCord','$Cardio','$Neurological','$Digestive','$Joints','$Skin','$EyeProblems','$Seizures','$Epilepsy','$Hearingproblems','$Diabetes','$Cardiovascular','$RespiratoryProblems','$KidneyProblems','$StomachAndliver','$PaniceaticProblems','$AnxietyandDepression','$Othermentalhealthissues','$SleepDisorders','$NeckorBackproblems','$age','$phone','$email','$gender','$emergencyName','$emergencyPhone','$Name','USER','$Status')");
        $addnewUser->execute();
        
    }
    if(isset($_POST['logout'])){
        header("location:http://localhost/server/index.php",true);
        session_unset();
        session_destroy();
    }

    ?> 
</body>
</html>