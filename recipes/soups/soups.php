<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Soup Recipes</title>
        <link rel="stylesheet" href="soups.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="soupRecipes">Soup Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Soup FROM SoupTable ORDER BY Soup ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=soupButtons id=btnSoup$key>$value[Soup]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="soups.js"></script>
    </body>

</html>