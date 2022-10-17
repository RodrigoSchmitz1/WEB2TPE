{include file="header.tpl"}
{include file="footer.tpl"}

<form action="add" method="POST" class="my-4">
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

    <div class="form-group" class="form-control">> 
        <label>Plataforma</label>

        <select name="id_plataformas_fk">
        <option value="Binance">Binance</option>
        <option value="ripio">Ripio</option>
        <option value="Latamex">Latamex</option>
        <option value="Bitso">Bitso</option>

    </div>
    
    <input type="submit" class="btn btn-primary mt-2"></input>

</form>