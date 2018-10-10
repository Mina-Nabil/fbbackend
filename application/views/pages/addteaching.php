<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add Exam</h4>
    <fieldset>
    <br>

      <select name='teachingInst'>
      <?php foreach($ArrInstructors as $instructor){?>
      <option value="<?=$instructor['INST_ID']?>" <?php if($TECH_INST_ID == $instructor['INST_ID']) echo 'selected'?>>
      <?=$instructor['INST_NAME']?>
      </option>
      <?php } ?>
      </select>

      <select name='teachingCrs'>
      <?php foreach($ArrCourses as $course){?>
      <option value="<?=$course['CRS_ID']?>" <?php if($TECH_CRS_ID == $course['CRS_ID']) echo 'selected'?>>
      <?=$course['CRS_NAME']?>
      </option>
      <?php } ?>
      </select>
    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
