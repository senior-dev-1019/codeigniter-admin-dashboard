<?php echo validation_errors(); ?>
<?= form_open('invoices/update/'); ?>
<input type="hidden" name="invoice_id" value="<?= $invoices_item['invoice_id'];?>">

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
                <input type="text" class="form-control" name="first_name" placeholder="John" value="<?= $invoices_item['first_name'];?>">
              </div>
              <div class="form-group">
                <label>Achternaam</label>
                <input type="text" class="form-control" name="last_name" placeholder="Do" value="<?= $invoices_item['last_name'];?>">
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="voorbeeld@email.nl" value="<?= $invoices_item['email'];?>">
              </div>
              <div class="form-group">
                <label>Telefoonnummer</label>
                <input type="text" class="form-control" name="phonenumber" placeholder="0612345678" value="<?= $invoices_item['phonenumber'];?>">
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
                <input type="text" class="form-control" name="street_name" placeholder="Storingstraat" value="<?= $invoices_item['street_name'];?>">
              </div>
              <div class="form-group">
                <label>Huisnummer</label>
                <input type="text" class="form-control" name="house_number" placeholder="34" value="<?= $invoices_item['house_number'];?>">
              </div>
              <div class="form-group">
                <label>Postcode</label>
                <input type="text" class="form-control" name="zipcode" placeholder="1234AB" value="<?= $invoices_item['zipcode'];?>">
              </div>
              <div class="form-group">
                <label>Plaats</label>
                <input type="text" class="form-control" name="city" placeholder="Plaatsnaam" value="<?= $invoices_item['city'];?>">
              </div>
              <div class="form-group">
                <label>Province</label>
                <input type="text" class="form-control" name="province" placeholder="Zuid-Holland" value="<?= $invoices_item['province'];?>">
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
             <h6 class="m-0 font-weight-bold text-primary">Notities</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                <textarea id="editor1" class="form-control" name="note" rows="3" placeholder="Opmerkingen"><?= $invoices_item['note'];?></textarea>
              </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="mb-4">
          <button type="submit" class="btn btn-primary float-right">Klant toevoegen en afspraak inplannen</button>
       </div>
    </div>
    </div>
</fieldset>
</form>
