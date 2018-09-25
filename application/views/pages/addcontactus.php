<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Control Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Edit Contactus</h4>
    <fieldset>
    <br>
    <label>Facebook ID</label>
      <input placeholder="Facebook Page ID" type="text"      name="contactusFB" value ="<?=$CNTC_FB?>" required>
      <input placeholder="Mobile Number" type="text" name="contactusMob" value ="<?=$CNTC_MOB?>" required>
<<<<<<< HEAD
      <input placeholder="Landline Number" type="text" name="contactusLand" value ="<?=$CNTC_LNDL?>" required>
      <input placeholder="Address" type="address"  name="contactusAddress" value ="<?=$CNTC_ADRS?>" required>
=======
>>>>>>> 83ecec3594f885759618785b9bd927fcd6bd64f4
      <input placeholder="Email Address" type="email"  name="contactusEmail" value ="<?=$CNTC_EMAIL?>" required>
      <label>Working Hours From</label>
      <input placeholder="Working Hours From" type="time"  name="contactusFROM" value ="<?=$CNTC_FROM?>" required>
      <label>Working Hours To</label>
      <input placeholder="Working Hours To" type="time"  name="contactusTO" value ="<?=$CNTC_TO?>" required>
      <label>Instagram ID</label>
      <input placeholder="Instagram Page ID" type="text" name="contactusInsta" value ="<?=$CNTC_INSTA?>" >
      <input placeholder="Hotline"       type="text" name="contactusHotline" value ="<?=$CNTC_HOTLINE?>" >
      <textarea placeholder="Arabic About Us" rows="10" cols="10"  name="contactusArbcAboutUS" required><?=$CNTC_ARBC_ABTUS?></textarea>
      <textarea placeholder="About Us" rows="10" cols="10" name="contactusAboutUS" required><?=$CNTC_ABTUS?></textarea>

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
