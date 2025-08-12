<header class="container-fluid mx-5">
    <?php 
        echo "<h1>{$Title} Page</h1>";
        echo "<p>{$PageDescription}</p>";
        foreach($Headers as $Header => $Link) {
            echo "<a href=\"$Link\" alt=\"$Header\">{$Header}</a>\n";
        }
    ?>
</header>