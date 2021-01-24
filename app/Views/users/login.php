<section class="container-fluid bg">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3 mobile form-container">
            
            
            <div>
                <h3 class="lgicon"><i class="fas fa-user-circle"></i></h3>
            </div>
            <hr>
            <form class="" action="/" method="post">
              <?php if (session()->get('success')): ?>
                 <div class="alert alert-success text-align-center" id="#alert1" role="alert">
                  <?=  session()->get('success') ?>
                 </div>
              <?php endif; ?>

              <div class="form-group">
                <!-- <label for="username">Username</label> -->
                <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username')?>" placeholder="Username">
                
              </div>
              <div class="form-group">
                <!-- <label for="password">Password</label> -->
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check1">
                <label class="form-check-label" for="remeber_me">Remember me</label>
              </div>
              <?php if (isset($validation)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
              <?php endif; ?>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </section>
    </section>
</section>