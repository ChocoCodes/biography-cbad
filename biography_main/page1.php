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
    <title>About Me | <?=$Title; ?></title>
    <script defer src="datetime.js"></script>
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
    <?php include('layout-header.php') ?>
    <table class="container-fluid">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthday</th>
                <th>Zodiac Sign</th>
                <th>Currently Learning</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$Firstname;?></td>
                <td><?=$Lastname;?></td>
                <td><?="$Birthdate $Birthmonth $Birthyear";?></td>
                <td><?=$ZodiacSign;?></td>
                <td><?=$Learning;?></td>
            </tr>
        </tbody>
    </table>
    </br><input type="text" id="guest"/>
    <button onclick="replaceText()">Submit</button>
    <h1 id="welcome-guest">Hi Guest!</h1>
    <h1><?="I'm $Firstname $Lastname "; ?></h1>
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
    <h3>Currently Learning: <?=$Learning; ?></h3>
    <h3>Current Stack: React/NextJS, TypeScript, Firebase</h3>

    <!--
        <h1>Personal Information</h1>
        <p>Nickname: Jhong</p>
        <p>Birthdate: </p>
        <p>Zodiac Sign: <?=$ZodiacSign; ?></p>
        <p>Relationship Status: <?=$Status; ?></p>
        <p>Favorite Movie: <?=$FavoriteMovie; ?></p>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>