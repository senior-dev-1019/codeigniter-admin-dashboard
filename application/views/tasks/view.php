
<div class="row">
<div class="col-lg-9">
   <!-- Basic Card Example -->
   <div class="card shadow">
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-images"></i> Bestanden</h6>
      </div>
      <div class="card-body">
          <div class="row">
              <div class="col-lg-4">
                  <h6 class="m-0 font-weight-bold text-primary text-center">Foto probleem</h6>
                  <hr>
                  <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/tasks/<?= $tasks_item['foto_1'];?>">
              </div>
              <div class="col-lg-4">
                  <h6 class="m-0 font-weight-bold text-primary text-center">Foto groepenkast</h6>
                  <hr>
                  <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/tasks/<?= $tasks_item['foto_2'];?>">
              </div>
              <div class="col-lg-4">
                  <h6 class="m-0 font-weight-bold text-primary text-center">Foto groepenkast open</h6>
                  <hr>
                  <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/tasks/<?= $tasks_item['foto_3'];?>">
              </div>
          </div>
      </div>
   </div>
</div>
<div class="col-lg-3">
   <!-- Dropdown Card Example -->
   <div class="card shadow">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-cog"></i> Acties</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <div>Toegevoegd op<br><strong><?= $tasks_item['created_at'];?></strong></div>
          <br>
          <a class="btn btn-primary btn-block" href="<?= '/tasks/edit/'.$tasks_item['task_id']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a>
          <hr>
          <?php echo form_open('/tasks/delete/' . $tasks_item['task_id']); ?>
          <button type="submit" value="Verwijderen" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Verwijderen</button>
          </form>
      </div>
   </div>
   <!-- Collapsable Card Example -->
</div>
</div>
