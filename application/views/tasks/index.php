<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800"><i class="far fa-check-square"></i> Taak</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Status</th>
                          <th>Monteur</th>
                          <th>Klant</th>
                          <th>Actie</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($tasks as $key => $value) {
                            echo "<tr>";
                            echo "<td>".$value->task_id."</td>";
                            $var = $value->status;
                                if ($var == '0') {
                                  echo "<td><span class='badge badge-danger'>Open</span></td>";
                                } elseif ($var == '1') {
                                      echo "<td><span class='badge badge-warning'>Bezig</span></td>";
                                } else {
                                  echo "<td><span class='badge badge-success'>Afgerond</span></td>";
                            }

                            $var = $value->user_id;
                                if ($var == '0') {
                                  echo "<td>Klaas</td>";
                                } elseif ($var == '1') {
                                      echo "<td>Linward</td>";
                                } else {
                                  echo "<td>Niemand</td>";
                            }

                            echo "<td>".$value->last_name."</td>";
                            echo "<td><a class='btn btn-primary btn-block' href='".$value->task_id."'>Bekijk taak</a></td>";
                          }
                        ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<style>
.badge {
    font-size: 100%;
    text-align: center;
    margin: 0 auto;
    display: table;
    width: 100%;
}
</style>
