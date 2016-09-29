<style>
    h4 b{
    font-weight:600;
    }
</style>
<div class="page-body">
    <div ng-app="myApp" ng-controller="adminController">
    <div class="col-lg-12 "><h5 class="row-title" id="row-title" onclick="$('#addItem').removeClass('hide');$(this).addClass('hide');"><i class="typcn typcn-th-small"></i>Add Slider Content</h5></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 hide"  id="addItem">
        <div class="widget">

            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-check"></i>
                <span class="widget-caption">Add Slider Content</span>
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
                            <label for="exampleInputEmail1">First Line</label>
                            <input type="text" placeholder="bannerstext" id="" ng-model="bannertext" class="form-control">
				
                        </div>
			<div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Second Line</label>
                            <input type="text" placeholder="bannerstextline2" id="" ng-model="bannertext2" class="form-control">
				
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Button Text</label>
                           <input type="text" placeholder="bannerbtntext" id="" ng-model="bannerbtn" class="form-control">
                           
                        </div>
			 <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Font Style</label>
                           <select name="country" class="form-control" id="" ng-model="bannerfont" >
                                <option disabled selected value="">Select a Font</option>
                                 <option value="Quirlycues">Quirlycues</option>
                                <option value="bedtime storie">bedtime storie</option>
                                <option value="Words of love">3Words of love</option>
				<option value="JeanSunHo">JeanSunHo</option>
                                <option value="Baby Kruffy">Baby Kruffy</option>
                                <option value="Penguin Attack">Penguin Attack</option>
				<option value="Arial ">Arial </option>
                                <option value="Arial MT ">Arial MT </option>
                                <option value="Cezanne ">Cezanne </option>
				<option value="Times New Roman ">Times New Roman </option>
                                <option value="Tristan ">Tristan </option>
                                <option value="Steamer ">Steamer </option>
                                
                            </select>
                        </div>
			 <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Font Colour</label>
                           <select name="country" class="form-control"  id="" ng-model="bannercolor" >
                                <option disabled selected value="">Select a Color</option>
                                <option value="red">red</option>
                                <option value="blue">blue</option>
                                <option value="black">black</option>
				<option value="pink">pink</option>
                                <option value="orange">orange</option>
                                <option value="DarkTurquoise">DarkTurquoise</option>
				<option value="DimGrey ">DimGrey </option>
                                <option value="GoldenRod ">GoldenRod </option>
                                <option value="Indigo  ">Indigo  </option>
				<option value="LawnGreen ">LawnGreen </option>
                                <option value="WhiteSmoke ">WhiteSmoke </option>
                                <option value="White ">White </option>
                                
                            </select>
                        </div>
			 <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Font Size</label>
                           <select name="country" class="form-control" id="" ng-model="bannersize" >
                                <option disabled selected value="">Select a Font</option>
                                <option value="1px">1</option>
                                <option value="2px">2</option>
                                <option value="3px">3</option>
				<option value="4px">4</option>
                                <option value="5px">5</option>
                                <option value="6px">6</option>
				<option value="7px">7</option>
                                <option value="8px">8</option>
                                <option value="9px">9</option>
				<option value="10px">10</option>
                                <option value="11px">11</option>
                                <option value="12px">12</option>
                                
                            </select>
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
                                        <label for="exampleInputEmail1">First Line</label>
                                        <input type="text" placeholder="First Line" id="bt"  class="form-control" value="">
                                         
                                    </div><div class="form-group">
                                        <label for="exampleInputEmail1">Second Line</label>
                                        <input type="text" placeholder="Second Line" id="btl"  class="form-control" value="">
                                         
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Button Text</label>
                                        <input type="text" placeholder="Button Text" id="bbt"  class="form-control" value="">
                                         
                                    </div>
				     <div class="form-group ">
				<label for="exampleInputPassword1">Font Style</label>
			       <select name="country" class="form-control" id="bf"  >
                                <option disabled selected value="">Select a Font</option>
                                 <option value="Quirlycues">Quirlycues</option>
                                <option value="bedtime storie">bedtime storie</option>
                                <option value="Words of love">3Words of love</option>
				<option value="JeanSunHo">JeanSunHo</option>
                                <option value="Baby Kruffy">Baby Kruffy</option>
                                <option value="Penguin Attack">Penguin Attack</option>
				<option value="Arial ">Arial </option>
                                <option value="Arial MT ">Arial MT </option>
                                <option value="Cezanne ">Cezanne </option>
				<option value="Times New Roman ">Times New Roman </option>
                                <option value="Tristan ">Tristan </option>
                                <option value="Steamer ">Steamer </option>
                                
                            </select>
                        </div>
			 <div class="form-group ">
                            <label for="exampleInputPassword1">Font Colour</label>
                           <select name="country" class="form-control"  id="bc" >
                                <option disabled selected value="">Select a Color</option>
                                <option value="red">red</option>
                                <option value="blue">blue</option>
                                <option value="black">black</option>
				<option value="pink">pink</option>
                                <option value="orange">orange</option>
                                <option value="DarkTurquoise">DarkTurquoise</option>
				<option value="DimGrey ">DimGrey </option>
                                <option value="GoldenRod ">GoldenRod </option>
                                <option value="Indigo  ">Indigo  </option>
				<option value="LawnGreen ">LawnGreen </option>
                                <option value="WhiteSmoke ">WhiteSmoke </option>
                                <option value="White ">White </option>
                                
                            </select>
                        </div>
			 <div class="form-group ">
                            <label for="exampleInputPassword1">Font Size</label>
                           <select name="country" class="form-control" id="bs" >
                                <option disabled selected value="">Select a Font</option>
                                <option value="20px">20</option>
                                <option value="21px">21</option>
                                <option value="23px">23</option>
				<option value="24px">24</option>
                                <option value="25px">25</option>
                                <option value="26px">26</option>
				<option value="27px">27</option>
                                <option value="28px">28</option>
                                <option value="29px">29</option>
				<option value="31px">31</option>
                                <option value="33px">33</option>
                                <option value="37px">37</option>
                                
                            </select>
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
	     var bannerfont=$scope.bannerfont;
	     var bannercolor=$scope.bannercolor;
             var bannersize=$scope.bannersize;
	    
           
             $.ajax({
                url: "<?php echo site_url();?>WashControl/addbanner",
                type: "post",
                data:{bannertext:bannertext,bannertext2:bannertext2,bannerbtn:bannerbtn,bannerfont:bannerfont,bannercolor:bannercolor,bannersize:bannersize},
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
        $("#bf").val(result[0].bannerfont);
        $("#bc").val(result[0].bannercolor);
       $("#bs").val(result[0].bannersize);
       
       
       
       
      }
     });
    }
  function updateForm(){
   var id=$("#id").val();
   var bannertext=$("#bt").val();
   var bannertext2=$("#btl").val();
   var bannerbtn=$("#bbt").val();
   var bannerfont=$("#bf").val();
   var bannercolor=$("#bc").val();
   var bannersize=$("#bs").val();
  
  
  
   $.ajax({  
    type: "POST",  
    url: "<?php echo site_url();?>WashControl/updatebanner",  
    data: {id:id,bannertext:bannertext,bannertext2:bannertext2,bannerbtn:bannerbtn,bannerfont:bannerfont,bannercolor:bannercolor,bannersize:bannersize},
    success: function(response)
    {
     $("#itemEditModel").modal('hide');
     $(".modal-backdrop").remove();

      Notify('Data has been updated.', 'top-left', '10000', 'danger', 'fa-desktop', true);
        getbannerlist();
    }
   });
  } 

 function delFrom(id)
 {
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

