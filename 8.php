<?php
$arr = [
    ['username'=>'张三','sex'=>'男','age'=>27],
    ['username'=>'张四','sex'=>'男','age'=>23],
    ['username'=>'张五','sex'=>'男','age'=>34],
    ['username'=>'张六','sex'=>'男','age'=>453],

];

var_dump($arr);


 ?>

  <table border="1">
     <caption>成绩表</caption>
        <?php foreach ($arr as $key => $value) { ?>
         <tr >
                <?php $name1 = substr($value['username'],0,3);?>
                <?php $name2 = substr($value['username'],3,3);?>
             <th><a style="color: red"><?php echo "$name1";?></a><?php echo"$name2";?></th>
             <th  ><p><?php echo $value['sex'];?></p></th>
             <th  ><p><?php echo $value['age'];?></p></th>
            <th><a>删除</a></th>
         </tr>
         <?php }  ?>
 </table>