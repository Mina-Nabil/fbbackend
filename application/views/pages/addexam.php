<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:100px;height:100px;"></center>
    <br>
    <h4>Add Exam</h4>
    <fieldset>
    <br>

      <select name='examCourse'>
      <?php foreach($ArrCourses as $course){?>
      <option value="<?=$course['CRS_ID']?>" <?php if($EXAM_CRS_ID == $course['CRS_ID']) echo 'selected'?>>
      <?=$course['CRS_NAME']?>
      </option>
      <?php }?>
      </select>width:200px;height:100px;
      <input placeholder="Exam Name" type="text" name="examName" value ="<?=$EXAM_NAME?>" required>

      <textarea placeholder="Exam Description" rows="10" cols="10"  name="examDesc" required><?=$EXAM_DESC?></textarea>

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
