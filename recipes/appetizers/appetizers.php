<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Appetizer Recipes</title>
        <link rel="stylesheet" href="appetizers.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="appetizerRecipes">Appetizer Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Appetizer FROM AppetizerTable ORDER BY Appetizer ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=appetizerButtons id=btnAppetizer$key>$value[Appetizer]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="appetizers.js"></script>
    </body>

</html>