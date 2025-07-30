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
    $Learning = "Full Stack Development";
    $PageDescription = "This page contains my basic personal information, including my name, birthday, and other introductory details about me.";
    $FavoriteMovie = "The Dictator";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | <?php echo $Title; ?></title>
    <script> 
        const hideImage = () => document.getElementById('myImage').style.display = 'none'
        const showImage = () => document.getElementById('myImage').style.display = 'inline'
        const replaceText = () => {
            const text = document.getElementById('welcome-guest');
            const name = document.getElementById('guest').value;
            text.innerHTML = `Hi ${name}!`;
        }
    </script>
</head>
<body>
    <header>
        <?php 
            echo "<h1>{$Title} Page</h1>";
            echo "<p>{$PageDescription}</p>";
            foreach($Headers as $Header => $Link) {
                echo "<a href=\"$Link\" alt=\"$Header\">{$Header}</a>\n";
            }
        ?>
    </header>
    </br><input type="text" id="guest"/>
    <button onclick="replaceText()">Submit</button>
    <h1 id="welcome-guest">Hi Guest!</h1>
    <h1><?php echo "I'm $Firstname $Lastname "; ?></h1>
    <img src="https://avatars.githubusercontent.com/u/121501140?v=4" alt="Image of Jhong" width="200" id="myImage"/>
    <p id="date"></p>
    <blockquote>
        <strong>
            "Bigay mo sakin saber tol papatayin ko si wise level 4. Gusto ko lang sabihin na hindi madali yung ginagawa namin dito sa Showtime. Sorry direk sorry... Sample! Sample!"
        </strong> <br/> - Anonymous
    </blockquote>
    <button onclick="hideImage()">HIDE</button>
    <button onclick="showImage()">SHOW</button>
    <h2>Third Year Computer Science Student <br/> University of St. La Salle - Bacolod</h2>
    <h3>Currently Learning: <?php echo $Learning; ?></h3>
    <h3>Current Stack: React/NextJS, TypeScript, Firebase</h3>

    <h1>Personal Information</h1>
    <p>Nickname: Jhong</p>
    <p>Birthdate: <?php echo "$Birthdate $Birthmonth $Birthyear"; ?></p>
    <p>Zodiac Sign: <?php echo $ZodiacSign; ?></p>
    <p>Relationship Status: <?php echo $Status; ?></p>
    <p>Favorite Movie: <?php echo $FavoriteMovie; ?></p>

    <script src="datetime.js"></script>
</body>
</html>