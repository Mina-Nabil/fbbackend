<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Farfalla Control Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add User</h4>
    <fieldset>
    <br>
      <input placeholder="UserName" type="text"      name="userName" value ="<?=$USR_NAME?>" required>
      <input placeholder="UserPassword" type="password"  name="userPass" value ="<?=$USR_PASS?>" required>
    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
