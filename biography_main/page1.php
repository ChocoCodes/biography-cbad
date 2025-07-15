<?php 
    $Title = "Home";
    $Firstname = "John Roland"; 
    $Lastname = "Octavio";
    $Birthmonth = "June";
    $Birthdate = 17;
    $Birthyear = 2004;
    $ZodiacSign = "Gemini";
    $Status = "Secret";
    $Headers = ["Home" => "page1.php", "Hobbies" => "page2.php", "Projects" => "page3.php"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | <?php echo $Title; ?></title>
</head>
<body>
    <?php 
        foreach($Headers as $Header => $Link) {
            echo "<a href=\"$Link\" alt=\"$Header\">{$Header}</a>\n";
        }
    ?>
    <h1><?php echo "$Firstname $Lastname"?></h1>
    <img src="https://avatars.githubusercontent.com/u/121501140?v=4" alt="Image of Jhong" />
    <h2>Third Year Computer Science Student <br/> University of St. La Salle - Bacolod</h2>
    <blockquote>
        <strong>
            "Bigay mo sakin saber tol papatayin ko si wise level 4. Gusto ko lang sabihin na hindi madali yung ginagawa namin dito sa Showtime. Sorry direk sorry... Sample! Sample!"
        </strong> <br/> - Anonymous
    </blockquote>
    <h1>Personal Information</h1>
    <p>Nickname: Jhong</p>
    <p>Birthdate: <?php echo "$Birthdate $Birthmonth $Birthyear"; ?></p>
    <p>Zodiac Sign: <?php echo $ZodiacSign; ?></p>
    <p>Civil Status: <?php echo $Status; ?></p>
</body>
</html>