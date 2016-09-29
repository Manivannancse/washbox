<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add News</h5></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 hide"  id="addItem">
        <div class="widget">

            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-check"></i>
                <span class="widget-caption">Add An NEWS</span>
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
                    <form role="form" ng-submit="getnewfrom()" >
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Type</label>
                            <input type="text" placeholder="newstype" id="" ng-model="newtype" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Description</label>
                           <input type="text" placeholder="newsdec" id="" ng-model="newdec" class="form-control">
                           
                        </div>
			<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Image  </label>
                           <input type="file" id=""  placeholder='Image' accept="image/*" ng-model="image" class="form-control">
                           
                        </div>
			<div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">NewsINSIDE</label>
                                        <input type="file" id=""  placeholder='Image' accept="image/*" ng-model="imagein" class="form-control">
                                         
                                    </div>
			<div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">CONTENTDEC</label>
                                        <input type="text" placeholder="100Price" id="type"  class="form-control" value="">
                                         
                                    </div>
			<div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">SUBTITLE</label>
                                        <input type="text" placeholder="100Price" id="type"  class="form-control" value="">
                                         
                                    </div>

			
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
    <div class="col-lg-12 col-sm-12 col-xs-12" id="newdisplay" >
    </div>


</div>

</div>

   <div class="modal fade bs-example-modal-sm" id="itemEditModel"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Item</h4>
                </div>
                <div class="modal-body">
                         
                          <div class="widget-body">
                            <div id="fromUpdate">
                                <form role="form" >
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">News Type</label>
                                        <input type="text" placeholder="100Price" id="type"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">News Desc</label>
                                        <input type="text" placeholder="100start" id="dec"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group ">
                                    <label for="exampleInputEmail1">NewsImage  </label>
                                    <input type="file" id="image" name="image" placeholder='Image' accept="image/*"  class="form-control" value="">
                           
			            </div>
				     <div class="form-group">
                                        <label for="exampleInputEmail1">NewsINSIDE</label>
                                        <input type="file" id="image" name="imagein" placeholder='Image' accept="image/*"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group">
                                        <label for="exampleInputEmail1">CONTENTDEC</label>
                                        <input type="text" placeholder="100Price" id="condec"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group">
                                        <label for="exampleInputEmail1">SUBTITLE</label>
                                        <input type="text" placeholder="100Price" id="subtitle"  class="form-control" value="">
                                         
                                    </div>
                                     
                                     
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
    function  getnewlist(){
        $.ajax({
            url: "<?php echo site_url('WashControl/getnew');?>",
            type: "post",
            success:function(result){
                $("#newdisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.newtype="";
        getnewlist();

        $scope.getnewfrom = function ()
        {
	//alert();
            var newtype=$scope.newtype;
            var newdec=$scope.newdec;
	    var image=$scope.image;
	    var imagein=$scope.imagein;
            var condec=$scope.condec;
	    var subtitle=$scope.subtitle;
           
             $.ajax({
                url: "<?php echo site_url();?>WashControl/addnew",
                type: "post",
                data:{newtype:newtype,newdec:newdec,image:image,imagein:imagein,condec:condec,subtitle:subtitle},
                success:function(result){
                        getnewlist();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
	
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editnew",
            type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result)
      {
	
	$("#id").val(result[0].id);
       $("#newtype").val(result[0].Faq_title);
       $("#newdec").val(result[0].Faq_description);
       $("#image").val(result[0].Faq_description);
       
       
       
      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var newtype=$("#newtype").val();
   var newdec=$("#newdec").val();
   var image=$("#image").val();
  
  
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updatenew",  
    data: {id:id,newtype:newtype,newdec:newdec,image:image,imagein:imagein,condec:condec,subtitle:subtitle},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getnewlist();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deletenew",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    getnewlist();
    }
    });
  }

  
  
</script>

