<body style="background-image:url('<?php echo base_url(); ?>asset/img/bggg.jpg');" class="tengah">
<div class="ch-container">        
    <div class="row">
	<div class="col-md-12 center imgSize">
			<img width="100" height="100" src="<?php echo base_url(); ?>asset/Images/Logo-Teknik.png">
			<img width="100" height="100" src="<?php echo base_url(); ?>asset/Images/Logo-HIMATIF-grid-line.png">
		</div>
        <div class="col-md-12 center login-header">
            <span class="text">
				SELAMAT DATANG DI E - VOTIF
			</span>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="col-md-4 center login-box" style="width:100%;">
            <div class="alert alert-info">
                <b>Silahkan Login Menggunakan Username dan Passsword Anda!</b>
            </div>
			<?php if($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="this.parentElement.style.display='none'">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			<?php } ?>
			<?php 
				$form_attribute = array(
					'method'	=> 'post',
					'class'		=> 'form-horizontal' 
				);
				echo form_open('admin/loginvalidation', $form_attribute);
			?>
            <form class="form-horizontal" action="index.html" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="color: #FF2635;"></i></span>
						<?php
							$form_attribute 	= array(
								'type'			=> 'text',
								'class'			=> 'form-control',
								'name'			=> 'username',
								'placeholder'	=>	'Username'
							);
							echo form_input($form_attribute);
						?>
                        
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="color: #FF2635;"></i></span>
                        <?php
							$form_attribute 	= array(
								'type'			=> 'password',
								'class'			=> 'form-control',
								'name'			=> 'password',
								'placeholder'	=> 'Password'
							);
							echo form_input($form_attribute);
						?>
                    </div>
                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-danger btn-lg" style="border-radius: 30px"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>