<?php
if (isset($_GET['name'])) {
    setcookie('name', $_GET['name'], time()+31556926);
}
if (isset($_GET['phone'])) {
    setcookie('phone', $_GET['phone'], time()+31556926);
}
if (isset($_GET['email'])) {
    setcookie('email', $_GET['email'], time()+31556926);
}

wp_redirect( site_url('cart/?add-to-cart=171') );

?>