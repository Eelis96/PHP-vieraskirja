<?php
if(isset($_POST['poista'])){
    $tyhja = "";
    file_put_contents("vieraat.txt", $tyhja);
    header('location:hallintapaneeli.php?success');
}else{
    header('location:hallintapaneeli.php');
}
?>