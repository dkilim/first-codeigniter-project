<div class="container-fluid"> 

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
			<div class="container-fluid">
				<div class="page-header-content">
					<div class="row align-items-center justify-content-between pt-3">
						<div class="col-auto mb-3">
							<h3 class="mb-0 text-grey-800">
                            <i class="fas fa-user-edit"></i> Edit User
							</h3>
						</div>
					</div>
				</div>
			</div>
		</header>


        <div class>
        <div class="bg-white border-bottom mb-4 p-4">
            <div class="container-fluid">
                
           
                <form action="/edituser" method="POST">
                    <div class="col-xl-12 col-md-12 col-sm-12 dodaj-korisnika-forma">                        
                                 <form action="" method="POST">
                                     <div >
                                         <div class="form-group">
                                             <label for="ime">Name</label>
                                             <input type="text" class= "form-control" name="firstname" id="ime" value="<?= $user['firstname'] ?>">
                                         </div>
                                     </div>
                                     <div>
                                         <div class="form-group">
                                             <label for="prezime">Surname</label>
                                             <input type="text" class= "form-control" name="lastname" id="prezime" value="<?= $user['lastname'] ?>">
                                         </div>
                                     </div>
                                     <div>
                                         <div class="form-group">
                                             <label for="username">Username</label>
                                             <input type="text" class= "form-control"  id="username" name="username" readonly value="<?= $user['username'] ?>">
                                         </div>
                                     </div>

                                     <div>
                                         <div class="form-group">
                                             <label for="adress">Address</label>
                                             <input type="text" class= "form-control" name="address" id="addres" value="<?= $user['address'] ?>">
                                         </div>
                                     </div>

                                     <div>
                                         <div class="form-group">
                                             <label for="zip">Zip Code</label>
                                             <input type="text" class= "form-control" name="zip" id="zip" value="<?= $user['zip'] ?>">
                                         </div>
                                     </div>


                                     <div>
                                         <div class="form-group">
                                             <label for="city">City</label>
                                             <input type="text" class= "form-control" name="city" id="city" value="<?= $user['city'] ?>">
                                         </div>
                                     </div>
                                     <div>
                                            <div class="form-group">
                                                <label for="opassword">Old Password</label>
                                                <input type="password" class= "form-control" name="opassword" id="opassword" value="">
                                            </div>
                                        </div> 


                                        <div>
                                            <div class="form-group">
                                                <label for="password">New Password</label>
                                                <input type="password" class= "form-control" name="password" id="password" value="">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-group">
                                                <label for="cpassword">Confirm Password</label>
                                                <input type="password" class= "form-control" name="cpassword" id="cpassword" value="">
                                            </div>
                                        </div> 
                                        <div>

                                        <?php if (isset($validation)): ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= $validation->listErrors() ?>
                                            </div>
                                        <?php endif; ?>

                                     <div>
                                        <div class="form-group">
                                        <input type="submit" class="btn text-white bg-primary" name="add_user" value="Exit and Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
              
            </div>
            </div>        
        </div>
    </div>
</div>
</body>