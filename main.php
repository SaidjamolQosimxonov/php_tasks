<form action="#" method="get">
    <label for="">1-son:</label>
    <input style="margin: 20px 0 20px 10px" type="text" name="one">
    <label for="" style="margin-left: 30px"> necha marta hisoblash : </label>
    <input style="margin: 20px 0 20px 10px" type="number" name="three"><br>
    <label for="">2-son:</label>
    <input style="margin-left: 10px" type="text" name="two">
    <input type="submit" name="submit" value="submit" style="margin:20px 0 0 200px;">


<body style="text-align: center;">
</form>
<?php
if (isset($_GET['submit'])){
    function hisob($a,$b,$c){
      echo "<p>siz kiritgan 1-son : $a</p>";
      echo "<p>siz kiritgan 2-son : $b</p>";
      echo "<p>hisoblashlar soni : $c</p>";
        print "<h1>Javob:</h1>";

        for ($i = 0 ;$i <= $c;$i++){
          $z = $a+$b;
          $a = $b;
          $b = $z;


            echo "<table style='display: inline;'><td style='padding: 5px 10px;border: 1px solid green'>$z</td></table>";
      }
    }
    hisob($_GET['one'],$_GET['two'],$_GET['three']);
}
?>
</body>
