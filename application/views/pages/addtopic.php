<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add Topic</h4>
    <fieldset>
    <br>

      <select name='topicCourse'>
      <?foreach($ArrCourses as $course){?>
      <option value="<?=$course['CRS_ID']?>" <?if($TOPC_CRS_ID == $course['CRS_ID']) echo 'selected'?>>
      <?=$course['CRS_NAME']?>
      </option>
      <?}?>
      </select>
      <input placeholder="Topic Name" type="text" name="topicName" value ="<?=$TOPC_NAME?>" required>

      <textarea placeholder="Topic Description" rows="10" cols="10"  name="topicDesc" ><?=$TOPC_DESC?></textarea>

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
