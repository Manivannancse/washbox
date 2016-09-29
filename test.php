		<div class="bhoechie-tab-content " ng-controller="placeorderController">
		    <form class="" ng-submit="placeorderForm()" role="form" method="post">
		    <div class="col-md-10" ng-hide="placeorder">
		      

			 <h4>Place Order</h4>

			    <div class="col_half">
				<label for="billing-form-name">State:</label>
				    <select id="register-form-name" class="required form-control input-block-level" ng-model="pickLocation">
					 
					 <option ng-selected="{{option.id == 293}}" ng-repeat="option in location"  value="{{option.id}}">{{option.location}}    </option>
				    </select>
			    </div>
			 
		
		   
		    </div>
		    <div class="" ng-hide="orderdetails">
		    
			<div class="col-md-6 verticalLine">
			    <img class="img-responsive" width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/collection.png">
			    <h4 style="padding-bottom: 10%"><span style="color:#137FCB"><b>Collection</b> </span>Please choose a  date</h4>
			  
			    <div class="col-md-6 ">
				<div class="btn-back">
				<input type="button" class="btn btn-primary  backButton" ng-click="toggle()" value="Back">
				</div>
			    </div>	    
			</div>
			<div class="col-md-6 ">
			    <div style="float: right;">
				<img class="img-responsive"  width="100" height="60" src="<?php echo site_url();?>application/assests/images/collection/delivery.png">
			    </div>
			    <h4 style="float: inherit;padding-bottom: 10%"><span style="color:#1F761F;"><b>Delivery</b></span> Please choose a date</h4>
			  
			
			</div>
			<div class="form-group pull-rights">
			  <input type="submit" class="btn btn-primary " value="Continue">
			</div>
		      
		    </div>
		    </form>
		</div>
