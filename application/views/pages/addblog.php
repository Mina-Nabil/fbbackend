<div class="container">
  <?=form_open_multipart( $formURL , array('ID'=>'contact'))?>

    <br>
    <h3>Financial Brains Panel</h3>
    <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:100px;height:100px;"></center>
    <br>
    <h4>Add Blog</h4>
    <fieldset>
    <br>

    <input value="<?=$BLOG_TITLE?>" type="text" name="blogTitle" id="contact-submit" required>

      <textarea name="blogDesc" value="<?=$BLOG_DESC?>" rows=5 ></textarea>

      <label>Blog Image</label>
      <?php if($BLOG_IMGE != '') { ?>
        <center><img src=<?=base_url() ."uploads/blog/" . $BLOG_IMGE?> style="width:100px;height:200px;"></center>
        <input hidden="true" type="text" value ="<?=$BLOG_IMGE?>" name='oldblogImge'>
      <?php }?>
      <input type="file" name="blogImge" >
    <br><br>
      <input value="<?=$ButtonValue?>" type="submit" name="submit" id="contact-submit">
    <br><br>
      <label>
      <?=$MSGErr?>
      </label>
    </fieldset>
  </form>
</div>
<script type="text/javascript" src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script type="text/javascript">
tinymce.init({
  selector: '#myTextarea',
  theme: 'modern',
  width: 600,
  height: 300,
  plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor'
  ],
  content_css: 'css/content.css',
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
});
</script>
