<div class="row">
    <div class="col-12">
        <h2><?php echo $title; ?></h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Voornaam</th>
              <th scope="col">Achternaam</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefoonummer</th>
               <th scope="col">Acties</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($finance as $finance_item): ?>
                <tr>
                    <td><?php echo $finance_item['client_id']; ?></td>
                    <td><?= $finance_item['first_name']; ?></td>
                    <td><?= $finance_item['last_name']; ?></td>
                    <td><a href='mailto:<?= $finance_item['email']; ?>'><?= $finance_item['email']; ?></td>
                    <td><a href='tel:<?= $finance_item['phonenumber']; ?>'><?php echo $finance_item['phonenumber']; ?></a></td>
                    <td><a class="btn btn-primary" href="<?= '/finance/'.$finance_item['client_id']; ?>">Bekijk afspraak</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
