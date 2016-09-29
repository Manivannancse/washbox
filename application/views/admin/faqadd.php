<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add FAQ</h5></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 hide"  id="addItem">
        <div class="widget">

            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-check"></i>
                <span class="widget-caption">Add An Faq</span>
                <div class="widget-buttons">
                    <a data-toggle="config" href="#">
                        <i class="fa fa-cog"></i>
                    </a>
                    <a data-toggle="maximize" href="#">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a data-toggle="collapse" href="#">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a onclick="$('#addItem').addClass('hide');$('#row-title').removeClass('hide');" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div><!--Widget Buttons-->
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" ng-submit="getfaqfrom()" >
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" placeholder="Title" id="" ng-model="faqt" class="form-control">
				
                        </div>
			<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Sub Title</label>
                            <input type="text" placeholder="Sub Title" id="" ng-model="faqs" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1"> Description </label>
                           <input type="text" placeholder="Description" id="" ng-model="faqd" class="form-control">
                           
                        </div>
			<!--<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">FAQ DESC </label>
                           <input type="text" placeholder="faqdesc" id="" ng-model="faqdd" class="form-control">
                           
                        </div>-->
			
                        </div>
                </div>
                        <div class="row">
                        <div class="form-group col-md-3">
                        <div class="checkbox"  style="padding-top: 15px;">
                          <button type="submit" class="btn btn-blue">Submit</button>
                        </div>
                        </div>
                        </div>
                    
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12" id="Faqdisplay" >
    </div>


</div>

</div>

   <div class="modal fade bs-example-modal-sm" id="itemEditModel"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Edit FAQ</h4>
                </div>
                <div class="modal-body">
                         
                          <div class="widget-body">
                            <div id="fromUpdate">
                                <form role="form" >
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" placeholder="faqtitle" id="faqt"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Title</label>
                                        <input type="text" placeholder="subtitle" id="faqs"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" placeholder="faqdec" id="faqd"  class="form-control" value="">
                                         
                                    </div>
				     <!--<div class="form-group">
                                        <label for="exampleInputEmail1">FAQ DESC</label>
                                        <input type="text" placeholder="faqdec2" id="faqdd"  class="form-control" value="">
                                         
                                    </div>-->
                                     
                                     
                                      <input type="hidden" name="id" id="id"/>
                                      <a  onclick="updateForm()" class="btn btn-blue" >Submit</a>
                                        
                                </form>
                                
                                
                              </div>
                </div>
                                      
                </div>
            </div>
        </div>
    </div>
 
<script>
    function  getfaqlist(){
        $.ajax({
            url: "<?php echo site_url('WashControl/getfaq');?>",
            type: "post",
            success:function(result){
                $("#Faqdisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.faqt="";
        getfaqlist();

        $scope.getfaqfrom = function ()
        {
	//alert();
            var faqt=$scope.faqt;
            var faqd=$scope.faqd;
	    var faqs=$scope.faqs;
	    var faqdd=$scope.faqdd;
           
             $.ajax({
                url: "<?php echo site_url();?>WashControl/addfaq",
                type: "post",
                data:{faqt:faqt,faqd:faqd,faqs:faqs,faqdd:faqdd},
                success:function(result){
                        getfaqlist();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
	
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editfaq",
      type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result)
      {
	
	$("#id").val(result[0].id);
       $("#faqt").val(result[0].title_id);
       $("#faqs").val(result[0].faq_Subtitle);
       $("#faqd").val(result[0].faq_description);
        $("#faqdd").val(result[0].faq_description2);
       
       
      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var faqt=$("#faqt").val();
   var faqs=$("#faqs").val();
   var faqd=$("#faqd").val();
   var faqdd=$("#faqdd").val();
  
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updatefaq",  
    data: {id:id,faqt:faqt,faqd:faqd,faqs:faqs,faqdd:faqdd},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getfaqlist();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deletefaq",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    getfaqlist();
    }
    });
  }

  
  
</script>

