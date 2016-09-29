<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<div class="page-body">
<div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-4 col-sm-4 col-xs-12" >
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">Add an Offers</span>
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" ng-submit="adminUserForm()" >
                        <div class="row ">
                        <div class="form-group col-md-12">
                            <label for="Offer">Offer Code</label>
                            <input placeholder="Enter Offer Code" name="offer_code" ng-model="offer_code"  rows="6" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="Offer">Offer Description</label>
                            <textarea placeholder="Enter Offer Description" name="offer_description" ng-model="offer"  rows="6" class="form-control"></textarea>
                        </div>
                        <div class="form-group  col-md-12 ">
                            <label for="valid">Valid Upto</label>

                            <div class="input-group">
                                <input type="text" data-date-format="yyyy-mm-dd" name="validDate" ng-model="validDate"  id="datepicker" class="form-control date-picker">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group  col-md-12">
                           <div class="checkbox"  style="padding-top: 15px;">
                                <center><button type="submit" class="btn btn-blue">Submit</button></center>
                           </div>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-8 col-xs-12" id="adminDisplay" >
        
    </div>
</div>
</div>
<script>
$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  })/*.datepicker('update', new Date());;*/
});


    function  getAdminUser(){
        $.ajax({
            url: "<?php echo site_url();?>WashControl/getcoupon",
            type: "post",
            success:function(result){
                $("#adminDisplay").html(result);
                $("#dataRespTable_filter").find("input").addClass("form-control");
            }
        });
    }
    var App = angular.module('myApp', []);
    function adminController($scope, $http) {
        $scope.role="";
        getAdminUser();

        $scope.adminUserForm = function ()
        {
            var offer_code=$scope.offer_code;
            var offer=$scope.offer;

            var validDate=$("#datepicker").val();
            alert(validDate);
            $.ajax({
                url: "<?php echo site_url();?>WashControl/couponadd",
                type: "post",
                data:{offer:offer,validDate:validDate,offer_code:offer_code},
                success:function(result){
                        getAdminUser();
                    $("#dataRespTable_filter").find("input").addClass("form-control");
                }
            });
        }
    }


    function editAdminUser(id){
     $.ajax({
      url: "<?php echo site_url();?>WashControl/editcoupon",
      type: "post",
      data: {id:id},
      dataType: "json",
      success: function(result) {
        console.log(result);
       $("#id").val(result[0].coupen_id);
       $("#Name").val(result[0].offer);
       $("#Password").val(result[0].valid_upto);
       $("#Offer_Code").val(result[0].offer_code);

      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var name=$("#Name").val();
   var password=$("#Password").val();
   var offer_code=$("#Offer_Code").val();

   var dataString = "&id=" + id  +  "&name=" + name + "&password=" + password+ "&offer_code=" + offer_code;
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updatecoupon",  
    data: dataString,
    success: function(response)
    {
     $("#adminEditModel").modal('hide');
      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getAdminUser();
    }
   });
  } 

 function delFrom(id){
    $.ajax({
    url: "<?php echo site_url();?>WashControl/deletecoupon",
    
    type: "post",
    data: {id:id},
    success: function(result) {
    Notify('Data has been Deleted.', 'top-left', '10000', 'danger', 'fa-desktop', true);
    getAdminUser();
    }
    });
  }

  
  
</script>

