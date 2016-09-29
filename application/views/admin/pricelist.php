<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add Price</h5></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 hide"  id="addItem">
        <div class="widget">

            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-check"></i>
                <span class="widget-caption">Add An Price</span>
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
                    <form role="form" ng-submit="getpriceform()" >
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" placeholder="Price" id="price" ng-model="price" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Starting Price </label>
                           <input type="text" placeholder="Starting Price" id="start" ng-model="start" class="form-control">
                           
                        </div>
			<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">kg</label>
                            <input type="text" placeholder="Kg" id="" ng-model="kg" class="form-control">
				
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
    <div class="col-lg-12 col-sm-12 col-xs-12" id="pricedisplay" >
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
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="text" placeholder="100Price" id="PriceAmout"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Starting Price</label>
                                        <input type="text" placeholder="100start" id="StartAmout"  class="form-control" value="">
                                         
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Kg</label>
                                        <input type="text" placeholder="15/2kg" id="kgAmount"  class="form-control" value="">
                                         
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
    function  getpricelist(){
        $.ajax({
            url: "<?php echo site_url('WashControl/getprice');?>",
            type: "post",
            success:function(result){
                $("#pricedisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.price="";
        getpricelist();

        $scope.getpriceform = function ()
        {
	//alert();
            var price=$scope.price;
            var start=$scope.start;
            var kg=$scope.kg;
             $.ajax({
                url: "<?php echo site_url();?>WashControl/addprice",
                type: "post",
                data:{price:price,start:start,kg:kg},
                success:function(result){
                        getpricelist();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
	
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editprice",
            type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result) {
	$("#id").val(result[0].id);
       $("#PriceAmout").val(result[0].cost_price);
       $("#StartAmout").val(result[0].cost_start);
       $("#kgAmount").val(result[0].kg);
       
      }
     });
    }
  function updateForm(id){
   var id=$("#id").val();
   var price=$("#PriceAmout").val();
   var start=$("#StartAmout").val();
   var kg=$("#kgAmount").val();
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updateprice",  
    data: {id:id,price:price,start:start,kg:kg},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getpricelist();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deleteprice",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    getpricelist();
    }
    });
  }

  
  
</script>

