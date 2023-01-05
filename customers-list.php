<!DOCTYPE html>
<html lang="en">

<?php
require_once('api/config.php');

$servername = DBHOST;
$username = DBUSER;
$password = DBPWD;
$dbname = DBNAME;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
global $conn;

include('includes/functions_inc.php');
require_once('includes/header_inc.php');

$toDay = date('j');
$toMonth = date('m');
$toYear = date('Y');
$toYearOLD = date('Y')-1;
?>
      <div class="content">
        
        
        
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Customer's List </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="orders_table">
                    <thead class="">
                      <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>RegisterDate</th>
                        
                        <!-- <th class="text-center">Payment Method</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                      
                      //$sql1 = "SELECT * FROM `orders` WHERE YEAR(`added_date`) = $toYear  AND `amount` !=0.00 AND `amount` >0.00 ORDER BY id DESC";
                      $sql1 = "SELECT * FROM `users` ORDER BY id desc";
                      $result1 = $conn->query($sql1);
                      $row1 = $result1->fetch_array(MYSQLI_ASSOC);
                      
                      while($row1 = mysqli_fetch_array($result1)) {
                        
                        echo '<tr>';
                        
                        echo '<td>';
                        echo $row1['first_name'];
                        echo '</td>';

                        echo '<td>';
                        echo $row1['last_name'];
                        echo '</td>';

                        echo '<td>';
                        echo $row1['email'];
                        echo '</td>';

                        echo '<td>';
                        echo $row1['phone_no'];
                        echo '</td>';

                        echo '<td>';
                        $mndate=date_create($row1['added_date']);
                        echo date_format($mndate,'d-M-y, h:i A');
                        echo '</td>';

                        //echo '<td>';
                        
                        //echo '<a id="cust-invoice" class="btn btn-success btn-sm" title="View Invoice">'.$row1['invoice_number'].'</a>';
                        //echo '<a class="btn btn-success btn-sm" href="http://localhost/logonew/receipt.php?rp_no='.str_replace(' ', '', $row1['invoice_number']).'" target="_blank" title="View Invoice" style="width:150px;">'.$row1['invoice_number'].'</a>';
                        //echo $row1['invoice_number'];
                        //echo '</td>';

                        // echo '<td>';
                        // echo '<span style="font-size:14px !important;color:green;text-shadow: 1px 1px #f1f1f1;">$ '.$row1['amount'].'</span>';
                        // echo '</td>';

                        // echo '<td class="text-center">';
                        // echo $row1['payment'];
                        // echo '</td>';

                        echo '</tr>';
                      }
                      
                      
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </div>



<?php
require_once('includes/footer_inc.php');
?>
<script>
    $(document).ready(function () {
     
      

        //console.log(window.cid);
    $('#orders_table').DataTable({
    "autoWidth": true,
    "bSort": false,
    //"destroy": true,
    "responsive": true,
    "pagingType": "full_numbers",
    // "pagingType": "full_numbers",
    "bLengthChange": false,
    "pageLength": 15,
    // "dom": '<"pull-left"tf><"pull-right"ti><"pull-right"l>tp',
    "bInfo": true,
    "searching": true,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    "lengthMenu": true,
    dom: 'Bfrtip',
        buttons: [
          { extend: 'copy', className: 'red' },
          { extend: 'csv', className: 'red' },
          { extend: 'excel', className: 'red' },
          //  'copy', 'csv', 'excel',
            {
                extend: 'pdfHtml5',
                className: 'red',
                orientation: 'landscape',
                pageSize: 'A4'
            },
            { extend: 'print', className: 'red' }
            //'print'
        ]
    
    //"ajax": "includes/action.php?users_list=1",
    
    });
    $.fn.dataTable.ext.errMode = function (settings, helpPage, message) {
    };

    $('#clicking').click(function (){
      if ($('#clicking')) {
        $('#hidden').slideToggle();
      }else{
        $('#hidden').slideToggle();
      }
      });

      $('.one_sub_clicking').click(function (e){
      if ($(this)) {
        e.stopPropagation();
        $('.one_sub_menu_hidden').slideToggle()
      }else{
        $('.one_sub_menu_hidden').slideToggle();
      }
      });

      $('.scd_sub_clicking').click(function (e){
      if ($(this)) {
        e.stopPropagation();
        $('.scd_sub_menu_hidden').slideToggle()
      }else{
        $('.scd_sub_menu_hidden').slideToggle();
      }
      });

      $('.thrd_sub_clicking').click(function (e){
      if ($(this)) {
        e.stopPropagation();
        $('.thrd_sub_menu_hidden').slideToggle()
      }else{
        $('.thrd_sub_menu_hidden').slideToggle();
      }
      });
 
    });
</script>