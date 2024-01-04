<?php

session_start();

session_destroy();

header("Location: Beeweb.php");
exit;