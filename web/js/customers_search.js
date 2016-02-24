$(document).ready(function() {

    $( "#customers_search" ).click(function() {

        keyword = $( "#keyword").val();

        $.get( "index.php/api/index?s=", { s: keyword } )

            .done(function( data ) {

                data = jQuery.parseJSON(data);

                // Delete old results
                $("#results tr").remove();

                // Put new
                for (var i = 0; i < data.length; i++) {

                    var row = $("<tr />")
                    $("#results").append(row);
                    row.append($("<td>" + data[i].CustomerId + "</td>"));
                    row.append($("<td>" + data[i].FirstName + "</td>"));
                    row.append($("<td>" + data[i].LastName + "</td>"));
                }
            });
    });

    $('.form-inline').submit(function() {
        $( "#customers_search" ).trigger( "click" );
        return false;
    });
});