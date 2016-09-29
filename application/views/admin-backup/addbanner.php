<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add Faq Iteam</h5></div>
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
                    <form role="form" ng-submit="getbannerfrom()" >
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">BANNER TEXT</label>
                            <input type="text" placeholder="bannerstext" id="" ng-model="bannertext" class="form-control">
				
                        </div><div class="form-group col-md-6">
                            <label for="exampleInputEmail1">BANNER TEXT2</label>
                            <input type="text" placeholder="bannerstextline2" id="" ng-model="bannertext2" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">BANNER BUTTEN TEXT</label>
                           <input type="text" placeholder="bannerbtntext" id="" ng-model="bannerbtn" class="form-control">
                           
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
    <div class="col-lg-12 col-sm-12 col-xs-12" id="bannerdisplay" >
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
                                        <label for="exampleInputEmail1">Banner Text</label>
                                        <input type="text" placeholder="BANNER TEXT" id="bt"  class="form-control" value="">
                                         
                                    </div><div class="form-group">
                                        <label for="exampleInputEmail1">Banner Text2</label>
                                        <input type="text" placeholder="BANNER TEXT2nd" id="btl"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Banner Btn Text</label>
                                        <input type="text" placeholder="BANNER btn" id="bbt"  class="form-control" value="">
                                         
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
    function  getbannerlist(){
        $.ajax({
            url: "<?php echo site_url('WashControl/getbanner');?>",
            type: "post",
            success:function(result){
                $("#bannerdisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.bannertext="";
        getbannerlist();

        $scope.getbannerfrom = function ()
        {
	//alert();
            var bannertext=$scope.bannertext;
	     var bannertext2=$scope.bannertext2;
            var bannerbtn=$scope.bannerbtn;
	    
           
             $.ajax({
                url: "<?php echo site_url();?>WashControl/addbanner",
                type: "post",
                data:{bannertext:bannertext,bannertext2:bannertext2,bannerbtn:bannerbtn},
                success:function(result){
                        getbannerlist();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
	
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editbanner",
            type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result)
      {
	
	$("#id").val(result[0].id);
       $("#bt").val(result[0].banner_text);
        $("#btl").val(result[0].banner_text2);
       $("#bbt").val(result[0].banner_btn);
       
       
       
       
      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var bannertext=$("#bt").val();
   var bannertext2=$("#btl").val();
   var bannerbtn=$("#bbt").val();
  
  
  
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updatebanner",  
    data: {id:id,bannertext:bannertext,bannertext2:bannertext2,bannerbtn:bannerbtn},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getbannerlist();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deletebanner",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    getbannerlist();
    }
    });
  }

  
  
</script>

