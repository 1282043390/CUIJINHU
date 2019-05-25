<?php


// $a = '123345';
// $b = stripos($a,'1');
// var_dump($b);
// if ($b) {
//     echo "ok".'<br>';
// }else{
//     echo "no".'<br>';
// }
// $c = stripos($a,'2');
// var_dump($c);
// if ($c) {
//     echo "ok".'<br>';
// }else{
//     echo "no".'<br>';
// }

// 搜索 字符串
// $email = "lastchiliarch@163.com";

// var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
// echo "<br>";

// $email = "asb";
// var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
// echo "<br>";

// $email = "1@a.com";
// var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));

// $time = time();
// $time = date(' H时i分s',$time);
// $a = time()-300;
// $a = date(' H时i分s',$a);
// var_dump($time,$a);
//
//



// $a = 'admin';
// var_dump($a);
// var_dump(md5($a));



// $rest1 = substr('13753854411', -4);
// $rest1 = substr('13753854411', -11,3);
// $rest1 = substr('13753854411', 0,3);
        $rest1 = substr('13753854411', 0,3);
        $rest2 = substr('13753854411', -4);
        $rest3 = $rest1.'****'.$rest2;
var_dump($rest3);

 ?>