

<style>

.tablegrid
{
  box-shadow: 0 0 10px -2px grey;
  padding: 3% 25px;
  background: white;
}
#order_grid{
  padding-top: 2%;
}
tbody {
  box-shadow: 0 6px 15px -5px grey;
}
</style>
<section id="content"   style="background: #F2F2F2;">
  <div class="container tabpad" >
   <div class="tablegrid">
		<table id="order_grid" class="table table-hover dt-responsive dataTable no-footer dtr-inline" width="100%" cellspacing="0" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
            <tr style="background:#1EA5FE;box-shadow:0 3px 2px 1px #2480ca inset;color:#fff">
                <th>Pick Up Date</th>
                <th>Pick Up Time</th>
		<th>Delivery Date</th>
                <th>Delivery Time</th>
		<th>Delivery Notes</th>
		<th>Clean Type</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Pick Up Date</th>
                <th>Pick Up Time</th>
		<th>Delivery Date</th>
                <th>Delivery Time</th>
		<th>Delivery Notes</th>
		<th>Clean Type</th>
                
            </tr>
        </tfoot>
    </table>
   </div>
    </div>
</section>

<script type="text/javascript">
$( document ).ready(function() {
$('#order_grid').DataTable({
	"bProcessing": true,
         "serverSide": true,
	  "responsive": true,
         "ajax":{
            url :'<?php echo base_url() ?>WashBox/orderdetails', // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
            error: function(){
              $("#employee_grid_processing").css("display","none");
            }
          }
        });   
});
</script>
