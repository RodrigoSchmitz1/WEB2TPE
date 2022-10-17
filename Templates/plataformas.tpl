{include file="header.tpl"}
<ul>
    {foreach $plataformas as $plataforma}
        <li class="nav-item">
            <a class="nav-link" aria-current="page"> <a href="inversionesPlataforma/{$plataforma->id}">{$plataforma->nombre} </a>
            {if isset($smarty.session.IS_LOGGED)}
                <a href='deleteplataforma/{$plataforma->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                <a href='mostrarupdateplataforma/{$plataforma->id}' type='button' class='btn btn-success'>Update</a>
                
            {/if}
        </li>
    {/foreach}
{if isset($smarty.session.IS_LOGGED)}
<a href='mostrarformplataformas/{$plataforma->id}' type='button' class='btn btn-success ml-auto'>Agregar</a>
{/if}
</ul>
{include file="footer.tpl"}
