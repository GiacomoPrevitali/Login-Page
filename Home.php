<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<body>
    <h1>Bella fra</h1>
    <form action="index.php" method="post">
    <button type="submit">Logout</button>
</form> 
    <?php
        require('functions.php');
        read();
    ?>
</body>
</html>