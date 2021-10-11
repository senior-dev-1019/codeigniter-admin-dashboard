<div class="row">
<div class="col-lg-9">
   <!-- Basic Card Example -->
   <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie"></i>  <?= $invoices_item['first_name'];?> <?= $invoices_item['last_name'];?></h6>
      </div>
      <div class="card-body">
      <h6 class="font-weight-bold text-primary">Contactgegevens</h6>
      <div><i class="far fa-envelope"></i> <a href="mailto:<?= $invoices_item['email'];?>"><?= $invoices_item['email'];?></a></div>
      <div><i class="fas fa-mobile-alt"></i> <a href="tel:<?= $invoices_item['phonenumber'];?>"><?= $invoices_item['phonenumber'];?></a></div>
      <hr>
      <h6 class="font-weight-bold text-primary">Adresgegevens</h6>
      <div><?= $invoices_item['street_name'];?> <?= $invoices_item['house_number'];?></div>
      <div><?= $invoices_item['zipcode'];?> <?= $invoices_item['city'];?></div>
      <div><?= $invoices_item['province'];?></div>
      <hr>
      <h6 class="font-weight-bold text-primary">Notities</h6>
      <div><?= $invoices_item['note'];?></div>
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
          <div>Toegevoegd op<br><?= $invoices_item['created_at'];?></div>
          <hr>
          <a class="btn btn-primary btn-block" href="/appointments/create/"><i class="far fa-calendar-plus"></i> Afspraak maken</a>
          <hr>
          <a class="btn btn-primary btn-block" href="<?= '/invoices/edit/'.$invoices_item['client_id']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a>
          <hr>
          <?php echo form_open('/invoices/delete/' . $invoices_item['client_id']); ?>
          <button type="submit" value="Verwijderen" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Verwijderen</button>
          </form>
      </div>
   </div>
   <!-- Collapsable Card Example -->
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-12">
   <!-- Dropdown Card Example -->
   <div class="card shadow">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-directions"></i> Google Maps</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <?php
          $address = $invoices_item['street_name'] . $invoices_item['house_number'] .$invoices_item['city'];

          echo '<iframe width="100%" height="400px" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
          ?>
      </div>
   </div>
   <!-- Collapsable Card Example -->
</div>
</div>
