<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800" style="display: inline-block;"><i class="fas fa-users"></i> <?php echo $title; ?></h1>
            <a class="btn btn-primary" href="<?php echo site_url(); ?>clients/create/" style="float: right;"><i class="fas  fa-plus fa-sm"></i> Toevoegen</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Voornaam</th>
                          <th>Achternaam</th>
                          <th>E-mail</th>
                          <th>Telefoonummer</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($clients as $clients_item): ?>
                          <tr>
                              <td><?php echo $clients_item['client_id']; ?></td>
                              <td><a href="<?php echo site_url(); ?><?= '/clients/'.$clients_item['client_id']; ?>"><?= $clients_item['first_name']; ?></a></td>
                              <td><a href="<?php echo site_url(); ?><?= '/clients/'.$clients_item['client_id']; ?>"><?= $clients_item['last_name']; ?></a></td>
                              <td><a href='mailto:<?= $clients_item['email']; ?>'><?= $clients_item['email']; ?></td>
                              <td><a href='tel:<?= $clients_item['phonenumber']; ?>'><?php echo $clients_item['phonenumber']; ?></a></td>                          </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
