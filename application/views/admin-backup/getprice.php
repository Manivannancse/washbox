   <style>
    .well{
        box-shadow:none;
    }

   </style>
   
    <div class="widget">
        <div class="widget-header bg-blue">
            <span class="widget-caption">Price</span>
        </div>
        <div class="widget-body">
            <div class="well ">
                
                <table id="dataRespTable" class="table table-hover table-bordered" >
                    <thead class="bordered-blue">
                        <tr>
                            <th><h4><b>Price</b></h4></th>
                            <th><h4><b>Start</b></h4></th>
                            <th><h4><b>Kg</b></h4></th>
                            

                            <th><h4><b>Action</b></h4></th>

                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row)
						{
					    ?>
			    <tr class="">
				<td><?php echo $row['cost_price'];?></td>					    
				<td><?php echo $row['cost_start'];?></td>
                                <td><?php echo $row['kg'];?></td>

                          <td><button onclick="editAdminUser(<?php echo $row['id']; ?>)"  data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i>Edit</button>
                          <button onclick="delFrom(<?php echo $row['id']; ?>)" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
               </table>
            </div>
        </div>
    </div>
<script>
 $(document).ready(function() {
  $("#dataRespTable").DataTable();
 });
</script>
