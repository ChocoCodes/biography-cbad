<?php 
    $Title = "Hobbies";
    $ListItems = ["Building Legos", "Basketball", "Coding", "Muay Thai", "Gaming"];
    $Headers = ["Home" => "page1.php", "Hobbies" => "page2.php", "Projects" => "page3.php"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | <?php echo $Title; ?></title>
</head>
<body>
    <?php 
        foreach($Headers as $Header => $Link) {
            echo "<a href=\"$Link\" alt=\"$Header\">{$Header}</a>\n";
        }
    ?>
    <h1>My Hobbies:</h1>
    <ul>
        <?php 
            foreach($ListItems as $Item) {
                echo "<li>{$Item}</li>";
            }
        ?>
    </ul>
    <div>
        <h1><?php echo $ListItems[0]; ?></h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ElzgBBrC4pU7v1_peDQUQvOVv0QyVHQ_Rw&s" alt="Porsche 911 Targa" />
        <p>Spent over 5000 PHP in buying lego replica sets online. </p>
    </div>
    <div>
        <h1><?php echo $ListItems[1]; ?></h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu5e1ZH95RDYHa1kybOkutwzg8X2n3MRybVg&s" alt="Kai Sotto" />
        <p>Played under the UNO-R Rams basketball team for Aspriants and Juniors Category (2017-2023).</p>
    </div>
    <div>
        <h1><?php echo $ListItems[2]; ?></h1>
        <img src="https://avatars.githubusercontent.com/u/121501140?v=4" alt="Image of CTO" />
        <p>Served as the Chief Technology Officer of Google Developer Groups on Campus - USLS A.Y 24-25</p>
    </div>
    <div>
        <h1><?php echo $ListItems[3]; ?></h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkofoCJKJxCY1bBqPSmGwRzLW8jiPPfAHmUQ&s" alt="Muay Thai Martial Arts" />
        <p>Trained Muay Thai for 1 month as leisure and physical activity. </p>
    </div>
    <div>
        <h1><?php echo $ListItems[4]; ?></h1>
        <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Minecraft_2024_cover_art.png" alt="Minecraft" />
        <p>Often plays video game as a fun way to relax, challenge myself, and connect with friends online.</p>
    </div>
</body>
</html>