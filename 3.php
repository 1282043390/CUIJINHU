<?php
$arr = [
    [90,91,92],
    [93,94,95],
    [96,97,98],
];

var_dump($arr);


 ?>

 <table border="1">
     <caption>成绩表</caption>
        <?php foreach ($arr as $key => $value) { ?>
         <tr>
            <?php foreach ($value as $k => $v) { ?>
             <th><?php echo $v; ?></th>
            <?php }  ?>
         </tr>
         <?php }  ?>
 </table>