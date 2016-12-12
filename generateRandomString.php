<?php

function RandomString($length) {
    $key = '';
    $keys = array_merge(range(0,9), range('a', 'z'));
    for($i=0; $i < $length; $i++) {
        $key = $key.$keys[array_rand($keys)];
    }
    return $key;
}

echo RandomString(10);

?>
