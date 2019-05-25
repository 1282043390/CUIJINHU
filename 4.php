<?php
$arr = [
    ['张三','男',23],
    ['张三','男',23],
    ['张三','男',23],
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