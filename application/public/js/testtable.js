$(function() {
    $("#table").DataTable({
        "columns": [
            null,
            null,
            { 
              "type": "date-eu"
            },
        ],
      });
    } );