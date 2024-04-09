

<?php   

    include("../../conn.php");

    $stm = $conexion->prepare("SELECT * FROM contactos");
    $stm->execute();
    $contactos = $stm->fetchAll(PDO::FETCH_ASSOC);


    if (isset($_GET['id'])) {
        
        $txtid=(isset($_GET['id'])?$_GET['id']:"");
        $stm = $conexion->prepare("DELETE FROM contactos WHERE id=:txtid");
        $stm->bindParam(":txtid",$txtid);
        $stm->execute();
        header("location:index.php");

    }

?>


<?php  include("../../template/header.php"); ?>




<?php include("create.php") ?>



<?php  include("../../template/footer.php"); ?>