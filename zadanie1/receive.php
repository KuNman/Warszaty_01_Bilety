<html>
    <body>
        <p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo 'Twoje imię to : ' . $_POST['name'];
            }            
            ?>
        </p>
    </body>
</html> 
