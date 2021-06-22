<!---->
<!---->
<!--//function hisob($num=25,$num2=30){-->
<!--//    if ($num+$num2==40){-->
<!--//        echo "bu xato";-->
<!--//    }   elseif ($num+$num2==55){-->
<!--//        echo "bu to'g'ri ";-->
<!--//    }else{-->
<!--//        echo "son topilmadi";-->
<!--//    }-->
<!--//}-->
<!--//hisob();-->
<!--//function hisob2($num3=50){-->
<!--//    $hisob4 =$num3;-->
<!--//    echo $hisob4;-->
<!--//}-->
<!--//hisob2();-->
<!---->
<!--//$ismlar = ["ishdiayguf","iyaguyfguertfsuy","uyewg8udyg8yeg","iygfuygrygeciyrgf","isgdyfhdjirhoh","vuhridufivsuet"];-->
<!--//-->
<!--//echo $ismlar.rand();-->
<!---->
<!--//echo base_convert("12",10,);-->
<!--//-->
<!--//$x = 235;-->
<!--//$y = 555;-->
<!--//function counts(){-->
<!--//    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];-->
<!--//}-->
<!--//counts();-->
<!--//echo $z;-->
<!--//echo date('H-i-s-j-m-Y')-->
<!---->
<!--//$date = date_create('2025-12-31');-->
<!--//date_modify($date, '1 day');-->

<form method="get" action="#" >
    <label for="">Son kiriting: </label>
    <input type="text" name="son" style="margin: 20px 0 20px 10px">
    <input type="submit" name="submit" value="submit" style="margin:20px 0 0 50px;">
</form>

<?php
if (isset($_GET['submit'])){
function hisob($a)
{

    $tub = true;
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0) {
            $tub = false;
        }

    }
    if ($tub) {
        echo $a . "soni tub son";
    } else {
        echo $a . "soni tub emas";
    }
}}
hisob($_GET['son']);

?>
