<div class="container-fluid"> 

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
			<div class="container-fluid">
				<div class="page-header-content">
					<div class="row align-items-center justify-content-between pt-3">
						<div class="col-auto mb-3">
							<h3 class="mb-0 text-grey-800">
                            <i class="fas fa-user-plus"></i> Add User
							</h3>
						</div>
					</div>
				</div>
			</div>
		</header>


    <div class>
        <div class="bg-white border-bottom mb-4 p-4">
            <div class="container-fluid">            
           
                <form action="/adduser" method="POST">
                    <div class="col-xl-12 col-md-12 col-sm-12 dodaj-korisnika-forma">
                       

                        	<div >
                        	    <div class="form-group">
                        	        <label for="ime">First name</label>
                        	        <input type="text" class= "form-control" name="firstname" id="name" value="">
                        	    </div>
                        	</div>
                        	<div>
                        	    <div class="form-group">
                        	        <label for="prezime">Last name</label>
                        	        <input type="text" class= "form-control" name="lastname" id="lastname" value="">
                        	    </div>
                        	</div>
                        	<div>
                        	    <div class="form-group">
                        	        <label for="username">Username</label>
                        	        <input type="text" class= "form-control" name="username" id="username" value="">
                        	    </div>
                        	</div>
    	
                        	<div>
                        	    <div class="form-group">
                        	        <label for="adress">Address</label>
                        	        <input type="text" class= "form-control" name="address" id="addres" value="">
                        	    </div>
                        	</div>
    	
                        	<div>
                        	    <div class="form-group">
                        	        <label for="zip">Zip</label>
                        	        <input type="text" class= "form-control" name="zip" id="zip" value="">
                        	    </div>
                        	</div>
    	
    	
                        	<div>
                        	    <div class="form-group">
                        	        <label for="city">City</label>
                        	        <input type="text" class= "form-control" name="city" id="username" value="">
                        	    </div>
                        	</div>
    	
    	
                        	<div>
                        	    <div class="form-group">
                        	        <label for="password">Password</label>
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
                        	    <div class="form-group">                       
                        	        <button type="submit" class="btn btn-primary">Submit</button>
                        	    </div>
                        	</div>
                        	<?php if (isset($validation)): ?>
                        	    <div class="alert alert-danger" role="alert">
                        	        <?= $validation->listErrors() ?>
                        	    </div>
                        	<?php endif; ?>
                        	</div>             

                    

                  
                </form>
            </div>        
        </div>
    </div>
</div>
</body>