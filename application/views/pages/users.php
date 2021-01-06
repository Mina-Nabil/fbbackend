<div class="container">
  <form id="contact">
    <br>
    <h3>Financial brains Control Panel</h3>
   <br>
    <center><img src=<?=base_url() . "img/vc_logo.jpg"?> style="width:200px;height:100px;"></center>
    <br>
    <h4>Users</h4>
    <fieldset>
<br>
<section class='container'>
  <table cellpadding='0' cellspacing='0' border='0'>
    <div class='tbl-header'>

    <tr>
        <th>Name</th>
	      <th>Password</th>
	      <th></th>
        <th>Edit</th>
	      <th>Delete</th>
    </tr>

    </div>
    <div class='tbl-content'>
  <?php foreach($ArrUsers as $user){?>
  <tr>
    <td><?=$user['USR_NAME']?></td>
    <td><?=$user['USR_PASS']?></td>
    <td></td>
    <td><a href='<?=base_url() . 'users/update/' . $user['USR_ID']?>'><img src=<?=base_url() . 'img/edit.png'?> style='width:30px;height:30px;'></a></td>
    <td><a href='<?=base_url() . 'users/delete/' . $user['USR_ID']?>'><img src=<?=base_url() . 'img/del.png'?> style='width:30px;height:30px;'></a></td>
  </tr>
  <?php }?>
  <tr>
    <td></td><td></td>

    <td>
      <a href=<?=base_url() . "users/add"?> value="Add" type="submit" class="btn btn-primary">Add</a>
    </td><td></td>
  </tr>
  </table>
 <label><?=$MSGOK?></label>
 <label><?=$MSGErr?></label>
</div>
