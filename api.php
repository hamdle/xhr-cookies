<?php
if (array_key_exists('abc', $_COOKIE)) {
    error_log($_COOKIE['abc']);
    http_response_code('200');
    echo 'received.';
    exit();
}

error_log('NO COOKIE');
http_response_code('422');
echo 'failed.';

?>
