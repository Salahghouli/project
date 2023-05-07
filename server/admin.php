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
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="addUser.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">Add New User</span></a>
                </li>
                <li>
                    <a class="active d-flex txt-c fs-14 c-black red-6 p-10" href="appoimentadmin.php"><i class="fa-regular fa-chart-bar fa-fw"></i><span class="fw-bold ml-10">Make Apoiment</span></a>
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
                <h2 class="mt-0 mb-20">All user</h2>
                <div class="res-table">
                    <table class="fs-14 w-full">
                        <thead>
                            <tr>
                            <td>ID</td>
                                 <td>Name</td>
                                 <td>Age</td>
                                 <td>Phone</td>
                                 <td>Email</td>
                                 <td>Gender</td>
                                 <td>Status</td>
                                 <td>Emergency Content Person</td>
                                 <td>Emergency Content Person Phone</td>
                                 <td>password</td>
                                 <td>Button</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }
                            $sql = 'SELECT * FROM `users`';
                            $result=mysqli_query($database,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
        $ID =$row["ID"];
        $nameUser = $row["Name"];
        $userAge =$row["age"];
        $userPhone =$row["phone"];
        $userEmail=$row["email"];
        $gender=$row["gender"];
        $Status=$row["Status"];
        $EmeName=$row["emergencyName"];
        $EmeNumber=$row["emergencyPhone"];
        $password=$row["password"];
        
       echo ' <tr>
       <td>'.$ID.'</td>
            <td>'.$nameUser.'</td>
            <td>'.$userAge.'</td>
            <td>'.$userPhone.'</td>
            <td>'.$userEmail.'</td>
            <td>'.$gender.'</td>
            <td> <span class="label bg-orange c-white p-5">'.$Status.'</span></td>
            <td>'.$EmeName.'</td>
            <td>'.$EmeNumber.'</td>
            <td>'.$password.'</td>
            <td>  
            <button class="btn-shape b-none bg-red c-white"><a href="delete.php?delteid='.$ID.'" class="text-light">delted</a></button></td>
       </tr>';}}
        
    

?>  
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="projects m-20 bg-white red-10 p-20">
                <h2 class="mt-0 mb-20">Medical History</h2>
                <div class="res-table">
                    <table class="fs-14 w-full">
                        <thead>
                            <tr>
                                 <td>ID</td>
                                 <td>adimision date</td>
                                 <td>Chief Complaint</td>
                                 <td>Current Medical History</td>
                                 <td>medication</td>
                                 <td>Smoking</td>
                                 <td>Alcohol </td>
                                 <td>Physical Exam Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }
                            $sql = 'SELECT * FROM `users`';
                            $result=mysqli_query($database,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
        $ID =$row["ID"];
        $adimisiondate = $row["adimisiondate"];
        $ChiefComplaint =$row["ChiefComplaint"];
        $CurrentMedicalHistory =$row["CurrentMedicalHistory"];
        $medication=$row["medication"];
        $Smoking=$row["Smoking"];
        $Alcohol=$row["Alcohol"];
        $Physical=$row["emergencyPhone"];
        
       echo ' <tr>
       <td>'.$ID.'</td>
            <td>'.$adimisiondate.'</td>
            <td>'.$ChiefComplaint.'</td>
            <td>'.$CurrentMedicalHistory.'</td>
            <td>'.$medication.'</td>
            <td>'.$Smoking.'</td>
            <td>'.$Alcohol.'</td>
            <td>'.$Physical.'</td>
       </tr>';}}
        
    

?>  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="projects m-20 bg-white red-10 p-20">
                <h2 class="mt-0 mb-20">REVIEW OF BODY SYSTEMS
</h2>
                <div class="res-table">
                    <table class="fs-14 w-full">
                        <thead>
                            <tr>
                            <td>ID</td>
                                 <td>Sensory</td>
                                 <td>Respirtory</td>
                                 <td>Cardiovascular</td>
                                 <td>Digestive</td>
                                 <td>Skin</td>
                                 <td>Bone</td>
                                 <td>Spinal Cord</td>
                                 <td>Neurological</td>
                                 <td>Joints</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }
                            $sql = 'SELECT * FROM `users`';
                            $result=mysqli_query($database,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
        $ID =$row["ID"];
        $Sensory = $row["Sensory"];
        $Respirtory =$row["Respirtory"];
        $Cardio =$row["Cardio"];
        $Digestive=$row["Digestive"];
        $Skin=$row["Skin"];
        $Bone=$row["Bone"];
        $SpinalCord=$row["SpinalCord"];
        $Neurological=$row["Neurological"];
        $Joints=$row["Joints"];
        
       echo ' <tr>
       <td>'.$ID.'</td>
            <td>'.$Sensory.'</td>
            <td>'.$Respirtory.'</td>
            <td>'.$Cardio.'</td>
            <td>'.$Digestive.'</td>
            <td>'.$Skin.'</td>
            <td>'.$Bone.'</td>
            <td>'.$SpinalCord.'</td>
            <td>'.$Neurological.'</td>
            <td>'.$Joints.'</td>

       </tr>';}}
        
    

?>  
                          
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="projects m-20 bg-white red-10 p-20">
                <h2 class="mt-0 mb-20">CURRENT MEDICAL CONDITIONS</h2>
                <div class="res-table">
                    <table class="fs-14 w-full">
                        <thead>
                            <tr>
                            <td>ID</td>
                                 <td>Eye Problems</td>
                                 <td>Seizures</td>
                                 <td>Epilepsy</td>
                                 <td>Diabetes</td>
                                 <td>CardioVascular Disease</td>
                                 <td>Respiratory Problems </td>
                                 <td>Kidney Problems</td>
                                 <td>Stomach Ad liver problems</td>
                                 <td>Paniceatic Problems</td>
                                 <td>Anxiety and Depression</td>
                                 <td>Other mental health issues </td>
                                 <td>Sleep Disorders</td>
                                 <td>Neck or Back problems</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }
                            $sql = 'SELECT * FROM `users`';
                            $result=mysqli_query($database,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
        $ID =$row["ID"];
        $EyeProblems = $row["EyeProblems"];
        $Seizures =$row["Seizures"];
        $Epilepsy =$row["Epilepsy"];
        $Diabetes=$row["Diabetes"];
        $CardioVascular=$row["CardioVascular"];
        $RespiratoryProblems=$row["RespiratoryProblems"];
        $KidneyProblems=$row["KidneyProblems"];
        $StomachAndliver=$row["StomachAndliver"];
        $PaniceaticProblems=$row["PaniceaticProblems"];
        $AnxietyandDepression=$row["AnxietyandDepression"];
        $Othermentalhealthissues =$row["Othermentalhealthissues"];
        $SleepDisorders=$row["SleepDisorders"];
        $NeckorBackproblems=$row["NeckorBackproblems"];
        
       echo ' <tr>
       <td>'.$ID.'</td>
            <td>'.$EyeProblems.'</td>
            <td>'.$Seizures.'</td>
            <td>'.$Epilepsy.'</td>
            <td>'.$Diabetes.'</td>
            <td>'.$CardioVascular.'</td>
            <td>'.$RespiratoryProblems.'</td>
            <td>'.$KidneyProblems.'</td>
            <td>'.$StomachAndliver.'</td>
            <td>'.$PaniceaticProblems.'</td>
            <td>'.$AnxietyandDepression.'</td>
            <td>'.$Othermentalhealthissues.'</td>
            <td>'.$SleepDisorders.'</td>
            <td>'.$NeckorBackproblems.'</td>
       </tr>';}}?>  
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="projects m-20 bg-white red-10 p-20">
                <h2 class="mt-0 mb-20">All Appoiment</h2>
                <div class="res-table">
                    <table class="fs-14 w-full">
                        <thead>
                            <tr>
                            <td>ID</td>
                                 <td>Dr</td>
                                 <td>Day</td>
                                 <td>Hour</td>
                                 <td>Status</td>
                                 <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                            $database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }
                            $sql = 'SELECT * FROM `appoiment`';
                            $result=mysqli_query($database,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
        $ID =$row["ID"];
        $dr = $row["dr"];
        $Date =$row["Date"];
        $Status =$row["Status"];
        $hour=$row["hour"];
        $IDAPP=$row["IDAPP"];

        
       echo ' <tr>
       <td>'.$ID.'</td>
            <td>'.$dr.'</td>
            <td>'.$Date.'</td>
            <td>'.$hour.'</td>
            <td>'.$Status.'</td>
            <td> <button class="btn-shape b-none bg-red c-white"><a href="delete.php?delteid='.$IDAPP.'" class="text-light">delted</a></button></td>
       </tr>';}}?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>