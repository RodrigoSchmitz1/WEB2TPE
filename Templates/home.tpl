{include file="form_alta.tpl"}
<ul>
    {foreach $inversiones as $inversion}
        <li>
            {$inversion->moneda}
        </li>
        <table>
            <td> <a href='finalize/{$inversion->id}' type='button' class='btn btn-success'>Editar</a> </td>
            <td> <a href='delete/{$inversion->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a> </td>
        </table>
    {/foreach}

</ul>
