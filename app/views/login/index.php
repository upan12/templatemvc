

<div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-5 border-primary">
                <h2 class="text-center mb-4 text-primary">Login Form</h2>
                <form action="<?= BASEURL; ?>/Login/loginProses" method="POST" class="login-username">
				<div class="row">
					<div class="col-lg-6">
						<?php Flasher::flash(); ?>
					</div>
				</div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email"name="email" value="" required class="form-control bg-info bg-opacity-10 border border-primary" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" value="" required class="form-control bg-info bg-opacity-10 border border-primary" >
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" name="submit" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>