
<div class="row">
<div class="col-lg-12">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-university"></i> Nieuwe factuur</h2>
          <?php echo validation_errors(); ?>
      </div>
   </div>
</div>
</div>

<?= form_open(); ?>
  <fieldset>
      <div class="row">
      <div class="col-lg-12">
         <!-- Basic Card Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Factuur gegevens</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="inputState">Type afspraak</label>
                  <select id="inputState" name="appointment_type" class="form-control input value1">
                    <option value="150">Stroom storing</option>
                    <option value="20">Avondtarief</option>
                    <option value="30">Dagtarief</option>
                    <option value="40">Vervolgafspraak</option>
                  </select>
                </div>
                <hr>
                <div>
                    <label for="inputState">Parkeergeld</label>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">€</span>
                  </div>
                  <input type="text" class="form-control input value2" placeholder="..." aria-label="parking" name="parkeergeld" aria-describedby="basic-addon1">
                </div>
                <hr>
                <div>
                    <label for="inputState">Materiaal uit bus</label>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">€</span>
                  </div>
                  <input type="text" class="form-control input value3" placeholder="..." aria-label="parking" name="bus_material" aria-describedby="basic-addon1">
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
               <h6 class="m-0 font-weight-bold text-primary">Betaal methode</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="inputState">Pinnen of Cash?</label>
                  <select id="inputState" name="pin_cash" class="form-control input value1">
                    <option value="pinnen">Pinnen</option>
                    <option value="contant">Contant</option>
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
               <h6 class="m-0 font-weight-bold text-primary">Totaal</h6>
            </div>
            <div class="card-body text-right">
                € <input type="text" disabled="disabled" name="amount" id="result" style="border: 0; background: #fff;" value="33" />
            </div>
         </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
         <!-- Basic Card Example -->
         <div class="mb-4">
            <button type="submit" class="btn btn-primary float-right">Versturen</button>
         </div>
      </div>
      </div>
  </fieldset>
</form>
<script type="text/javascript">
    $(document).ready(function(){
    var val1 = +$(".value1").val();
    var val2 = +$(".value2").val();
    var val3 = +$(".value3").val();
    $("#result").val(val1+val2+val3);
    });
    $('.input').blur(function(){
    var val1 = +$(".value1").val();
    var val2 = +$(".value2").val();
    var val3 = +$(".value3").val();
    $("#result").val(val1+val2+val3);
    });
</script>
