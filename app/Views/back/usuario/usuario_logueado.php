<div class="container d-flex justify-content-center align-items-center flex-grow-1">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-light mt-5">
            <?= session()->getFlashdata('msg')?>
        </div>
    <?php endif;?>
    <br>
    <?php if(session()->perfil_id == 1):?>
        <div>
            <img class="w-100" src="<?php echo base_url ('assets/img/admin.png');?>" alt="">
        </div>
    <?php endif;?>
    <?php if(session()->perfil_id == 2):?>
        <div>
            <img class="w-100" src="<?php echo base_url ('assets/img/client.png');?>" alt="">
        </div>
    <?php endif;?> 

</div>