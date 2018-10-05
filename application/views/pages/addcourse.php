<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add Course</h4>
    <fieldset>
    <br>
      <input placeholder="CourseName" type="text" name="courseName" value ="<?=$CRS_NAME?>" required>
      <input placeholder="CourseCertificate" type="text" height="100" name="courseCertificate" value ="<?=$CRS_CERTIFICATE?>" required>
        <input placeholder="CourseDuration" type="text" height="100" name="courseDuration" value ="<?=$CRS_DUR?>" required>
        <input placeholder="CoursePriorty" type="text" height="100" name="coursePriorty" value ="<?=$CRS_PRTY?>">
      <textarea placeholder="CourseBrief" rows="10" cols="10"  name="courseBrief" required><?=$CRS_BRIEF?></textarea>
      <textarea placeholder="CourseOverview" rows="10" cols="10"  name="courseOverview" required><?=$CRS_OVERVIEW?></textarea>
      <label>Course Image</label>
      <?php if($CRS_IMG != '') {?>
        <center><img src=<?=base_url() ."uploads/courses/" . $CRS_IMG?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$CRS_IMG?>" name='courseOldIMG'>
      <?php }?>
      <input type="file" name="courseIMG" >
    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
