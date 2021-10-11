<?php echo validation_errors(); ?>
<?php echo form_open_multipart('tasks/update'); ?>
<input type="hidden" name="task_id" value="<?= $tasks_item['task_id'];?>">
<fieldset>
    <div id="example-basic" class="wizard">
        <h3 class="hidden">Foto probleem</h3>
        <section>
          <div class="row">
          <div class="col-lg-12">
             <!-- Basic Card Example -->
             <div class="card shadow mb-4">
                <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Stap 1</h6>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <div class="col form-group">
                          <div class="preview">
                          </div>
                          <label>Foto probleem</label>
                          <input type="file" name="foto_1" size="20" class="form-control">
                        </div>
                     </div>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <div class="col form-group">
                          <div class="preview">
                          </div>
                          <label>Foto probleem</label>
                          <input type="file" name="foto_2" size="20" class="form-control">
                        </div>
                     </div>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <div class="col form-group">
                          <div class="preview">
                          </div>
                          <label>Foto probleem</label>
                          <input type="file" name="foto_3" size="20" class="form-control">
                        </div>
                     </div>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <div class="col form-group">
                          <div class="preview">
                          </div>
                          <label>Foto probleem</label>
                          <input type="file" name="foto_4" size="20" class="form-control">
                        </div>
                     </div>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <div class="col form-group">
                          <label>Titel</label>
                          <input type='text' name='title' value="<?= $tasks_item['title'];?>">
                        </div>
                     </div>
                </div>
             </div>
          </div>
          </div>
          <div class="row">
          <div class="col-lg-12">
             <!-- Basic Card Example -->
             <div class="mb-4">
                <button type="submit" name="update" class="btn btn-primary float-right">Invoeren</button>
             </div>
          </div>
          </div>
        </section>
    </div>
  </fieldset>
</form>
