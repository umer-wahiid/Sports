$(document).ready(function () {
    $("#FeedButton").click(function () {
        $("#FeedContainer").fadeToggle(100,);
    });
});



$(document).ready(function () {
    $("#AdsDivRemove").click(function () {
        $(".adver").hide(1500,);
    });
});



$(document).ready(function () {
    $("#feedremove").click(function () {
        $("#FeedContainer").fadeOut(500,);
    });
});



function myFunction(x) {
    if (x.matches) {
        $(document).ready(function () {
            $("#demo").hide();
        });
    } else {
        $(document).ready(function () {
            $("#demo").show();
    });
    }
}



var x = window.matchMedia("(max-width: 500px)")
myFunction(x)

$(document).ready(function () {
    $(".bar-button").click(function () {
        $("#demo").fadeToggle(500,);
    });
});


function cartvalue() {
    document.getElementById("increase").innerHTML++;
}
function heartvalue() {
    document.querySelector('#heart-button').style.color = 'red';
    document.getElementById("increaselist").innerHTML++;
}