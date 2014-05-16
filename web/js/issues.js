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
    $.ajax(rootPoint + "/issues")
        .done(function(response) {
            $("#error").hide();
            $("#issues-placeholder").html(response);
        })
        .fail(function() {
            $("#error").show();
        });
}
