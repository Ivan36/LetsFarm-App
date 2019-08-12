<title>Farmers registered in the system</title>
<?php include "menu.php" ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <!-- <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css"> 
    <script src="vendor/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> --> 

    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- <script src="js/jquery.dataTables.min.js"></script> -->
  <script src="js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <script src="js/bootstrap-datepicker.js"></script>
  <link type="text/css" href="vendor/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/datatable/css/buttons.dataTables.min.css">
  <!-- <script type="text/javascript" src="vendor/datatable/js/jquery-3.3.1.js"></script> -->
  <script type="text/javascript" src="vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/buttons.colVis.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/jszip.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/pdfmake.min.js"></script>
  <script type="text/javascript" src="vendor/datatable/js/vfs_fonts.js"></script>
  <style>
  <title>System users</title>
  <style>
  .m_buttons{
    float:right;
    margin-left:20px;
    padding:10px 20px;
  }
</style>

</head>
<script>
        $(document).ready(function ()
        {
            $('#tbl-contact thead th').each(function () {
                var title = $(this).text();
                $(this).html(title+' <input type="text" class="col-search-input" placeholder="Search ' + title + '" />');
            });
            
            var table = $('#tbl-contact').DataTable({
                  "scrollX": true,
                "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "pageLength": 5,
     lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
     dom: 'Bfrtip',
     buttons: [
     {
      extend: 'copyHtml5',
      footer: true,
      exportOptions: {
        columns: [ 0, ':visible' ]
      }
    },
    {
      extend: 'excelHtml5',
      footer: true,
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'pdfHtml5',
      footer: true,
      exportOptions: {
        columns: [ 0, ':visible' ]
      }
    },
    { extend: 'print',
    footer: true,
    exportOptions: {
      columns: ':visible'
    }
  },
  'colvis'
  ],
                "ajax": "farmerserver.php",
                order: [[2, 'asc']],
                columnDefs: [{
                    targets: "_all",
                    orderable: false
                 }]
            });

            table.columns().every(function () {
                var table = this;
                $('input', this.header()).on('keyup change', function () {
                    if (table.search() !== this.value) {
                         table.search(this.value).draw();
                    }
                });
            });
        });

    </script>
<script type="text/javascript">
  $(document).ready(function () {

    $("#btn-view").hide();

    $("#btn-add").click(function () {
      $(".content-loader").fadeOut('slow', function ()
      {
        $(".content-loader").fadeIn('slow');
        $(".content-loader").load('Add-farmer.php');
        $("#btn-add").hide();
        $("#btn-view").show();
      });
    });

    $("#btn-view").click(function () {

      $("body").fadeOut('slow', function ()
      {
        $("body").load('view-farmer.php');
        $("body").fadeIn('slow');
        window.location.href = "view-farmer.php";
      });
    });

  });
</script>

</head>
<div class="content" >
 <br>
 <!-- <a href="dashboard.php"><button type="button" class="btn btn-success">Notifications</button></a> -->
 <div class="row">

   <div class="b-container">
 <!--  <div class="jumbotron bg-success">
    <p style="color: #00cc99;"><strong> Realise the fastest communication With Westtalk </strong></p>
     <p style="margin-left: 5%;font-family: Georgia, Times New Roman, serif;"> <strong>SEND SMS REQUEST TO ANY ONLINE SURVEYOR FOR YOUR LAND DETAILS</strong> </p>
   </div> -->

   <div class="row" style="margin-left:; margin-top: 5%;">
    <div class="b-container">

      <div class="datatable-container">
        <h2>CURRENT FARMERS REGISTERED IN THE SYSTEM</h2>
        <table name="tbl-contact" id="tbl-contact" class="display" cellspacing="0" width="100%">   

            <thead>
                <tr>
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th>Email address</th>

                </tr>
            </thead>
            
        </table>
    </div>
    </div>
   
  </div>
</div>
</div>
</div>
