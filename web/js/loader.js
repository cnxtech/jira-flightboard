function load(type, interval) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + type + ".mst";

    $.get(templatePath, function (templateContent) {
        updateTemplate(type);
        setInterval(
            function() {
                updateTemplate(type, templateContent);
            },
            interval
        );
    });
}

function updateTemplate(type, templateContent) {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    $("#content").load("./api/" + type + ".php", function (response) {
        var data = JSON.parse(response);
        var content = Mustache.render(templateContent, data);
        $(this).html(content);
    });
    window.scroll(0, top);
}
