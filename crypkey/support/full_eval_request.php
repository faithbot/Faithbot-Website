<?php
function Redirect($url, $permanent = true)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('http://www.crypkey.com/request-instant.php', false);

?>