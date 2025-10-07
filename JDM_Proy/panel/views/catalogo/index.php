<div class="container mt-4">  
   <h1>Accesorios</h1>
    <div class="btn-group mb-3" role="group" aria-label="Basic mixed styles example">
        <a href="accesorios.php?action=create" class="btn btn-success">Nuevo</a>        
        <a class="btn btn-primary">Imprimir</a> 
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php foreach($data as $accesorios): ?>

            <div class="col-10 col-md-4">
                <div class="card h-100 shadow-sm">
                    <!-- Imagen -->
                    <img src="../imagen/accesorios/<?php echo $accesorios['imagen'];?>" 
                        class="card-img-top" 
                        alt="<?php echo $accesorios['nombre'];?>" 
                        style="height:200px; object-fit:cover;">
                    
                    <!-- Cuerpo de la card -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $accesorios['nombre']; ?></h5>
                        <p class="card-text"><?php echo $accesorios['descripcion']; ?></p>
                        <p class="fw-bold text-danger">$<?php echo number_format($accesorios['precio'], 2); ?> MXN</p>
                    </div>
                    
                    <!-- Footer con botones -->
                    <div class="card-footer d-flex justify-content-between">
                        <a href="accesorios.php?action=update&id=<?php echo $accesorios['id_accesorio'];?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="accesorios.php?action=delete&id=<?php echo $accesorios['id_accesorio'];?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>

