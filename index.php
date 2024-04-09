<?php   

    include("conn.php");

    $stm = $conexion->prepare("SELECT * FROM invitados WHERE invitado =0");
    $stm->execute();
    $contactos = $stm->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        
        $txtid=(isset($_GET['id'])?$_GET['id']:"");
        $stm = $conexion->prepare("DELETE FROM invitados WHERE id=:txtid");
        $stm->bindParam(":txtid",$txtid);
        $stm->execute();
        header("location:index.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jmgv</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/minty/bootstrap.min.css" integrity="sha512-+/uDiVv4ZLhHnXToJFPwYK08kkG2et1rSuiitOl+0hdzmx2N6HQaMqm/7ORzr8dhco+cyGZCRxkXU7EMMYOLfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="cont_principal">

        <div class="presentacion">
            <div class="presentacion_difuminado">
                <div class="cont_invitacion">
        <div class="cont_foto">

        </div>

        <div class="header">
            <span>ALONDRA </span>
            <span>  &</span>
            <span>JUAN MANUEL</span>
        </div>

        <div class="cont_fecha">
            <div class="cont_dia">
                <div class="dia">SABADO</div>
            </div>
            <div class="fecha">
                <div class="fecha_top">JULIO</div>
                <div class="fecha_mid">13</div>
                <div class="fecha_bot">2024</div>
            </div>
            <div class="cont_hora">
                <div class="hora">
                    18:00 hrs
                </div>
            </div>
        </div>

        <div class="lugar">
            <h1>Salon Gran Galeon</h1>
        </div>

                </div>
            </div>
        </div>

        <div class="cont_formulario">
            <form class="formulario" action="">

                <div class="header_formulario text-center">
                    <h3>Para nosotros es muy importante que confirmes tu asistencia</h3>
                </div>

                <div class="cont_inputs">

                    <div class="card mb-3" id="esa">
                        <div class="card-header text-center">Inivitados</div>
                        <div class="card-body">
                            <h4 class="card-title">Marca las personas que van a asistir</h4>
                            


                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center" >Nombre</th>
                                        <th scope="col" class="text-center">Confirmar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($contactos as $contacto) { ?>

                                    <tr class="table-success">

                                        <td  ><?php echo $contacto['nombre']; ?> </td>

                                        <td>
                                        <button  type="button" class="btn btn-primary btn-sm">Confirmar</button>
                                        </td>

                                    </tr>
                                <?php } ?>


                                </tbody>
                            </table>
                        
                        
                            <h5 class="card-title text-center mt-4">Tines hasta junio para confirmar tu asistencia</h5>

                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="mesa_regalos">

        </div>





    </div>

    <script src="index.js"></script>
</body>
</html>