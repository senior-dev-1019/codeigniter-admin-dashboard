<div class="row">
<div class="col-lg-9">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-body">
      <div class="row">
        <div class="col">
          <h6 class="font-weight-bold text-primary">Type afspraak</h6>
          <div><?= $appointments_item['title'];?></div>
          <hr>
          <div>
              <h6 class="font-weight-bold text-primary">Notities</h6>
              <?= $appointments_item['title'];?>
          </div>
          <hr>
          <div class="row">
              <div class="col">
                  <h6 class="font-weight-bold text-primary">Datum</h6>
                  <?= $appointments_item['start'];?>
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col">
                  <h6 class="font-weight-bold text-primary">Monteur</h6>
                  <?php
                  if ($appointments_item['user'] == 0){
                  echo "Klaas";
                  } else {
                  echo "Linward";
                    }
                  ?>
              </div>
          </div>
        </div>
       <div class="col">
         <h6 class="font-weight-bold text-primary">Naam</h6>
         <div><?= $appointments_item['title'];?></div>
         <hr>
         <div>
             <h6 class="font-weight-bold text-primary">E-mail</h6>
             <?= $appointments_item['title'];?>
         </div>
         <hr>
         <div class="row">
             <div class="col">
                 <h6 class="font-weight-bold text-primary">Telefoonnummer</h6>
                 <?= $appointments_item['start'];?>
             </div>
         </div>
         <hr>
         <div class="row">
             <div class="col">
                 <h6 class="font-weight-bold text-primary">Adres</h6>
                 <?php
                 if ($appointments_item['user'] == 0){
                 echo "Klaas";
                 } else {
                 echo "Linward";
                   }
                 ?>
             </div>
         </div>
       </div>
      </div>

      </div>
   </div>

   <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <!-- Card Body -->
      <div class="card-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2448.4856163134455!2d4.479269115793465!3d52.14367777974472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c65ea9428bf1%3A0x72c02c0ba96c7663!2sRooseveltstraat%2055%2C%202321%20BM%20Leiden!5e0!3m2!1sen!2snl!4v1618513302425!5m2!1sen!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
   </div>
</div>
<div class="col-lg-3">
   <!-- Dropdown Card Example -->
   <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-cog"></i> Acties</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <a class="btn btn-primary btn-block" href="<?= '/tasks/'.$appointments_item['task_id']; ?>"><i class="fas fa-tasks"></i> Open taak</a>

        <hr>
          <a class="btn btn-primary btn-block" href="<?= '/appointments/edit/'.$appointments_item['ID']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a>
          <hr>
          <?php echo form_open('/appointments/delete/' . $appointments_item['ID']); ?>
          <button type="submit" value="Verwijderen" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Verwijderen</button>
          </form>
      </div>
   </div>
</div>
</div>
