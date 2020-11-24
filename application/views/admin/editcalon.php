<?php 
	foreach($datacalon as $loaddata) {}
?>

<div class="box">
	<div class="box-inner">
	<div class="box-header well">
		<h2>Tambah Calon Ketua HIMATIF
	</div>
	<div class="box-content">
		<?php if($this->session->flashdata('info')) { ?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $this->session->flashdata('info'); ?>
			</div>
			<?php } ?>
			<?php if($this->session->flashdata('failed')) { ?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $this->session->flashdata('failed'); ?>
			</div>
		<?php } ?>
		<?php 
			$form_attribute = array (
				'method'	=> 'post',
				'class'		=> 'form-horizontal'
			);
			echo form_open_multipart('admin/updatecalon', $form_attribute);
		?>
		<div class="form-container" style="width: 400px;">
			<label class="label-control"> NIM</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'name'		=> 'nim',
					'class'		=> 'form-control',
					'readonly'	=> '',
					'value'		=> $loaddata['nim']
				);
				echo form_input($form_attribute);
			?>
			<label class="label-control"> No Pemilihan</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'name'		=> 'no',
					'class'		=> 'form-control',
					'value'		=> $loaddata['no']
				);
				echo form_input($form_attribute);
			?>
			<label class="label-control"> Nama Calon</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'name'		=> 'nama',
					'class'		=> 'form-control',
					'value'		=> $loaddata['nama']
				);
				echo form_input($form_attribute);
			?>
			<label class="label-control"> Visi</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'name'		=> 'visi',
					'class'		=> 'form-control',
					'value'		=> $loaddata['visi']
				);
				echo form_input($form_attribute);
			?>
			<label class="label-control"> Misi</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'name'		=> 'misi',
					'class'		=> 'form-control',
					'value'		=> $loaddata['misi']
				);
				echo form_input($form_attribute);
			?>
			<label class="label-control"> Photo</label>
			<?php 
				$form_attribute	= array (
					'type'		=> 'text',
					'readonly'	=> '',
					'name'		=> 'photo',
					'class'		=> 'form-control',
					'value'		=> $loaddata['photo']
				);
				echo form_input($form_attribute);
			?>
			<br/>
			<button type="submit" class="btn btn-primary"> Simpan Data</button>
		</div>
		<?php 
			echo form_close();
		?>
	</div>
	</div>
</div>