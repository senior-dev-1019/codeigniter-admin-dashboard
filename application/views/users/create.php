<div class="row">
<div class="col-lg-12">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Nieuwe gebruiker toevoegen</h2>
      </div>
   </div>
</div>
</div>
<?php echo validation_errors(); ?>
<?= form_open(); ?>
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
                    <label for="exampleFormControlSelect1">type gebruiker</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="type_user">
                      <option>Admin</option>
                      <option>Sales</option>
                      <option>Electricien</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label>Voornaam</label>
                  <input type="text" class="form-control" name="first_name" placeholder="John">
                </div>
                <div class="form-group">
                  <label>Achternaam</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Do">
                </div>
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="text" class="form-control" name="email" placeholder="voorbeeld@email.nl">
                </div>
                <div class="form-group">
                  <label>Telefoonnummer</label>
                  <input type="text" class="form-control" name="phonenumber" placeholder="0612345678">
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
                  <input type="text" class="form-control" name="street_name" placeholder="Storingstraat">
                </div>
                <div class="form-group">
                  <label>Huisnummer</label>
                  <input type="text" class="form-control" name="house_number" placeholder="34">
                </div>
                <div class="form-group">
                  <label>Postcode</label>
                  <input type="text" class="form-control" name="zipcode" placeholder="1234AB">
                </div>
                <div class="form-group">
                  <label>Plaats</label>
                  <input type="text" class="form-control" name="city" placeholder="Plaatsnaam">
                </div>
                <div class="form-group">
                  <label>Province</label>
                  <input type="text" class="form-control" name="province" placeholder="Zuid-Holland">
                </div>
            </div>
         </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
         <!-- Basic Card Example -->
         <div class="mb-4">
            <button type="submit" class="btn btn-primary float-right">Gebruiker toevoegen</button>
         </div>
      </div>
      </div>
  </fieldset>
</form>
