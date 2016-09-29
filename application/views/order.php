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
    table{
/*        box-shadow: 0 7px 9px -2px grey;
*/    }
 </style>
 
 <section style="background: #F2F2F2; padding: 43px ;">
    <div class="container"  style=" background:white;padding: 43px ;box-shadow:2px 2px 17px -2px grey ">
								<h3 style="padding-bottom: 15px;  " ><center>Order Receipt</center></h3>

<div class="col-md-4">
<div class="table-responsive">

								<table class="table cart">
									<tbody>
									   <tr>
									      <td class="cart-product-name">
												<strong>Ordered ID :</strong>
											</td>
									      <td>
										 <?php echo $data["order"][0]["order_id"];?>
									      </td>
									   </tr>
										<tr class="cart_item">
										       
											<td class="cart-product-name">
												<strong>Ordered By</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount"><?php echo $session["first_name"]." ".$session["last_name"]; ?></span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Address</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount"><?php echo $data["address"][0]["street_name1"];?><br><?php echo $data["address"][0]["street_name2"];?><br><?php echo $data["address"][0]["city"];?></span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Phone Number</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount "><?php echo $session["phone_number"];?></span>
											</td>
										</tr>
									</tbody>

								</table>

							

</div>
</div> 
    <div class="col-md-8">
<div class="table-responsive">

    <table class="table cart">
            <tbody>
                    <tr class="cart_item">
                            <td class="cart-product-name">
                                    <strong>Services Taken</strong>
                            </td>

                            <td class="cart-product-name">
                                    <span class="amount"><?php  $services= explode (",", $data["order"][0]["clean_type"]);
                                    foreach($services as $service){
                                    ?>
<button class="button button-3d button-mini button-rounded button-white button-light"><b style="font-size:12px;  text-transform: uppercase;"><?php echo $service; ?> </b></button>
                                    
                                    <?php } ?></span>
                            </td>
                    </tr>
                    <tr class="cart_item">
                            <td class="cart-product-name">
                                    <strong>Pickup Timing</strong>
                            </td>

                            <td class="cart-product-name">
                                    <span class="amount"><?php echo $data["order"][0]["pick_up_date"].", ".$data["order"][0]["pick_up_time"];?> </span>
                            </td>
                    </tr>
                    <tr class="cart_item">
                            <td class="cart-product-name">
                                    <strong>Delivery Timing</strong>
                            </td>

                            <td class="cart-product-name">
                                    <span class="amount"><?php echo $data["order"][0]["delivery_date"].", ".$data["order"][0]["delivery_time"];?> </span>
                            </td>
                    </tr>
                    <tr class="cart_item">
                            <td class="cart-product-name">
                                    <strong>Special Instructions</strong>
                            </td>

                            <td class="cart-product-name">
				<?php if($data["order"][0]["delivery_notes"]!=null){?>
                                    <span class="amount"><?php echo $data["order"][0]["delivery_notes"];?></span>
				<?php }else{?>
				    <span class="amount">No Instructions</span>
				<?php }?>
                            </td>
                    </tr>
                    <?php if($data["order"][0]["token"]=="YES"){ ?>
                    <tr class="cart_item">
                            <td class="cart-product-name">
                                    <strong>Coupon Code</strong>
                            </td>

                            <td class="cart-product-name">
                                    <span class="amount"><?php echo $data["order"][0]["token_id"];?></span>
                            </td>
                    </tr>
                    <?php } ?>
            </tbody>

    </table>

							

</div>
    </div>
    <div class="col-md-12"><a class="can" href="<?php echo site_url('WashBox/cancelAnOrder/'.$data["order"][0]["id"]); ?>"><button class="button button-rounded">Cancel Order</button></a></div>
    </div>
</section>   
<script>
$(function(){
   SEMICOLON.widget.notifications($('#success').attr('data-notify-msg','<i class=icon-ok-sign></i> Confirmation successfully.!'));
   $.loader('close');    
})
</script>   