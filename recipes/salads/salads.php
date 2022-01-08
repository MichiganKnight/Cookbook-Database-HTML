<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Salad Recipes</title>
        <link rel="stylesheet" href="salads.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="saladRecipes">Salad Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Salad FROM SaladTable ORDER BY Salad ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=saladButtons id=btnSalad$key>$value[Salad]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="salads.js"></script>
    </body>

</html>