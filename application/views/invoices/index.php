<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-university"></i> Factuur overzicht</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type afspraak</th>
                          <th>Parkeergeld</th>
                          <th>Bus materiaal</th>
                          <th>Factuur aangemaakt op</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($invoices as $invoices_item): ?>
                          <tr>
                              <td># <?php echo $invoices_item['invoices_id']; ?></td>
                              <td>€ <?= $invoices_item['appointment_type']; ?></td>
                              <td>€ <?= $invoices_item['parking']; ?></td>
                              <td>€ <?= $invoices_item['bus_material']; ?></td>
                              <td><?php echo $invoices_item['created_at']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
