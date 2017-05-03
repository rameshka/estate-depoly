$(document).ready(function() {


    $('#data-table-row-grouping').DataTable();

    $('#data-table-row-grouping_length').hide();

});

    // Order by the grouping
 /*   $('#data-table-row-grouping tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );


    });*/