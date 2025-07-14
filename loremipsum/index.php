<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>About Me</title>
    <?php 
        $Firstname = "John Roland";
        $Lastname = "Octavio";
        $Birthmonth = "June";
        $Birthdate = 17;
        $Birthyear = 2004;
    ?>
</head>
<body>
    <h1>ABOUT ME PAGE</h1>
    <h2>This page is all about me</h2>
    <?php 
        echo "Hi I'm: $Firstname $Lastname <br/>";
        echo "I was born in $Birthmonth $Birthdate, $Birthyear <br/>";
    ?>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdgVBsGH456HK8ahK9UhS7e4ndjHC06HyNh8FOWMuhB5OOwyM6VgCCTKaHBuvdu8pCz84&usqp=CAU" alt="Its Showtime" />
    <p>Bigay mo sakin saber tol papatayin ko si wise level 4. Gusto ko lang sabihin na hindi madali yung ginagawa namin dito sa Showtime. Sorry direk sorry... Sample! Sample!</p>
    <p class="hobby">My Hobbies:</p>
    <ul>
        <li><a href="../biography_octavio/lego.php" target="_blank">Building Lego</a></li>
        <li><a href="https://github.com/ChocoCodes" target="_blank">Coding</a></li>
        <li><a href="../biography_octavio/basketball.php" target="_blank">Basketball</a></li>
        <li>Gaming</li>
        <li>Muay Thai</li>
    </ul>
</body>
</html>