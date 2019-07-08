var header = document.getElementById("sidebar-services");
var contents = header.getElementsByClassName("content-side");
for (var i = 0; i < contents.length; i++) {
    contents[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[1].className = current[1].className.replace(" active", "");
        this.className += " active";
    });
}
