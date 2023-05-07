<?php 

$database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }

if(isset($_GET['delteid'])){
    $ID=$_GET['delteid'];

    $sql="DELETE FROM `users` where `ID`=$ID";
    
    $result=mysqli_query($database,$sql);
    if($result){
        header('Location: admin.php');
    }
}
$database = mysqli_connect('localhost', 'root', '', 'project');
                            if (!$database) {
                                echo 'Error' . mysqli_connect_error();
                            }

if(isset($_GET['delteid'])){
    $IDAPP=$_GET['delteid'];

    $sql="DELETE FROM `appoiment` where `IDAPP`=$IDAPP";
    
    $result=mysqli_query($database,$sql);
    if($result){
        header('Location: admin.php');
    }
}

mysqli_free_result($result);
mysqli_close($database);



?>