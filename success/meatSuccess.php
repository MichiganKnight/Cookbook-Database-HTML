<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookbook Database Confirmation</title>
    <link rel="stylesheet" href="success.css">
    <link rel="icon" href="../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
        $db = new PDO('sqlite:..\RecipeDatabase.db');        
        $recipe = $_FILES['meatInput']['name'];
        $splitRecipe = trim($recipe, ".jpg");
        $recipeInput = $db->prepare("INSERT INTO MeatTable (id, Meat) VALUES (?, ?)");
        $recipeInput->execute(array(null, $splitRecipe));
        echo '<h1>The Recipe: ' . $splitRecipe . ' Has Successfully Been Imported!</h1>';
        if (isset($_FILES['meatInput']) && $_FILES['meatInput']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['meatInput']['tmp_name'];
            $fileName = $_FILES['meatInput']['name'];
            $fileSize = $_FILES['meatInput']['size'];
            $fileType = $_FILES['meatInput']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $allowedfileExtensions = array('jpg');
            if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = '../recipes/meat/images/';
                $dest_path = $uploadFileDir . $fileName;
                move_uploaded_file($fileTmpPath, $dest_path);
            }
        }
    ?>
    <div class="btnBack">
        <button id="goBack">You Can Click This Button To Go Back!</button>
    </div>
    <script type="text/javascript" src="success.js"></script>
</body>

</html>