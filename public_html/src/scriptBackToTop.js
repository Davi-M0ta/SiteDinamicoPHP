window.onscroll = function() {
    scroll();
}

function scroll() {
    var btn = document.getElementById("btnTop");
    if (document.documentElement.scrollTop > 60) {
        btn.style.display = display = "block";
    } else {
        btn.style.display = display = "none";
    }
}

function backToTop() {
    document.documentElement.scrollTop = 0;
}