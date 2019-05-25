<?php
function i($a){
    echo --$a.'<br>';
    if ($a>=0) {

        i($a);
        echo --$a.'啦'.'<br>';

    }

}

i(3);


 ?>






