
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
    <link rel = "stylesheet" type = "text/css" media = "print" href = "./css/pdf.css">
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
            <div class="info-ordonones bg-white">
                <h1>Ordonnones Info</h1>
                <form action="ordononnes.php" method="POST">
                    <label class="d-block" for="dr">Doctor Name</label>
                    <input class="b-none bg-eee red-10" type="text" id="dr"name="drName" required>
                    <label class="d-block" for="user">User Name</label>
                    <input class="b-none bg-eee red-10" type="text"id="user" name="userName" required>
                    <label class="d-block" for="age">User Age</label>
                    <input class="b-none bg-eee red-10" type="number" name="age" id="age" required>
                    
                    <ol id="pharmaceutical">
                    <label class="d-block" for="pharmaceutical">Pharmaceutical</label>
                        <li><input class="b-none bg-eee red-10" type="text"name="p1" required></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p2"></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p3"></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p4"></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p5"></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p6"></li>
                        <li><input class="b-none bg-eee red-10" type="text"name="p7"></li>
                    </ol>
                    <input class="btn-shape bg-blue b-none" type="submit" value="Send" name="info-ord">
                </form>
            </div>
    </div>


</body>
</html>