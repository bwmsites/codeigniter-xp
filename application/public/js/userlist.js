/*
function UserList() {
    this.init = function () {
        this.$dtable = new BeedooDatatable('#table', '/users/get', {});
        this.$dtable.init();
        console.log(this.$dtable);
    }
}

userList = new UserList();

$(document).ready(function () {
    //$.fn.dataTable.moment( 'DD/MM/YYYY' );
    userList.init();
});
*/


$(document).ready(function() {
    $.fn.dataTable.moment( 'DD/MM/YYYY' );

    $("#table").DataTable({
      ajax: {
        type: "POST",
        url: "http://localhost:8090/users/get/"
      },
      /*"date-br-pre": function ( a ) {
        if (a == null || a == "") {
         return 0;
        }
        var brDatea = a.split('/');
        return (brDatea[2] + brDatea[1] + brDatea[0]) * 1;
       },
       "date-br-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
       },
       "date-br-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
       }, */       
        processing: true,
        serverSide: true,
        filter: false,
        sort: true,
        columns: [
            { data: "id"},
            { data: "fullname"},
            { data: "treated_datetime"},
        ],
        columnDefs: [
          //{ type: 'date-br', targets: 3 }
        ]
      });
    } );


    $('#tab-notas-fiscais').DataTable({
      responsive: true,
      "date-br-pre": function ( a ) {
          if (a == null || a == "") {
           return 0;
          }
          var brDatea = a.split('/');
          return (brDatea[2] + brDatea[1] + brDatea[0]) * 1;
         },
         "date-br-asc": function ( a, b ) {
          return ((a < b) ? -1 : ((a > b) ? 1 : 0));
         },
         "date-br-desc": function ( a, b ) {
          return ((a < b) ? 1 : ((a > b) ? -1 : 0));
         },
          columnDefs: [
           { type: 'date-br', targets: 1 }
         ],      
  });    
