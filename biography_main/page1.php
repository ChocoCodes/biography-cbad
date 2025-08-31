<?php 
    $Title = "Home";
    $Firstname = "John Roland"; 
    $Lastname = "Octavio";
    $Birthmonth = "June";
    $Birthdate = 17;
    $Birthyear = 2004;
    $ZodiacSign = "Gemini";
    $Status = "Secret";
    $Headers = ["Home" => "page1.php", "Hobbies" => "page2.php", "Projects" => "page3.php"]; // Map each links to their corresponding page files
    $Learning = "Full Stack Development";
    $PageDescription = "This page contains my basic personal information, including my name, birthday, and other introductory details about me.";
    $FavoriteMovie = "The Dictator";
    $TABLE_HEADERS = ["Firstname", "Lastname", "Birthday", "Zodiac Sign", "Learning"]; // Store headers to access later
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | <?=$Title; ?></title>
    <!-- 
    `defer` attribute of a script tells the browser to download the script in parallel while parsing the HTML, 
    but only execute it *after* the HTML has been fully parsed.
    No need to place the scripts before the body closing tag </body>
    -->
    <script defer src="datetime.js"></script>
    <script> 
        const hideImage = () => document.getElementById('myImage').style.display = 'none'
        const showImage = () => document.getElementById('myImage').style.display = 'inline'
        const replaceText = () => {
            const text = document.getElementById('welcome-guest');
            const name = document.getElementById('guest').value;
            if(!name) {
                alert('No name provided!');
                return;
            }
            text.innerHTML = `Hi ${name}!`;
        }
    </script>
    <!-- BOOTSTRAP SETUP (INCLUDE SCRIPT AND LINK) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class='d-flex flex-column gap-4'>
    <!--
        NOTE: Parenthesis can be omitted in PHP new versions (e.g: include 'file.php')
        include('file.php') -- every include statement, the component is added
        include_once('file.php') -- include component only once; remove duplicate
    -->
    <?php include_once 'layout-header.php' ?>
    <div class="container w-25 d-flex flex-column gap-3">
        <div class="container-fluid d-flex flex-column gap-2">
            <label for="guest" class="fw-bold fs-4">Name</label>
            <input type="text" id="guest"/>
            <button onclick="replaceText()">Submit</button>
        </div>
        <div class="container-fluid d-flex flex-column">
            <h1 id="welcome-guest">Hi Guest!</h1>
            <p id="date"></p>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
        <p class="fw-bold fs-2">Code References</p>
        <div class="d-flex gap-2">
            <a href="https://github.com/ChocoCodes/cbad-midterm-portfolio" target="_blank">My Midterm Portfolio</a>
            <a href="https://github.com/ChocoCodes/datetime-float" target="_blank">DateTime and Float Act</a>
            <a href="https://getbootstrap.com/" target="_blank">Bootstrap DOCS</a>
        </div>
    </div>
    <h1 class="text-center"><?="$Firstname $Lastname "; ?></h1>
    <div class="d-flex flex-column justify-items-center align-items-center gap-2">
        <img src="https://avatars.githubusercontent.com/u/121501140?v=4" alt="Image of Jhong" width="200" id="myImage"/>
        <div class="w-25 d-flex gap-2 mx-auto justify-items-center align-items-center">
            <button onclick="hideImage()">HIDE</button>
            <button onclick="showImage()">SHOW</button>
        </div>
    </div>
    <blockquote>
        <strong>
            "Bigay mo sakin saber tol papatayin ko si wise level 4. Gusto ko lang sabihin na hindi madali yung ginagawa namin dito sa Showtime. Sorry direk sorry... Sample! Sample!"
        </strong> <br/> - Anonymous
    </blockquote>
    <h2 class='mx-auto w-50 text-center'>Third Year Computer Science Student <br/> University of St. La Salle - Bacolod</h2>
    <?php include 'about-table.php' ?>
</body>
</html>