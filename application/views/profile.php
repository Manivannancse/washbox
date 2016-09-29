 <style>
    @media (max-width: 768px)
    {
        .tabs ul{
            width: 100% !important;
            min-height: 1px !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
            position: relative !important;
            text-align: center !important;
        }
    }
    .otherOptions{
        background: none !important;
        cursor: pointer !important;
    }
    thead {
        background: #38A5DA;
        color: white;
    }
 </style>
<?php
  $ses=$this->session->userdata("user");
  if($ses==""){
    $login="active";
    $porder="";
  }
  else{
    $login="";
    $porder="active";
  }

?>
<style>
    .form-horizontal .control-label {
    text-align: left !important;
}
.verify{
    color: #ee402d;
}
.profileDisplay{
background: #fff;
}
#content{
  background: #E0E0E0;
  padding-top:5%;
  padding-bottom:5%;

  
}
</style>
<section style="background: #F2F2F2; padding: 43px ;" id="content"   style="" ng-controller="registerController">
		   <div class="container"  style=" background:white;padding: 43px ;box-shadow:2px 2px 17px -2px grey ">
<div class="content-wrap" >
<div class="clearfix profileDisplay">
    <br><br>
    <div class="row">
	<div class="col-md-6">
	    <h2><i class=" fa fa-user"></i>  My Profile</h2>
	</div>
	<div class="col-md-6">
	    <ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">My profile</li>
	    </ol>
	</div>
    </div>
  	<hr>
    <div class="row edit">
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
        <div class="form-horizontal" role="form" id="view" ng-hide="view">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name</label>
            <label class="col-lg-4 control-label" ng-model="first_name" >: {{ data.first_name }}</label>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name</label>
            <label class="col-lg-4 control-label">: {{ data.last_name }}</label>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <span class="col-lg-4 control-label">: {{ data.email }}</span>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Phone Number</label>
            <label class="col-lg-5 control-label">: {{ data.phone_number }}<span class="verify" ng-hide="verify" style="text-transform: lowercase;">- Number not verified</span></label>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4">
              <a href="#" ng-click="edit1()"><input class="btn btn-warning" value="Edit" type="button"></a>
            </div>
          </div>
        </div>
	<form class="form-horizontal" role="form" id="edit" ng-hide="edit">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name</label>
            <div class="col-lg-4">
             <input class="form-control" ng-model="data.first_name"  type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name</label>
            <div class="col-lg-4">
             <input class="form-control" ng-model="data.last_name"  type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-4">
              <input class="form-control" ng-model="data.email" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Phone Number</label>
            <div class="col-md-4">
              <input class="form-control"  ng-model="data.phone_number" type="text">
            </div>
	    <span class="verify" ng-hide="verify" style="text-transform: lowercase;">- Number not verified</span></label>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4">
              <a href="#" ng-click="profileUpdate()"><input class="btn btn-success" value="Save Changes" type="submit"></a>
              <span></span>
              <a href="#" ng-click="view1()"><input class="btn btn-default" value="Cancel" type="button" ></a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>
</section>
<script>
app.controller('registerController', function($scope,$http,$timeout) {
  $scope.count = 0;
  $scope.edit = true;
  $scope.view = false;
  $scope.data=<?php echo json_encode($data); ?>;
  $timeout(function(){
    if($scope.data.Phone_verified!="Yes"){
      $scope.verify= false;
    }else{
      $scope.verify= true;
    }
  });
  $scope.edit1 = function()
  {
    $scope.edit = false;
    $scope.view = true;
  }
  $scope.view1 = function()
  {
    $scope.edit = true;
    $scope.view = false;
  }
  $scope.profileUpdate = function (){
    $http({
      url: "<?php echo site_url();?>WashBox/profileUpdate",
      method: "POST",
      data: {first_name:$scope.data.first_name,last_name:$scope.data.last_name,email:$scope.data.email,phone_number:$scope.data.phone_number},
    }).success(function(data, status, headers, config) {
      $scope.data=data.data[0];
    if (data.message == true)
    {
      SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Data updated successfully.!'));
      $scope.edit = true;
      $scope.view = false;
    }
    else
    {
      SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i> error in updating data.'));
    }
    });
  }
  $scope.$watch('data.phone_number', function() {
    $scope.verfied1="<?php echo $data['phone_number'];?>";
    if($scope.verfied1!=$scope.data.phone_number){
     $scope.verify= false;
    }else{
      $scope.verify= true;
    }
  }, true);
});

</script>
