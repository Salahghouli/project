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

    <div class="page">
        <div class="container">
            <div class="login">
                <div class="logo">
                    <h1 class="c-blue p-10">Healthy Care</h1>
                </div>
                <form class="login-info " action="" method="POST">
                    <p class="mb-0 c-grey">Welcome Back</p>
                    <h2 class=" mt-0">Login To your account</h2>
                    <label class="d-block  fs-18 mt-10" for="id">Your ID</label>
                    <input class="info b-none bg-eee red-10 p-10 " type="tel" id="id" placeholder="Number Of Your Cart" name="ID" required>
                    <label class="d-block  fs-18 mt-10" for="password">Your Password</label>
                    <input class="info b-none bg-eee red-10 p-10" type="Password" id="password" placeholder="Your Password" name="password" required>
                    <input class="login-btn b-none btn-shape bg-blue c-white d-block mt-10" type="submit" value="Login" name="login">
                    <?php 
    if(isset($_POST['login'])){
        $dbuser ="root";
        $dbpassword="";
        $database = new PDO("mysql:host=localhost;dbname=project;",$dbuser,$dbpassword);
    $login = $database->prepare("SELECT * FROM `users` WHERE ID = :ID AND password = :password");
    $login->bindParam("ID",$_POST['ID']);
    $login->bindParam("password",$_POST['password']);
    $login->execute();
    if($login->rowCount()===1){
        $user=$login->fetchObject();
        session_start();
        echo $_SESSION['ID'] = $user->ID;
        echo $_SESSION['password'] = $user->password;
        echo $_SESSION['adimisiondate'] = $user->adimisiondate;
        $_SESSION['ChiefComplaint']=$user->ChiefComplaint;
        $_SESSION['CurrentMedicalHistory']=$user->CurrentMedicalHistory;
        $_SESSION['medication']=$user->medication;
        $_SESSION['Smoking']=$user->Smoking;
        $_SESSION['Alcohol']=$user->Alcohol;
        $_SESSION['Physical']=$user->Physical;
        $_SESSION['Respirtory']=$user->Respirtory;
        $_SESSION['Sensory']=$user->Sensory;
        $_SESSION['Bone']=$user->Bone;
        $_SESSION['SpinalCord']=$user->SpinalCord;
        $_SESSION['Cardio']=$user->Cardio;
        $_SESSION['Neurological']=$user->Neurological;
        $_SESSION['Digestive']=$user->Digestive;
        $_SESSION['Joints']=$user->Joints;
        $_SESSION['Skin']=$user->Skin;
        $_SESSION['EyeProblems']=$user->EyeProblems;
        $_SESSION['Seizures']=$user->Seizures;
        $_SESSION['Epilepsy']=$user->Epilepsy;
        $_SESSION['Hearingproblems']=$user->Hearingproblems;
        $_SESSION['Diabetes']=$user->Diabetes;
        $_SESSION['CardioVascular']=$user->CardioVascular;
        $_SESSION['RespiratoryProblems']=$user->RespiratoryProblems;
        $_SESSION['KidneyProblems']=$user->KidneyProblems;
        $_SESSION['StomachAndliver']=$user->StomachAndliver;
        $_SESSION['PaniceaticProblems']=$user->PaniceaticProblems;
        $_SESSION['AnxietyandDepression']=$user->AnxietyandDepression;
        $_SESSION['Othermentalhealthissues']=$user->Othermentalhealthissues;
        $_SESSION['SleepDisorders']=$user->SleepDisorders;
        $_SESSION['NeckorBackproblems']=$user->NeckorBackproblems;
        $_SESSION['age']=$user->age;
        $_SESSION['phone']=$user->phone;
        $_SESSION['email']=$user->email;
        $_SESSION['gender']=$user->gender;
        $_SESSION['emergencyName']=$user->emergencyName;
        $_SESSION['emergencyPhone']=$user->emergencyPhone;
        $_SESSION['Name']=$user->Name;
        $_SESSION['Status']=$user->Status;
        if($user->ROLE === 'USER'){
            header("location:fishier.php",true);
        }else{
            header("location:admin.php",true);
        }
        
        

    }else{
        echo '<div class="c-red" role="alert">
       Your password or id is worng!
      </div>';
    }
}

?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>