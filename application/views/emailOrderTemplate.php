<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td >
        <!--<table width="" cellspacing="0" cellpadding="0" border="0"  align="center" style="margin-bottom:30px">
          <tbody>
            <tr>
              <td valign="top">
                <a href="">
                <img src="http://www.washbox.thewashbox.in/application/assests/images/logo-final.png" class="img" border="0" alt="Washbox" style="margin:0px ;padding:0px 213px;display:block;width: 20%;height: 330px"/>
                </a>
              </td>
            </tr>
          </tbody>
        </table>-->
        <table width="581" cellspacing="0" cellpadding="0" border="0" bgcolor="#f7f7f9" align="center" style="border-bottom:1px solid #e1e1e1;margin-bottom:30px">
          <tbody>
            <tr>
              <td valign="top" style="font-family:Helvetica,Arial,sans-serif">
                <table width="100%" cellspacing="0" cellpadding="0" style="background:#f7f7f9">
                  <tbody>
                    <tr>
                      <td style="padding-bottom:10px;width: 60%">
                        <h2 style="font-size:22px;font-weight:bold;color:#666666;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300">
                          <?php
                          if($this->session->userdata("user")){
                          $sessonUser=$this->session->userdata("user");
                          $sessonUserName=$sessonUser["first_name"];
                          ?>
                          Dear <?php echo $sessonUserName; ?>;
                          <?php 
                           }
                          ?>
                        </h2>
                      </td>
                      <td  style="width:40%;">
                        <a href="http://www.washbox.thewashbox.in/">
                          <img src="http://www.washbox.thewashbox.in/application/assests/images/logo-final.png" class="CToWUd" border="0" alt="Washbox" style="margin-bottom: 0px; padding:0px 231px; display: block; width: 47%; min-height: 86px; padding: 0 103px;"/>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;">
                        Thank you for placing your order with WashBox! Our folks shall arrive at your address to pick up your clothes in the requested time slot.
                      </td>
                    </tr>
                    <tr>
                      <td style="color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;">
                        If you need any assistance with your order, please write to us at <a target="_blank" href="mailto:support@mywash.com">washboxx@gmal.com</a>
                      </td>
                    </tr>
                    <tr>
                      <td style="color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300">
                        Regards, <br> Team WashBox
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <table width="581" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;height:30px">
          <tbody>
            <tr>
              <td style="text-align:center;font-size:18px;color:#666666;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;font-size:16px">
                <h2 style="float:left;font-size:22px;display:block;font-weight:400">OrderId:#<?php echo $row[0]['order_id']; ?></h2>
              </td>
            </tr>
            </tbody>
          </table>
          <table width="581" border="0" bgcolor="#f7f7f9" align="center" style="border-top:1px solid #e1e1e1;margin-bottom:30px;background:#fff;border-bottom:1px solid #e1e1e1">
            <tbody>
              <tr>
                <td valign="top" style="padding:0px 13px 10px 14px;font-family:Helvetica,Arial,sans-serif">
                  <table width="581">
                    <thead>
                      <tr style="height:50px;border:0;padding:0;margin:0;font-family:'Myriad Pro','Arial',sans-serif;font-size:20px;font-weight:300;color:#12b8db">
                        <td style="border:0;margin:0">Pick up Address</td>
                        <td style="margin:0;padding:0">Pick up Time</td>
                        <td style="margin:0;padding:0">Delivery time</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;margin:0;padding:0;vertical-align:top">
                          <span data-term="goog_1970221626" class="aBn" tabindex="0"><?php echo $r[0]['city']; ?></span><br>
                          <span data-term="goog_1970221626" class="aBn" tabindex="0">Wash Type- <?php echo $row[0]['clean_type']; ?></span><br>
                        </td>
                        <td style="font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;margin:0;padding:0;vertical-align:top">
                          <span data-term="goog_1970221626" class="aBn" tabindex="0"><?php echo $row[0]['pick_up_date']; ?></span><br>
                          <span data-term="goog_1970221626" class="aBn" tabindex="0"><?php echo $row[0]['pick_up_time']; ?></span>
                        </td>
                        <td style="font-family:'Myriad Pro','Arial',sans-serif;font-weight:300;margin:0;padding:0;vertical-align:top">
                          <span data-term="goog_1970221628" class="aBn" tabindex="0"><?php echo $row[0]['delivery_date']; ?></span><br>
                          <span data-term="goog_1970221626" class="aBn" tabindex="0"><?php echo $row[0]['delivery_time']; ?></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        <table width="581" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;height:30px">
          <tbody>
            <tr>
              <td style="text-align:center;font-size:18px;color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300">
                Follow Us for Offers and Updates
              </td>
            </tr>
          </tbody>
        </table>
        
        <table width="100" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;height:70px;text-align:center;border-bottom:1px solid #e1e1e1;margin-bottom:30px">
           <tbody>
            <tr>
             <td width="30">
              <a target="_blank" style="text-decoration:none" href="https://www.facebook.com/wash.box.3">
              <img class="CToWUd" width="30" height="30" border="0" style="text-decoration:none;display:block;outline:none" src="http://findicons.com/files/icons/524/web_2/512/facebook.png">
              </a>
              </td>
              <td width="30">
              <a target="_blank" style="text-decoration:none" href="https://mobile.twitter.com/washboxxba">
              <img class="CToWUd" width="30" height="30" border="0" style="text-decoration:none;display:block;outline:none" src="http://cdn.appstorm.net/iphone.appstorm.net/files/2012/04/Twitter_icon.png">
              </a>
              </td>
            </tr>
          </tbody>
        </table>
        <span class="HOEnZb">
          <font color="#888888"></font>
        </span>
        <span class="HOEnZb">
          <font color="#888888"></font>
        </span>
        <span class="HOEnZb"><font color="#888888"></font>
        </span>
        <table width="581" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;height:30px">
          <tbody>
            <tr>
              <td style="text-align:center;font-size:18px;color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300">
                <small>
                  Service tax @ 14% is applicable
                </small>
              </td>
            </tr>
            <tr>
              <td style="text-align:center;font-size:18px;color:#666666;font-size:16px;padding-bottom:17px;font-family:'Myriad Pro','Arial',sans-serif;font-weight:300">
                <small>&copy; WashBox Technologies Pvt Limited, Bangalore</small><span class="HOEnZb"><font color="#888888"></font>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
        <span class="HOEnZb"><font color="#888888">
        <table width="581" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;height:30px">
          <tbody><tr></tr></tbody>
        </table>
      </font></span></td></tr></tbody></table>