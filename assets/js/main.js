$(function() {
    $("#systemDateButton").on("click", function(e) {
        e.preventDefault();
        $.ajax({
            url: "/date",
            complete: function(xhr, status) {
                $("#systemDate").html(xhr.responseText)
            }
        })
    })
})