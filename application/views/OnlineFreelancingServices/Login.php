<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body>
	<p class="h1">User login</p>
	<a href="Homepage">< BACK </a>
	<form method="post" autocomplete="off" action="<?=base_url('index.php/Loginpage')?>">
					 
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
				<input type="email"  placeholder="Email" name="email" class="form-control" id="email">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" name="password"  placeholder="User Password"  class="form-control" id="password">
		 </div>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Login Now</button>
		</div>

		<?php
			if($this->session->flashdata('error')) {	?>
			<p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
		<?php } ?>
						
	</form>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
