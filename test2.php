<body>
<form action="#" method="POST">
    <label for="code">Firt:</label>
    <input type="password" name="code" id="code">

    <label for="comfirm"> Last password:</label>
    <input type="password" name="confirm">

    <input type="submit" name="submit" >
</form>

<?php

if (isset($_POST['code']) && isset($_POST['submit'])){
    if (strlen($_POST['code'])>=6){
        echo "ishladi";
    }else{
        echo "ishlamadi";
    }
}else{
    echo "Iltimos parol kiriting";
}


?>














<?php
//$a= strval($_POST['parol']);
//$a = "text";
//if (isset($_POST['submit'])) {
//
//    if (strlen($a) >= 6) {
//        echo "ishladi";
//    } elseif (strlen($a) < 6) {
//        echo "ishlamadi";
//    }
//}
//
//?>

</body>