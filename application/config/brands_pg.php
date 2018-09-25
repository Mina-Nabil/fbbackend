<div class=row>
  <div class="col-lg-6">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Brand Table</h4>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Name</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($Tabledata as $row) {?>
                          <tr>
                              <td><?=$row['BRND_ID']?></td>
                              <td><a href="<?=base_url() . 'brands/modify/' . $row['BRND_ID']?>"> <?=$row['BRND_NAME']?></a></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title">Add/Edit Brands</h4>
          <form class="form-material m-t-10 row" action="<?=$FormURL?>" method="post">
            <div class="col-lg-6">
            <?php if(!is_null($BRND_ID)){ ?>
            <div class="form-group col-md-12 m-t-2">
                <input type="text" class="form-control" name=BRNDID value="<?='Brand ID: ' . $BRND_ID?>" readonly>
            </div>
          <?php } ?>
              <div class="form-group col-md-12 m-t-0">
                  <input type="text" class="form-control form-control-line" name=BRNDName placeholder="Brand Name" value="<?=$BRND_NAME?>" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group col-md-12 m-t-40" style="position: absolute;bottom:5px;">
              <button type="submit" class="btn btn-success waves-effect waves-light m-r-20" >Submit</button>
            </div>
            </div>
          </form>
      </div>
  </div>
  </div>
</div>
