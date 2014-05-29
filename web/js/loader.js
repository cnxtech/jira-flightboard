function load(dataEndpoint, templateName, interval) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + templateName + ".mst";

    $.get(templatePath, function (templateContent) {
        setInterval(
            function () {
                $("#content").load(dataEndpoint, function (response) {
                    var data = JSON.parse(response);
                    var content = Mustache.render(templateContent, data);
                    $(this).html(content);
                });
            },
            interval
        );
    });
}
