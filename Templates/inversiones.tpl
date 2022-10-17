{include file="header.tpl"}
<ul>
    {if count($inversiones)==0}
        <h2>no hay inversiones en la plataforma seleccionada</h2>
        {else}
            {foreach $inversiones as $inversion}
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="inversion/{$inversion->id}">{$inversion->moneda}</a>
                    {if isset($smarty.session.IS_LOGGED)}
                        <a href='deleteinversion/{$inversion->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                        <a href='mostrarupdateinversion/{$inversion->id}' type='button' class='btn btn-success'>Update</a>
                        
                    {/if}
                </li>
    {/foreach}
    {/if}
{if isset($smarty.session.IS_LOGGED)}
<a href='mostrarforminversiones/{$inversion->id}' type='button' class='btn btn-success ml-auto'>Agregar</a>
{/if}
</ul>
{include file="footer.tpl"}
