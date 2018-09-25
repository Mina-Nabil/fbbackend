<div class="container">
  <form id="contact">
    <br>
    <h3>Financial Brains Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Contact us</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Facebook</th>
        <th>Mobile</th>
	      <th>Email</th>
        <th>Instagram</th>
	      <th>Hotline</th>
	      <th>AboutUs</th>
	      <th>Arabic AboutUs</th>
        <th>Edit</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?foreach($ArrContactus as $contactus){?>
  <tr>
    <td><?=$contactus['CNTC_FB']?></td>
    <td><?=$contactus['CNTC_MOB']?></td>
    <td><?=$contactus['CNTC_EMAIL']?></td>
    <td><?=$contactus['CNTC_INSTA']?></td>
    <td><?=$contactus['CNTC_HOTLINE']?></td>
    <td><span class='limited'><?=$contactus['CNTC_ABTUS']?></span></td>
    <td><span class='limited'><?=$contactus['CNTC_ARBC_ABTUS']?></span></td>
    <td><a href='<?=base_url() . 'contactus/update'?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?}?>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
