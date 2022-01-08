<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Meat Recipes</title>
        <link rel="stylesheet" href="meat.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="meatRecipes">Meat Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Meat FROM MeatTable ORDER BY Meat ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=meatButtons id=btnMeat$key>$value[Meat]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="meat.js"></script>
    </body>

</html>