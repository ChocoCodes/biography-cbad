<div class="container">
    <header class="container-fluid mx-3 my-4">
    <?php 
        echo "<h1>{$Title} Page</h1>";
        echo "<p>{$PageDescription}</p>";
        // Align the links at the center
        echo "<div class='d-flex gap-3 justify-content-center'>";
            foreach($Headers as $Header => $Link) {
                echo "<a class='fs-4' href=\"$Link\" alt=\"$Header\">{$Header}</a>\n";
            }
        echo "</div>";
    ?>
</header>
</div>