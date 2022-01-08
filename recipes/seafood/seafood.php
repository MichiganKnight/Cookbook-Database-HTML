<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Seafood Recipes</title>
        <link rel="stylesheet" href="seafood.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="seafoodRecipes">Seafood Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Seafood FROM SeafoodTable ORDER BY Seafood ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=seafoodButtons id=btnSeafood$key>$value[Seafood]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="seafood.js"></script>
    </body>

</html>