<section class="container d-flex justify-content-center align-items-center flex-grow-1">   
      <div class="col-md-10 offset-md-1 mb-4 mb-md-0 py-5">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2 class="text-center mb-5">Usuarios</h2>   
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Usuario</th>
              <th scope="col">e-mail</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($datos as $dato): ?>
            <tr>
              <th scope="row"><?php echo $dato['id']; ?></th>
              <td><?php echo $dato['nombre']; ?></td>
              <td><?php echo $dato['apellido']; ?></td>
              <td><?php echo $dato['usuario']; ?></td>
              <td><?php echo $dato['email']; ?></td>
            </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
        </div>
        </div>
        </div> 
</section>