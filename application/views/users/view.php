<div class="row">
<div class="col-lg-9">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie"></i>  <?= $users_item['first_name'];?> <?= $users_item['last_name'];?></h6>
      </div>
      <div class="card-body">
      <h6 class="font-weight-bold text-primary">Contactgegevens</h6>
      <div><i class="far fa-envelope"></i> <a href="mailto:<?= $users_item['email'];?>"><?= $users_item['email'];?></a></div>
      <div><i class="fas fa-mobile-alt"></i> <a href="tel:<?= $users_item['phonenumber'];?>"><?= $users_item['phonenumber'];?></a></div>
      <hr>
      <h6 class="font-weight-bold text-primary">Adresgegevens</h6>
      <div><?= $users_item['street_name'];?> <?= $users_item['house_number'];?></div>
      <div><?= $users_item['zipcode'];?> <?= $users_item['city'];?></div>
       <div><?= $users_item['province'];?></div>
       <hr>
      <?php
      $address = $users_item['street_name'] . $users_item['house_number'] .$users_item['city'];

      echo '<iframe width="100%" height="400px" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
      ?>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Werkgebeiden</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Postcode</th>
                        <th>Naam werkgebied</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach($short_zipcode as $row): ?>
                        <tr>
                            <td><?= $row->short_zipcode; ?></td>
                            <td><?= $row->short_zipcode_name; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
          </div>
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
          <div>Toegevoegd op<br><?= $users_item['register_date'];?></div>
          <hr>
          <a class="btn btn-primary btn-block" href="<?= '/users/edit/'.$users_item['id']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a>
          <hr>
          <?php echo form_open('/users/delete/' . $users_item['id']); ?>
          <button type="submit" value="Verwijderen" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Verwijderen</button>
          </form>
      </div>
   </div>
   <!-- Collapsable Card Example -->
   <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-cog"></i> Taken</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          .....
      </div>
   </div>
</div>
</div>
