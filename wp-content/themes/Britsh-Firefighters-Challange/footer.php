<!-- CSS -->
<script type="text/javascript">
var loadCSSFiles = function() {
    var links = ["//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css", "//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css"],
        headElement = document.getElementsByTagName("head")[0],
        linkElement, i;
    for (i = 0; i < links.length; i++) {
        linkElement = document.createElement("link");
        linkElement.rel = "stylesheet";
        linkElement.href = links[i];
        headElement.appendChild(linkElement);
    }
};

var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) {
    raf(loadCSSFiles);
} else {
    window.addEventListener("load", loadCSSFiles);
}
</script>
<!-- /CSS -->
</body></html>