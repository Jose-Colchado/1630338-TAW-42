<?php
    @session_start();

    if(!$_SESSION["validar"]){
        header("location:index.php?action=ingresar");
        exit();
    }



?>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
           
           <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                      <div class="col-lg-7">
                            
                            <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Editar Producto!</h1>
                                    </div>
                                     <form class="user" method="post">
                                            <?php
                                                $editarProducto = new MvcControladorProd();
                                                $editarProducto -> ctreditarProducto();
                                                $editarProducto -> ctractualizarProducto();
                                            ?>
                                    </form>
                            </div>

                       </div>
                  </div>
        
            </div>

     </div>

</div>
