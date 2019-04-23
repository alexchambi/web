<?php   
    require "header.php";
?>

<div class="breadcrumbedit">
    <div class="container">
        <nav aria-label="breadcrumb">      
                <h2 class="">Consejo Departamental</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="directiva.php">Directiva</a></li>
                <li class="breadcrumb-item active" aria-current="page">Consejo Departamental</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="linea_borde text-center">
            <h2 class="h1-responsive font-weight-bold my-4">Consejo Departamental</h2>
            <h3 class="h2-responsive font-weight-bold my-3">Gestión 2019-2021</h3>
    </div>
    <div class="jumbotron text-center linea_borde">
        <img class="img-fluid rounded" src="img/ConsAsamDecPas/consejodepartamental.png"  alt="Responsive image">
    </div>
    
    <!-- Modificaci��n del c��digo
    <div class="container text-center my-4" id="consejo">
        <div class="row">
            <div class="card-deck mx-auto col-xs-12 col-sm-6 col-md-4 mb-5" v-for="datos in consejo">
                <div class="card ">
                    <img class="card-img-top" v-bind:src="datos.img" alt="Card image cap">
                    <div class="card-body bg-danger text-white text-center">
                        <h4 class="card-text">{{ datos.tipo }}</h4>
                        <h5 class="card-text">Ing. {{datos.nombre}}</h5>
                        <h6><i class="fa fa-circle" aria-hidden="true"></i>
                            Reg. CIP {{datos.regcip}}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <h3 class="text-center font-weight-bold">Miembros del Consejo Departamental</h3>
    <hr>
    <div class="container text-center my-4" id="consejo">
        <div class="row">
            <div class="card-deck mx-auto col-xs-12 col-sm-6 col-md-4 mb-5" v-for="datos in consejo">
                <div class="card ">
                    <div class="card-body bg-danger text-white text-center">
                        <h4 class="card-text">{{ datos.tipo }}</h4>
                        <h5 class="card-text">Ing. {{datos.nombre}}</h5>
                        <h6><i class="fa fa-circle" aria-hidden="true"></i>
                            Reg. CIP {{datos.regcip}}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    



<?php   
    require "footer.php";
?>
