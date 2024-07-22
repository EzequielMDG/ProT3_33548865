<section class="container flex-grow-1 py-5">  
    <div class="row align-items-md-stretch mb-4">
      <div class="col-md-6 offset-md-3 mb-4 mb-md-0">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2 class="text-center mb-5">Registrarme</h2> 
		  <?php $validation = \Config\Services::validation(); ?>
		    <form method="post" action="<?php echo base_url('store')?>"> 

				<?=csrf_field();?>
				<?=csrf_field();?>
				<?php if(!empty (session()->getFlashdata('fail'))):?>
				<div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
				<?php endif?>
				<?php if(!empty (session()->getFlashdata('success'))):?>
				<div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
				<?php endif?>

				<div class="row mb-3">
		            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
		            <div class="col-sm-10">
		              <input name="nombre" type="text" class="form-control" id="nombre"> 
					  <!-- error -->
					  <?php if($validation->getError('nombre')) {?>
							<div class="alert alert-danger mt-2">
								<?= $error = $validation->getError('nombre'); ?>
							</div>
					  <?php }?>
		            </div>
		      	</div> 
		      	<div class="row mb-3">
		            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
		            <div class="col-sm-10">
		              <input name="apellido" type="text" class="form-control" id="apellido"> 
					   <!-- error -->
					   <?php if($validation->getError('apellido')) {?>
							<div class="alert alert-danger mt-2">
								<?= $error = $validation->getError('apellido'); ?>
							</div>
					  <?php }?>
		            </div>
		      	</div> 
				  <div class="row mb-3">
		            <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
		            <div class="col-sm-10">
		              <input name="usuario" type="text" class="form-control" id="usuario"> 
					   <!-- error -->
					   <?php if($validation->getError('usuario')) {?>
							<div class="alert alert-danger mt-2">
								<?= $error = $validation->getError('usuario'); ?>
							</div>
					  <?php }?>
		            </div>
		      	</div> 
		     	<div class="row mb-3">
		            <label for="email" class="col-sm-2 col-form-label">Email</label>
		            <div class="col-sm-10">
		              <input name="email" type="email" class="form-control" id="email"> 
					  <!-- error -->
					  <?php if($validation->getError('apellido')) {?>
							<div class="alert alert-danger mt-2">
								<?= $error = $validation->getError('email'); ?>
							</div>
					  <?php }?>
		            </div>
		      	</div>
				<div class="row mb-3">
			        <label for="password" class="col-sm-2 col-form-label">Password</label>
			        <div class="col-sm-10">
			          <input name="pass" type="password" class="form-control" id="pass">
			        </div>
		      	</div>    
		      	<div class="row">  
					<input type="submit" value="Guardar" class="btn btn-primary btn-block mb-4 mt-5"> 
					<a href="<?php echo base_url('/'); ?>" class="btn btn-danger btn-block">Cancelar</a>
		      	</div>  
		    </form>  	
		</div>
</section>