<?php   
    require "header.php";
?>
<div class="breadcrumbedit">
    <div class="container">
        <nav aria-label="breadcrumb">      
                <h2 class="">Asamblea Departamental</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="directiva.php">Directiva</a></li>
                <li class="breadcrumb-item active" aria-current="page">Asamblea Departamental</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="linea_borde text-center">
            <h2 class="h1-responsive font-weight-bold my-4">Asamblea Departamental</h2>
            <h3 class="h2-responsive font-weight-bold my-3">Gestión 2019-2021</h3>
    </div>
    <div class="jumbotron text-center linea_borde">
        <img class="img-fluid rounded" src="img/ConsAsamDecPas/consejodepartamental.png"  alt="Responsive image">
        
    </div>
    <!--
    <div class="container text-center my-4" id="asambleistas">
        <div class="row">
            <div class="card-deck mx-auto col-xs-12 col-sm-6 col-md-4 mb-5" v-for="datos in asambleista">
                <div class="card ">
                    <img class="card-img-top" v-bind:src="datos.img" alt="Card image cap">
                    <div class="card-body bg-danger text-white text-center">
                        <h4 class="card-text">ASAMBLEISTA</h4>
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
    <h3 class="text-center font-weight-bold">Miembros de la Asamblea Departamental</h3>
    <hr>
    <!-- Modificado 19-Abril
    <div class="container text-center my-4" id="asambleistas">
        <div class="row">
            <div class="card-deck mx-auto col-xs-12 col-sm-6 col-md-4 mb-5" v-for="datos in asambleista">
                <div class="card rounded-pill">
                    <div class="card-body bg-danger text-white text-center">
                        <h4 class="card-text">ASAMBLEISTA</h4>
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
    <table class="table table-hover table-bordered">
        <thead  class="thead-dark">
            <tr>
                <th scope="col">Nro.</th>
                <th scope="col">Cargo</th>
                <th scope="col">Nombres y Apellidos</th>
                <th scope="col">Registro CIP</th>
            </tr>
        </thead>
        <tbody id="asambleistas">
            <tr v-for="datos in asambleista" class="bg-danger text-white">
                <th scope="row">{{datos.nro}}</th>
                <td>ASAMBLEISTA</td>
                <td>Ing. {{datos.nombre}}</td>
                <td>{{datos.regcip}}</td>
            </tr>
        </tbody>
        
    </table>

</div>



<?php   
    require "footer.php";
?>
