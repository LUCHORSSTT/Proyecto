
<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catmuebles" href="productosCategoria.php?categoria=<?php echo 'muebles'?>">
Muebles
</a>
        </div>
<div class="col-sm-4">
<a class="catsillas" href="productosCategoria.php?categoria=<?php echo 'sillas'?>">
Sillas
</a>
</div>  
<div class="col-sm-4">
<a class="catmesas" href="productosCategoria.php?categoria=<?php echo 'mesas'?>">
Mesas
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catcolchones" href="productosCategoria.php?categoria=<?php echo 'colchones'?>">
Colchones
</a>
</div>

<div class="col-sm-4">
<a class="catsommier" href="productosCategoria.php?categoria=<?php echo 'sommier'?>">
Sommier
</a>
</div>
<div class="col-sm-4">
<a class="catdeco" href="productosCategoria.php?categoria=<?php echo 'deco'?>">
ArtDecoracion
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catalmohadas" href="productosCategoria.php?categoria=<?php echo 'almohadas'?>">
Almohadas
</a>
</div>
<div class="col-sm-4">
<a class="catdormitorio" href="productosCategoria.php?categoria=<?php echo 'dormitorio'?>">
Sabanas/Acolchados
</a>
</div>
<div class="col-sm-4">
<a class="catbebe" href="productosCategoria.php?categoria=<?php echo 'bebe'?>">
Bebe
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
</html>