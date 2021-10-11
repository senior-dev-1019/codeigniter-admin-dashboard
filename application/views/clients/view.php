<div class="row">
<div class="col-lg-8">
   <!-- Basic Card Example -->
   <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie"></i>  <?= $clients_item['first_name'];?> <?= $clients_item['last_name'];?></h6>
      </div>
      <div class="card-body">
      <h6 class="font-weight-bold text-primary">Contactgegevens</h6>
      <div><i class="far fa-envelope"></i> <a href="mailto:<?= $clients_item['email'];?>"><?= $clients_item['email'];?></a></div>
      <div><i class="fas fa-mobile-alt"></i> <a href="tel:<?= $clients_item['phonenumber'];?>"><?= $clients_item['phonenumber'];?></a></div>
      <hr>
      <h6 class="font-weight-bold text-primary">Adresgegevens</h6>
      <div><?= $clients_item['street_name'];?> <?= $clients_item['house_number'];?></div>
      <div><?= $clients_item['zipcode'];?> <?= $clients_item['city'];?></div>
      <div><?= $clients_item['province'];?></div>
      </div>
   </div>

   <!-- <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Afspraken</h6>
      </div>
      <div class="card-body">
        <?php
       foreach($appointments as $row)
       {
         echo '
         <div class="note-wrapper">
         <span class="date"><strong>'.$row->created_at.'</strong></span>
         <br>
         <span>'.$row->appointment_type.'</span>
         <br>
         <a href="/appointments/'.$row->appointment_id.'" class="btn btn-primary">Bekijk afspraak</a>
         </div>';
       }
       ?>
      </div>
   </div> -->
   <!-- <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Administratie</h6>
      </div>
      <div class="card-body">
        .....
      </div>
   </div> -->
   <!-- Table appointments -->
   <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Afspraken</h6>
      </div>
      <div class="card-body">
        <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Datum</th>
                    <th>Monteur</th>
                    <th>Actie</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($events as $row) {
                    echo "<tr>";
                    echo "<td>".$row->ID."</td>";
                    echo "<td>".$row->start."</td>";


                    if ($row->user == 0){
                    echo "<td>Klaas</td>";
                    } else {
                    echo "<td>Linward</td>";
                      }

                    echo "<td><a class='btn btn-primary btn-block' href='/appointments/".$row->ID."'>Bekijk afspraak</a></td>";

                  }
                ?>
          </tbody>
        </table>
      </div>
   </div>
   <!-- Table tasks -->
   <div class="card shadow">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Taken</h6>
      </div>
      <div class="card-body">
        <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Beschrijving</th>
                    <th>Actie</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($task as $row) {
                    echo "<tr>";
                    echo "<td>".$row->task_id."</td>";
                    $var = $row->status;
                        if ($var == '0') {
                          echo "<td><span class='badge badge-danger'>Open</span></td>";
                        } elseif ($var == '1') {
                              echo "<td><span class='badge badge-warning'>Bezig</span></td>";
                        } else {
                          echo "<td><span class='badge badge-success'>Afgerond</span></td>";
                    }
                    echo "<td>".$row->description."</td>";
                    echo "<td><a class='btn btn-primary btn-block' href='/tasks/".$row->task_id."'>Bekijk taak</a></td>";

                  }
                ?>
          </tbody>
        </table>
      </div>
   </div>
</div>
<div class="col-lg-4">
   <!-- Dropdown Card Example -->
   <div class="card shadow">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-cog"></i> Acties</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <div>Toegevoegd op<br><?= $clients_item['created_at'];?></div>
          <!-- <hr>
          <a class="btn btn-primary btn-block" href="/appointments/create/"><i class="far fa-calendar-plus"></i> Afspraak maken</a> -->
          <hr>
          <a class="btn btn-primary btn-block" href="<?= '/clients/edit/'.$clients_item['client_id']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a>
          <hr>
          <?php echo form_open('/clients/delete/' . $clients_item['client_id']); ?>
          <button type="submit" value="Verwijderen" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Verwijderen</button>
          </form>
      </div>
   </div>

   <div class="row">
   <div class="col-lg-12">
     <div class="card shadow">
        <div class="card-header py-3">
           <h6 class="m-0 font-weight-bold text-primary">Notities</h6>
        </div>
        <div class="card-body">
          <?php
         foreach($note as $row)
         {
           echo '<div class="note-wrapper"><span class="date"><strong>'.$row->created_at.'</strong></span><br><span>'.$row->note.'</span></div>';
         }
         ?>
        </div>
     </div>
      <!-- Dropdown Card Example -->
      <div class="card shadow">
         <!-- Card Header - Dropdown -->
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-directions"></i> Google Maps</h6>
         </div>
         <!-- Card Body -->
         <?php
         $address = $clients_item['street_name'] . $clients_item['house_number'] .$clients_item['city'];

         echo '<iframe width="100%" height="400px" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
         ?>
      </div>
      <!-- Collapsable Card Example -->
   </div>
   </div>

   <!-- Collapsable Card Example -->
</div>
</div>
