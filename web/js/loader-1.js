function load(type, interval, page, numEntries) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + type + ".mst";
    var page = typeof(page) ==='undefined' ? 0 : page;
    var numEntries = typeof(numEntries) ==='undefined' ? null : numEntries;

    $.get(templatePath, function (templateContent) {
        updateTemplate(type, templateContent, page, numEntries);
        setInterval(
            function() {
                updateTemplate(type, templateContent, page, numEntries);
            },
            interval
        );
    });
}

function updateTemplate(type, templateContent, page, numEntries) {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    var numEntries = numEntries == null ? "" : "&numEntries=" + numEntries;

    $("#content").load("./api/" + type + ".php?page=" + page + numEntries, function (response) {
        var data = JSON.parse(response);
        var content = Mustache.render(templateContent, data);
        $(this).html(content);
    });
    window.scroll(0, top);
}
