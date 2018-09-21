<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add Candidate</h4>
    <fieldset>
    <br>

      <select name='candidateCourse'>
      <?foreach($ArrCourses as $course){?>
      <option value="<?=$course['CRS_ID']?>" <?if($CNDT_CRS_ID == $course['CRS_ID']) echo 'selected'?>>
      <?=$course['CRS_NAME']?>
      </option>
      <?}?>
      </select>
      <input placeholder="Candidate Name" type="text" name="candidateName" value ="<?=$CNDT_NAME?>" required>

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
