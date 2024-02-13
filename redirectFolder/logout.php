<?php
session_start();

session_destroy();

header('Location: /LearningPHPwithMySQL/13_$_Sessions.php');