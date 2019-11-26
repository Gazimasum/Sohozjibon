 <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>


  <script type="text/javascript">
  $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#myTable tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
      } );

    // DataTable
    var table = $('#myTable').dataTable( {
  "columnDefs": [{
     "targets": 4,
      "orderable": false,
    }]
});

// Apply the search
 table.columns().every( function () {
     var that = this;

     $( 'input', this.footer() ).on( 'keyup change clear', function () {
         if ( that.search() !== this.value ) {
             that
                 .search( this.value )
                 .draw();
         }
     } );
 } );
} );
  </script>

<script type="text/javascript">

// function for get student name
    function getstudent() {

        jQuery.ajax({
        url: "get_student.php",
        data:'studentid='+$("#studentid").val(),
        type: "POST",
        success:function(data){
        $("#get_student_name").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
        });
    }

//function for book details
function getbook() {

jQuery.ajax({
url: "get_book.php",
data:'bookid='+$("#bookid").val(),
type: "POST",
success:function(data){
$("#get_book_name").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

</script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>

<script>
$(document).ready( function () {
    $('#mytable').DataTable();
} );
</script>

<script>

  $("#studentid").change(function(){
      var studentid = $("#studentid").val();
      // Send an ajax request to server with this studentid
      $("#get_student_name").html("");
      var option = "Not Match";
      var url = "{{ url('/') }}";
      $.get( url+"/get_student/"+studentid, function( data ) {

          data = JSON.parse(data);
          data.forEach( function(element) {
            option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
          });

        $("#get_student_name").html(option);

      });
  })

</script>
<script>

  $("#bookid").change(function(){
      var bookid = $("#bookid").val();
      // Send an ajax request to server with this bookid
      $("#get_book_name").html("");
      var option = "";
      var url = "{{ url('/') }}";
      $.get( url+"/get_book/"+bookid, function( data ) {

          data = JSON.parse(data);
          // option ="  <span  style='font-size:16px;'>"+data.name+"</span>"
          data.forEach( function(element) {
            option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
          });

        $("#get_book_name").html(option);

      });
  })

</script>
