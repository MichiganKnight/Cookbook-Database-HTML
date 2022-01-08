var saladForm = document.getElementById("saladForm");
var soupForm = document.getElementById("soupForm");
var appetizerForm = document.getElementById("appetizerForm");
var meatForm = document.getElementById("meatForm");
var poultryForm = document.getElementById("poultryForm");
var seafoodForm = document.getElementById("seafoodForm");
var vegetableForm = document.getElementById("vegetableForm");
var sideForm = document.getElementById("sideForm");
var dessertForm = document.getElementById("dessertForm");
var breakfastForm = document.getElementById("breakfastForm");
var miscForm = document.getElementById("miscForm");

$(function() {
    $('#saladForm').change(function() {
        saladForm.submit();
    });
});

$(function() {
    $('#soupForm').change(function() {
        soupForm.submit();
    });
});

$(function() {
    $('#appetizerForm').change(function() {
        appetizerForm.submit();
    });
});

$(function() {
    $('#meatForm').change(function() {
        meatForm.submit();
    });
});

$(function() {
    $('#poultryForm').change(function() {
        poultryForm.submit();
    });
});

$(function() {
    $('#seafoodForm').change(function() {
        seafoodForm.submit();
    });
});

$(function() {
    $('#vegetableForm').change(function() {
        vegetableForm.submit();
    });
});

$(function() {
    $('#sideForm').change(function() {
        sideForm.submit();
    });
});

$(function() {
    $('#dessertForm').change(function() {
        dessertForm.submit();
    });
});

$(function() {
    $('#breakfastForm').change(function() {
        breakfastForm.submit();
    });
});

$(function() {
    $('#miscForm').change(function() {
        miscForm.submit();
    });
});

$(function() {
    $('#removeSaladForm').change(function() {
        removeSaladForm.submit();
    });
});

document.getElementById("btnSalads").onclick = function() {
    window.location = "recipes/salads/salads.php";
}

document.getElementById("btnSoups").onclick = function() {
    window.location = "recipes/soups/soups.php";
}

document.getElementById("btnAppetizers").onclick = function() {
    window.location = "recipes/appetizers/appetizers.php";
}

document.getElementById("btnMeatCourses").onclick = function() {
    window.location = "recipes/meat/meat.php";
}

document.getElementById("btnPoultryCourses").onclick = function() {
    window.location = "recipes/poultry/poultry.php";
}

document.getElementById("btnSeafoodCourses").onclick = function() {
    window.location = "recipes/seafood/seafood.php";
}

document.getElementById("btnVegetables").onclick = function() {
    window.location = "recipes/vegetables/vegetables.php";
}

document.getElementById("btnSides").onclick = function() {
    window.location = "recipes/sides/sides.php";
}

document.getElementById("btnDesserts").onclick = function() {
    window.location = "recipes/desserts/desserts.php";
}

document.getElementById("btnBreakfast").onclick = function() {
    window.location = "recipes/breakfast/breakfast.php";
}

document.getElementById("btnMisc").onclick = function() {
    window.location = "recipes/misc/misc.php";
}