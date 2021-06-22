
<?php
$array = array(
    array('ismi'=>'Abror','familiya'=> 'Aliyev' , 'yoshi'=>19,'jinsi'=>'erkak'),
    array('ismi'=>'Lola','familiya'=>'Rizayeva','yoshi'=>15,'jinsi'=>'ayol'),
    array('ismi'=>'Bobur','familiya'=>'Bekjonov','yoshi'=>17,'jinsi'=>'erkak'),
    array('ismi'=>'Nozima','familiya'=>'Abdullayeva','yoshi'=>20,'jinsi'=>'ayol'),
)

?>

<table border="1px" width="500px" height="200px" style="text-align: center;border-color: green;border-radius: 15px;margin: auto">
    <?php
    foreach ($array as $item){?>
    <tr style="background-color: aqua;">
        <?php  foreach ($item as $item2): ?>
        <td style="border-radius: 10px;font-size: 20px;font-weight: 900"><?php echo $item2;?></td>
        <?php endforeach; ?>
    </tr>
    <?php } ?>


</table>
