<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Breakfast Recipes</title>
        <link rel="stylesheet" href="breakfast.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="breakfastRecipes">Breakfast Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Breakfast FROM BreakfastTable ORDER BY Breakfast ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=breakfastButtons id=btnBreakfast$key>$value[Breakfast]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="breakfast.js"></script>
    </body>

</html>