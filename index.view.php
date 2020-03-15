<!DOCTYPE html>

<html lang="en">

<head>
</head>
<body>
    <header>
        <h1>   
            <?php 
                echo "$greeting"; 
            ?> 
        </h1>
        <ul>
            <?php
                foreach($names as $name) {
                    echo "<li>$name</li>";
                }

                foreach($person as $key => $feature) {
                    echo "<li></li>";
                }
            ?>
        </ul>
    </header>

</body>


</html>