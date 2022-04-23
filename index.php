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
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <h3>Please complete this COVID survey so we can register you.</h3>

    <div>
        <form action="confirm.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your first name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Your last name">

            <label for="vax">Are you vaccinated?</label>
            <input type="radio" id="vax" name="vax" value="Yes">Yes
            <input type="radio" id="vax" name="vax" value="No">No

            <input type="submit" value="Submit">

        </form>
    </div>
</body>
</html>