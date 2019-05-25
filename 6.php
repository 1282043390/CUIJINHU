<?php
$arr = [
    ['username'=>'张三','sex'=>'男','age'=>27],
    ['username'=>'张三','sex'=>'男','age'=>23],
    ['username'=>'张三','sex'=>'男','age'=>34],
    ['username'=>'张三','sex'=>'男','age'=>453],

];

var_dump($arr);


 ?>

  <table border="1">
     <caption>表</caption>
        <?php foreach ($arr as $key => $value) { ?>
         <tr>
                <?php $value['age'] = 23 ;?>
            <?php foreach ($value as $k => $v) { ?>
             <th><?php echo $v; ?></th>
            <?php }  ?>
            <th><a>删除</a></th>
         </tr>
         <?php }  ?>
 </table>