{include file="header.tpl"}
<form action="guardarinversion/{$id}" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Moneda</label>
                <input name="moneda" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <label>Interes</label>
            <input name="interes" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group" class="form-control">
        <label>Plataforma</label>

        <select name="id_plataformas_fk">
            {foreach $plataformas as $plataforma}
                <option value= {$plataforma->id}> {$plataforma->nombre} </option>
            {/foreach}

    </div>

    <input type="submit" class="btn btn-primary mt-2"></input>

</form>
{include file="footer.tpl"}
