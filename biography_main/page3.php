<?php 
    $Title = "Projects";
    $Headers = ["Home" => "page1.php", "Hobbies" => "page2.php", "Projects" => "page3.php"];
    $PageDescription = "This page showcases various projects I’ve worked on, including hardware automation, community-centered web applications, and mathematical tools that demonstrates practical implementations of both software and embedded systems."
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | <?php echo $Title; ?></title>
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
    <div>
        <img src="https://i.imgur.com/r91Jw3m.jpeg" alt="Image of the Irrigation System" width="500">
        <h1>Smartphone-Controlled Arduino-Based Irrigation System using HC05 Bluetooth Module</h1>
        <p>This study aims to address the lack of monitoring of the farmers with water irrigation systems in their fields, resulting in poor soil quality that affects the production and quality of crop yields. Specifically, this study aims to construct a model of an automated irrigation system controlled by an interactive smartphone application with the help of Arduino programming to manipulate the water flow, rate, and timing of water application to align with soil absorption and water-holding capabilities.</p>
        <a href="https://github.com/ChocoCodes/automated-irrigation-system/blob/main/README.md" target="_blank">View Project</a>
    </div>
    <br/>
    <div>
        <img src="https://i.imgur.com/cutX5vI.png" alt="Image of Bantala" width="500">
        <h1>Bantala: Community Disaster Preparedness Web Application | APAC Solution Challenge 2025</h1>
        <p>Bantala is a disaster-preparedness web app focused exclusively on communities near Mt. Kanlaon, one of the most active volcanoes in the Philippines. It empowers communities through Interactive Evacuation Mapping, RAG-Assisted Chatbot, Community-Driven Emergency Bulletins.</p>
        <a href="https://youtu.be/EcPemPmNJa8" target="_blank">View Project</a>
    </div>
    <br/>
    <div>
        <img src="https://camo.githubusercontent.com/96a4c55884b2f339904d1d432110a71a2c25efe1e6132a155cacf6e3773644ab/68747470733a2f2f692e696d6775722e636f6d2f5534476461356b2e706e67" alt="Image of MatrixLab" width="500">
        <h1>MatrixLab: Matrix Calculator</h1>
        <p>MatrixLab is a simple matrix calculator that performs arithmetic operations such as matrix addition, subtraction, multiplication, and transposition. Developed as a requirement for the course Discrete Structures.</p>
        <a href="https://matrix-lab-sigma.vercel.app/" target="_blank">View Project</a>
    </div>
</body>
</html>