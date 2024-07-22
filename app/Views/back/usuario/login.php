<section class="container flex-grow-1 py-5">  
    <div class="row align-items-md-stretch mb-4">
      <div class="col-md-6 offset-md-3 mb-4 mb-md-0">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2 class="text-center mb-5">Iniciar sesión</h2>   

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <?php if(session()->getFlashdata('msg')):?>
      <div class="alert alert-warning">
        <?= session()->getFlashdata('msg')?>
      </div>
    <?php endif;?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
				<div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
				<?php endif?>
				<?php if(!empty (session()->getFlashdata('success'))):?>
				<div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
				<?php endif?>

    <form method="post" action="<?php echo base_url('enviarlogin') ?>">  

     <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input name="pass" type="password" class="form-control" id="inputPassword3">
                </div>
              </div>  
      <div class="row mb-4">
        <!-- <div class="col-md-6 d-flex justify-content-center"> 
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Recordarme </label>
          </div>
        </div> 
        <div class="col-md-6 d-flex justify-content-center"> 
          <a href="#!">Olvidé mi contraseña</a>
        </div>  -->
        <input value="Ingresar" type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 mt-5">
        
         <a href="<?php echo base_url('/'); ?>" class="btn btn-danger btn-block">Cancelar</a> 
      </div> 

      <div class="text-center">
        <p>No tienes una cuenta? <a href="<?php echo base_url('/registro'); ?>">Registrarme</a></p>
      </div>
    </form>


  </div> 
</div> 
</section>