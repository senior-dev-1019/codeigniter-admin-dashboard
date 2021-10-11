<?php echo validation_errors(); ?>
<?= form_open('users/update/'); ?>
<input type="hidden" name="user_id" value="<?= $users_item['id'];?>">

<fieldset>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Contactgegevens</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                <label>Voornaam</label>
                <input type="text" class="form-control" name="first_name" placeholder="John" value="<?= $users_item['first_name'];?>">
              </div>
              <div class="form-group">
                <label>Achternaam</label>
                <input type="text" class="form-control" name="last_name" placeholder="Do" value="<?= $users_item['last_name'];?>">
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="voorbeeld@email.nl" value="<?= $users_item['email'];?>">
              </div>
              <div class="form-group">
                <label>Telefoonnummer</label>
                <input type="text" class="form-control" name="phonenumber" placeholder="0612345678" value="<?= $users_item['phonenumber'];?>">
              </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Adresgegevens</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                <label>Straatnaam</label>
                <input type="text" class="form-control" name="street_name" placeholder="Storingstraat" value="<?= $users_item['street_name'];?>">
              </div>
              <div class="form-group">
                <label>Huisnummer</label>
                <input type="text" class="form-control" name="house_number" placeholder="34" value="<?= $users_item['house_number'];?>">
              </div>
              <div class="form-group">
                <label>Postcode</label>
                <input type="text" class="form-control" name="zipcode" placeholder="1234AB" value="<?= $users_item['zipcode'];?>">
              </div>
              <div class="form-group">
                <label>Plaats</label>
                <input type="text" class="form-control" name="city" placeholder="Plaatsnaam" value="<?= $users_item['city'];?>">
              </div>
              <div class="form-group">
                <label>Province</label>
                <input type="text" class="form-control" name="province" placeholder="Zuid-Holland" value="<?= $users_item['province'];?>">
              </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Werkgebieden</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                  <?php foreach($short_zipcode as $row): ?>
                      <input type="checkbox" id="checkItem" name="check[]" value="<?= $row->short_zipcode_id; ?>">  <?= $row->short_zipcode; ?> | <?= $row->short_zipcode_name; ?><br>
                  <?php endforeach; ?>
              </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="mb-4">
          <button type="submit" class="btn btn-primary float-right">Klant bijwerken</button>
       </div>
    </div>
    </div>
</fieldset>
</form>
