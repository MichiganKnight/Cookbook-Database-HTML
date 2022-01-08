<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Search Recipes</title>
        <link rel="stylesheet" href="search.css">
        <link rel="icon" href="../../../favicon.ico">
    </head>

    <body id="mainBody">
        <h1 id="searchRecipes">Search Recipes</h1>
        <?php
            $searchString = $_POST['searchInput'];
            $db = new PDO('sqlite:..\..\RecipeDatabase.db');
            $saladArray = $db->prepare("SELECT Salad FROM SaladTable WHERE Salad LIKE '%$searchString%' ORDER BY Salad ASC");
            $soupArray = $db->prepare("SELECT Soup FROM SoupTable WHERE Soup LIKE '%$searchString%' ORDER BY Soup ASC");
            $appetizerArray = $db->prepare("SELECT Appetizer FROM AppetizerTable WHERE Appetizer LIKE '%$searchString%' ORDER BY Appetizer ASC");
            $meatArray = $db->prepare("SELECT Meat FROM MeatTable WHERE Meat LIKE '%$searchString%' ORDER BY Meat ASC");
            $poultryArray = $db->prepare("SELECT Poultry FROM PoultryTable WHERE Poultry LIKE '%$searchString%' ORDER BY Poultry ASC");
            $seafoodArray = $db->prepare("SELECT Seafood FROM SeafoodTable WHERE Seafood LIKE '%$searchString%' ORDER BY Seafood ASC");
            $vegetableArray = $db->prepare("SELECT Vegetable FROM VegetableTable WHERE Vegetable LIKE '%$searchString%' ORDER BY Vegetable ASC");
            $sideArray = $db->prepare("SELECT Side FROM SideTable WHERE Side LIKE '%$searchString%' ORDER BY Side ASC");
            $dessertArray = $db->prepare("SELECT Dessert FROM DessertTable WHERE Dessert LIKE '%$searchString%' ORDER BY Dessert ASC");
            $breakfastArray = $db->prepare("SELECT Breakfast FROM BreakfastTable WHERE Breakfast LIKE '%$searchString%' ORDER BY Breakfast ASC");
            $miscArray = $db->prepare("SELECT Misc FROM MiscTable WHERE Misc LIKE '%$searchString%' ORDER BY Misc ASC");
            $saladArray->execute();
            $soupArray->execute();
            $appetizerArray->execute();
            $meatArray->execute();
            $poultryArray->execute();
            $seafoodArray->execute();
            $vegetableArray->execute();
            $sideArray->execute();
            $dessertArray->execute();
            $breakfastArray->execute();
            $miscArray->execute();
            $saladRow = $saladArray->fetchAll(PDO::FETCH_ASSOC);
            $soupRow = $soupArray->fetchAll(PDO::FETCH_ASSOC);
            $appetizerRow = $appetizerArray->fetchAll(PDO::FETCH_ASSOC);
            $meatRow = $meatArray->fetchAll(PDO::FETCH_ASSOC);
            $poultryRow = $poultryArray->fetchAll(PDO::FETCH_ASSOC);
            $seafoodRow = $seafoodArray->fetchAll(PDO::FETCH_ASSOC);
            $vegetableRow = $vegetableArray->fetchAll(PDO::FETCH_ASSOC);
            $sideRow = $sideArray->fetchAll(PDO::FETCH_ASSOC);
            $dessertRow = $dessertArray->fetchAll(PDO::FETCH_ASSOC);
            $breakfastRow = $breakfastArray->fetchAll(PDO::FETCH_ASSOC);
            $miscRow = $miscArray->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="btn-group" id="btn-group">
            <?php foreach($saladRow as $saladKey=>$saladValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnSalad$saladKey>$saladValue[Salad]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($soupRow as $soupKey=>$soupValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnSoup$soupKey>$soupValue[Soup]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($appetizerRow as $appetizerKey=>$appetizerValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnAppetizer$appetizerKey>$appetizerValue[Appetizer]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($meatRow as $meatKey=>$meatValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnMeat$meatKey>$meatValue[Meat]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($poultryRow as $poultryKey=>$poultryValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnPoultry$poultryKey>$poultryValue[Poultry]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($seafoodRow as $seafoodKey=>$seafoodValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnSeafood$seafoodKey>$seafoodValue[Seafood]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($vegetableRow as $vegetableKey=>$vegetableValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnVegetable$vegetableKey>$vegetableValue[Vegetable]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($sideRow as $sideKey=>$sideValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnSide$sideKey>$sideValue[Side]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($dessertRow as $dessertKey=>$dessertValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnDessert$dessertKey>$dessertValue[Dessert]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($breakfastRow as $breakfastKey=>$breakfastValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnBreakfast$breakfastKey>$breakfastValue[Breakfast]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
            <?php foreach($miscRow as $miscKey=>$miscValue): ?>
                <tr>
                    <?php
                        echo "<tr><td><button class=searchRecipes id=btnMisc$miscKey>$miscValue[Misc]</button></td></tr>";                  
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="nav-buttons">
            <button class="btnGoBack" id="btnGoBack">Go Back</button>
        </div>
    <script type="text/javascript" src="search.js"></script>
</body>

</html>