<?php

$name = 'Athbi.';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>
    <div class="row">

            <div class="col-lg-7 mb-12">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                          <?php
                            /* This sets the $time variable to the current hour in the 24 hour clock format */
                            $time = date("H");
                            /* Set the $timezone variable to become the current timezone */
                            $timezone = date("e");
                            /* If the time is less than 1200 hours, show good morning */
                            if ($time < "12") {
                                echo "Goedemorgen, " . $name;
                            } else
                            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                            if ($time >= "12" && $time < "18") {
                                echo "Goedenmiddag";
                            } else
                            /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                            if ($time >= "18" && $time < "23") {
                                echo "Goedenavond";
                            } else
                            /* Finally, show good night if the time is greater than or equal to 1900 hours */
                            if ($time >= "23") {
                                echo "Welterusten";
                            }
                            ?>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                        </div>
                  <canvas id="myChart"></canvas>
                  <script>
                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'],
                            datasets: [{
                                label: 'Aantal afspraken',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-12">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bedrijfsinformatie</h6>
                    </div>
                    <div class="card-body">
                      <address>
                        <strong>Stroom Storing B.V.</strong>
                        <br>
                        Rooseveltstraat 55<br>2321BL Leiden
                        <br>
                        <abbr title="Phone">T:</abbr> 0800-0100

                      </address>

                      <address>
                        <a href="mailto:#">info@stroom-storing.nl</a>
                      </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-3 mb-12">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Afspraken voor vandaag</h6>
                        </div>
                        <div class="card-body">
                          <address>
                            <strong>Stroom Storing B.V.</strong>
                            <br>
                            Rooseveltstraat 55<br>2321BL Leiden
                            <br>
                            <abbr title="Phone">T:</abbr> 0800-0100

                          </address>

                          <address>
                            <a href="mailto:#">info@stroom-storing.nl</a>
                          </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-12">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Meest vookomende afspraken</h6>
                        </div>
                        <div class="card-body">
                          <address>
                            <strong>Stroom Storing B.V.</strong>
                            <br>
                            Rooseveltstraat 55<br>2321BL Leiden
                            <br>
                            <abbr title="Phone">T:</abbr> 0800-0100

                          </address>

                          <address>
                            <a href="mailto:#">info@stroom-storing.nl</a>
                          </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-12">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aantal nieuwe klanten deze maand</h6>
                        </div>
                        <div class="card-body">
                          <address>
                            <strong>Stroom Storing B.V.</strong>
                            <br>
                            Rooseveltstraat 55<br>2321BL Leiden
                            <br>
                            <abbr title="Phone">T:</abbr> 0800-0100

                          </address>

                          <address>
                            <a href="mailto:#">info@stroom-storing.nl</a>
                          </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-12">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bedrijfsinformatie</h6>
                        </div>
                        <div class="card-body">
                          <address>
                            <strong>Stroom Storing B.V.</strong>
                            <br>
                            Rooseveltstraat 55<br>2321BL Leiden
                            <br>
                            <abbr title="Phone">T:</abbr> 0800-0100

                          </address>

                          <address>
                            <a href="mailto:info@stroom-storing.nl">info@stroom-storing.nl</a>
                          </address>
                        </div>
                    </div>
                </div>
            </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
