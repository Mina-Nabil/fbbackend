<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>GEMBA Control Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Edit Contactus</h4>
    <fieldset>
    <br>
    <label>Site Statistics</label>
      <input placeholder="Students Count" type="text"      name="site_dataNOofStudents" value ="<?=$STDT_STUDTNO?>" required>
      <input placeholder="Instructor Count" type="text" name="site_dataNOofInstructors" value ="<?=$STDT_INSTNO?>" required>
      <input placeholder="Course Count" type="text"  name="site_dataNOofCourses" value ="<?=$STDT_CRSNO?>" required>

      <label>Large Home Image</label>
      <?php if($STDT_HOME_BIGIMG != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_BIGIMG?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_BIGIMG?>" name='bigOldIMG'>
      <?php }?>
      <input type="file" name="bigIMG" >

      <label>Medium Home Images</label>
      <?php if($STDT_HOME_MEDIMG1 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_MEDIMG1?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_MEDIMG1?>" name='medOldIMG1'>
      <?php } ?>
      <input type="file" name="medIMG1" >

      <?php if($STDT_HOME_MEDIMG2 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_MEDIMG2?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_MEDIMG2?>" name='medOldIMG2'>
      <?php }?>
      <input type="file" name="medIMG2" >

      <?php if($STDT_HOME_MEDIMG3 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_MEDIMG3?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_MEDIMG3?>" name='medOldIMG3'>
      <?php }?>
      <input type="file" name="medIMG3" >

      <label>Small Home Images</label>


      <?php if($STDT_HOME_SMLIMG1 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG1?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG1?>" name='smlOldIMG1'>
      <?php }?>
      <input type="file" name="smlIMG1" >

      <?php if($STDT_HOME_SMLIMG2 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG2?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG2?>" name='smlOldIMG2'>
      <?php }?>
      <input type="file" name="smlIMG2" >

      <?php if($STDT_HOME_SMLIMG3 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG3?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG3?>" name='smlOldIMG3'>
      <?php }?>
      <input type="file" name="smlIMG3" >

      <?php if($STDT_HOME_SMLIMG4 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG4?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG4?>" name='smlOldIMG4'>
      <?php }?>
      <input type="file" name="smlIMG4" >

      <?php if($STDT_HOME_SMLIMG5 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG5?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG5?>" name='smlOldIMG5'>
      <?php }?>
      <input type="file" name="smlIMG5" >

      <?php if($STDT_HOME_SMLIMG6 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG6?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG6?>" name='smlOldIMG6'>
      <?php } ?>
      <input type="file" name="smlIMG6" >

      <?php if($STDT_HOME_SMLIMG7 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG7?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG7?>" name='smlOldIMG7'>
      <?php } ?>
      <input type="file" name="smlIMG7" >

      <?php if($STDT_HOME_SMLIMG8 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG8?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG8?>" name='smlOldIMG8'>
      <?php } ?>
      <input type="file" name="smlIMG8" >

      <?php if($STDT_HOME_SMLIMG9 != '') {?>
        <center><img src=<?=base_url() ."uploads/home/" . $STDT_HOME_SMLIMG9?> style="width:100px;height:100px;"></center>
        <input hidden="true" type="text" value ="<?=$STDT_HOME_SMLIMG9?>" name='smlOldIMG9'>
      <?php } ?>
      <input type="file" name="smlIMG9" >

    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
