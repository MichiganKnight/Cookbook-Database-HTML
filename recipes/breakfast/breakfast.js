var buttons = document.getElementsByClassName("breakfastButtons");
for (var i = 0; i < buttons.length; i++) {
    var buttonId = buttons[i].id;
    document.getElementById(buttonId).addEventListener('click', (event) => {
        var text = document.getElementById(event.target.id).textContent;
        document.title = text;
        var image = "images/" + text.replace(" " + '\'') + ".jpg";
        document.body.style.background = "url('" + image + "')";
        document.body.style.backgroundRepeat = "no-repeat";
        document.body.style.backgroundPosition = "center";
        document.body.style.backgroundSize = "contain";
        document.body.style.backgroundAttachment = "fixed";
        document.getElementById("breakfastRecipes").style.display = "none";
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
        document.title = "Breakfast Recipes";
        document.body.style.background = "";
        document.getElementById("breakfastRecipes").style.display = "block";
        var table = document.getElementById("btn-group");
        if (window.getComputedStyle(table).display == "none") {
            table.style.display = "table";
        }
    }
};