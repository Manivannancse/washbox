<?php
  $session=$this->session->userdata("user");
  
  if($session=="")
  {
    $login="active";
    $profile="";
    $address="";
  }
  else if($session["Phone_verified"]=="Yes")
  {
    $login="";
    $profile="";
    $address="active";
  }
  else {
    $login="";
    $profile="active";
    $address="";
  }
  
  //$data=$this->Wash_Model->getUserData($session['id']);
?>

<style>
.anchorDisabled {
  color: #AAAAAA;
  cursor: not-allowed;
  pointer-events: none;
  text-decoration: none;
}
.spance > label{
  padding: -2px;
}
.spance{
  padding: 6px;
}
.no-padding-right{
  padding-left:0px;

  padding-right:5px;
}
.truck-body{
  padding: 10px 0 10px 14px;
  font-size:17px;

}
.trucks {
    background-attachment: scroll;
    background-clip: border-box;
    background-color: rgba(0, 0, 0, 0);
    background-image: url('<?php echo site_url();?>application/assests/images/trucks.png');
    background-origin: padding-box;
    background-repeat: no-repeat;
    background-size: auto auto;
    display: block;
    float: left;
    margin-right: 10px;
    width: 64px;
}
.truck_delivery  {
    background-position: 0 -35px;
    height: 33px;
}
  .truck_collection  {
    background-position: 0 0;
    height: 33px;
}
    #termsconditions{
     display: inline  !important; 
    }
    .sub
    {
      height:65px;
      width:14% !important;
      color:white;
      padding-top: 1.5px;
      text-align: center;
      font-weight:normal;
    }
    
    .pickup  .active{
      margin-top: 0px;
      background-color: #f6f6f6;
      color: #25a7fd;
    }
    .delivery  .active
    {
      margin-top: 0px;
      background-color: #f6f6f6;
      color: #8AC03F;
    }
    .pickuptime{
      background:#F7F7F7;

    }
    
    .pickup{
      background:#1FA5FE;
      
    }
    .deliverytime{
      background:#F7F7F7;

    }
    .delivery{
      background:#87BF3A;
    }
    .pickup-body{
      box-shadow:3px 3px 8px 1px grey ;

    }
    .delivery-body{
      box-shadow:3px 3px 8px 1px grey ;

    }
    .delivery .active
    {
    }
    .delivery .sub
    {
    /*    box-shadow:3px 3px 8px 1px grey ;
        background:#00ff99;*/
    cursor: pointer;
    }
    .pickup .sub
    {
    /*    box-shadow:3px 3px 8px 1px grey ;
        background:#00cfFF;*/
    cursor: pointer;
    }
  
  .btn-pickup label, .btn-deliver label{

    width: 100%;
  }
  .btn-pickup div, .btn-deliver div{
    padding-left: 3px !important;
    padding-right: 12px !important;

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
      div.bhoechie-tab-content, .bhoechie-tab-content
      {
        padding-left: 0px !important;
      }
      .pickup, .deliver
      {
        padding: 0px !important;
      }
      .sub
      {
        height: 67px;
        padding-top: 4.5px;
      }
    .pickup-mobile, .delivery-mobile{
      padding: 0 0 0 15px !important;
      
    }
  }
    .pickup-mobile, .delivery-mobile{
      padding-bottom:15px;
      
    }

  .verticalHr {
    margin: 15px -8px;
  }
  .socialInfo{
    color: #33AFFF;
    font-size: 15px;
  }
  .gIcon
  {
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
  .gIcon:hover
  {
    background-color: #DD4B39;
    color: #fff;
  }
  .fbIcon
  {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #3b5998;
    color: #3b5998;
    font-size: 17px;
    margin-right: 5px;
    padding: 10px 20px;
    width: 170px;
    border-radius: 3px;
  }
  .fbIcon:hover
  {
    background-color: #3b5998;
    color: #fff;
  }

  #confirmOrderDisplay p
  {
    margin-bottom: 3px;
    line-height: 3;
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
  .btn-washtype
  {
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
    padding-top: 0%;
  }
  .registerForm{
/*        padding-top: 6%;
*/  
  }
  .profile{
/*        padding-top: 6%;
*/  }
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
      background-color: #97CBE2 !important;
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
      background-color: #B6C89F !important;
      
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
    .disabled-btn{
    background-color: #FFF !important;
    color:black !important;

  }
  .order-img{
      height: 25px;
      width: 35px;
  }
  .btn-pickup, .btn-deliver{
  padding: 10px 0 25px 0;
  }
  .btn-pickup .active, .btn-deliver .active{
    box-shadow: 0 3px 5px 0.1px grey !important;
    color: white !important;
  }
  .btnradio:active,.btnradio:hover,.btnradio:focus{
    background-color: #0a8cc5 !important;
    box-shadow: 0 3px 5px 0.1px grey !important;
    border: none !important;
  }
  .btnradio1:active,.btnradio1:hover,.btnradio1:focus{
    background-color: #91ad6c  !important;
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
      padding-bottom:20px;
  
  }
  .req {
    color: #ea1b2a;
}

</style>
<section id="content"   style="background: #E0E0E0;"  ng-app="washbox" ng-controller="WashBoxController">
  <div class="container tabpad" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="background-color: #E0E0E0;">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bhoechie-tab-menu hidden-xs">
          <div class="list-group">
          <a href="#" ng-class="{anchorDisabled: loginDisabled}" class="list-group-item text-center <?php echo $login; ?> <?php if( $login==""){ echo "hide";}; ?>  " id="loginRegister"><h4><i class="fa fa-sign-in"></i></h4>Log In / Register</a>
          <a href="#" ng-class="{anchorDisabled: profileDisabled}" class="list-group-item text-center <?php echo $profile; ?> <?php if( $address==""){ echo "hide";}; ?>" id="Profile"><h4><i class="fa fa-sign-in"></i></h4>Profile</a>
          <a href="#" ng-class="{anchorDisabled: addressDisabled}" class="list-group-item text-center <?php echo $address; ?> " id="confirmAddress"><h4><i class="fa fa-home"></i></h4>Confirm Address</a>
          <a href="#" ng-class="{anchorDisabled: orderDisabled}" class="list-group-item text-center" id="placeorder"><h4><i class="fa fa-paper-plane"></i></h4>Place Order</a>
          <a href="#" ng-class="{anchorDisabled: confirmDisabled}" class="list-group-item text-center" id="confirmorder"><h4><i class="fa fa-check-circle-o"></i></h4>Conform Order</a>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bhoechie-tab"  style="background-color: white;">
          <!-- login section -->
          <div id="loginDisplay" class="bhoechie-tab-content <?php echo $login; ?>" >
            <div class="col-md-5 login-tab "   ng-hide="loginForm">
              <form class="loginForm" role="form"  ng-submit="loginSubmit()" method="post" name="userlogin" novalidate>
                <div class="form-group">
                  <h2>Log In</h2>
                </div>
                <div class="form-group space8">
                  <label for="usr">Email Address:</label>
                  <input type="email" class="form-control input-sm" ng-model="userEmail" name="userEmail" placeholder="Enter Your Email" required>
                  <span style="color:#DD4F3E" ng-show="userlogin.userEmail.$dirty && userlogin.userEmail.$invalid">
                    <span ng-show="userlogin.userEmail.$error.required">UserName is required.</span>
                    <span ng-show="userlogin.userEmail.$error.email">User should be your email Id.</span>
                  </span>
                </div>
                <div class="form-group">
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control input-sm" ng-model="userPassword" name="userPassword" placeholder="Password" required>
                  <span style="color:#DD4F3E" ng-show="userlogin.userPassword.$dirty && userlogin.userPassword.$invalid">
                  <span ng-show="userlogin.userPassword.$error.required">Password is required.</span>
                  </span>
                  <a style="float: right;" href="" ng-click="forgotpassword()">Forgot Password ?</a>
                </div>
                <div class="form-group">
                  <button type="submit" ng-disabled="userlogin.userPassword.$dirty && userlogin.userPassword.$invalid || userlogin.userEmail.$dirty && userlogin.userEmail.$invalid" onclick="return getData()" class="button orange button-rounded">Sign In <i class="icon-circle-arrow-right"></i></button><hr>
                </div>
                <div class="form-group">
                  <span>Don't Have an Account? &nbsp;</span><a href="#" ng-click="toggle()" >Register Now</a>
                </div>
              </form>
            </div>

            <div ng-hide="passwordHide">
              <form class="loginForm col-md-6 col-md-offset-3" role="form" ng-submit="sendpassword()" name="myForm" novalidate method="POST">
                  <div class="form-group">
                    <center>
                    <h1>Enter Your Email </h1>
                    </center>
                  </div>
                  <div class="form-group">
                   <input type="email" class="form-control input-sm otp" ng-model="sendEmail" name="sendEmail" placeholder="Enter Your Email" required>
                    <!--<a>Enter Your Email to Chage Password</a>-->
                    <span style="color:#DD4F3E" ng-show="myForm.sendEmail.$dirty && myForm.sendEmail.$invalid">
                      <span ng-show="myForm.sendEmail.$error.required">Email is required.</span>
                      <span ng-show="myForm.sendEmail.$error.email">Invalid email address.</span>
                    </span>
                  </div>
                  <div class="form-group">
                    <center><a  ng-click="forgotpassword()">Click here to get back login window</a></center>
                  </div>
                   <div class="form-group">
                    <center><button type="submit" ng-disabled="myForm.sendEmail.$dirty && myForm.sendEmail.$invalid" class="button orange button-rounded">Send <i class="icon-circle-arrow-right"></i></center></button><hr>
                  </div>
              </form>
            </div>

            
            <div class="col-md-5"  ng-hide="registrationForm">
             <form class="" ng-submit="registrationSubmit()" role="form" method="post" name="resgisterform">
                <div class="form-group">
                  <h2>Register Now</h2>
                </div>
                <!--<div class="form-group">
                 <label>User Name:</label>
                 <input type="text" class="form-control input-sm" ng-model="userName" placeholder="User Name" >
                </div>-->
                <div class="col-md-12 no-padding">
                  <div class="form-group">
                   <label>EmailId:</label>
                   <input type="email" class="form-control input-sm" ng-model="userEmail" name="userEmail" placeholder="Email" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.userEmail.$dirty && resgisterform.userEmail.$invalid">
                        <span ng-show="resgisterform.userEmail.$error.required">UserName is required.</span>
                      <span ng-show="resgisterform.sendEmail.$error.email">User should be your valid Email Id.</span>
                      </span>
                  </div>
                </div>

                <div class="col-md-12 no-padding">
                  <div class="form-group col-md-6 no-padding-right" >
                   <label>Password:</label>
                   <input type="password" id="userPassword" class="form-control input-sm" ng-model="userPassword" name="userPassword" placeholder="Password" ng-keyup="checkpassword()" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.userPassword.$dirty && resgisterform.userPassword.$invalid">
                      <span ng-show="resgisterform.userPassword.$error.required">user Password is required.</span>
                    </span>
                  </div>
                  <div class="form-group col-md-6 no-padding-right" >
                   <label>Confirm Password:</label>
                   <input type="password" id="confirmPassword" class="form-control input-sm" ng-model="confirmPassword" name="confirmPassword" placeholder="Confirm Password" ng-keyup="checkpassword()" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.confirmPassword.$dirty && resgisterform.confirmPassword.$invalid">
                      <span ng-show="resgisterform.confirmPassword.$error.required">confirm Password is required.</span>
                    </span>
                    <span ng-hide="PasswordNotMatch">Password Not Match.</span>
                  </div>
                </div>
                <div class="col-md-12 no-padding">
                  <div class="form-group col-md-6 no-padding-right">
                   <label>First Name:</label>
                   <input type="text" class="form-control input-sm" ng-model="firstName" name="firstName" placeholder="First Name" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.firstName.$dirty && resgisterform.firstName.$invalid">
                      <span ng-show="resgisterform.firstName.$error.required">First Name is required.</span>
                    </span>
                  </div>
                  <div class="form-group col-md-6 no-padding-right" >
                   <label>Last Name:</label>
                   <input type="text" class="form-control input-sm" ng-model="lastName" name="lastName" placeholder="Last Name" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.lastName.$dirty && resgisterform.lastName.$invalid">
                      <span ng-show="resgisterform.lastName.$error.required">lastName is required.</span>
                    </span>
                  </div>
                </div>
                <div class="col-md-12 no-padding">
                  <div class="form-group" >
                   <label>Mobile no.:</label>
                   <input type="tel" class="form-control input-sm" ng-model="userPhone" name="userPhone" placeholder="Phone Number" ng-maxlength="10" ng-minlength="10" ng-required="true" ng-required="true">
                     <span style="color:#DD4F3E" ng-show="resgisterform.userPhone.$dirty && resgisterform.userPhone.$invalid">
                        <span class="error" ng-show="resgisterform.userPhone.$error.required">
                          Number is Required!</span>
                        <span class="error" ng-show="resgisterform.userPhone.$error.number">
                          Number Not valid number!</span>
                         <span class="error" ng-show="resgisterform.userPhone.$error.maxlength">
                          Max number is 10</span>
                         <span class="error" ng-show="resgisterform.userPhone.$error.minlength">
                          Max number is 10</span>
                      </span>
                      <!--<span style="color:#DD4F3E" ng-show="resgisterform.userPhone.$dirty && resgisterform.userPhone.$invalid">
                      <span ng-show="resgisterform.userPhone.$error.required">Phone Number is required.</span>-->
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div ng-disabled="passwordcheckval">
                    <button type="submit"  ng-disabled="resgisterform.userPhone.$dirty && resgisterform.userPhone.$invalid || resgisterform.userEmail.$dirty && resgisterform.userEmail.$invalid || resgisterform.lastName.$dirty && resgisterform.lastName.$invalid || resgisterform.firstName.$dirty && resgisterform.firstName.$invalid" class="button  button-rounded button-blue-custome">Sign Up <i class="icon-circle-arrow-right"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <span>I'm already having account! &nbsp;<a href="#" ng-click="toggle()" >Log In</a></span>
                </div>
              </form>
            </div>
          
            <div class="col-md-1 hidden-xs verticalHrDiv" ng-hide='socialLogin'><img class="verticalHr" src="<?php echo site_url();?>application/assests/images/shadow1.png"></div>
            <div class="col-md-1 hidden-md hidden-lg hidden-sm  horizantalHrDiv" ng-hide='socialLogin'><img class="horizantalHr" src="<?php echo site_url();?>application/assests/images/shadow2.png"></div>
            <div class="col-md-6 socialLogin" ng-hide='socialLogin'>
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
          <!-- Profile section -->
          <div  class="bhoechie-tab-content <?php echo $profile; ?>"  id="profileDisplay">
            <div class="col-md-6 col-sm-7 space8" id="smsProfile" ng-hide="onetimepass">
              <form ng-submit="smsVerify()" role="form" method="post">
               <div class="form-group ">
                 <h2><center>One Time Password</center><center></h2>
               </div>
               <div class="form-group ">
                   <input type="password" placeholder="Enter Your SMS Verification Code"class="form-control otp" ng-model="otppassword" id="otppassword">
               </div>
               <div class="form-group">
                  <center><a href="#" ng-click="sendSMS(true)" ><button type="button" class="button button-rounded button-red-custome">Resend <i class="icon-ok"></i></button></a>
                   <button type="submit" class="button  button-rounded button-blue-custome">Verify <i class="icon-ok"></i></button></center> 
               </div>
               <div class="" style="color: rgb(123, 123, 123);">
                 Message not yet received?. Go <a href="#" ng-click="profileDisplay=false;onetimepass=true;" >Back to profile</a> & check your number
               </div>
              </form>
            </div>
    
            <form name="profileForm" class="profile" ng-submit="profileUpdate()" ng-hide="profileDisplay" role="form"  method="post" name="profile" novalidate >
              <div class="form-group">
                <h2>Profile details</h2>
              </div>
              <div class="form-group row" >
                 <div class="col-md-6">
                  <label>First Name:<span class="req">*</span></label>
                    <input type="text" name="name" class="form-control input-sm " placeholder="First Name" ng-model="firstName" ng-required="true" >
                      <span style="color:#DD4F3E" ng-show="profileForm.name.$dirty && profileForm.name.$invalid">
                      <span ng-show="profileForm.name.$error.required">First Name is required.</span>
                    </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Last Name:</label>
                  <input type="text" class="form-control input-sm " placeholder="Last Name" ng-model="lastName" name="lastName" ng-required="true">
                    <span style="color:#DD4F3E" ng-show="profileForm.lastName.$dirty && profileForm.laName.$invalid">
                      <span ng-show="profileForm.lastName.$error.required">lastName is required.</span>
                    </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                 <label>Email:<span class="req">*</span></label>
                  <input type="email" name="email"  class="form-control input-sm " placeholder="Email" ng-model="userEmail"  ng-required="true" >
                    <span style="color:#DD4F3E" ng-show="profileForm.email.$dirty && profileForm.email.$invalid">
                      <span ng-show="profileForm.email.$error.required">Email is required.</span>
                      <span ng-show="profileForm.email.$error.email">Invalid email address.</span>
                    </span>
                </div>
                <div class="col-md-6">
                  
                </div>
              </div>
              <div class="form-group row" >
                <div class="col-md-6">
                  <label>Phone Number:<span class="req">*</span></label>
                  <input type="text" name="contactno" class="form-control input-sm "placeholder="Phone Number" ng-model="userPhone" id="phoneNumber" ng-pattern="/^[789]\d{9}$/" maxlength="10" ng-required="true" >
                    <span style="color:#DD4F3E" ng-show="profileForm.contactno.$dirty && profileForm.contactno.$invalid">
                        <span class="error" ng-show="profileForm.contactno.$error.required">
                          Number is Required!</span>
                        <span class="error" ng-show="profileForm.contactno.$error.number">
                          Number Not valid number!</span>
                         <span class="error" ng-show="profileForm.contactno.$error.maxlength">
                          Max number is 10</span>
                         <span class="error" ng-show="profileForm.contactno.$error.minlength">
                          Max number is 10</span>
                      </span>
                </div>
                <div class="col-md-6" ng-hide="smsVerifyAlert">
                  <span id="SmsVerifyAlert" ><label class="SmsVerifyAlert" style="color: red;">- Phone no. not verified</label><br><span class="smsBlockAlign">Having Verification code Already?.</span><br><span class="smsBlockAlign">Go to<a href="#" ng-click="profileDisplay=true;onetimepass=false;sendSMS(true)" > SMS verifiction</a>.</span></span>
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                <button type="submit" class="button orange button-rounded" ng-disabled="profileForm.name.$dirty && profileForm.name.$invalid || profileForm.lastName.$dirty && profileForm.lastName.$invalid || profileForm.email.$dirty && profileForm.email.$invalid || profileForm.contactno.$dirty && profileForm.contactno.$invalid ">
                  Continue <i class="icon-circle-arrow-right"></i></button>
                </div>
              </div>
            </form>

          </div> 
          <!--Confirm Address Tab-->
          <div  class="bhoechie-tab-content <?php echo $address; ?>" id="addressDisplay">
          
            <div class="" id="addressLooping" ng-hide="addressLooping">
              
              <div class="row">                    
                <div class="col-sm-3" ng-repeat="x in addressLoop">
                  <div class="well customWell">
                    <div class="" style="color: darkgray">
                    {{ x.address_type }}
                    </div>
                    <div class="spance">
                    <label for="billing-form-name">Address :</label>
                    {{ x.street_name1}} 
                    </div>
                    <!--<div class="spance">
                    <label for="billing-form-name">Landmark :</label>
                    {{ x.landmark }}
                    </div>-->
                    <div class="spance">
                    <label for="billing-form-name">Area :</label>
                    {{ x.area }}
                    </div>
                    <div class="spance">
                    <label for="billing-form-name">City :</label>
                    {{ x.city }}
                    </div>
                    <div>
                    <button type="submit" class="button orange button-rounded address" id="continue" ng-click='placeorderTab(x.id)'>Continue</button>
                    </div>
                    <div>
                    <a href='#' class="fa fa-trash" ng-click='addressDelete(x.id)' style="padding-right: 10px;"> Delete</a>
                    <a href='#' class="fa fa-pencil" ng-click='getSpecificAddress(x.id)'> Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="col_half">
                  <button class="button orange button-rounded address" id="continue" ng-click="addAddress()">Add address <i class="fa fa-plus-circle"></i></button>
                </div>
              </div>
            
            </div>
            <form class="" ng-submit="addressForm()" role="form" method="post" id="addressAction" ng-hide="addressAction" name="addressvalidation">
              <a href="#" ng-hide="BackAddress" ng-click='toggleToAddressView()'> Back to saved Address</a>
              <div class="col_half">
               <label>Address Type
               <div style="margin-top:10px">
                    <div class="col-md-3 no-padding">
                          <div class="col-md-2 no-padding">
                            <input type="radio" ng-model="address.type" name="address.type" value="Office" style="display: block;">
                          </div>
                          <div class="col-md-6">
                            <label>Office</label>  
                          </div>
                        </div>
                        <div class="col-md-3 no-padding">
                          <div class="col-md-2">
                            <input type="radio" ng-model="address.type" name="address.type" value="Home" style="display: block;">
                          </div>
                          <div class="col-md-6">
                            <label>
                              Home
                            </label>  
                          </div>
                        </div>
                        <div class="col-md-3 no-padding">
                          <div class="col-md-2">
                            <input type="radio" ng-model="address.type" name="address.type" value="Other" style="display: block;">
                          </div>
                          <div class="col-md-6">
                            <label>
                              Other
                            </label>  
                          </div>
                        </div>
               </div>
               </label>
               </div>
              <!--<div class="col_half ">
                <label for="billing-form-name">Customer Type:</label>
                        <select class="sm-form-control" ng-model="address_type" name="address_type" ng-required="true">
                            <option value="">Select</option>
                            <option value="Office">Office</option>
                            <option value="Home">Home</option>
                            <option value="Other">Other</option>
                        </select>
                  <span style="color:#DD4F3E" ng-show="addressvalidation.address_type.$dirty && addressvalidation.address_type.$invalid">
                    <span ng-show="addressvalidation.address_type.$error.required">Customer Typeis required.</span>
                  </span>
                </div>-->
              <div class="col_half ">
              <label for="billing-form-name">Address 1:</label>
              <textarea rows ="2" id="register-form-name" placeholder="Enter Your Address" ng-model="street_name1" class="required form-control input-block-level" type="text" value="" name="street_name1" ng-required="true"></textarea>
               <span style="color:#DD4F3E" ng-show="addressvalidation.street_name1.$dirty && addressvalidation.street_name1.$invalid">
                    <span ng-show="addressvalidation.street_name1.$error.required">Address 1 Name is required.</span>
                  </span>
              </div>
       <!--       <div class="col_half">
              <label for="billing-form-name">Address 2:</label>
              <input id="register-form-name" placeholder="Enter Your Address" ng-model="street_name2" class="required input-sm  form-control input-block-level" type="text" value="" name="street_name2" ng-required="true">
                 <span style="color:#DD4F3E" ng-show="addressvalidation.street_name2.$dirty && addressvalidation.street_name2.$invalid">
                    <span ng-show="addressvalidation.street_name2.$error.required">Address 2 Name is required.</span>
                  </span>
              <input type="hidden" ng-model='addressID'>
              </div>-->
              <!--<div class="col_half">
              <label for="billing-form-name">Landmark:</label>
              <input id="register-form-name" placeholder="Enter Your Landmark" ng-model="landmark" class="required input-sm  form-control input-block-level" type="text" value="" name="landmark" ng-required="true">
                <span style="color:#DD4F3E" ng-show="addressvalidation.landmark.$dirty && addressvalidation.landmark.$invalid">
                    <span ng-show="addressvalidation.street_name1.$error.required">landmark Name is required.</span>
                  </span>
              </div>-->
              <div class="col_half">
              <label for="billing-form-name">Area:</label>
              <input id="register-form-name" placeholder="Enter Your Area" ng-model="area" class="required input-sm  form-control input-block-level" type="text" value="" name="area" ng-required="true">
                <span style="color:#DD4F3E" ng-show="addressvalidation.area.$dirty && addressvalidation.area.$invalid">
                    <span ng-show="addressvalidation.area.$error.required">Area Name is required.</span>
                  </span>
              </div>
              <div class="col_half">
              <label for="billing-form-name">City:</label>
              <input id="register-form-name" placeholder="Enter Your City" ng-model="city" class="required input-sm  form-control input-block-level" type="text" value="" name="city" ng-required="true">
                <span style="color:#DD4F3E" ng-show="addressvalidation.city.$dirty && addressvalidation.city.$invalid">
                    <span ng-show="addressvalidation.city.$error.required">City Name is required.</span>
                  </span>
              </div>		   
              <div class="col_half">
              <button type="submit" class="button orange button-rounded address" id="continue" ng-disabled="addressvalidation.city.$dirty && addressvalidation.city.$invalid || addressvalidation.area.$dirty && addressvalidation.area.$invalid || addressvalidation.landmark.$dirty && addressvalidation.landmark.$invalid || addressvalidation.street_name1.$dirty && addressvalidation.street_name1.$invalid || addressvalidation.address_type.$dirty && addressvalidation.address_type.$invalid">Save & continue</button>
              </div>
            </form>                   
          </div> 
          <!-- PlaceOrder  -->
          <div class="bhoechie-tab-content" id="placeOrderDisplay" >
            <form class="" ng-submit="placeorderForm()" role="form" method="post">
              <div class="col-md-12" ng-hide="placeorder">
                <div class="col-md-12" style="padding:0 14px;margin-bottom: 17px !important;">
                  <div class="col-md-12 no-padding">
                    <div class="row">
                    <div class="col-md-12 col-xs-12" style="padding: 0 0 14px 12px;">
                    <h2 >Place Your Order</h2>
                    </div>
                    </div>
<!--                    <div class="btn-group col-md-4 col-xs-12 no-padding" ng-repeat="washtype in serviceType">
                      <input id="{{washtype.name}}" checked ng-model="cleantype"  type="checkbox" />
                      <label class="btn-washtype"for="{{washtype.name}}">{{washtype.name}}</label>
                    </div>  -->
                    <div class="btn-group col-md-4 col-xs-12 no-padding"  >
                      <input type="checkbox"  type="checkbox" ng-change="serviceChange()" id="Wash & Iron" data-value="WASH" data-DESC="Washing" value="3" ng-model="serviceType.wash_iron" class="washType"    />
                      <label class="btn-washtype" for="Wash & Iron">Washing</label>
                    </div>
                    <div class="btn-group col-md-4 col-xs-12 no-padding" >
                      <input  id="Dry Cleaning" value="5"  ng-change="serviceChange()" ng-model="serviceType.dry" data-value="DRY" data-desc="Dry Cleaning" class="washType" type="checkbox"   />
                      <label class="btn-washtype" for="Dry Cleaning">Dry Cleaning</label>
                    </div>
                    <div class="btn-group col-md-4 col-xs-12 no-padding"  >
                      <input id="Iron"  value="3"  ng-change="serviceChange()" ng-model="serviceType.iron" data-value="IRON" data-desc="Iron" class="washType" type="checkbox"   />
                      <label class="btn-washtype" for="Iron">Iron</label>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 pickup-mobile">
                  <div class="pickup-body">
                  <div class="col-md-12 truck-body" >
                    <span class="truck_collection trucks"> </span><font color="#25A7FD"> Collection <span class="req">*</span></font> Please choose a collection date</div>

                  <div class="pickup  col-sm-12 col-xs-12">
                  </div>
                  <div class="pickuptime">
                    <div class="btn-group btn-pickup " data-toggle="buttons"> 
                      <div class="col-xs-6 col-md-4 col-sm-3"  ng-repeat="pickuptime in pickuptimepicker">
                        <label ng-if="pickuptime.disable=='true'"  ng-click="setval(pickuptime.name);" class="btnradio btn disabled-btn" ng-disabled="{{pickuptime.disable}}" >
                          <input type="radio" ng-model="pickup" ng-value="{{pickuptime.name}}" autocomplete="on" > {{pickuptime.name}}
                        </label>
                        <label ng-if="pickuptime.disable=='false'" ng-click="setval(pickuptime.name);" class="btnradio btn " ng-disabled="{{pickuptime.disable}}" >
                          <input type="radio" ng-model="pickup" ng-value="{{pickuptime.name}}" autocomplete="on" > {{pickuptime.name}}
                        </label>
                      </div>
                    </div>
                  </div>
                  </div>
               
                </div>
                <div class="col-md-6 delivery-mobile">
                    <div class="delivery-body">
                    <div class="col-md-12 truck-body">
                      <span class="truck_delivery trucks"> </span><font color="#8AC03F"> Delivery <span class="req">*</span></font>Please choose a delivery date</div>
                    <div class="delivery  col-sm-12 col-xs-12">
                    </div>

                    <div class="deliverytime">
                      <div class="btn-group btn-deliver" data-toggle="buttons">
                          <div class="col-xs-6 col-md-4 col-sm-3" ng-repeat="deliverytime in deliverytimepicker"  >
                              <label ng-if="deliverytime.disable=='true'" ng-click="delvalue(deliverytime.name);" class="btnradio1 btn disabled-btn" ng-disabled="{{deliverytime.disable}}">
                                <input type="radio" ng-model="deliverytime"    name="options"  ng-disabled="{{deliverytime.disable}}"  ng-value="{{deliverytime.name}}" id="option1" autocomplete="on">{{deliverytime.name}}
                              </label>
                              <label ng-if="deliverytime.disable=='false'"  ng-click="delvalue(deliverytime.name);" class="btnradio1 btn " ng-disabled="{{deliverytime.disable}}">
                                <input type="radio" ng-model="deliverytime"  name="options"   ng-value="{{deliverytime.name}}" id="option1" autocomplete="on">{{deliverytime.name}}
                              </label>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col_full" style="padding:0 14px;margin-bottom: 17px !important;">
                  <label for="shipping-form-message"></label>
                  <textarea id="" class="required form-control"  ng-model="deliveryNotes"  placeholder="Enter The Special Instructions "  ></textarea>
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
            
            <div class="col-md-8">
            <div class="table-responsive">

	<table class="table cart">
	     <tbody>
		<tr>
                    <td class="cart-product-name">
                                      <strong>Wash Type:</strong>
                              </td>
                    <td>
                       <p><button class="button button-3d button-mini button-rounded button-white button-light"ng-repeat="service in serviceTaken"><b style="font-size:12px;  text-transform: uppercase;">{{service.desc}} </b></button></p>
                    </td>
                 </tr>
                      <tr class="cart_item">
                             
                              <td class="cart-product-name">
                                      <strong>Special Instructions</strong>
                              </td>

                              <td class="cart-product-name">
                                      <p>{{deliveryNotes}}</p>
                              </td>
                      </tr>
                      <tr class="cart_item">
                              <td class="cart-product-name">
                                      <strong>Pick Up Date</strong>
                              </td>

                              <td class="cart-product-name">
                                       <p>{{collectionDate}}</p>
                              </td>
                      </tr>
                      <tr class="cart_item">
                              <td class="cart-product-name">
                                      <strong>Pick Up Time</strong>
                              </td>

                              <td class="cart-product-name">
                                       <p>{{pickup}}</p>
                              </td>
                      </tr>
                      <tr class="cart_item">
                             
                              <td class="cart-product-name">
                                      <strong>Delivery Date</strong>
                              </td>

                              <td class="cart-product-name">
                                       <p>{{deldate}}</p>
                              </td>
                      </tr>
                      <tr class="cart_item">
                             
                              <td class="cart-product-name">
                                      <strong>Delivery Time</strong>
                              </td>

                              <td class="cart-product-name">
                                      <p>{{deltime}}</p>
                              </td>
                      </tr>
                       <tr class="cart_item">
                             
                              <td class="cart-product-name">
                                      <strong>Address</strong>
                              </td>

                              <td class="cart-product-name">
                                      <p ng-repeat="Address in printAddress">{{Address.street_name1}} {{Address.street_name2}} {{Address.city}}<br></p>
                              </td>
                      </tr>
                       <tr class="cart_item">
                             
                              <td class="cart-product-name">
                                      <strong>Coupon</strong>
                              </td>

                              <td class="cart-product-name">
                                  <p > <input type="text" name="couponcode"  class="form-control input-sm " placeholder="Enter Coupon Code" ng-model="couponCode"  ></p>
                              </td>
                      </tr>

              </tbody>

      </table>

                <div class="col-md-12" style="padding: 28px 0px 0 16px;">
                  <input type="checkbox" id="termsconditions" ng-model="fooSelected"  ng-required="true"> I agree with <a href="<?php echo site_url();?>WashBox/termsconditions">Terms & Conditions</a> of <b>THEWASHBOX</b>.
                </div>
              <!--  <h1>{{fooSelected}}</h1>-->
              <div class="form-group pull-rights">
              <button  ng-click="orderSave()" data-notify-type="success" ng-disabled="fooSelected!=true" class="button  button-rounded button-amber button-reveal tright "><i class="icon-truck fa-lg"></i><span>Confirm Your Order </span></button>
            </div>
            </div>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var shift=0;
  $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
      e.preventDefault();
      $(this).siblings('a.active').removeClass("active");
      $(this).addClass("active");
      var index = $(this).index();
      $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
      $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
  });
  
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
    if(maxArray.length>0)
    {
      return Math.max.apply(Math, maxArray);
    }
    else
    {
        return 0;
    }
    
  }
  function addDays(theDate, days) {
      console.log(days,theDate);

  return new Date(theDate.getTime() + days*24*60*60*1000);
  }
  //$(".btn-washtype").click(function(){
  //
  //  $(".pickup  .sub").each(function(){
  //  var activeCheck=$(this).hasClass("active");
  //
  //    if(activeCheck=='true' || activeCheck==true){
  //      var activeCheck=$(this).attr("date");
  //      //activeCheck='"'+activeCheck+'"';
  //      delivery(activeCheck,this);
  //    }
  //  });
  //});
  app.controller('WashBoxController', function($scope, $http,$filter,$window) {
    $scope.couponCode="";
    $scope.serviceType=[];
    $scope.data="";
    $scope.deliverytime="";
    $scope.pickup="";
    $scope.backToProfile="";
    $scope.orderParams=[];
    $scope.loginForm = false;
    $scope.registrationForm = true;
    $scope.socialLogin=false;
    $scope.smsVerifyAlert=true;
    $scope.defaultAddress="";
    $scope.serviceType.wash_iron=true;
    $scope.serviceType.dry=false;
    $scope.serviceType.iron=false;
    $scope.profileDisplay=true;
    $scope.onetimepass=true;
    $scope.passwordHide=true;
    $scope.shift=0;

    $scope.toggle = function() {
      $scope.loginForm = !$scope.loginForm;
      $scope.registrationForm = !$scope.registrationForm;
    };
    $scope.forgotpassword=function(){
      $scope.passwordHide=!$scope.passwordHide;
      $scope.loginForm=!$scope.loginForm;
      $scope.socialLogin=!$scope.socialLogin;
    }
    $scope.sendpassword=function(){
       $http({
        url: "<?php echo site_url();?>WashBox/forgotpassword",
        method: "POST",
        data: {sendEmail:$scope.sendEmail}
      }).success(function(data, status, headers, config) {
         $scope.forgotpassword();
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Email sent successfully'));
        $.loader('close');  
      });
      
    }
    $scope.loginSubmit= function()
    {
      
      $http({
        url: "<?php echo site_url();?>WashBox/loginUser",
        method: "POST",
        data: {userEmail:$scope.userEmail,userPassword:$scope.userPassword}
      }).success(function(data, status, headers, config) {
        //console.log(data);
        //console.log(data,"gokulnjdsj");
        //console.log(data.registered_type,"gokulnjdsj");
        //console.log($scope.data.registered_type,"gokulnjdsj");
        
        
        if (data.message=='ADMIN') {
          $window.location.href = '<?php echo site_url('WashControl/view'); ?>';
        }
        else{
          $scope.data=data;
         $scope.getUserData();
          $scope.authentication();
        }
      });
      
    }
    $scope.registrationSubmit= function()
    {
      $http({
        url: "<?php echo site_url();?>WashBox/registerUser",
        method: "POST",
        data: {userName:$scope.userName,userEmail:$scope.userEmail,userPassword:$scope.userPassword,firstName:$scope.firstName,lastName:$scope.lastName,userPhone:$scope.userPhone}
      }).success(function(data, status, headers, config) {
        $scope.data=data;
        $scope.authentication();
      });
    }
    $scope.sendSMS=function(smsSend){
      
      $scope.backToProfile=smsSend;
      $http({
        url: "<?php echo site_url();?>WashBox/smsResend",
        method: "POST",
      }).success(function(data, status, headers, config)
      {
        if(data=="true"){
          SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> SMS sent successfully'));
          $.loader('close');
        }
        else
        {
          SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>SMS not sent! Please enter the correct number.'));
          $.loader('close');
        }
      });
    }
    $scope.getUserData = function ()
    {
      $http.get("<?php echo site_url('WashBox/getUserData');?>").then(function(response) {
        $scope.addressLoop=response.data.address;
          
       if($scope.addressLoop.length<1){
          $scope.addressLooping=true;
          $scope.addressAction=false;
          $scope.BackAddress=true
       }
       else{
          $scope.addressLooping=false;
          $scope.addressAction=true;
          $scope.BackAddress=false
      }
        $scope.profileDisplay=false;
        $scope.onetimepass=true;
        $scope.firstName =response.data.data.first_name;
        $scope.lastName = response.data.data.last_name;
        $scope.userEmail = response.data.data.email;
        $scope.userPhone = response.data.data.phone_number;

        if(response.data.data.phone_number=="true")
        {
          $scope.smsVerifyAlert=true;
        }
      });
    }
    <?php if($session){ ?>
  $scope.getUserData();
  <?php } ?>
  $scope.addAddress = function(){
    $scope.street_name1="";
    $scope.street_name2="";
    $scope.area="";
    $scope.city="";
    $scope.addressID="";
    $scope.addressLooping=true
    $scope.addressAction=false;
  }
    $scope.smsVerify=function()
    {
      $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
      var otppassword=$scope.otppassword;
      $http({
        url: "<?php echo site_url();?>WashBox/smsVerification",
        method: "POST",
        data: {otppassword:otppassword},
      }).success(function(data, status, headers, config) {
      if(data=="true")
      {
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Phone number verified successfully'));
        $scope.smsVerifyAlert=true;
        
        $.loader('close');
      }
      else
      {
        SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i> Please enter the correct code.!'));
        $.loader('close');
      }
      });
      if($scope.backToProfile==true)
      {
        $scope.profileDisplay=false;
        $scope.onetimepass=true;
      }
    }
    $scope.toggleToAddressView = function()
    {
      $scope.addressLooping = false;
      $scope.addressAction = true;
    }
    $scope.toggleToAddressEdit = function(){
      $scope.addressLooping = true;
      $scope.addressAction = false;
    }
    $scope.authentication=function()
    {
      if ($scope.data.message=="yes")
      {
        if ($scope.data.data.Phone_verified!='Yes')
        {
          $("#loginRegister").removeClass("active");
          $("#loginRegister").addClass("hide");
          $("#loginDisplay").removeClass("active");
          $("#profileDisplay").addClass("active");
          $("#Profile").addClass("active");
          $("#Profile").removeClass("hide");
          $scope.onetimepass=!$scope.onetimepass;
          $scope.loginForm = true;
          $scope.registrationForm = true;
          $scope.socialLogin=true;
          $scope.smsVerifyAlert=false;
          $scope.profileDisplay=true;
          $scope.firstName =$scope.data.data.first_name;
          $scope.lastName = $scope.data.data.last_name;
          $scope.userEmail = $scope.data.data.email;
          $scope.userPhone = $scope.data.data.phone_number;
          var dataTransfer=$scope.data;
          var scope = angular.element('[ng-controller=userController]').scope();
          scope.$applyAsync(function(){
          scope.userName=dataTransfer.data.first_name+" "+dataTransfer.data.last_name;
          scope.first_name =dataTransfer.data.first_name;
          scope.last_name =dataTransfer.data.last_name;
          scope.email =dataTransfer.data.email;
          scope.phone_number = dataTransfer.data.phone_number;
          angular.element('[ng-controller=userController]').scope();
          });
          $scope.sendSMS(true);
        } 
        else
        {
          $("#loginRegister").removeClass("active");
          $("#loginRegister").addClass("hide");
          $("#Profile").removeClass("hide");
          $("#loginDisplay").removeClass("active");
          $("#addressDisplay").addClass("active");
          $("#confirmAddress").addClass("active");
          $("#confirmAddress").removeClass("hide");
          $scope.profileDisplay=false;
          $scope.smsVerifyAlert=true;
          $scope.firstName =$scope.data.data.first_name;
          $scope.lastName = $scope.data.data.last_name;
          $scope.userEmail = $scope.data.data.email;
          $scope.userPhone = $scope.data.data.phone_number;
          
          var dataTransfer=$scope.data;
          var scope = angular.element('[ng-controller=userController]').scope();
          scope.$applyAsync(function(){
          scope.userName=dataTransfer.data.first_name+" "+dataTransfer.data.last_name;
          scope.first_name =dataTransfer.data.first_name;
          scope.last_name =dataTransfer.data.last_name;
          scope.email =dataTransfer.data.email;
          scope.phone_number = dataTransfer.data.phone_number;
          angular.element('[ng-controller=userController]').scope();
          });
          
        }

      $scope.addressDisabled=false;

      }
      else
      {
	SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-ok-sign></i> Check Your Email ID or Password!'));
      }
   }
  $scope.profileUpdate = function (){
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    var first_name=$scope.firstName;
    var last_name=$scope.lastName;
    var email=$scope.userEmail;
    var phone_number=$scope.userPhone;
    $scope.submitted = true;
    
    $http({
      url: "<?php echo site_url();?>WashBox/profileUpdate",
      method: "POST",
      data: {first_name:first_name,last_name:last_name,email:email,phone_number:phone_number},
    }).success(function(data, status, headers, config) {
    $scope.getUserData();
    if (data.message==true && data.data[0].Phone_verified=='Yes')
    {
      $("#Profile").removeClass("active");
      $("#profileDisplay").removeClass("active");
      $("#addressDisplay").addClass("active");
      $("#confirmAddress").addClass("active");
      $("#confirmAddress").removeClass("hide");
      SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Data updated successfully.!'));
    }
    else
    {
      SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Data updated successfully.!'));
      $scope.profileDisplay=true;
      $scope.onetimepass=false;
      $scope.sendSMS(true);
      SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Need to verify your phone number. Please enter the correct SMS verification code!'));
    }
    $.loader('close');
    
    });
       if($scope.addressLoop.length<1){
          $scope.addressLooping=true;
          $scope.addressAction=false;
          $scope.BackAddress=true
       }
       else{
          $scope.addressLooping=false;
          $scope.addressAction=true;
          $scope.BackAddress=false
      }
    
    }
    
  $scope.addressForm = function ()
  {
    $.loader({content:"<img src='<?php echo site_url();?>application/assests/images/loader.gif'>"});
    var id=$scope.addressID;
    var street_name1=$scope.street_name1;
    //var street_name2=$scope.street_name2;
    var area = $scope.area;
    var city=$scope.city;
    var address_type=$scope.address.type;
    var area=$scope.area;
    var landmark=$scope.landmark;
    $http({
      url: "<?php echo site_url();?>WashBox/userAddress",
      method: "POST",
      data: {id:id,street_name1:street_name1,area:$scope.area,city:city,address_type:address_type,landmark:$scope.landmark},
      }).success(function(data, status, headers, config){
      if (data != "")
      {
        SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Address is created sucessfully.!'));
        $scope.addressLooping = false;
        $scope.addressAction = true;
        $scope.getUserData();
        $.loader('close');
       if($scope.addressLoop.length<1){
          $scope.addressLooping=true;
          $scope.addressAction=false;
          $scope.BackAddress=true
       }
       else{
          $scope.addressLooping=false;
          $scope.addressAction=true;
          $scope.BackAddress=false
      }
      }
    });
    
  }
  $scope.checkpassword=function(){
          if($scope.userPassword!=$scope.confirmPassword){
              $scope.PasswordNotMatch=false;
              $scope.passwordcheckval=true;
          }
          else{
              $scope.PasswordNotMatch=true;
              $scope.passwordcheckval=false;
          }
      }
  
  $scope.getSpecificAddress = function(id)
  {
    $http({
      url: "<?php echo site_url();?>WashBox/getSpecificAddress",
      method: "POST",
      data:{id:id},      
      }).success(function(data, status, headers, config)
      {
       if (data != ""){
        $scope.addressLooping = false;
        $scope.addressAction = true;
        $scope.address_type=data[0].address_type;
        $scope.street_name1=data[0].street_name1;
        $scope.street_name2=data[0].street_name2;
        $scope.area=data[0].area;
        $scope.city=data[0].city;
        $scope.addressID=data[0].id;
        $scope.toggleToAddressEdit();
       }
      });
  }
    $scope.addressDelete = function(id)
    {
      $http({
        url: "<?php echo site_url();?>WashBox/addressDelete",
        method: "POST",
        data:{id:id}    
      }).success(function(data, status, headers, config){
        $scope.getUserData();
       if($scope.addressLoop.length<1){
          $scope.addressLooping=true;
          $scope.addressAction=false;
          $scope.BackAddress=true
       }
       else{
          $scope.addressLooping=false;
          $scope.addressAction=true;
          $scope.BackAddress=false
      }
      });
    }
    $scope.placeorderTab = function(id)
    {
      $scope.defaultAddress=id;
      $("#confirmAddress").removeClass("active");
      $("#addressDisplay").removeClass("active");
      $("#placeOrderDisplay").addClass("active");
      $("#placeorder").addClass("active");
    }
  //PickupTiming
  var InitialFullDate=new Date();
  var InitialDay=InitialFullDate.getDate();
  var InitialDayWords=InitialFullDate.getDay();
  var Initialmonth=parseInt(InitialFullDate.getMonth()+1);
  var Initialyear=InitialFullDate.getFullYear();
  var InitialDate=InitialDay+"-"+Initialmonth+"-"+Initialyear;
  var FinalFullDate=addDays(InitialFullDate,serviceDuraiton());
  var FinalDay=FinalFullDate.getDate();
  var FinalDayWords=FinalFullDate.getDay();
  var Finalmonth=parseInt(FinalFullDate.getMonth()+1);
  var Finalyear=FinalFullDate.getFullYear();
  var FinalDate=FinalDay+"-"+Finalmonth+"-"+Finalyear;
    $scope.getDeliveryTiming=function($date)
  {
    $http({
      url: "<?php echo site_url();?>WashBox/deliveryTiming",
      method: "POST",
      data: {date:$date},
    }).success(function(data, status, headers, config) {
      $scope.deliverytimepicker=data;

    });
  }
  $scope.getPickupTiming=function($date)
  {
    $http({
      url: "<?php echo site_url();?>WashBox/pickTiming",
      method: "POST",
      data: {date:$date},
    }).success(function(data, status, headers, config) {
      console.log(data);
      $scope.pickuptimepicker=data.data;
      if(data.shift=="yes"){
        pickupNext();
        forTomorrow();
        
      }
    });
  }
  $scope.getPickupTiming(InitialDate);
  $scope.getDeliveryTiming(FinalDate);

  //$scope.pickuptimepicker=[{name:'09.00-10.00'},
  //                        {name:'10.00-11.00'},
  //                        {name:'11.00-12.00'},
  //                        {name:'12.00-13.00'},
  //                        {name:'13.00-14.00'},
  //                        {name:'14.00-15.00'},
  //                        {name:'15.00-16.00'},
  //                        {name:'16.00-17.00'},
  //                        {name:'17.00-18.00'},
  //                        {name:'18.00-19.00'},
  //                        {name:'19.00-20.00'},
  //                        {name:'20.00-21.00'}];
  //$scope.deliverytimepicker=[{name:'09.00-10.00'},{name:'10.00-11.00'},{name:'11.00-12.00'},{name:'12.00-13.00'},{name:'13.00-14.00'},{name:'14.00-15.00'},{name:'15.00-16.00'},{name:'16.00-17.00'},{name:'17.00-18.00'},{name:'18.00-19.00'},{name:'19.00-20.00'},{name:'20.00-21.00'}];
  
  
  $scope.selectedpickuptime = "";
  $scope.setval=function(evnt)
  {
    evnt.disabled = false;
    $scope.pickupdate=$('.pickup  .active').attr('date');
    $scope.pickup=evnt;
    $scope.pickupdate=$('.pickup  .active').attr('date');
    $scope.deliverydate=$('.delivery   .active').attr('date');
    
    
    $http({
      url: "<?php echo site_url();?>WashBox/checkorder",
      method: "POST",
      data: { pickup:$scope.pickup,pickupdate:$scope.pickupdate }
      }).success(function(data, status, headers, config){
      console.log(data.length);
      if (data.length > 4) {
        $('.pickuptime').find('.active').attr('disabled','disabled');
      }
    });
  }
  //deliverytime picker value starts
   $scope.delvalue=function(evnt)
  {
    $scope.deltime=evnt
  }
  $scope.placeorderForm = function ()
  {
    $result=$filter('filter')( $scope.addressLoop, {id: $scope.defaultAddress});
    $scope.printAddress=$result;
    var selected = [];
    var value;
    var desc;
    if ($scope.serviceType.wash_iron==true) {
      value="WASH";
      desc="Washing";
      selected.push({value:value,desc:desc});
    }
    if ($scope.serviceType.iron==true) {
      value="IRON";
      desc="Iron";
      selected.push({value:value,desc:desc});
    }
    if ($scope.serviceType.dry==true) {
      value="DRY";
      desc="Dry Cleaning";
      selected.push({value:value,desc:desc});
    }
    if (selected.length<1) {
      SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>No service is selected. Please Select Any Service!!'));
      $.loader('close');
      return;
    }
    $scope.collectionDate=$('.pickup  .active').attr('dateDisplay');
    $scope.deldate=$('.delivery   .active').attr('dateDisplay');
    $scope.pickupdate=$('.pickup  .active').attr('date');
    $scope.deliverydate=$('.delivery   .active').attr('date');
    if ($scope.pickup=="" ) {
      SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>Please Select Pick Up Time!!'));
      $.loader('close');
      return;
    }
    if($scope.deltime==""){
      SEMICOLON.widget.notifications($('#error').attr('data-notify-msg','<i class=icon-remove-sign></i>Please Select Delivery Time!!'));
      $.loader('close');
      return;
    }
    $scope.serviceTaken=selected;
    $("#placeOrderDisplay").removeClass("active");
    $("#placeorder").removeClass("active");
    $("#confirmorder").addClass("active");
    $("#confirmOrderDisplay").addClass("active");
  }
  $scope.orderSave=function()
  {
    //alert($scope.fooSelected);
    
    if ($scope.fooSelected) {
        
      } else {
          $window.alert("Please select T&C option before submitting order!!");
      }
    
    var deliveryNotes=$scope.deliveryNotes;
    var cleantype=$scope.serviceTaken;
    var collectiondate=$scope.pickupdate;
    var deliverydate=$scope.deliverydate;
    var pickuptime=$scope.pickup;
    var deliverytime=$scope.deltime;
    
    $http({
      url: "<?php echo site_url();?>WashBox/placeOrder",
      method: "POST",
      data: {couponCode:$scope.couponCode,deliveryNotes:deliveryNotes,collectiondate:collectiondate,deliverydate:deliverydate,cleantype:cleantype,pickuptime:pickuptime,deliverytime:deliverytime,address: $scope.defaultAddress}
      }).success(function(data, status, headers, config){
      window.location.href="<?php echo site_url();?>WashBox/finalOrder/"+data[0].id;
    });
  }

  $scope.serviceChange=function(){
    var firstDate=new Date();
    var firstChild=$(".pickup").find(".active");
    $(".pickup .active").each(function(){
      delivery($(this).attr('date'),this );
    });
  }
  //$scope.$watch('serviceType.dry', function() {
  //  alert("test11");
  //
  //  $scope.serviceChange();
  //
  //}, true);
  //
  //$scope.$watch('serviceType.wash_iron', function() {
  //  $scope.serviceChange();
  //
  //}, true);
  //
  //$scope.$watch('serviceType.iron', function() {
  //  $scope.serviceChange();
  //});
  $scope.checkTabs=function(){
    
    if ($scope.data!="" || $scope.address!="" ) {
      $scope.loginDisabled=true;
      $scope.profileDisabled=false; 
      <?php if($session){ ?>
      $scope.addressDisabled=false;
      <?php } else{ ?>
      $scope.addressDisabled=true;
      <?php } ?>

      $scope.orderDisabled=true;
      $scope.confirmDisabled=true;
    }
    //else if($scope.data==""  )
    //{
    //  $scope.loginDisabled=true;
    //  $scope.addressDisabled=false;
    //  
    //  $scope.orderDisabled=true;
    //  $scope.confirmDisabled=true;
    //}
    else{
      $scope.loginDisabled=true;
      $scope.profileDisabled=true;
      $scope.addressDisabled=true;
      $scope.orderDisabled=true;
      $scope.confirmDisabled=true;
    }
   
  }
  $scope.checkTabs();
  $scope.checkpassword();
  });
</script>
<script>

  function getOrdinal(n)
  {
    var s=["th","st","nd","rd"],
    v=n%100;
    return n+(s[(v-20)%10]||s[v]||s[0]);
  }
  var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  var dayNames = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
  var holiday = ['30-12-2015','1-1-2016'];

  pickup();
  first();
  function first(){
    var firstDate=new Date();
    var firstChild=$(".pickup").find(".sub :first-child");
      $(".pickup .sub:first-child").each(function(){
      delivery(firstDate.getDate()+"-"+(firstDate.getMonth()+1)+"-"+firstDate.getFullYear(),this );
    });
  }
  function forTomorrow(){
    var firstDate=new Date();
    var firstChild=$(".pickup").find(".sub :first-child");
      $(".pickup .sub:first-child").each(function(){
      deliveryNext(firstDate.getDate()+"-"+(firstDate.getMonth()+1)+"-"+firstDate.getFullYear(),this );
    });
  }
  function pickup()
  {
    var pickUpFullDate=new Date();
    var activeClass;
    $(".pickup").html(" ");

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
      pickUpFullDate.setDate(pickUpFullDate.getDate()+limitDuration);
      var mypickupDay=pickUpFullDate.getDate();
      var mypickupDayWords=pickUpFullDate.getDay();
      var mypickupmonth=parseInt(pickUpFullDate.getMonth()+1);
      var mypickupyear=pickUpFullDate.getFullYear();
      var currentDate=  mypickupDay+"-"+mypickupmonth+"-"+mypickupyear;
      if($.inArray(currentDate, holiday) == -1){
        $(".pickup").append("<b class='sub col-sm-2 col-xs-2 "+activeClass+"' "+' dateDisplay="'+monthNames[mypickupmonth-1]+" "+getOrdinal(mypickupDay)+" "+mypickupyear+'" '+'date="'+currentDate+'"'+"onclick='delivery("+'"'+currentDate+'",this'+")'> <div>"+monthNames[mypickupmonth-1]+" "+getOrdinal(mypickupDay)+"</div><div>"+dayNames[mypickupDayWords]+"</div> <input type='hidden' class='date' value='"+currentDate+"'></b>");  
      }
      else
      {
        i=i-1;
      }
    }

  }
  function pickupNext()
  {
    var pickUpFullDate=new Date();
    var activeClass;
    $(".pickup").html(" ");

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
      pickUpFullDate.setDate(pickUpFullDate.getDate()+limitDuration+1);
      var mypickupDay=pickUpFullDate.getDate();
      var mypickupDayWords=pickUpFullDate.getDay();
      var mypickupmonth=parseInt(pickUpFullDate.getMonth()+1);
      var mypickupyear=pickUpFullDate.getFullYear();
      var currentDate=  mypickupDay+"-"+mypickupmonth+"-"+mypickupyear;
      if($.inArray(currentDate, holiday) == -1){
        $(".pickup").append("<b class='sub col-sm-2 col-xs-2 "+activeClass+"' "+' dateDisplay="'+monthNames[mypickupmonth-1]+" "+getOrdinal(mypickupDay)+" "+mypickupyear+'" '+'date="'+currentDate+'"'+"onclick='delivery("+'"'+currentDate+'",this'+")'> <div>"+monthNames[mypickupmonth-1]+" "+getOrdinal(mypickupDay)+"</div><div>"+dayNames[mypickupDayWords]+"</div> <input type='hidden' class='date' value='"+currentDate+"'></b>");  
      }
      else
      {
        i=i-1;
      }
    }

  }
  function delivery(deliveryValue,$this)
  {
    if($($this).hasClass("active")==false)
    {
      $($this).addClass("active");
    }
    $(".pickup .sub").each(function(){    
      if(this!=$this)
      {
        if($(this).hasClass("active")==true )
        {
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
    var myTempDeliveryDate=delivery.getDate()+"-"+parseInt(delivery.getMonth()+1)+"-"+delivery.getFullYear();
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
      if (delivery.getMonth()==0)
      {
      }
      var deliveryMonth=parseInt(delivery.getMonth()+1);
      var deliveryYear=delivery.getFullYear();
      deliveryDate=deliveryDay+"-"+deliveryMonth+"-"+deliveryYear;
      if(i==0)
      {
        myTempDeliveryDate=deliveryDate;
      }
      if($.inArray(deliveryDate, holiday) == -1)
      {
        $(".delivery").append("<b class='sub col-sm-2 col-xs-2 "+activeClass+" '"+' dateDisplay="'+monthNames[deliveryMonth-1]+" "+getOrdinal(deliveryDay)+" "+deliveryYear+'" '+' date="'+deliveryDate+'"'+" onclick='refreshDelivery(this)'> <div>"+monthNames[deliveryMonth-1]+" "+getOrdinal(deliveryDay)+"</div><div>"+dayNames[deliveryDayWords]+"</div> <input type='hidden' class='date' value='"+deliveryDate+"'></b>");  
      }
      else{
        i=i-1;
      }
    }
    var scope = angular.element('[ng-controller=WashBoxController]').scope();
    scope.$applyAsync(function(){
      scope.getPickupTiming(data);
      scope.getDeliveryTiming(myTempDeliveryDate);
    angular.element('[ng-controller=WashBoxController]').scope();
    });
  }
  function deliveryNext(deliveryValue,$this)
  {
    if($($this).hasClass("active")==false)
    {
      $($this).addClass("active");
    }
    $(".pickup .sub").each(function(){    
      if(this!=$this)
      {
        if($(this).hasClass("active")==true )
        {
          $(this).removeClass("active");
        }
      }
    });
    $(".delivery").html(" ");
    var data=new Date();
    data.setDate(data.getDate()+1);
    data=data.getDate()+"-"+parseInt(data.getMonth()+1)+"-"+data.getFullYear();

    var limitDuration;
    var deliveryDate;
    var activeClass;
    var deliveryArray=data.split("-",3);
    var delivery=new Date();
    delivery.setMonth(deliveryArray[1]-1);
    delivery.setFullYear(deliveryArray[2]);
    delivery.setDate(deliveryArray[0]);
    delivery.setDate(delivery.getDate()+serviceDuraiton());
    var myTempDeliveryDate=delivery.getDate()+"-"+parseInt(delivery.getMonth()+1)+"-"+delivery.getFullYear();
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
      if (delivery.getMonth()==0)
      {
      }
      var deliveryMonth=parseInt(delivery.getMonth()+1);
      var deliveryYear=delivery.getFullYear();
      deliveryDate=deliveryDay+"-"+deliveryMonth+"-"+deliveryYear;
      if(i==0)
      {
        myTempDeliveryDate=deliveryDate;
      }
      if($.inArray(deliveryDate, holiday) == -1)
      {
        $(".delivery").append("<b class='sub col-sm-2 col-xs-2 "+activeClass+" '"+' dateDisplay="'+monthNames[deliveryMonth-1]+" "+getOrdinal(deliveryDay)+" "+deliveryYear+'" '+' date="'+deliveryDate+'"'+" onclick='refreshDelivery(this)'> <div>"+monthNames[deliveryMonth-1]+" "+getOrdinal(deliveryDay)+"</div><div>"+dayNames[deliveryDayWords]+"</div> <input type='hidden' class='date' value='"+deliveryDate+"'></b>");  
      }
      else{
        i=i-1;
      }
    }

    var scope = angular.element('[ng-controller=WashBoxController]').scope();
    scope.$applyAsync(function(){
      scope.getPickupTiming(data);
      scope.getDeliveryTiming(myTempDeliveryDate);
    angular.element('[ng-controller=WashBoxController]').scope();
    });
    
  }
//  if{
//  $('a').removeClass('anchorDisabled');
//}
//else{
//  $('a').addclass('confirmorder');
//}

  function refreshDelivery($row)
  {
    if($($row).hasClass("active")==false)
    {
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
    var scope = angular.element('[ng-controller=WashBoxController]').scope();
    scope.$applyAsync(function(){
      scope.getDeliveryTiming($('.delivery   .active').attr('date'));
    angular.element('[ng-controller=WashBoxController]').scope();
    });
  }

//function getData(e) {
//    e.preventDefault();
//}

</script>

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

