<?php
if(isset($_POST['submit'])){
    $knimi = htmlspecialchars($_POST['knimi']);
    $kviesti = htmlspecialchars($_POST['kviesti']);

    if(empty($knimi) || empty($kviesti)){
        header('location:index.php?error');
    }else{
        header('location:index.php?success');

        $rivinvaihto = "\n";
        $vali = " ";

        file_put_contents("vieraat.txt", $knimi, FILE_APPEND);
        file_put_contents("vieraat.txt", $vali, FILE_APPEND);
        file_put_contents("vieraat.txt", $kviesti, FILE_APPEND);
        file_put_contents("vieraat.txt", $rivinvaihto, FILE_APPEND);
    }


}else{
    header('location:index.php');
}
?>