<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">Afspraken overzicht</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type afspraak</th>
                            <th>Naam</th>
                            <th>Datum</th>
                            <th>Telefoonnummer</th>
                            <th>Adres</th>
                            <th>Actie</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($appontment as $key => $value) {
                            echo "<tr>";
                            echo "<td>".$value->ID."</td>";
                            echo "<td>".$value->title."</td>";
                            echo "<td>".$value->last_name."</td>";
                            echo "<td>".$value->start."</td>";
                            echo "<td>".$value->phonenumber."</td>";
                            echo "<td>".$value->street_name.' '.$value->house_number.'<br>'.$value->zipcode.' '.$value->city."</td>";
                            echo "<td><a class='btn btn-primary btn-block' href='".$value->ID."'>Bekijk afspraak</a></td>";
                          }
                        ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
