<div class="container">
  <form id="contact">
    <br>
    <h3>Financial Brians Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Teachings</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Instructor Name</th>
        <th>Course Name</th>
        <th></th>
        <th>Edit</th>
	      <th>Delete</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?foreach($ArrTeachings as $teaching){?>
  <tr>
    <td><?=$teaching['INST_NAME']?></td>
    <td><?=$teaching['CRS_NAME']?></td>
    <td></td>
    <td><a href='<?=base_url() . 'teachings/update/' . $teaching['TECH_ID']?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'teachings/delete/' . $teaching['TECH_ID']?>'><img src=<?=base_url() . 'img/del.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?}?>
  <tr>
    <td></td><td></td>
    <td>
      <a href=<?=base_url() . "teachings/add"?> value="Add" type="submit" class="btn btn-primary">Add</a>
    </td>
    <td></td><td></td>
  </tr>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
