var buttons = document.getElementsByClassName("searchRecipes");
for (var i = 0; i < buttons.length; i++) {
    var buttonId = buttons[i].id;
    document.getElementById(buttonId).addEventListener('click', (event) => {
        var text = document.getElementById(event.target.id).textContent;
        document.title = text;
        var searchId = document.getElementById(event.target.id);
        if (searchId.id.includes("Salads")) {
            var saladImage = "../salads/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + saladImage + "')";
        } else if (searchId.id.includes("Soup")) {
            var soupImage = "../soups/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + soupImage + "')";
        } else if (searchId.id.includes("Appetizer")) {
            var appetizerImage = "../appetizers/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + appetizerImage + "')";
        } else if (searchId.id.includes("Meat")) {
            var meatImage = "../meat/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + meatImage + "')";
        } else if (searchId.id.includes("Poultry")) {
            var poultryImage = "../poultry/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + poultryImage + "')";
        } else if (searchId.id.includes("Seafood")) {
            var seafoodImage = "../seafood/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + seafoodImage + "')";
        } else if (searchId.id.includes("Vegetable")) {
            var vegetableImage = "../vegetables/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + vegetableImage + "')";
        } else if (searchId.id.includes("Side")) {
            var sideImage = "../sides/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + sideImage + "')";
        } else if (searchId.id.includes("Dessert")) {
            var dessertImage = "../desserts/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + dessertImage + "')";
        } else if (searchId.id.includes("Breakfast")) {
            var breakfastImage = "../breakfast/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + breakfastImage + "')";
        } else if (searchId.id.includes("Misc")) {
            var miscImage = "../misc/images/" + text.replace(" " + '\'') + ".jpg";
            document.body.style.background = "url('" + miscImage + "')";
        }  
        document.body.style.backgroundRepeat = "no-repeat";
        document.body.style.backgroundPosition = "center";
        document.body.style.backgroundSize = "contain";
        document.body.style.backgroundAttachment = "fixed";
        document.getElementById("searchRecipes").style.display = "none";
        var table = document.getElementById("btn-group");
        if (window.getComputedStyle(table).display == "table") {
            table.style.display = "none";
        }
    })
}

document.getElementById('btnGoBack').onclick = function () {
    if (document.body.style.background == "") {
        window.location.href = "../../index.html";
    } else {
        document.title = "Search Recipes";
        document.body.style.background = "";
        document.getElementById("searchRecipes").style.display = "block";
        var table = document.getElementById("btn-group");
        if (window.getComputedStyle(table).display == "none") {
            table.style.display = "table";
        }
    }
};