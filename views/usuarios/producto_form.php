
<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form method="POST" id="Form"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="number"  id="precio" name="precio" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad Local *</label>
<input type="number"  id="cantidad" name="cantidad" class="form-control" required>
</div>
</div>

<div class="col-sm-6">

<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad Deposito *</label>
<input type="number"  id="cantidad_min" name="cantidad_min" class="form-control" required> 
</div>


</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="muebles">Muebles</option>
    <option value="sillas">Sillas</option>
    <option value="mesas">Mesas</option>
    <option value="colchones">Colchones</option>
    <option value="sommier">Sommier</option>
    <option value="deco">Deco</option>
    <option value="almohadas">Almohadas</option>
    <option value="dormitorio">Dormitorio</option>
    <option value="bebe">Bebe</option>

  </select>
    </div>   
</div>
</div>
<!-- <div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div> 
</div> -->

<div class="mb-3">
<a href="index.php"><button type = "button" id="btnSubmit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
