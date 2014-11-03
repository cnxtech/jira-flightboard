function load(type, interval, start, end) {
    var templateType = $(window).width() < 500 ? "mobile" : "wall";
    var templatePath = "./web/templates/" + templateType + "/" + type + ".mst";
    var start = typeof(start) ==='undefined' ? 0 : start;
    var end = typeof(end) ==='undefined' ? null : end;

    $.get(templatePath, function (templateContent) {
        updateTemplate(type, templateContent, start, end);
        setInterval(
            function() {
                updateTemplate(type, templateContent, start, end);
            },
            interval
        );
    });
}

function updateTemplate(type, templateContent, start, end) {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    var end = end == null ? "" : "&end=" + end;

    $("#content").load("./api/" + type + "?start=" + start + end, function (response) {
        var data = JSON.parse(response);
        var content = Mustache.render(templateContent, data);
        $(this).html(content);
    });
    window.scroll(0, top);
}

 window.setInterval(function() {
    $.ajax({
        url: "/nagios/service/jira-dashboard/epics",
        success: function() { location.reload(); },
        error: function() { $(".alert").show(); }
    });
}, 30000000);
