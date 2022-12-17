<?php
session_start();
session_destroy();
setcookie(
    "tioanimes_user_cookie",
    "",
    -1,
    "/"
);
header('Location: index.php');
exit;
