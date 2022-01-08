<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Misc. Recipes</title>
        <link rel="stylesheet" href="misc.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="miscRecipes">Misc. Recipes</h1>
        <?php
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $array = $db->prepare("SELECT Misc FROM MiscTable ORDER BY Misc ASC");
            $array->execute();
            $row = $array->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($row as $key=>$value): ?>
                <tr>
                    <?php
                        echo "<td><button class=miscButtons id=btnMisc$key>$value[Misc]</button></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>  
        <script type="text/javascript" src="misc.js"></script>
    </body>

</html>