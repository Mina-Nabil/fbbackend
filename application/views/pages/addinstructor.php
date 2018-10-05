<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Add Instructor</h4>
    <fieldset>
    <br>

      <input placeholder="Instructor Name" type="text" name="instructorName" value ="<?=$INST_NAME?>" required>

      <textarea placeholder="Instructor Description" rows="10" cols="10"  name="instructorDesc" required><?=$INST_DESC?></textarea>
      <label>Instructor Image</label>
      <?php if($INST_IMG != '') {?>
        <center><img src=<?=base_url() ."uploads/instructors/" . $INST_IMG?> style="width:100px;height:200px;"></center>
        <input hidden="true" type="text" value ="<?=$INST_IMG?>" name='instructorOldIMG'>
      <?php }?>
      <input type="file" name="instructorIMG" >
    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
