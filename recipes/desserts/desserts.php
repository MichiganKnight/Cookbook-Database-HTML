<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dessert Recipes</title>
        <link rel="stylesheet" href="desserts.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="dessertRecipes">Dessert Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Dessert FROM DessertTable ORDER BY Dessert ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=dessertButtons id=btnDessert$key>$value[Dessert]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="desserts.js"></script>
    </body>

</html>