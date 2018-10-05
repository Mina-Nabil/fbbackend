<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Control Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Edit Slides</h4>
    <fieldset>
    <br>
    <label>Facebook ID</label>
      <input placeholder="Slide 1 Title" type="text"      name="slide1Title" value ="<?=$SLD_TTL1?>" required>
      <textarea placeholder="Slide 1 Description" rows="5" cols="5"  name="slide1Desc" required><?=$SLD_DSC1?></textarea>
      <center><img src=<?=base_url() ."../financialbrains/images/".$SLD_IMG1?> style="width:100px;height:200px;"></center>
      <input type="file" name="slideIMG1" >
      <input type="hidden" name="oldslideIMG1" value ="<?=$SLD_IMG1?>">

      <input placeholder="Slide 2 Title" type="text"      name="slide2Title" value ="<?=$SLD_TTL2?>" required>
      <textarea placeholder="Slide 2 Description" rows="5" cols="5"  name="slide2Desc" required><?=$SLD_DSC2?></textarea>
      <center><img src=<?=base_url() ."../financialbrains/images/".$SLD_IMG2?> style="width:100px;height:200px;"></center>
      <input type="file" name="slideIMG2" >
      <input type="hidden" name="oldslideIMG2" value ="<?=$SLD_IMG2?>">

      <input placeholder="Slide 3 Title" type="text"      name="slide3Title" value ="<?=$SLD_TTL3?>" required>
      <textarea placeholder="Slide 3 Description" rows="5" cols="5"  name="slide3Desc" required><?=$SLD_DSC3?></textarea>
      <center><img src=<?=base_url() ."../financialbrains/images/".$SLD_IMG3?> style="width:100px;height:200px;"></center>
      <input type="file" name="slideIMG3" >
      <input type="hidden" name="oldslideIMG3" value ="<?=$SLD_IMG3?>">

      <input placeholder="Slide 4 Title" type="text"      name="slide4Title" value ="<?=$SLD_TTL4?>" required>
      <textarea placeholder="Slide 4 Description" rows="5" cols="5"  name="slide4Desc" required><?=$SLD_DSC4?></textarea>
      <center><img src=<?=base_url() ."../financialbrains/images/".$SLD_IMG4?> style="width:100px;height:200px;"></center>
      <input type="file" name="slideIMG4" >
      <input type="hidden" name="oldslideIMG4" value ="<?=$SLD_IMG4?>">


      <input placeholder="Slide 5 Title" type="text"      name="slide5Title" value ="<?=$SLD_TTL5?>" required>
      <textarea placeholder="Slide 5 Description" rows="5" cols="5"  name="slide5Desc" required><?=$SLD_DSC5?></textarea>
      <center><img src=<?=base_url() ."../financialbrains/images/".$SLD_IMG5?> style="width:100px;height:200px;"></center>
      <input type="file" name="slideIMG5" >
      <input type="hidden" name="oldslideIMG5" value ="<?=$SLD_IMG5?>">



    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
