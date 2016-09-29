   <style>
    .well{
        box-shadow:none;
    }

   </style>
   
    <div class="widget">
        <div class="widget-header bg-blue">
	    <span class="widget-caption">FAQ</span>
        </div>
        <div class="widget-body">
            <div class="well ">
                
                <table id="dataRespTable" class="table table-hover table-bordered" >
                    <thead class="bordered-blue">
                        <tr>
                            <th><b>Title</b></th>
                            <th><b>Sub Title</b></th>
			    <th><b>Description</b></th>
                            <th><b>Action</b></th>
			</tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row)
						{
			   $subtitle=$this->wash_model->getfaqlist($row['id']);		
					    ?>
			    <tr class="" style="font-size: 14px">
			        <td><?php echo $row['faq_title'];?></td>
				<td><?php echo $subtitle[0]['faq_Subtitle'];?></td>
				<td><?php echo $subtitle[0]['faq_description'];?><?php echo $subtitle[0]['faq_description2'];?></td>
				<!--<td><?php echo $subtitle[0]['faq_description2'];?></td>-->
                                

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
