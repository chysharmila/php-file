
	<?php include('header.php') ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 design">
				<form action="createControl.php" method="POST">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Company</label>
						<input type="text" name="company" placeholder="Company Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" placeholder="Title" class="form-control">
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" placeholder="Mobile" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<label>Group Name</label>
						<input type="text" name="group" placeholder="Group Name" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="register" value="Register" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('footer.php') ?>
