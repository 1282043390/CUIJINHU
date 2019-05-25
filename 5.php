<?php
$arr = [
    ['张三','男',23],
    ['张三','男',23],
    ['张三','男',23],
    ['张三','男',23],
];

var_dump($arr);


 ?>

 <table border="1" >
     <caption>成绩表</caption>
        <?php foreach ($arr as $key => $value) { ?>
         <tr >
                <?php var_dump($value) ?>
            <?php foreach ($value as $k => $v) { ?>
             <th  <?php if ($key== 1 || $key==3) {
                 echo "bgcolor='red'";
             }else{
                 echo "bgcolor='blue'";
             }?> ><?php echo $v; ?></th>
            <?php }  ?>
              <th  <?php if ($key== 1 || $key==3) {
                 echo "bgcolor='red'";
             }else{
                 echo "bgcolor='blue'";
             }?> ><a>删除</a></th>

         </tr>
         <?php }  ?>
 </table>