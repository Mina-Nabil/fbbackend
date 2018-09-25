<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:100px;height:100px;"></center>
    <br>
    <h4>Add Benefit</h4>
    <fieldset>
    <br>

      <select name='benefitCourse'>
      <?foreach($ArrCourses as $course){?>
      <option value="<?=$course['CRS_ID']?>" <?if($BNFT_CRS_ID == $course['CRS_ID']) echo 'selected'?>>
      <?=$course['CRS_NAME']?>
      </option>
      <?}?>
      </select>
      <input placeholder="Benefit Name" type="text" name="benefitName" value ="<?=$BNFT_NAME?>" >

      <textarea placeholder="Benefit Description" rows="10" cols="10"  name="benefitDesc" required><?=$BNFT_DESC?></textarea>

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
