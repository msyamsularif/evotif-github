
<div class="container">
<div class="box" style="background-color: #F2F2F2;">
	<div class="box-inner">
		<div class="box-header well" style="background-color: #F26666;">
			<h2 style="color: white;">Selamat Datang di E-VOTIF</h2>
		</div>
		<div class="box-content">
			<p>Silahkan Pilih Calon Ketua HIMATIF dibawah ini </p>
			<hr/>
			<br/><br/>
			<div class="row">
				<?php
					foreach($datacalon as $loaddata) {
				?>
					<div class="col-lg-4">
						<div class="card" style="margin-top: 20px;">
						<img src="<?php echo base_url(); ?>asset/img/<?php echo $loaddata['photo']; ?>" alt="Avatar" style="width:100%">
						<div class="containerr">
							<center><p class="circle"><b><?php echo $loaddata['no']; ?></b></p></center>
							<h4><b><?php echo $loaddata['nama']; ?></b></h4> <hr>
							
								<?php
									$form_attribute	= array(
										'methode'	=> 'hidden',
										'class'		=> 'form-horizontal'
									);
									echo form_open('user/vote', $form_attribute);
								?>
								<?php 
									$form_attribute	= array(
										'type'		=> 'hidden',
										'name'		=> 'nim',
										'class'		=> 'form-control',
										'value'		=> $loaddata['nim']
									);
									echo form_input($form_attribute);
								?>
								<?php 
									$form_attribute	= array(
										'type'		=> 'hidden',
										'name'		=> 'username',
										'class'		=> 'form-control',
										'value'		=> $username
									);
								echo form_input($form_attribute);
							?>

							<h4>Visi</h4>
							<p class="text-width"><?php echo $loaddata['visi'];?></p>
							<h4>Misi</h4> 
							<p class="text-width"><?php echo $loaddata['misi'];?></p>
						<button class="btn btn-danger" style="width: 100%;">Pilih NO <?php echo $loaddata['no']; ?></button>
						<?php 
							echo form_close();
						?>
						</div>
						</div>
					</div>
				<?php 
					} 
				?>
			</div>
		</div>
	</div>
</div>
</div>