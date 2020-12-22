<?php

session_start();

unset($_SESSION['Cart'][1]);

session_unset();
session_destroy();

?>