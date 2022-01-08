<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Vegetable Recipes</title>
        <link rel="stylesheet" href="vegetables.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="vegetableRecipes">Vegetable Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Vegetable FROM VegetableTable ORDER BY Vegetable ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=vegetableButtons id=btnVegetable$key>$value[Vegetable]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="vegetables.js"></script>
    </body>

</html>