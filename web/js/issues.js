$().ready(function () {
    pullIssues();

    window.setInterval(
        function(){
            pullIssues()
        },
        5000
    );
});

function pullIssues() {
    var mobileView = $(window).width() < 500;
    $.ajax(rootPoint + "/issues.js?mobile=" + mobileView)
        .done(function(response) {
            $("#error").hide();
            $("#issues-placeholder").html(response);
        })
        .fail(function() {
            $("#error").show();
        });
}
