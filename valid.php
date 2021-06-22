<html>
<head>
    <title>Document</title>
</head>


<body>


<?php
const SERVER = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const NAME = "learn";


$connect = mysqli_connect(SERVER, USERNAME, PASSWORD, NAME);


if (isset($_POST['submit'])) {
    if (empty($_POST['ism'])) {
        echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
        echo 'Ism kiritmadingiz';
                    echo "</body>";
        die();
    } else {
        $ism = strval($_POST['ism']);
        if (!preg_match("/^[a-zA-Z]*$/", $ism)) {
            echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
            echo "ism maydoniga faqatgina 'a-zA-Z' shu belgilarni kiritishingiz mumkin";
                        echo "</body>";
            die();
        }
    }

    if (empty($_POST['surname1'])) {
        echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
        echo 'Familiya kiritmadingiz';
                    echo "</body>";
        die();
    } else {
        $surname1 = $_POST['surname1'];
        if (!preg_match("/^[a-zA-Z]*$/", $surname1)) {
            echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
            echo "Familiya maydoniga faqatgina 'a-zA-Z' shu belgilarni kiritishingiz mumkin";
                        echo "</body>";
            die();
        }
    }

    if (empty($_POST['age1'])) {
        echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
        echo 'Yoshingizni kiritmadingiz';
                    echo "</body>";
        die();
    } else {
        $age1 = $_POST['age1'];
        if (!preg_match("/^[0-9]*$/", $age1)) {
            echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
            echo "Yosh maydoniga faqatgina '0-9' shu belgilarni kiritishingiz mumkin";
            echo "</body>";
            die();
        }
    }

    if (empty($_POST['born1'])) {
        echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
        echo 'Tug\'ilgan yilingizni kiritmadingiz';
        echo "</body>";
        die();
    } else {
        $born1 = $_POST['born1'];
        if (!preg_match("/^[0-9]*$/", $born1)) {
            echo '<body style="background-color: green;color: gold;text-align: center;font-size: 40px;margin-top: 100px">';
            echo "Tug'ilgan yili maydoniga faqatgina '0-9' shu belgilarni kiritishingiz mumkin";
            echo "</body>";
            die();
        }
    }

    $sql = "INSERT INTO talabalar (name,surname,age,birthday) VALUES ('$ism','$surname1','$age1','$born1')";
    $result = mysqli_query($connect, $sql);
    if ($result == true) {
        echo "<body style='color: white;background-color: black;text-align: center;margin-top: 100px;font-weight: 900;font-size: 40px'>";
        echo "Ma'lumotlar muvaffaqiyatli yuborildi!";
        echo "<br><br>";
        echo "<p>Ma'lumotlar bazasiga kirish uchun bu linkni bosing <a href='db_malumot.php' style='color: red'>link</a></p>";
        echo "</body>";
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

}
?>

</body>
</html>
