<div class="container">
  <form id="contact">
    <br>
    <h3>Financial Brians Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Exams</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Description</th>
        <th>Edit</th>
	      <th>Delete</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?php foreach($ArrExams as $exam){?>
  <tr>
    <td><p><?=$exam['EXAM_NAME']?></p></td>
    <td><?=$exam['CRS_NAME']?></td>
    <td><p><?=$exam['EXAM_DESC']?></p></td>
    <td><a href='<?=base_url() . 'exams/update/' . $exam['EXAM_ID']?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'exams/delete/' . $exam['EXAM_ID']?>'><img src=<?=base_url() . 'img/del.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?php }?>
  <tr>
    <td></td><td></td>
    <td>
      <a href=<?=base_url() . "exams/add"?> value="Add" type="submit" class="btn btn-primary">Add</a>
    </td>
    <td></td><td></td>
  </tr>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
