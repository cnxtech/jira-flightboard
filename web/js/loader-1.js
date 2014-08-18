function load(type, interval, page) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + type + ".mst";
    var page = typeof(page) ==='undefined' ? 0 : page;

    $.get(templatePath, function (templateContent) {
        updateTemplate(type, templateContent, page);
        setInterval(
            function() {
                updateTemplate(type, templateContent, page);
            },
            interval
        );
    });
}

function updateTemplate(type, templateContent, page) {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

    $("#content").load("./api/" + type + ".php?page=" + page, function (response) {
        var data = JSON.parse(response);
        var content = Mustache.render(templateContent, data);
        $(this).html(content);
    });
    window.scroll(0, top);
}
