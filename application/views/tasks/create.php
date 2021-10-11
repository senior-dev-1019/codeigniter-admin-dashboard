<div class="row">
<div class="col-lg-12">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h2 class="m-0 font-weight-bold text-primary"><i class="far fa-check-square"></i> Nieuwe taak toevoegen</h2>
      </div>
   </div>
</div>
</div>
<?php echo validation_errors(); ?>
<!-- <?php echo form_open_multipart('tasks/create'); ?>
<input type="file" name="image" id="image">
<input type="submit" value="Upload">
</form> -->
<div class="row">
<div class="col-lg-6">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
        <?php echo form_open_multipart('tasks/create'); ?>
        <fieldset>
            <div id="example-basic" class="wizard">
                <h3 class="hidden">Foto probleem</h3>
                <section>
                  <div class="row">
                  <div class="col-lg-12">
                     <!-- Basic Card Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Stap 1</h6>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col form-group">
                                  <label>Foto probleem</label>
                                  <input type="file" name="foto_1" size="20" class="form-control">
                                </div>
                             </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col form-group">
                                  <label>Foto probleem</label>
                                  <input type="file" name="foto_2" size="20" class="form-control">
                                </div>
                             </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col form-group">
                                  <label>Foto probleem</label>
                                  <input type="file" name="foto_3" size="20" class="form-control">
                                </div>
                             </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col form-group">
                                  <label>Foto probleem</label>
                                  <input type="file" name="foto_4" size="20" class="form-control">
                                </div>
                             </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col form-group">
                                  <label>Titel</label>
                                  <input type='text' name='title' class="form-control">
                                </div>
                             </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-12">
                     <!-- Basic Card Example -->
                     <div class="mb-4">
                        <button type="submit" name="submit" class="btn btn-primary float-right">Invoeren</button>
                     </div>
                  </div>
                  </div>
                </section>
            </div>
          </fieldset>

        </form>
      </div>
   </div>
</div>
<div class="col-lg-6">
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <table class="table">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Foto 1</th>
              <th>Foto 2</th>
              <th>Foto 3</th>
                <th>Foto 4</th>
            </tr>
            <?php $no=1; if (!empty($data)): ?>
              <?php foreach ($data as $row): ?>
                <tr>
                  <td><?php  echo $no++; ?></td>
                  <td><?php  echo $row->task_id; ?></td>
                  <td><img class="img-fluid" src="/assets/images/tasks/<?php  echo $row->foto_1; ?>"</td>
                <td><img class="img-fluid" src="/assets/images/tasks/<?php  echo $row->foto_2; ?>"</td>
                  <td><img class="img-fluid" src="/assets/images/tasks/<?php  echo $row->foto_3; ?>"</td>
                  <td><img class="img-fluid" src="/assets/images/tasks/<?php  echo $row->foto_4; ?>"</td>
                </tr>
              <?php endforeach ?>
            <?php else: ?>

              <tr>
                <td colspan="4" align="center">No data</td>
              </tr>
            <?php endif ?>
          </table>
      </div>
   </div>
</div>
</div>

<style>

h3.hidden.title {
  display: none !important;
}



.wizard, .tabcontrol {
    display: block;
    width: 100%;
    overflow:hidden
}

.wizard a, .tabcontrol a {
    outline:0
}

.wizard ul, .tabcontrol ul {
    list-style: none !important;
    padding: 0;
    margin:0
}

.wizard ul > li, .tabcontrol ul > li {
    display: block;
    padding:0
}

.wizard > .steps .current-info, .tabcontrol > .steps .current-info {
    position: absolute;
    left:-999em
}

.wizard > .content > .title, .tabcontrol > .content > .title {
    position: absolute;
    left:-999em
}

.wizard > .steps {
    position: relative;
    display: block;
    width:100%
}

.wizard.vertical > .steps {
    display: inline;
    float: left;
    width:30%
}

.wizard > .steps .number {
    font-size:1.429em
}

.wizard > .steps > ul > li {
    width:25%
}

.wizard > .steps > ul > li, .wizard > .actions > ul > li {
    float:left
}

.wizard.vertical > .steps > ul > li {
    float: none;
    width:100%
}

.wizard > .steps a, .wizard > .steps a:hover, .wizard > .steps a:active {
    display: block;
    width: auto;
    margin: 0 .5em .5em;
    padding: 1em 1em;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard > .steps .disabled a, .wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active {
    background: #eee;
    color: #aaa;
    cursor:default
}

.wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
    background: #001fba;
    color: #fff;
    cursor:default
}

.wizard > .steps .done a, .wizard > .steps .done a:hover, .wizard > .steps .done a:active {
    background: rgba(0, 31, 186, 0.53);
    color:#fff
}

.wizard > .steps .error a, .wizard > .steps .error a:hover, .wizard > .steps .error a:active {
    background: #ff3111;
    color:#fff
}

.wizard > .content {
    display: block;
    margin: .5em;
    min-height: 25em;
    overflow: hidden;
    position: relative;
    width: auto;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard.vertical > .content {
    display: inline;
    float: left;
    margin: 0 2.5% .5em 2.5%;
    width:65%
}

.wizard > .content > .body {
  width: 100%;
  margin-top: 25px;
  overflow: hidden;
}

.wizard > .content > .body ul {
    list-style:disc !important
}

.wizard > .content > .body ul > li {
    display:list-item
}

.wizard > .content > .body > iframe {
    border: 0 none;
    width: 100%;
    height:100%
}

.wizard > .content > .body input {
    display: block;
    border: 1px solid #ccc
}

.wizard > .content > .body input[type="checkbox"] {
    display:inline-block
}

.wizard > .content > .body input.error {
    background: #fbe3e4;
    border: 1px solid #fbc2c4;
    color:#8a1f11
}

.wizard > .content > .body label {
    display: inline-block;
    margin-bottom:.5em
}

.wizard > .content > .body label.error {
    color: #8a1f11;
    display: inline-block;
    margin-left:1.5em
}

.wizard > .actions {
    position: relative;
    display: block;
    text-align: right;
    width:100%
}

.wizard.vertical > .actions {
    display: inline;
    float: right;
    margin: 0 2.5%;
    width:95%
}

.wizard > .actions > ul {
    display: inline-block;
    text-align:right
}

.wizard > .actions > ul > li {
    margin:0 .5em
}

.wizard.vertical > .actions > ul > li {
    margin:0 0 0 1em
}

.wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
    background: #001fba;
    color: #fff;
    display: block;
    padding: .5em 1em;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active {
    background: #eee;
    color:#aaa
}

.wizard > .loading {
}

.wizard > .loading .spinner {
}

.tabcontrol > .steps {
    position: relative;
    display: block;
    width:100%
}

.tabcontrol > .steps > ul {
    position: relative;
    margin: 6px 0 0 0;
    top: 1px;
    z-index:1
}

.tabcontrol > .steps > ul > li {
    float: left;
    margin: 5px 2px 0 0;
    padding: 1px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius:5px
}

.tabcontrol > .steps > ul > li:hover {
    background: #edecec;
    border: 1px solid #bbb;
    padding:0
}

.tabcontrol > .steps > ul > li.current {
    background: #fff;
    border: 1px solid #bbb;
    border-bottom: 0 none;
    padding: 0 0 1px 0;
    margin-top:0
}

.tabcontrol > .steps > ul > li > a {
    color: #5f5f5f;
    display: inline-block;
    border: 0 none;
    margin: 0;
    padding: 10px 30px;
    text-decoration:none
}

.tabcontrol > .steps > ul > li > a:hover {
    text-decoration:none
}

.tabcontrol > .steps > ul > li.current > a {
    padding:15px 30px 10px 30px
}

.tabcontrol > .content {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 35em;
    overflow: hidden;
    border-top: 1px solid #bbb;
    padding-top:20px
}

.tabcontrol > .content > .body {
    float: left;
    position: absolute;
    width: 95%;
    height: 95%;
    padding:2.5%
}

.tabcontrol > .content > .body ul {
    list-style:disc !important
}

.tabcontrol > .content > .body ul > li {
    display:list-item
}

@media (max-width: 600px) {
    .wizard > .steps > ul > li {
        width:50%
    }

    .wizard > .steps a, .wizard > .steps a:hover, .wizard > .steps a:active {
        margin-top:.5em
    }

    .wizard.vertical > .steps, .wizard.vertical > .actions {
        display: block;
        float: none;
        width:100%
    }

    .wizard.vertical > .content {
        display: block;
        float: none;
        margin: 0 .5em .5em;
        width:auto
    }
}

@media (max-width: 480px) {
    .wizard > .steps > ul > li {
        width:100%
    }
}

.com {
    color:#93a1a1
}

.lit {
    color:#195f91
}

.pun, .opn, .clo {
    color:#93a1a1
}

.fun {
    color:#dc322f
}

.str, .atv {
    color:#d14
}

.kwd, .prettyprint .tag {
    color:#1e347b
}

.typ, .atn, .dec, .var {
    color:teal
}

.pln {
    color:#48484c
}

.prettyprint {
    padding: 8px;
    background-color: #f7f7f9;
    border:1px solid #e1e1e8
}

.prettyprint.linenums {
    -webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
    -moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
    box-shadow:inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0
}

ol.linenums {
    margin:0 0 0 33px
}

ol.linenums li {
    padding-left: 12px;
    color: #bebec5;
    line-height: 20px;
    text-shadow: 0 1px 0 #fff
}


</style>
