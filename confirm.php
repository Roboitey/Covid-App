<!DOCTYPE html>
    <head>
        <title>BDPA DC Covid Survey</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About the DC Team</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <h3>Thank you for completing the survey.</h3>

        <ul style="background-color: white;">
            <li><strong>First Name: &nbsp;</strong><?php echo $_GET["fname"]; ?></li></br>
            <li><strong>Last Name: &nbsp;</strong><?php echo $_GET["lname"]; ?></li></br>
            <li><strong>Vaccination Status: &nbsp;</strong><?php echo $_GET["vax"];?>
        </ul>
    </body>
</html>