<div class="container">
  <form id="contact">
    <br>
    <h3>Financial Brians Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Courses</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Name</th>
        <th>Brief</th>
        <th>Overview</th>
        <th>Certificate</th>
        <th>Duration</th>
	      <th>Topics</th>
	      <th>Benefits</th>
	      <th>Exams</th>
        <th>Edit</th>
	      <th>Delete</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?php foreach($ArrCourses as $course){?>
  <tr>
    <td><p><?=$course['CRS_NAME']?></p></td>
    <td><p><?=$course['CRS_BRIEF']?></p></td>
    <td><p><?=$course['CRS_OVERVIEW']?></p></td>
    <td><p><?=$course['CRS_CERTIFICATE']?></p></td>
    <td><p><?=$course['CRS_DUR']?></p></td>
    <td><a href='<?=base_url() . 'topics/' . $course['CRS_ID']?>'><img src=<?=base_url() . 'img/items.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'benefits/' . $course['CRS_ID']?>'><img src=<?=base_url() . 'img/items.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'exams/' . $course['CRS_ID']?>'><img src=<?=base_url() . 'img/items.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'courses/update/' . $course['CRS_ID']?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'courses/delete/' . $course['CRS_ID']?>'><img src=<?=base_url() . 'img/del.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?php }?>
  <tr>
    <td></td><td></td><td></td><td></td>
    <td>
      <a href=<?=base_url() . "courses/add"?> value="Add" type="submit" class="btn btn-primary">Add</a>
    </td>
    <td></td><td></td>
  </tr>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
