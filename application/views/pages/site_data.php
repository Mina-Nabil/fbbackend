<div class="container">
  <form id="contact">
    <br>
    <h3>Financial Brains Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Site Data</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Number of Students</th>
        <th>Number of Instructors</th>
	      <th>Number of Courses</th>
        <th>Edit</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?php foreach($ArrSite_data as $site_data){?>
  <tr>
    <td><?=$site_data['STDT_STUDTNO']?></td>
    <td><?=$site_data['STDT_INSTNO']?></td>
    <td><?=$site_data['STDT_CRSNO']?></td>
    <td><a href='<?=base_url() . 'site_data/update'?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?php }?>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
