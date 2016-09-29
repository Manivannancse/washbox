<?php
$session=$this->session->userdata("user");
if($session==""){
  $login="active";
  $porder="";
}
else{
  $login="";
  $porder="active";
}
$data=$this->Wash_Model->getUserData($session['id']);
?>

<style>
  
      .col-sm-2{
/*     width:13%;
     padding:1%;
     margin:0.2%;*/

    }
    .sub
    {
      height:65px;
      width:13% !important;
      color:white;
      padding-top: 1.5px;
      text-align: center;d
    }
    
    .pickup  .active,.delivery  .active
    {
      margin-top: 0px;
    }
    .pickup ,.delivery  
    {
/*      padding-left: 0px;
      padding-right: 0px;*/
    }
    .delivery .active
    {
    }
    .delivery .sub
    {
    box-shadow:3px 3px 8px 1px grey ;
    background:#00ff99;
    }
    .pickup .sub
    {
    box-shadow:3px 3px 8px 1px grey ;
    background:#00cfFF;
    }
  
  
  /*end*/
  .customWell:hover{
    border-color:#FD8936;
  }
  .input-sm {
    border-radius: 3px !important;
    font-size: 12px !important;
    height: 30px !important;
    line-height: 1.5 !important;
    padding: 5px 10px !important;
  }
  .smsBlockAlign{
    margin-left: -13px;
  }
  #smsProfile{
    padding-bottom: 68px;
  }
  @media screen and (min-width: 990px){
    .verticalHrDiv { display: block; }
    .horizantalHrDiv { display: none; }
    .socialLogin{ margin-top: 59px; text-align: left}
    .SmsVerifyAlert{margin: 31px 0 0 -24px;}
  }
  @media screen and (max-width: 990px){
    .verticalHrDiv { display: none; }
    .horizantalHrDiv { display: block; text-align: center}
    .socialLogin{margin-top: -10px; text-align: center}
    .horizantalHr{margin: -100px 7px 13px -5px;}
    #smsProfile{ padding-bottom: 120px; }    
  }
  @media screen and (max-width: 767px){
     #smsProfile{ padding-bottom: 6%;}
   }
  .verticalHr {
      margin: 15px -8px;
  }
  .socialInfo{
    color: #33AFFF;
    font-size: 15px;
  }
  .gIcon {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #dd4b39;
  border-radius: 2px;
  color: #dd4b39;
  font-size: 17px;
  padding: 10px 20px;
  width: 170px;
  border-radius: 3px;
  /*padding: 13px 52px;*/
}
.gIcon:hover {
    background-color: #DD4B39;
    color: #fff;
  }
  .fbIcon{
       background: #fff none repeat scroll 0 0;
       border: 1px solid #3b5998;
       color: #3b5998;
       font-size: 17px;
       margin-right: 5px;
       padding: 10px 20px;
       width: 170px;
       border-radius: 3px;
       /*padding: 13px 51px;*/
   }
  .fbIcon:hover {
    background-color: #3b5998;
    color: #fff;
  }

  #confirmOrderDisplay{
    padding-top: 8%;
  }
  #confirmOrderDisplay .button-blue-custome{
    font-size: 17px;    
  }
  #confirmOrderDisplay h4{
    color: #000;
    font-size: 16px;
    font-weight: 600;
    text-shadow: 1px 0 3px grey;
  }
  #confirmOrderDisplay p{
    color: grey;
    font-size: 13px;
    font-weight: bold
  }
  div#bhoechie-tab-content1 {
    background-color: #ffffff;
    padding-left: 20px;
    padding-top: 44px;
    }
  label{
    text-transform:none!important;
  }
  .btn-washtype{
    color: black !important;
    font-size: 14px !important;
    text-transform:none !important;
    font-weight: normal !important;
    box-shadow:0 1px 24px rgba(4, 0, 2, 0.075) inset;
    width: 100% !important;
    padding: 12px 20px 9px 10px !important;
  }
  input[type='radio']:checked + label, input[type="checkbox"]:checked + label  {
    color: white !important;
    background: none !important;
    box-shadow: 0 2px 91px #1ea5fe inset, 0 1px 2px rgba(0, 0, 0, 0.05) !important;
  }
.otp{
text-align:center;
}
.button-red-custome{
  background: #2091C4;
}
.button-blue-custome{
  background: #4fbd5e;
}
.button-red-custome:hover{
  background: #2091C4;
}
.button-blue-custome:hover{
  background: #4fbd5e;
}
.shadow{
  box-shadow: 0 1px 16px 2px rgba(0, 0, 0, 0.075) inset;
  height: 100%;
}
.loginForm{
  padding-top: 15%;
}
.registerForm{
      padding-top: 6%;

}
.profile{
      padding-top: 6%;
}
.space8{
    padding-top: 6%;
}
.space36{
      padding-top: 24%;

}
.space50{
      padding-top: 18%;

}
.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus{
  border-color:#1FA5FE;
}
  .text-divide {
    background: #fff none repeat scroll 0 0;
    left: -8px;
    line-height: 22px;
    position: absolute;
    top: 55px;
}
.socialspace{
  padding: 0 22px 18px 18px;
  top: 120px;
}
.verticalLine {
    border-right: thin solid #E0E0E0;
    
}
.verticalLine-left{
    border-left: thin solid #E0E0E0;

}
.read-more {
    position: absolute;
    bottom: 0;
    right: 0;
    left:610px;
    
}
.no-padding{
  padding: 0;
}
.btn-back{
    padding-top: 10px !important;
}
.pull-rights
{
    float: right !important;
    padding-top: 12px;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    /*border: 2px solid #ebebeb;*/
    border-radius: 2px;
    box-shadow: 0 1px 16px 2px rgba(0, 0, 0, 0.075) inset;
    color: grey;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}

  .text-divide {
    background: #fff none repeat scroll 0 0;
    left: -8px;
    line-height: 22px;
    position: absolute;
    top: 55px;
}
.socialspace{
  padding: 0 22px 18px 18px;
  top: 120px;
}
.verticalLine {
    border-right: thin solid #E0E0E0;
    
}
.read-more {
    position: absolute;
    bottom: 0;
    right: 0;
    left:610px;
    
}
.btn-back{
    padding-top: 10px !important;
}
.pull-rights
{
    float: right !important;
    padding-top: 12px;
}
.btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
    color: #fff;
}
.btn {
    -moz-user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857;
    margin-bottom: 0;
    padding: 6px 12px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}
.btnradio {
    font-size: 13px;
    margin: 6px;
    padding-left: 5.5px !important;
}
.btnradio {
    background-color: #6ac6ff !important;
    border: none !important;
    border-radius: 3px !important;
    box-shadow: 0 0 0 0;
    color: #fff !important;
    display: inline-block !important;
    font-family: arial,helvetica,sans-serif;
    font-size: 12px !important;
    font-weight: bold !important;
    padding: 10px !important;
    text-decoration: none !important;
    text-shadow: 0 0 0 rgba(0, 0, 0, 0) !important;
}
.btnradio1 {
    font-size: 13px;
    margin: 6px;
    padding-left: 5.5px !important;
}
.btnradio1 {
    background-color: #66f1af !important;
    border: none !important;
    border-radius: 3px !important;
    box-shadow: 0 0 0 0;
    color: #fff !important;
    display: inline-block !important;
    font-family: arial,helvetica,sans-serif;
    font-size: 12px !important;
    font-weight: bold !important;
    padding: 10px !important;
    text-decoration: none !important;
    text-shadow: 0 0 0 rgba(0, 0, 0, 0) !important;
}
.order-img{
    height: 25px;
    width: 35px;
}
.btn-pickup, .btn-deliver{
  margin:-4px !important;
}
.btn-pickup .active, .btn-deliver .active{
  box-shadow: 0 3px 5px 0.1px grey !important;
}
.btnradio:active,.btnradio:hover,.btnradio:focus{
  background-color: #1FA5FE !important;
  box-shadow: 0 3px 5px 0.1px grey !important;
  border: none !important;
}
.btnradio1:active,.btnradio1:hover,.btnradio1:focus{
  background-color: #0f9d58  !important;
  box-shadow: 0 3px 5px 0.1px grey !important;
  border: none !important;
}
.list-group-item {
   background: #fff none repeat scroll 0 0;
    border:1 !important;
    /*box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3) inset;*/
    color: #000;
}
.bhoechie-tab{
/*border-left: 1px solid #dddddd !important;
box-shadow: 0 3px 5px 0.1px grey !important;*/
    border:none !important;

}

</style>
<section id="content"   style="background: #E0E0E0;">
<div class="container tabpad" >
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="background-color: #E0E0E0;">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bhoechie-tab-menu hidden-xs">
              <div class="list-group">
                <a href="#" class="list-group-item <?php echo $login; ?> <?php if($login==""){echo "hide";}?> text-center" id="loginRegister">
                  <h4><i class="fa fa-sign-in"></i></h4>Log In / Register
                </a>
                <a href="#" class="list-group-item <?php echo $porder; ?> <?php if($login!=""){echo "hide";}?> text-center" id="profile">
                  <h4><i class=" fa fa-user"></i></h4>Profile
                </a>
                <a href="#" class="list-group-item text-center" id="confirmAddress">
                  <h4><i class="fa fa-home"></i></h4>Confirm Address
		</a>
                <a href="#" class="list-group-item text-center" id="placeorder">
                  <h4><i class="fa fa-paper-plane"></i></h4>Place Order
                </a>
                <a href="#" class="list-group-item text-center" id="confirmorder">
                  <h4><i class="fa fa-check-circle-o"></i></h4>Conform Order
                </a>
                <!--<a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a>-->
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bhoechie-tab" ng-app="washbox"  ng-controller="registerController" style="background-color: white;">
                <!-- flight section -->
		
		<div id="loginTab" class="bhoechie-tab-content <?php echo $login; ?> <?php if($login==""){echo "hide";}?>" >
		    <div class="col-md-5 login-tab " id="log" ng-hide="login" >
		      <form class="loginForm" ng-submit="loginForm()" role="form" method="post">
			<div class="form-group">
			  <h2>Log In</h2>
			</div>
			<div class="form-group space8">
			 <label for="usr">Email:</label>
			 <input type="text" class="form-control input-sm" id="usr" placeholder="Email" ng-model="userEmail">
			</div>
			<div class="form-group">
			 <label for="pwd">Password:</label>
			 <input type="password" class="form-control input-sm" id="pwd" placeholder="Password" ng-model="userPassword">
			</div>
			<div class="form-group">
			  <button type="submit" class="button orange button-rounded">Sign In <i class="icon-circle-arrow-right"></i></button><hr>
			</div>
			<div class="form-group">
			  <span>Don't Have an Account? &nbsp;</span><a href="#" ng-click="toggle1()">Register Now</a>
			</div>
		      </form>
		    </div>
		    <form class="registerForm" ng-submit="registerForm()" name="userForm" role="form" method="post" novalidate>
		    <div class="col-md-5" id="reg" ng-hide="register">
		      <div class="form-group">
			  <h2>Register Now</h2>
			</div>
			<div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && (userForm.name.$dirty || submitted)}">
			 <label>First Name:</label>
                         <input type="text" name="name" class="form-control input-sm" placeholder="First Name" ng-model="firstName" id="fname" ng-required="true">
                          <p ng-show="userForm.name.$error.required && (userForm.name.$dirty || submitted)" class="help-block">Your name is required.</p>
			</div>
			<div class="form-group" >
			 <label>Last Name:</label>
                         <input type="text" class="form-control input-sm" placeholder="Last Name"ng-model="lastName" id="lname">
			</div>
			<div class="form-group input-sm" ng-class="{ 'has-error' : userForm.password.$invalid && (userForm.password.$dirty || submitted)}">
			 <label>Password:</label>
                         <input type="password" name="password"  class="form-control input-sm" placeholder="Password" ng-model="userPassword" id="pwd" ng-required="true" ng-minlength="6" >
                          <p ng-show="userForm.password.$error.required && (userForm.password.$dirty || submitted)" class="help-block">Your password is required.</p>
                          <p ng-show="userForm.password.$error.minlength && (userForm.password.$dirty || submitted)" class="help-block">Your Password Should Contain Atleast 6 Characters</p>
			</div>
			
			<div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && (userForm.email.$dirty || submitted)}">
			 <label>Email:</label>
                         <input type="email" name="email"  class="form-control input-sm" placeholder="Email"ng-model="userEmail" id="usr" name="Email" ng-required="true">
                          <p ng-show="userForm.email.$error.required && (userForm.email.$dirty || submitted)" class="help-block">Email is required.</p>
                          <p ng-show="userForm.email.$error.email && (userForm.email.$dirty || submitted)" class="help-block">Enter a valid email.</p>
			</div>
			
			<div class="form-group" ng-class="{ 'has-error' : userForm.contactno.$invalid  && (userForm.contactno.$dirty || submitted) }">
			 <label>Mobile no.:</label>
                         <input type="text" name="contactno" class="form-control input-sm"placeholder="Phone Number" ng-model="phoneNumber" id="phoneNumber" ng-pattern="/^[789]\d{9}$/" maxlength="10" ng-required="true">
                          <p ng-show="userForm.contactno.$error.pattern  && (userForm.contactno.$dirty || submitted)" class="help-block">Enter a valid PhoneNo.</p>
			</div>
			<div class="form-group">
			    <button type="submit" class="button  button-rounded button-blue-custome">Sign Up <i class="icon-circle-arrow-right"></i></button>
			    <!--<button type="submit" class="btn btn-primary">Sign In </button><hr>-->
			</div>
			<div class="form-group">
			  <span>I'm already having account! &nbsp;<a href="#" ng-click="toggle1()">Log In</a>
			</div>
		      
		    </div>
                    </form>
		    <div class="col-md-1 hidden-xs verticalHrDiv"><img class="verticalHr" src="<?php echo site_url();?>application/assests/images/shadow1.png"></div>
                    <div class="col-md-1 hidden-xs horizantalHrDiv"><img class="horizantalHr" src="<?php echo site_url();?>application/assests/images/shadow2.png"></div>
                    <div class="col-md-6 socialLogin" >
                        <div class="form-group row">
                          <a href="<?php echo base_url(); ?>auth_oa2/session/facebook" ><button class="fbIcon"><i class="fa fa-facebook">&nbsp&nbsp Facebook</i></button></a>
                          <!--<a href="<?php echo base_url(); ?>auth_oa2/session/facebook" ><img class="img button-3d" src="<?php echo site_url();?>application/assests/images/fb-new.jpg"></a>-->
                        </div>
                        <div class="form-group row">
                          <a href="<?php echo base_url(); ?>auth_oa2/session/google" ><button class="gIcon"><i class="fa fa-google-plus">&nbsp&nbsp Google +</i></button></a>
                         <!--<a href="<?php echo base_url(); ?>auth_oa2/session/google"><img class="img button-3d"  src="<?php echo site_url();?>application/assests/images/gplus-new.jpg"></a>-->
                        </div>
                         <div class="form-group row socialInfo">
                          We do not post anything on your wall.<br>
                          For any help call 080-68555441(8am - 10pm)
                        </div>
                    </div>		
                  </div>
		<div id="profileTab" class="bhoechie-tab-content <?php echo $porder ; ?> <?php if($login!=""){echo "hide";}?>" >
		    <div class="col-md-12 " id="updateProfile" ng-hide="profileTab">
                      <form name="profileForm" class="profile" ng-submit="profileUpdate()" role="form" method="post" name="profile" novalidate >
                        <div class="form-group">
			  <h2>Profile details</h2>
			</div>
			<div class="form-group row" ng-class="{ 'has-error' : profileForm.name.$invalid && (profileForm.name.$dirty || submitted)}">
                           <div class="col-md-6">
                            <label>First Name:</label>
                              <input type="text" name="name" class="form-control input-sm " placeholder="First Name" ng-model="first_name" id="fname" ng-required="true">
                          <p ng-show="profileForm.name.$error.required && (profileForm.name.$dirty || submitted)" class="help-block">Your name is required.</p>
                          </div>
			</div>
			<div class="form-group row">
                          <div class="col-md-6">
                            <label>Last Name:</label>
                            <input type="text" class="form-control input-sm " placeholder="Last Name" ng-model="last_name" >
                          </div>
			</div>
			<div class="form-group row" ng-class="{ 'has-error' : profileForm.email.$invalid && (profileForm.email.$dirty || submitted)}">
                          <div class="col-md-6">
                           <label>Email:</label>
                            <input type="email" name="email"  class="form-control input-sm " placeholder="Email" ng-model="email"  ng-required="true">
                          <p ng-show="profileForm.email.$error.required && (profileForm.email.$dirty || submitted)" class="help-block">Email is required.</p>
                          <p ng-show="profileForm.email.$error.email && (profileForm.email.$dirty || submitted)" class="help-block">Enter a valid email.</p>
                          </div>
                          <div class="col-md-6">
                            
                          </div>
			</div>
			<div class="form-group row" ng-class="{ 'has-error' : profileForm.contactno.$invalid  && (profileForm.contactno.$dirty || submitted) }">
                          <div class="col-md-6">
                            <label>Phone Number:</label>
                            <input type="text" name="contactno" class="form-control input-sm "placeholder="Phone Number" ng-model="phone_number" id="phoneNumber" ng-pattern="/^[789]\d{9}$/" maxlength="10" ng-required="true">
                            <p ng-show="profileForm.contactno.$error.pattern  && (profileForm.contactno.$dirty || submitted)" class="help-block">Enter a valid PhoneNo.</p>
                          </div>
                          <div class="col-md-6">
                           <span id="SmsVerifyAlert" ><label class="SmsVerifyAlert" style="color: red;">- Phone no. not verified</label><br><span class="smsBlockAlign">Having Verification code Already?.</span><br><span class="smsBlockAlign">Go to<a href="#" ng-click="smsToggle()" > SMS verifiction</a>.</span></span>
                          </div>
			</div>
			<div class="form-group row">
                          <div class="col-md-6">
                          <button type="submit" class="button orange button-rounded" ng-disabled="profile.email.$dirty && profile.email.$invalid">
                            Continue <i class="icon-circle-arrow-right"></i></button>
                          </div>
			</div>
                      </form>
		    </div>
                     <form ng-submit="smsVerify()" role="form" method="post" >
                      <div class="col-md-6 col-sm-7 space8" id="smsProfile" ng-hide="onetimepass">
                        <div class="form-group ">
                          <h2><center>One Time Password</center><center></h2>
                        </div>
                        <div class="form-group ">
                            <input type="password" placeholder="Enter Your SMS Verification Code"class="form-control otp" ng-model="otppassword" id="otppassword">
                        </div>
                        <div class="form-group">
                            <!--<a href="#" ng-click="toggle()"><button type="submit" class="btn btn-primary">Next </button></a>-->
                           <center><a href="#" ng-click="smsResend()" ><button type="button" class="button button-rounded button-red-custome">Resend <i class="icon-ok"></i></button></a>
                            <button type="submit" class="button  button-rounded button-blue-custome">Verify <i class="icon-ok"></i></button></center> 
                        </div>
                        <div class="" style="color: rgb(123, 123, 123);">
                          Message not yet received?.<br> Go <a href="#" ng-click="profileToggle()" >Back to profile</a> & check your number
                        </div>
                      </div>
		    </form>
                </div> 
                <!-- train section -->
                <!--<div class="bhoechie-tab-content"  ng-controller="addressController">-->
		<div class="bhoechie-tab-content"  >
		  <div>
		    <h2 class="space8">Confirm Address</h2>
                    <p>We will deliver your order here</p>
		  </div>
                  <div class="" id="addressLooping" ng-hide="addressLooping">
                    <div class="row">                    
                      <div class="col-sm-3" ng-repeat="x in addressLoop">
                        <div class="well customWell">
                          <br>
                          <br>
                          <div class=" ">
                              <label for="billing-form-name">Address:</label>
                              {{ x.street_name1 }}
                          </div>
                          <div class="">
                              <label for="billing-form-name">Landmark:</label>
                              {{ x.street_name2 }}
                          </div>
                          <div class="">
                              <label for="billing-form-name">Area:</label>
                              {{ x.area }}
                          </div>
                          <div class="">
                              <label for="billing-form-name">City:</label>
                              {{ x.city }}
                          </div><br>
                          <div>
                            <button type="submit" class="button orange button-rounded address" id="continue" ng-click='placeorderTab()'>Continue</button>
                          </div><br>
                          <div>
                            <a href='#' class="fa fa-trash" ng-click='addressDelete(x.id)' style="padding-right: 10px;"> Delete</a>
                            <a href='#' class="fa fa-pencil" ng-click='getSpecificAddress(x.id)'> Edit</a>
                          </div>
                      </div>
                      </div>
                      </div>
                      <div><div class="col_half"><button class="button orange button-rounded address" id="continue" ng-click="addAddress()">Add address <i class="fa fa-plus-circle"></i></button></div></div>
                  
                  </div>
		  <form class="" ng-submit="addressForm()" role="form" method="post" id="addressAction" ng-hide="addressAction" >
                    <a href="#" ng-click='toggleToAddressView()'> Back to saved Address</a>
		    <div class="col_half ">
			<label for="billing-form-name">Address:</label>
			<textarea rows ="2" id="register-form-name" placeholder="Enter Your Address" ng-model="street_name1" class="required form-control input-block-level" type="text" value="" name="register-form-name"></textarea>
		    </div>
		    <div class="col_half">
			<label for="billing-form-name">Landmark:</label>
			<input id="register-form-name" placeholder="Enter Your Landmark" ng-model="street_name2" class="required input-sm  form-control input-block-level" type="text" value="" name="register-form-name">
                        <input type="hidden" ng-model='addressID'>
		    </div>
                    <div class="col_half">
			<label for="billing-form-name">Area:</label>
			<input id="register-form-name" placeholder="Enter Your Area" ng-model="area" class="required input-sm  form-control input-block-level" type="text" value="" name="register-form-name">
		    </div>
		    <div class="col_half">
			<label for="billing-form-name">City:</label>
			<input id="register-form-name" placeholder="Enter Your City" ng-model="city" class="required input-sm  form-control input-block-level" type="text" value="" name="register-form-name">
		    </div>		   
		    <div class="col_half">
		      <button type="submit" class="button orange button-rounded address" id="continue" >Save & continue</button>
                      <!--<button type="submit" class="button  button-rounded button-blue-custome" ng-click="update();" id="update">Update or Continue <i class="icon-circle-arrow-right"></i></button>-->
                      <label  class="smsBlock" style="color: red;">- Phone no. not verified</label>
		    </div>
		  </form>                   
               
                
                </div>
		
		
		
		
		
		<!-- PlaceOrder  -->
		<div class="bhoechie-tab-content" id="bhoechie-tab-content1" >
		    <form class="" ng-submit="placeorderForm()" role="form" method="post">
		    <div class="col-md-12" ng-hide="placeorder">
		      <div class="col-md-12">
		      <div class="col-md-12 no-padding">
			<div class="row">
			  <div class="col-md-12 col-xs-12" style="padding: 0 0 14px 12px;">
			      <h2 >Place Your Order</h2>
			  </div>
			</div>
			<div class="btn-group col-md-4 col-xs-12 no-padding" ng-init="number=1" role="group" ng-repeat="washtype in type">
			  <input onclick=" washType('type')" class="chk" id="{{washtype.name}}" checked ng-model="cleantype" ng-click="savedata(washtype.name,$index);" type="checkbox"  ng-checked="selection.indexOf(washtype.name) > -1" ng-click="toggleSelection(washtype.name)" />
			  <label class="btn-washtype"for="{{washtype.name}}">{{washtype.name}}</label>
			</div>
		      </div>
		      
		      </div>
                      <div class="col_full" style="padding:0 14px;margin-bottom: 17px !important;">
                        <label for="shipping-form-message">

                        </label>
                        <textarea id="" class="required form-control"  ng-model="deliveryNotes"  placeholder="Enter Your Notes Here "></textarea>
                      </div>
			<div class="col-md-6 " >
			   <!-- <img class="img-responsive" width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/collection.png">-->
			   <!-- <h4 style="padding-bottom: 10%"><span style="color:#137FCB"><b>Collection</b> </span>Please choose a  date</h4>-->
			    <div class="col_full">
				<label for="billing-form-name" style="margin-bottom: 14px !important;">Pick Up Date:</label>
				<input onblur="washType('date')" type="text" id="collectiondata" ng-model="collectiondateaaaaa" ng-blur="addclassfun($event);" autocomplete="off" class="required form-control input-block-level datepicker"    placeholder="DD-MM-YYYY">
				<!--<input type="date" id="date" ng-model="collectiondateaaaaa" value="{{collectiondateaaaaa}}" ng-blur="pickupdate($event)"  class="required form-control datepicker input-block-level"    placeholder="DD-MM-YYYY">-->
			    </div>
			   
			<div >
                          <div class="pickup  col-sm-12">
                          </div>
                        

				<div class="btn-group btn-pickup" data-toggle="buttons">
				<!--<div  ng-repeat="pickuptime in pickuptimepicker" ></div>--> 
				
				<div class="col-xs-6 col-md-4 col-sm-3"  ng-repeat="pickuptime in pickuptimepicker"  >
                                  <label class="btnradio btn "  ng-click="setval(pickuptime.name);">
                                    <input type="radio" ng-model="pickup"  ng-value="{{pickuptime.name}}" autocomplete="on" > {{pickuptime.name}}
                                  </label>
				</div>
			    </div>
                        </div>
			   
			        
			</div>
			<div class="col-md-6">
			    <div style="float: right;">
				<!--<img class="img-responsive"  width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/delivery.png">-->
			    </div>
			    <!--<h4 style="float: inherit;padding-bottom: 10%"><span style="color:#1F761F;"><b>Delivery</b></span> Please choose a date</h4>-->
			    <div class="col_full">
				<label for="billing-form-name" style="margin-bottom: 14px !important;">Delivery Date:</label>
				<input id="lastDate" type="text" ng-blur="deldate($event)" ng-model="deliverydate" class="required form-control datepicker input-block-level"   placeholder="DD-MM-YYYY">
			    </div>
                        <div >
                          <div class="delivery  col-sm-12">
                          </div>
                          <div class="btn-group btn-deliver" data-toggle="buttons">
                              <div class="col-xs-6 col-md-4 col-sm-3" ng-repeat="deliverytime in deliverytimepicker"  >
                                  <label class="btnradio1 btn " ng-click="delvalue(deliverytime.name);">
                                    <input type="radio" ng-model="deliverytime" name="options" ng-value="{{deliverytime.name}}" id="option1" autocomplete="on">{{deliverytime.name}}
                                  </label>
                              </div>
                          </div>
                        </div>
			   
			</div>
			<div class=" col-md-12">
			  <div class="form-group pull-rights">
			  <button type="submit" class="button orange button-rounded">Continue <i class="icon-circle-arrow-right"></i></button>
			  </div>
			</div>
			
		   
		    </div>
		  
		    </form>
		</div>
                 <!--Confirm Order Tab-->
                <div class="bhoechie-tab-content" id="confirmOrderDisplay">
		<div class="row">
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12" style="padding: 0 0px 16px 9px ;">
		      <h2 >Confirm Order</h2>
		    </div>
		  </div>
		</div>

		<div class="row">
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Wash Type</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p><span ng-repeat="wash in typeofLondary">{{wash.value}}, </span></p>
		    </div>
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Delivery Notes</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p>{{deliveryNotes}}</p>
		    </div>
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Pick Up Date</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p>{{collectionDate}}</p>
		    </div>
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Pick Up Time</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p>{{pickup}}</p>
		    </div>
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Delivery Date</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p>{{deldate}}</p>
		    </div>
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <div class="col-md-4 col-xs-12">
		      <h4>Delivery Time</h4>
		    </div>
		    <div class="col-md-8 col-xs-12">
		      <p>{{deltime}}</p>
		    </div>
		  </div>
		</div>
		<div class="form-group pull-rights">
		  <button  ng-click="orderSave()" data-notify-type="success" class="button  button-rounded button-amber button-reveal tright "><i class="icon-truck fa-lg"></i><span>Confirm Your Order </span></button>
                </div>
                
	      </div>
            </div>
        </div>
  </div>
</div>
</section>

<script>
$(document).ready(function() {
  $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
    e.preventDefault();
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  });
  //$scope.getUserData();
  
});
  app.controller('registerController', function($scope) {
    $scope.first_name = '<?php echo $data[0]['first_name']; ?>';
    $scope.last_name = '<?php echo $data[0]['last_name']; ?>';
    $scope.email = '<?php echo $data[0]['email']; ?>';
    $scope.phone_number = '<?php echo $data[0]['phone_number']; ?>';
    angular.element(document).ready(function () {
    $scope.getUserData();
  });
        
  // Pick Up date Starts
  $scope.pickuptimepicker=[{name:'09.00-10.00'},
    {name:'10.00-11.00'},
    {name:'11.00-12.00'},
    {name:'12.00-13.00'},
    {name:'13.00-14.00'},
    {name:'14.00-15.00'},
    {name:'15.00-16.00'},
    {name:'16.00-17.00'},
    {name:'17.00-18.00'},
    {name:'18.00-19.00'},
    {name:'19.00-20.00'},
    {name:'20.00-21.00'}];
  $scope.selection=[];
  
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var Month = ["gobi","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    var output=(day<10 ? '0' : '') + day + "-"+ Month[month] + '-' +  d.getFullYear() ;
    $scope.collectiondateaaaaa=output;
    
    // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
    var idx = $scope.selection.indexOf();
    // is currently selected
    if (idx > -1)
    {
	$scope.selection.splice(idx, 1);
    }
    // is newly selected
    else
    {
    $scope.selection.push();
    }
  }

  $scope.addclassfun=function(event)
  {
    $scope.collectionDate=$(event.target).val();
  }
  //pick up date Ends
  //Delivery time starts
  $scope.deliverytimepicker=[{name:'09.00-10.00'},{name:'10.00-11.00'},{name:'11.00-12.00'},{name:'12.00-13.00'},{name:'13.00-14.00'},{name:'14.00-15.00'},{name:'15.00-16.00'},{name:'16.00-17.00'},{name:'17.00-18.00'},{name:'18.00-19.00'},{name:'19.00-20.00'},{name:'20.00-21.00'}];
  $scope.selection=[];
  // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
  var idx = $scope.selection.indexOf();
  // is currently selected
  if (idx > -1)
  {
    $scope.selection.splice(idx, 1);
  }
  // is newly selected
  else {
  $scope.selection.push();
  }
  };
  //Delivery time Ends
  
  <?php if(count($user_profile)>0){ ?>
    $("#confirmAddress").siblings('a.active').removeClass("active");
    $("#confirmAddress").addClass("active");
    var index = $("#confirmAddress").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    
    $("#loginRegister").removeAttr("disabled",true);
    document.getElementById('loginRegister').style.pointerEvents = 'none';
    document.getElementById("loginRegister").style.backgroundColor = "#ccc";
  <?php }?>
    
  $scope.login = false;
  $scope.register = true;
  $scope.onetimepass=true;
  $scope.street_name1="";
  $scope.street_name2="";
  $scope.city="";
  
  $scope.toggleToAddressEdit = function(){
    $scope.addressLooping = true;
    $scope.addressAction = false;
  }
  $scope.toggleToAddressView = function(){
    $scope.addressLooping = false;
    $scope.addressAction = true;
  }
  $scope.profileToggle = function()
  {
    $('#updateProfile').attr("ng-hide","false");
    $('#smsProfile').attr("ng-hide","true");
    $('#updateProfile').removeClass("ng-hide");
    $('#smsProfile').addClass("ng-hide");
  }
  $scope.smsToggle =function(){
    $('#updateProfile').attr("ng-hide","true");
    $('#smsProfile').attr("ng-hide","false");
    $('#updateProfile').addClass("ng-hide");
    $('#smsProfile').removeClass("ng-hide");
  }
  $scope.toggle1 = function()
  {
    $scope.login = !$scope.login;
    $scope.register = !$scope.register;
  }
  
  $scope.togglenext = function()
  {
    $scope.login = true;
    $scope.register = true;
    $scope.onetimepass=false;
  }
  
  $scope.addAddress = function(){
    $scope.street_name1="";
    $scope.street_name2="";
    $scope.area="";
    $scope.city="";
    $scope.addressID="";
    $scope.toggleToAddressEdit(); 
  }
  
  $scope.getSpecificAddress = function(id){
    //alert(id);
    $.ajax({
      url: "<?php echo site_url();?>WashBox/getSpecificAddress",
      type:"post",
      dataType:"json",
      async:false,
      data:{id:id},      
      success:function(result){
        console.log(result[0].id);
        $scope.street_name1=result[0].street_name1;
        $scope.street_name2=result[0].street_name2;
        $scope.area=result[0].area;
        $scope.city=result[0].city;
        $scope.addressID=result[0].id;
        $scope.toggleToAddressEdit();        
      }
      });
  }
  
  $scope.addressDelete = function(id){
    //alert(id);
    $.ajax({
      url: "<?php echo site_url();?>WashBox/addressDelete",
      type:"post",
      dataType:"json",
      async:false,
      data:{id:id},      
      success:function(result){
        console.log(result);       
      }
      });
  }
  
  $scope.loginForm = function ()
  {
    var userEmail=$scope.userEmail;
    var userPassword=$scope.userPassword;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/loginUser",
      type: "post",
      data: {userEmail:userEmail,userPassword:userPassword},
      dataType:"json",
      success:function(result){
	if (result.message=="yes")
	{
	  $scope.getUserData();
          $scope.sesCheck(result.data);
          $scope.addressChange(result.data);
	  var id = localStorage.setItem("address",result.address);
	  localStorage.setItem("street_name1",result.address.street_name1);
	  localStorage.setItem("street_name2",result.address.street_name2);
	  localStorage.setItem("city",result.address.city);
	  $scope.street_name1=result.address.street_name1;
	  $scope.street_name2=result.address.street_name2;
	  $scope.city=result.address.city;
	  $scope.$apply();
	}
	else
	{
	  alert("Check User Name or Password");
	}
      }
    });
  }
  
  $scope.street_name1=localStorage.getItem("street_name1");
  $scope.street_name2=localStorage.getItem("street_name2");
  $scope.city=localStorage.getItem("city");
  $scope.$apply();
  $scope.profileUpdate = function (){
            $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
	    var first_name=$scope.first_name;
	    var last_name=$scope.last_name;
	    var email=$scope.email;
	    var phone_number=$scope.phone_number;
            $scope.submitted = true;
	    $.ajax({
	      url: "<?php echo site_url();?>WashBox/profileUpdate",
	      type: "post",
	      data: {first_name:first_name,last_name:last_name,email:email,phone_number:phone_number},
	      dataType:"json",
	      asnyc:false,
	      success:function(result){
                console.log(result.data[0].Phone_verified);
                 $scope.reg();
                if (result.message == 'success' && result.data[0].Phone_verified=='Yes') {
		    SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Data updated successfully.!'));
                    $("#confirmAddress").siblings('a.active').removeClass("active");
                    $("#confirmAddress").addClass("active");
                    var index = $("#confirmAddress").index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");    
		}else if (result.message == 'success') {
		    SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Data updated successfully.!'));
                    $('#updateProfile').attr("ng-hide","true");
                    $('#smsProfile').attr("ng-hide","false");
                    $('#updateProfile').addClass("ng-hide");
                    $('#smsProfile').removeClass("ng-hide");
                    smsProfile();
                    $scope.getUserData();
                   
		}else{
		    SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i> error in updating data.'));
		}
                $.loader('close');
	      }
	    });
	  }
  $scope.reg = function ()
  {alert();}       
  $scope.registerForm = function ()
  {
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    var firstName=$scope.firstName;
    var lastName=$scope.lastName;
    var userEmail=$scope.userEmail;
    var userPassword=$scope.userPassword;
    var phoneNumber=$scope.phoneNumber;
    var registeredsuccess;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/registerUser",
      type: "post",
      data: {firstName:firstName,lastName:lastName,phoneNumber:phoneNumber,userEmail:userEmail,userPassword:userPassword},
      dataType:"json",
      asnyc:false,
      success: function(result){
        $('#loginTab').removeClass("active");
        $('#profileTab').addClass("active");
        $('#updateProfile').addClass("ng-hide");
        $('#smsProfile').removeClass("ng-hide");
        console.log(result);
        smsProfile();
        $scope.sesCheck(result);
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Account created sucessfully.!'));
        $scope.getUserData();
        $.loader('close');
      }
    });
    
  }
  $scope.getUserData = function (){
    $.ajax({      
      url: "<?php echo site_url();?>WashBox/getUserData",
      type: "post",
      dataType:"json",
      success:function(result){
        $scope.addressLoop=result.addressData;
        console.log(result.addressData);
        console.log(result.phone);
        var addCheck="1";
        if ((result.phone=='No' || result.phone==null) && result.address== null)
	{
          document.getElementById('placeorder').style.pointerEvents = 'none';
          document.getElementById('confirmorder').style.pointerEvents = 'none';
          $(".address").prop('disabled', true);
          $("#SmsVerifyAlert").show();
          $('.smsBlock').show();
          $('.smsBlock').text('- Phone no. is required');
          $scope.addressLooping = false;
          $scope.addressAction = true;
        }else if ((result.phone=='No' || result.phone==null) && result.address!= null)
	{
          document.getElementById('placeorder').style.pointerEvents = 'none';
          document.getElementById('confirmorder').style.pointerEvents = 'none';
          $(".address").prop('disabled', true);
          $("#SmsVerifyAlert").show();
          $('.smsBlock').show();
          $scope.addressLooping = false;

        } 
        else if(result.phone=='Yes' && result.address== null)
	{
          document.getElementById('placeorder').style.pointerEvents = 'none';
          document.getElementById('confirmorder').style.pointerEvents = 'none';
          $(".address").prop('disabled', false);
          $("#SmsVerifyAlert").hide();
          $('.smsBlock').show();
          $('.smsBlock').text('- Address is required');
        }else if (result.phone=='Yes' && result.address != null )
	{
          document.getElementById('placeorder').style.pointerEvents = 'auto';
          document.getElementById('confirmorder').style.pointerEvents = 'auto';
          $(".address").prop('disabled', false);
          $("#SmsVerifyAlert").hide();
          $('.smsBlock').hide();
          $scope.addressLooping = false;
          $scope.addressAction = true;
        }
      }
    });
  }

  $scope.smsVerify = function (){
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    var otppassword=$scope.otppassword;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/smsVerification",
      type: "post",
      data: {otppassword:otppassword},
      dataType:"json",
      asnyc:false,
      success:function(result){
        console.log(result);
        if (result == "success") {
        $("#confirmAddress").siblings('a.active').removeClass("active");
        $("#confirmAddress").addClass("active");
        var index = $("#confirmAddress").index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Phone number verified successfully'));
        $scope.getUserData();
        $.loader('close');
        }else{
          SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i> Please enter the correct code.!'));
          $scope.getUserData();
          $.loader('close');
        }
      }
    });
  }
  function smsProfile(){
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    $.ajax({
      url: "<?php echo site_url();?>WashBox/smsResend",
      dataType:"json",
      asnyc:false,
      success:function(result){
        if(result==true){
          SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> SMS sent successfully'));
          $.loader('close');
        }else{
          SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>SMS not sent! Please enter the correct number.'));
          $.loader('close');
        }
      }
    });
  }
  
  $scope.smsResend = function (){
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    $.ajax({
      url: "<?php echo site_url();?>WashBox/smsResend",
      dataType:"json",
      asnyc:false,
      success:function(result){
        if(result==true){
          SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> SMS sent successfully'));
          $.loader('close');
        }else{
          SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>SMS not sent! Please enter the correct number.'));
          $.loader('close');
        }
      }
    });
  }
  $scope.sesCheck = function(result)
  {    
    $("#loginRegister").addClass("hide");
    $("#profile").removeClass("hide");
    $("#loginTab").addClass("hide");
    $("#profileTab").removeClass("hide");
    var scope = angular.element('[ng-controller=userController]').scope();
    scope.$apply(function(){
    scope.userName=result.first_name;
    $scope.first_name = result.first_name;
    $scope.last_name = result.last_name;
    $scope.email = result.email;
    $scope.phone_number = result.phone_number;
    console.log(scope.userName);
    angular.element('[ng-controller=userController]').scope();
    $scope.getUserData();
    });
  }
  $scope.addressChange = function (result){
      $("#confirmAddress").siblings('a.active').removeClass("active");
      $("#confirmAddress").addClass("active");
      var index = $("#confirmAddress").index();
      $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
      $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  }
  $scope.placeorderTab = function()
  {
    $("#placeorder").siblings('a.active').removeClass("active");
    $("#placeorder").addClass("active");
     var index = $("#placeorder").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  }
  
  $scope.addressForm = function ()
  {
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    var id=$scope.addressID;
    console.log(id);
    var street_name1=$scope.street_name1;
    var street_name2=$scope.street_name2;
    var area = $scope.area;
    var city=$scope.city;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/userAddress",
      type: "post",
      data: {id:id,street_name1:street_name1,street_name2:street_name2,area:area,city:city},
      dataType:"json",
      success:function(result){
       if (result != ""){
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Address is created sucessfully.!'));
        $scope.placeorderTab();
        $scope.getUserData() ;
        $.loader('close');
       }
      }
    });
    
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var Month = ["gobi","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    var output=(day<10 ? '0' : '') + day + "-"+ Month[month] + '-' +  d.getFullYear() ;
    
    $scope.collectiondateaaaaa=output;
    $scope.collectionDate=output;
    $("#collectiondata").addClass("datepicker");
    $('.datepicker').datetimepicker({ format: 'DD-MMM-YYYY' });
    
  }
  $scope.update = function ()
  {
    var street_name1=$scope.street_name1;
    var street_name2=$scope.street_name2;
    var city=$scope.city;
    
    $.ajax({
      url: "<?php echo site_url();?>WashBox/userAddressUpdate",
      type: "post",
      data: {street_name1:street_name1,street_name2:street_name2,city:city},
      dataType:"json",
      success:function(result){
       if (result != ""){
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Address is created sucessfully.!'));
        $scope.placeorderTab();
       }       
      }
    });
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var Month = ["gobi","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    var output=(day<10 ? '0' : '') + day + "-"+ Month[month] + '-' +  d.getFullYear() ;
    
    $scope.collectiondateaaaaa=output;
    $scope.collectionDate=output;
    $("#collectiondata").addClass("datepicker");
    $('.datepicker').datetimepicker({ format: 'DD-MMM-YYYY' });
  }
 
  $scope.addclassfun=function(event)
  {
    $scope.collectionDate=$(event.target).val();
  }

  $scope.type=[{name:'Wash & Iron'},{name:'Drycleaning'},{name:'Iron'},];
  $scope.selection=[];
  
  // toggle selection for a given employee by name
  $scope.toggleSelection = function toggleSelection() {
    var idx = $scope.selection.indexOf();
    // is currently selected
    if (idx > -1)
    {
      $scope.selection.splice(idx, 1);
    }
    // is newly selected
    else
    {
      $scope.selection.push();
    }
  };
  //wash type end
  
  $scope.placeorder = false;
  $scope.orderdetails = true;
  $scope.toggle = function() {
    $scope.placeorder = !$scope.placeorder;
    $scope.orderdetails = !$scope.orderdetails;
   }
   $scope.typeofLondary=[];
   $scope.savedata=function(data,index)
   {
     var found = $.inArray(data, $scope.typeofLondary);
    if(found ==-1)
    {
      $scope.typeofLondary.push({value:data});
    }
    else
    {
      $scope.typeofLondary.splice(index,1);
    }
   }
   
  $scope.location=<?php echo json_encode($data);?>;
 
  $scope.collection= function ($attr)
  {
    console.log($attr);
  }
  $scope.setval=function(evnt)
  {
    $scope.pickup=evnt
  }
  //deliverytime picker value starts
   $scope.delvalue=function(evnt)
  {
    $scope.deltime=evnt
  }

  $scope.dDate= function ($attr)
  {
  }
  $scope.deldate=function(evnt)
  {
    $scope.deldate=($(evnt.target).val());
  }
  $scope.pickupdate=function(evnt)
  {
    $scope.collectiondateaaaaa=($(evnt.target).val());
    $scope.$apply();
  }
  $scope.placeorderForm = function ()
  {
    var pick = $("#collectiondata").val();
    var delivery = $("#lastDate").val();
    $scope.collectionDate=pick;
    $scope.deldate=delivery;
    $("#confirmorder").siblings('a.active').removeClass("active");
    $("#confirmorder").addClass("active");
    var index = $("#confirmorder").index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    $scope.$apply();
  }
    
  
  $scope.orderSave=function()
  {
    var tyopwash=[];
    var deliveryNotes=$scope.deliveryNotes;
    var cleantype=$scope.typeofLondary;
    for(var i=0;i<cleantype.length;i++)
    {
	tyopwash.push({"value":cleantype[i].value});
    }
    console.log(tyopwash);
    var collectiondate=$scope.collectiondateaaaaa;
    var deliverydate=$scope.deldate;
    var pickuptime=$scope.pickup;
    var deliverytime=$scope.deltime;
    $.ajax({
      url: "<?php echo site_url();?>WashBox/placeOrder",
      type: "post",
      data: {deliveryNotes:deliveryNotes,collectiondate:collectiondate,deliverydate:deliverydate,cleantype:tyopwash,pickuptime:pickuptime,deliverytime:deliverytime},
      dataType:"json",
      success:function(result){
	 callNotify();
          //$("#confirmOrderDisplay");
          //window.location.reload();
      },
      error:function()
      {
	  alert("error");
      }
    });
  }

})

//NON DRAGGABLE IMAGE
$(".img").mousedown(function(){    return false;   });
$('.datepicker').datetimepicker({   format: 'DD-MMM-YYYY'   });
//document.getElementById("date").value = output;
</script>

<script>
function callNotify(){
  alert("test");
Notify('confirmation successfully', 'top-left', '10000', 'success', 'fa-truck', true);
}

function washType($val){
var type= $val;
if (type=="type" || type=="date") {
var selected = $("#collectiondata").val();
var arr = selected.split("-");
var currentDate=arr[0];
var currentMonth =arr[1];
var currentyear=arr[2];
var months = {Jan:0,Feb: 1, Mar:2,Apr:3,May:4,Jun:5, Jul:6, Aug:7, Sep :8, Oct:9, Nov: 10, Dec: 11};
var monthNumber = months[currentMonth];
var today = new Date(currentyear, monthNumber, currentDate);
var newD=today.getDate();
var Month = ["gobi","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
  if ($('.chk:checked').length) {
    var chkId = '';
    var value=0;
    $('.chk:checked').each(function () {
      chkId += $(this).val() + ",";
    });
    chkId = chkId.slice(0, -1);
    if(chkId=="Wash & Iron"){
      value= 5;
    }
    else if (chkId=="Drycleaning") {
      value= 50;
    }
    else if (chkId=="Iron"){
      value= 5;
    }
    else if(chkId=="Wash & Iron,Drycleaning,Iron"){
      value= 20;
    }
    else if(chkId=="Wash & Iron,Drycleaning"){
      value= 15;
    }
    else if(chkId=="Wash & Iron,Iron"){
      value= 10;
    }
    else if(chkId=="Drycleaning,Iron"){
      value= 15;
    }
    var finalValue=value;
    var newDay=today.setDate(today.getDate() + finalValue);
    var LastDate= new Date(newDay);
    var day = LastDate.getDate();
    var month= LastDate.getMonth()+1;
    var year=LastDate.getFullYear();
    var Finaldate=(day<10 ? '0' : '') + day + "-"+ Month[month] + '-' +  year;
    $("#lastDate").val(Finaldate);
  }
}
}
</script>

<script>
$(window).load(function(){
    <?php
      $sessonUser=$this->session->userdata("user");
      $result=$sessonUser["id"]; ?>
    var sessionUser= "<?php echo $result; ?>";
    if (sessionUser!="") {
    $.ajax({
      url: "<?php echo site_url();?>WashBox/getAddressLoad",
      type: "post",
      data: {sessionUser:sessionUser},
      dataType:"json",
      success:function(result)
      {
        var scope = angular.element('[ng-controller=registerController]').scope();
        scope.$apply(function(){
        scope.street_name1=result[0].street_name1;
        scope.street_name2=result[0].street_name2;
        scope.area=result[0].area;
        scope.city=result[0].city;
        console.log(scope.street_name1);
        angular.element('[ng-controller=registerController]').scope();
        //$scope.getUserData();
        });
        
      },
    });
    }
    else{
      $("#update").addClass('hide');
      $("#continue").removeClass('hide');
    }
});
</script>
  <script>
  function serviceDuraiton()
  {
    var limit=0;
    var maxArray=[];

    $(".washType").each(function(){

      if($(this).is(":checked"))
      {
      maxArray.push($(this).val());
      }
        
    });
    if(maxArray.length>0){
    return Math.max.apply(Math, maxArray);

    }
    else
    {
    return 0;

    }

  }
  var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  var dayNames = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
  var holiday = ['30-12-2015','1-1-2016'];

  pickup();
  first();
  function first(){
    var firstDate=new Date();
    delivery(firstDate.getDate()+"-"+(firstDate.getMonth()+1)+"-"+firstDate.getFullYear());
  }
  function pickup()
  {
    var pickUpFullDate=new Date();

    for (i = 0; i < 7; i++) 
    {
      if(i==0)
      {
        limitDuration=0;
      }
      else
      {

        limitDuration=1;
      }
      pickUpFullDate.setDate(pickUpFullDate.getDate()+limitDuration);
      var mypickupDay=pickUpFullDate.getDate();
      var mypickupDayWords=pickUpFullDate.getDay();
      var mypickupmonth=parseInt(pickUpFullDate.getMonth()+1);
      var mypickupyear=pickUpFullDate.getFullYear();
      var currentDate=  mypickupDay+"-"+mypickupmonth+"-"+mypickupyear;


    if($.inArray(currentDate, holiday) == -1){
    $(".pickup").append("<b class='sub col-sm-2' onclick='delivery("+'"'+currentDate+'",this'+")'> <div>"+monthNames[mypickupmonth-1]+" "+mypickupDay+"</div><div>"+dayNames[mypickupDayWords]+"</div> <input type='hidden' class='date' value='"+currentDate+"'></b>");  
    }
    else{
      i=i-1;
    }
    }

  }
  function delivery(deliveryValue,$this){

    if($($this).hasClass("active")==false){
    $($this).addClass("active");
    }

    $(".pickup .sub").each(function(){

    if(this!=$this){
      if($(this).hasClass("active")==true){
        $(this).removeClass("active");
      }
    }
    });
    $(".delivery").html(" ");
    var data=deliveryValue;
    var limitDuration;
    var deliveryDate;
    var activeClass;
    var deliveryArray=data.split("-",3);
    var delivery=new Date();
    delivery.setMonth(deliveryArray[1]-1);
    delivery.setFullYear(deliveryArray[2]);
    delivery.setDate(deliveryArray[0]);
    delivery.setDate(delivery.getDate()+serviceDuraiton());
    for (i = 0; i < 7; i++) 
    {
      if(i==0)
      {
        limitDuration=0;
        activeClass="active";

      }
      else
      {
        activeClass="";

        limitDuration=1;
      }
      delivery.setDate(delivery.getDate()+limitDuration);

      var deliveryDay=delivery.getDate();
      var deliveryDayWords=delivery.getDay();
      if (delivery.getMonth()==0){

      }
      var deliveryMonth=delivery.getMonth();
      var deliveryYear=delivery.getFullYear();
      deliveryDate=deliveryDay+"-"+deliveryMonth+"-"+deliveryYear;
    if($.inArray(deliveryDate, holiday) == -1){

    $(".delivery").append("<b class='sub col-sm-2 "+activeClass+"' onclick='refreshDelivery(this)'> <div>"+monthNames[deliveryMonth]+" "+deliveryDay+"</div><div>"+dayNames[deliveryDayWords]+"</div> <input type='hidden' class='date' value='"+deliveryDate+"'></b>");  

    }
    else{
      i=i-1;
    }
  }
  }
  function refreshDelivery($row){
    if($($row).hasClass("active")==false){
    $($row).addClass("active");
    }
    var $this=$row;
    $(".delivery .sub").each(function(){

    if(this!=$this){
      if($(this).hasClass("active")==true){
        $(this).removeClass("active");
      }
    }
  }); 
  }
  </script>
 <div id="success" data-notify-type="success" data-notify-msg="hi"></div>
 <div id="error" data-notify-type="error" data-notify-msg="hi"></div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Address</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>