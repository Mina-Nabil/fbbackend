<div class="container">
  <?=form_open(base_url() . "login/checkdata", array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Control Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Log In</h4>
    <fieldset>
    <br>
      <input placeholder="UserName" type="text" name="username" required>
      <input placeholder="Password" type="password" name="userpass" required>
      <select name='usertype'>
        <option value="admin">Admin</option>
        <option value="employee">Employee</option>
      </select>
    <br><br>
      <input value="Log In" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
