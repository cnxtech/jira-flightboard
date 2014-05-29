function load(type, interval) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + type + ".mst";

    $.get(templatePath, function (templateContent) {
        setInterval(
            function () {
                $("#content").load("./api/" + type + ".php", function (response) {
                    var data = JSON.parse(response);
                    var content = Mustache.render(templateContent, data);
                    $(this).html(content);
                });
            },
            interval
        );
    });
}
