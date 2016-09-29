<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add Testimonals Iteam</h5></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 hide"  id="addItem">
        <div class="widget">

            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-check"></i>
                <span class="widget-caption">Testimonial</span>
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
                    <form role="form" ng-submit="gettestfrom()" >
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Testimonial TITLE</label>
                            <input type="text" placeholder="title" id="" ng-model="title" class="form-control">
				
                        </div>
			<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Testimonial SUBTITLE</label>
                            <input type="text" placeholder="Subtitle" id="" ng-model="notes" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">TestimonialImage</label>
                           <input type="file" placeholder="image" id="" ng-model="image" class="form-control">
                           
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
    <div class="col-lg-12 col-sm-12 col-xs-12" id="Faqdisplay" >
    </div>


</div>

</div>

   <div class="modal fade bs-example-modal-sm" id="itemEditModel"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Edit Item</h4>
                </div>
                <div class="modal-body">
                         
                          <div class="widget-body">
                            <div id="fromUpdate">
                                <form role="form" >
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Testimonial TITLE</label>
                                        <input type="text" placeholder="title" id="title"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group">
                                        <label for="exampleInputEmail1">Testimonial SUBTITLE</label>
                                        <input type="text" placeholder="Suvtitle" id="notes"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Testimonialimage</label>
                                        <input type="file" placeholder="image" id="image"  class="form-control" value="">
                                         
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
    function  gettestimonlist(){
        $.ajax({
            url: "<?php echo site_url('WashControl/getTestimonial');?>",
            type: "post",
            success:function(result){
                $("#Faqdisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.title="";
        gettestimonlist();

        $scope.gettestfrom = function ()
        {
	//alert();
            var title=$scope.title;
            var notes=$scope.notes;
	    var image=$scope.image;
           
             $.ajax({
                url: "<?php echo site_url();?>WashControl/Testimonialadd",
                type: "post",
                data:{title:title,notes:notes,image:image},
                success:function(result){
                        gettestimonlist();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
	
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editTestimonial",
      type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result)
      {
	
	$("#id").val(result[0].id);
       $("#title").val(result[0].title);
       $("#notes").val(result[0].notes);
       $("#image").val(result[0].image);
       
       
      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var title=$("#title").val();
   var notes=$("#notes").val();
   var image=$("#image").val();
  
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updateTestimonial",  
    data: {id:id,title:title,notes:notes,image:image},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        gettestimonlist();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deleteTestimonial",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    gettestimonlist();
    }
    });
  }

  
  
</script>
