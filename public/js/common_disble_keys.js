document.onkeypress = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        return false;
    }
}
document.onmousedown = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
    return false;
    }
}
document.onkeydown = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        return false;
    }
}
document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 80 || e.keyCode === 83 || e.keyCode === 85 || e.keyCode === 117)) {
        return false;
    } else {
        return true;
    }
};
$(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    }
        else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73)) {
        return false;
    }
});
$(document).ready(function() {
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    $("body").on("contextmenu",function(e){
        return false;
    });
});