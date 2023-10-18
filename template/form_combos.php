<!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Combo</label>
                <input required name="name" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Precio</label>
                <input type="text" name="price">
            </div>
        </div>


    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
</form>