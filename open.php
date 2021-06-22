<?php

const SERVER = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const NAME = "learn";

$connect = mysqli_connect(SERVER,USERNAME,PASSWORD,NAME);

if (isset($_POST['submit'])){
    if (empty($_POST['name'])){
        echo "ism kiritmadingiz";
        die();
    }else{
        $ism = strval($_POST['name']);
    }
    if (!preg_match("/^[a-zA-Z]*$/", $ism)){
        echo "ism maydoniga 'a-zA-Z' belgilarni kiritishingiz mumkin";
        die();
    }

    if (empty($_POST['fam'])){
        echo "Familiya kiritmadingiz";
        die();
    }else{
        $surname1 = $_POST['fam'];
    }
    if (!preg_match("/^[a-zA-Z]*$/", $surname1)){
        echo "Familiya maydoniga 'a-zA-Z' belgilarni kiritishingiz mumkin";
        die();
    }

    if (empty($_POST['log'])){
        echo "Login kiritmadingiz";
        die();
    }else{
        $login = $_POST['log'];
    }
    if (!preg_match("/^[a-zA-Z0-9]*$/", $login)){
        echo "Login maydoniga 'a-zA-Z0-9' belgilarni kiritishingiz mumkin";
        die();
    }

    if (empty($_POST['par'])){
        echo "Parol kiritmadingiz";
        die();
    }else{
        $password = $_POST['par'];
    }
    if (!preg_match("/^[a-zA-Z0-9#-$]*$/", $password)){
        echo "Parol maydoniga 'a-zA-Z0-9#-$' belgilarni kiritishingiz mumkin";
        die();
    }


    if (empty($_POST['creat'])){
        echo "Create kiritmadingiz";
        die();
    }else{
        $create = $_POST['creat'];
    }
    if (!preg_match("/^[0-9]*$/", $create)){
        echo "Create at maydoniga '0-9' belgilarni kiritishingiz mumkin";
        die();
    }

    if (empty($_POST['update'])){
        echo "Update kiritmadingiz";
        die();
    }else{
        $update = $_POST['update'];
    }
    if (!preg_match("/^[0-9]*$/", $update)){
        echo "Login maydoniga '0-9' belgilarni kiritishingiz mumkin";
        die();
    }

    $sql = "INSERT INTO kirish (name,surname,login,password,created_at,updated_at) VALUES ('$ism','$surname1','$login','$password','$create','$update')";
    $result = mysqli_query($connect, $sql);
    if ($result == true) {
        include 'malumot.php';
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

?>