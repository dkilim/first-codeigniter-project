
<body>
    <div class="container ">
        <div class="row center">
            <div class="col-sm-12 mw mtop">
                <div class="card edit-user-form card-edit">

                        <div class="card-body" style="padding: 2em;">
                          <div class="user-icon"> <i class="fas fa-user-circle"> </i></div>
                          <div class="username" > <?= session()->get('username') ?> </div>

                            <?php if (session()->get('success')): ?>
                                 <div class="alert alert-success text-align-center" id="alert" role="alert">
                                    <?=  session()->get('success') ?>
                                 </div>
                            <?php endif; ?>
                           
                            <div class="form-group row center">
                                <label for="firstname" class="col-sm-4 col-form-label">First name:</label>
                                <div class="col-sm-8 mycustom">
                                  <input type="text" readonly class="form-control-plaintext" id="firstname" value="<?= $user['firstname'] ?>">
                                </div>
                            </div>
                            <div class="form-group row center">
                                <label for="lastname" class="col-sm-4 col-form-label">Last name:</label>
                                <div class="col-sm-8 mycustom">
                                  <input type="text" readonly class="form-control-plaintext" id="lastname" value="<?= $user['lastname'] ?>">
                                </div>
                            </div>
                            <div class="form-group row center">
                                <label for="address" class="col-sm-4 col-form-label">Address:</label>
                                <div class="col-sm-8 mycustom">
                                  <input type="text" readonly class="form-control-plaintext" id="address" value="<?= $user['address'] ?>">
                                </div>
                            </div>
                            <div class="form-group row center">
                                <label for="zip" class="col-sm-4 col-form-label">Zip:</label>
                                <div class="col-sm-8 mycustom">
                                  <input type="text" readonly class="form-control-plaintext" id="zip" value="<?= $user['zip'] ?>">
                                </div>
                            </div>
                            <div class="form-group row center">
                                <label for="city" class="col-sm-4 col-form-label">City:</label>
                                <div class="col-sm-8 mycustom">
                                  <input type="text" readonly class="form-control-plaintext" id="city" value="<?= $user['city'] ?>">
                                </div>
                            </div> 
                    
                     </div>        
                </div>               
            </div>  
        </div>
        
    </div>
    