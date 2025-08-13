<div class="container">
    <h1>Basic Information</h1>
    <table class="table container-fluid my-2">
        <thead>
            <tr>
                <!-- Access the TABLE_HEADERS array defined in page1.php -->
                <?php 
                    foreach($TABLE_HEADERS as $header) {
                        echo "<th>{$header}</th>";
                    }
                ?>
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
</div>