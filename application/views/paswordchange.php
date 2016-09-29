<style>
    .error404 {
	    color: #ddd;
	    display: block;
	    font-weight: 600;
	    letter-spacing: 4px;
	    font-size: 36px !important;
	    padding-top: 30px;
	    line-height: 1.35;
	}
</style>
<section style="background: #F2F2F2; padding: 43px ;" id="content"   style="" ng-controller="passwordchangeController">
		   <div class="container"  style=" background:white;padding: 43px ;box-shadow:2px 2px 17px -2px grey ">
<div class="content-wrap" >
<div class="clearfix profileDisplay">
    <br><br>
    <div class="row">
	<div class="col-md-6">
	    <h2><i class=" fa fa-user"></i>  Change Password</h2>
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
      <?php if($expired=="No") {
      ?>
      <div class="col-md-9 personal-info">
	<form class="form-horizontal" method="POST" role="form" id="edit" action="<?php echo site_url();?>WashBox/passwordwaschanged/<?php echo $result[0]['password_token'];?>" name="resetpassword">
          <div class="form-group">
            <label class="col-lg-3 control-label">New Password</label>
            <div class="col-lg-4">
             <input class="form-control" ng-model="New_Password" name="New_Password"  type="password" placeholder="New Password" required ng-keyup="checkpassword()">
		<input type="hidden" name="password_token" value="<?php echo $result[0]['password_token'];?>">
		<span style="color:#19a3ff" ng-show="resetpassword.New_Password.$dirty && resetpassword.New_Password.$invalid">
                    <span ng-show="resetpassword.New_Password.$error.required">New Password is required.</span>
                </span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Confirm Password</label>
            <div class="col-lg-4">
             <input class="form-control" ng-model="Confirm_Password" name="Confirm_Password" type="password" placeholder="Confirm Password" pw-check="New_Password" ng-keyup="checkpassword()" required>
		<span style="color:#19a3ff" ng-show="resetpassword.Confirm_Password.$dirty && resetpassword.Confirm_Password.$invalid">
                    <span ng-show="resetpassword.Confirm_Password.$error.required">Confirm Password Number is required.</span>
                </span>
		<span ng-hide="PasswordNotMatch">Password Not Match.</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4">
              <input ng-disabled="resetpassword.New_Password.$dirty && resetpassword.New_Password.$invalid || resetpassword.Confirm_Password.$dirty && resetpassword.Confirm_Password.$invalid" class="btn btn-success" value="Save Password" type="submit">
              <span></span>
              <!--<a href="#" ng-click="view1()"><input class="btn btn-default" value="Cancel" type="button" ></a>-->
            </div>
          </div>
        </form>
      </div>

<?php } else { ?>
  <div class="col-md-12 personal-info">
    
    <h1 class="error404"><center>Password Token was expired</center></h1>
    <h4 align="center">To Continue Your Order Press The Button Below</h4>
    <p align="center">
	<button type="submit" class="button orange button-rounded">Continue <i class="icon-circle-arrow-right"></i></button><hr>
    </p>
  </div>
<?php }?>
    
    </div>
</div>
</div>
</section>
<script>
    app.controller('passwordchangeController', function($scope, $timeout, $http,$filter) {
	$timeout(function() {
	    $scope.checkpassword();    
	});
	$scope.checkpassword=function(){
	    if($scope.New_Password!=$scope.Confirm_Password){
		$scope.PasswordNotMatch=false;
		//$scope.passwordcheckval=true;
		$('.btn-success').addClass('disabled');
	    }
	    else{
		$scope.PasswordNotMatch=true;
		//$scope.passwordcheckval=false;
		$('.btn-success').removeClass('disabled');
	    }
	}
	});
</script>