<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-users"></i> Gebruikers</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Voornaam</th>
                          <th>Achternaam</th>
                          <th>Telefoonummer</th>
                          <th>Type gebruiker</th>
                          <th>Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($users as $users_item):

                          if ($users_item['user_type'] == 0) {

                            $usertype_name = 'Superadmin';

                          } elseif ($users_item['user_type'] == 1) {

                            $usertype_name = 'Superadmin';

                          } elseif ($users_item['user_type'] == 2) {
                            $usertype_name = 'Monteur';

                          } else {

                          $usertype_name = 'Nog geen rechten';

                          }

                        ?>
                          <tr>
                              <td>#<?= $users_item['id'] ?></td>
                              <td><a href="<?= '/users/view/'.$users_item['id']; ?>"><?= $users_item['first_name'] ?></a></td>
                              <td><?= $users_item['last_name'] ?></td>
                              <td><?= $users_item['phonenumber'] ?></td>
                              <td><?= $usertype_name ?></td>
                              <td><a class="btn btn-primary btn-block" href="<?= '/users/edit/'.$users_item['id']; ?>"><i class="fas fa-user-edit"></i> Bewerken</a></td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
