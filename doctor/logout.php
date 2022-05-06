<?php
session_start();
include_once "middlewares/auth.php";
unset($_SESSION['user']);
header('location:login.php');
