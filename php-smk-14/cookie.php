<?php 

    $cookie_name = 'user';
    $cookie_value = 'joni';

    setcook($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_value];

?>