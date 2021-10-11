<div class="row">
<div class="col-lg-12">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Nieuwe klant toevoegen</h2>
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
                <div class="row">
                    <div class="col form-group">
                      <label>Voornaam</label>
                      <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="col form-group">
                      <label>Achternaam</label>
                      <input type="text" class="form-control" name="last_name">
                    </div>
                 </div>
                 <div class="row">
                     <div class="col form-group">
                       <label>E-mail</label>
                       <input type="text" class="form-control" name="email">
                     </div>
                     <div class="col form-group">
                       <label>Telefoonnummer</label>
                       <input type="text" class="form-control" name="phonenumber">
                     </div>
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
                <div class="row">
                    <div class="col form-group">
                      <label>Straatnaam</label>
                      <input type="text" class="form-control" name="street_name">
                    </div>
                    <div class="col form-group">
                      <label>Huisnummer</label>
                      <input type="text" class="form-control" name="house_number">
                    </div>
              </div>
              <div class="row">
                  <div class="col form-group">
                    <label>Postcode</label>
                    <input type="text" class="form-control" name="zipcode">
                  </div>
                  <div class="col form-group">
                    <label>Plaats</label>
                    <input type="text" class="form-control" name="city">
                  </div>
              </div>

                <div class="form-group">
                    <label for="inputState">Provincie</label>
                      <select id="inputState" class="form-control" name="province">
                        <option value="5744" selected>Zuid-Holland</option>
                        <option value="5722">Drenthe</option>
                        <option value="5724">Flevoland</option>
                        <option value="5726">Friesland</option>
                        <option value="5728">Gelderland</option>
                        <option value="5730">Groningen</option>
                        <option value="5732">Limburg</option>
                        <option value="5734">Noord-Brabant</option>
                        <option value="5736">Noord-Holland</option>
                        <option value="5738">Overijssel</option>
                        <option value="5740">Utrecht</option>
                        <option value="5742">Zeeland</option>
                      </select>
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
                  <textarea id="editor1" class="form-control" name="note" rows="3" placeholder="Opmerkingen"></textarea>
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
