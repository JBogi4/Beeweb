<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beeweb</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="beeweb.css" />
</head>
<body>
    <div class="wrapper">       
        <h1>Welcome on BeeWeb!</h1>
        <h4>Here you can play simple games with bee theme.</h4>
        <p>Here are our games:</p>
        <a href="hangman.html"><img id="hangman" src="hangman.png"></a> <a href="index.html"><img id="memory" src="memory.png"></a>
        <a href="https://github.com/JBogi4/Beeweb"><button>GitHub</button></a>

        <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
        
    </div>
    
</body>
</html>