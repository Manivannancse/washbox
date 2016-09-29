   <style>
    .well{
        box-shadow:none;
    }

   </style>
   
    <div class="widget">
        <div class="widget-header bg-blue">
	    <span class="widget-caption">Slider Content</span>
        </div>
        <div class="widget-body">
            <div class="well ">
                
                <table id="dataRespTable" class="table table-hover table-bordered" >
                    <thead class="bordered-blue">
                        <tr>
                               <th><b>First Line</b></th>
			       <th><b>Second Line</b></th>
                               <th><b>Button Text</b></th>
			       <th><b>Font Style</b></th>
			       <th><b>Font Color</b></th>
                               <th><b>Font Size</b></th>
			      <th><b>Action</b></th>

                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row){?>
			    <tr class="" style="font-size: 14px">
				<td><?php echo $row['banner_text'];?></td>
				<td><?php echo $row['banner_text2'];?></td>
				<td><?php echo $row['banner_btn'];?></td>
				<td><?php echo $row['TextFont'];?></td>
				<td><?php echo $row['Color'];?></td>
				<td><?php echo $row['size'];?></td>
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
