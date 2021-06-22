<?php

const db_server='localhost';
const db_username='root';
const db_password ='';
const db_name='learn';

$connect = mysqli_connect(db_server,db_username,db_password,db_name);
$sql = "SELECT * FROM talabalar";
$result = mysqli_query($connect,$sql);
echo "<body style='background-color: #360166'>";
echo "<table border=1 width=300 style='margin: auto;background-color: white;margin-top: 30px;font-weight: 900;text-align: center'>";
echo "<h1 style='text-align: center;color: goldenrod'>".'Malumotlar bazasiga xush kelibsiz!'."</h1>";
while($a=mysqli_fetch_assoc($result)){
    echo "<tr>";
       echo "<td style='padding: 10px 15px;font-size: 18px'>".$a['name']."</td>";
       echo "<td style='padding: 10px 15px;font-size: 18px'>".$a['surname']."</td>";
    echo "<td style='padding: 10px 15px;font-size: 18px'>".$a['age']."</td>";
    echo "<td style='padding: 10px 15px;font-size: 18px'>".$a['birthday']."</td>";
echo "</tr>";
}
echo "</table>";
echo "</body>";

?>
