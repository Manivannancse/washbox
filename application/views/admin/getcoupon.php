       <style>
    .well{
        box-shadow:none;
    }
   </style>
   
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">Offers</span>
        </div>
        <div class="widget-body">
            <div class="well ">
                
                <table id="dataRespTable" class="table table-hover table-bordered" >
                    <thead class="bordered-darkorange">
                     <tr>
                         <th><h3>Offer</h3></th>
                         <th><h3>Valid Upto</h3></th>
                         <th><h3>Action</h3> </th>
                     </tr>
                    </thead>
                    <tbody>
                        <?php foreach($admin as $row){?>
                       <tr class="">
                          
                          <td><?php echo $row['offer']; ?></td>					    
                          <td><?php echo $row['valid_upto']; ?></td>
                          <td><button onclick="editAdminUser(<?php echo $row['coupen_id']; ?>)"  data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i>Edit</button>
                          <button onclick="delFrom(<?php echo $row['coupen_id']; ?>)" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
               </table>
            </div>
        </div>
    </div>
   <div class="modal fade bs-example-modal-sm" id="adminEditModel"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                </div>
                <div class="modal-body">
                         
                          <div class="widget-body">
                            <div id="fromUpdate">
                                <form role="form" >
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Offer Code</label>
                                        <textarea placeholder="Enter Offer Code" id="Offer_Code"  rows="6" class="form-control"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Offer Descritpion</label>
                                        <textarea placeholder="Enter Offer Descritpion" id="Name"  rows="6" class="form-control"></textarea>
                                    </div>
                                     <div class="form-group">
                                      <label for="exampleInputPassword1">Valid Upto</label>
                                      <div class="input-group">
                                          <input type="text" data-date-format="yyyy-mm-dd"id="Password"   class="form-control date-picker">
                                          <span class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                          </span>
                                      </div>
                                        
                                   </div>
                                       <div class="form-group">
                                        <div class="form-group">
                                          <input type="hidden" name="id" id="id"/>
                                        </div>
                                       </div>
                                      <a  onclick="updateForm()" class="btn btn-blue" >Submit</a>
                                        
                                </form>
                                
                                
                              </div>
                </div>
                </div>
            </div>
        </div>
    </div>
 <script>
 $(document).ready(function() {
  $("#dataRespTable").DataTable();
  
 });
 $(function () {
  $("#Password").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })/*.datepicker('update', new Date());;*/
});
</script>
