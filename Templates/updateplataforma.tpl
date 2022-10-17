{include file="header.tpl"}

<form action="guardarplataforma/{$id}" method="POST" class="my-4">
    <div class="row">
        <div class="form-group" class="form-control">

            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control">
                    </div>
                    <div class="col-3">
                        <label>Años activo</label>
                        <input name="anios_activo" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-2"></input>
        </div>

</form>
{include file="footer.tpl"}