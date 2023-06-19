{include file="head.tpl"}
<div class="container-fluid bg-dark d-flex justify-content-center">
  <div class="col-10 bg-dark mt-3 ">
    <h3 class="text-bold text-white text-lesft">Listas de Generos</h3>
    <h5 class="text-bold text-white text-lesft">{$mensaje}</h5>
    <div class="container mt-4 ">

      <ul class="list-group ">
        <li class="list-group-item bg-white text-dark ">
          <div class="row">
            <div class="col-3">Genero</div>
            <div class="col-2">Cantidad</div>
            <div class="col-4">Proximos Estrenos</div>

            <div class="col-3"> <button type="button" class="btn btn-white border border-white"> <a
                  href="{$URL_BASE}/prepare_add_gender"> Agregar Genero</a></button></div>
          </div>
        </li>
        {foreach $genders as $gender}
          <li class="list-group-item bg-dark text-white hover-effect ">
            <div class="row">
              <div class="col-3 "><a href="{URL_BASE}/movieXgender/{$gender->id_gender}">{$gender->name_gender}</a>
              </div>
              <div class="col-2">{$gender->amount}</div>
              <div class="col-4 ">{$gender->prox_estreno}</div>
              {if $loged == true}
                <a class="col-1 " href="{$URL_BASE}/delete_gender/{$gender->id_gender}"><i class="bi bi-trash"></i></a>
                <a class="col-1 " href="{$URL_BASE}/prepare_edit_gender/{$gender->id_gender}"><i
                    class="bi bi-pencil-square"></i></a>
              {/if}
            </div>
          </li>
        {/foreach}

      </ul>
    </div>
    {if $loged ==true}
      <div class="container mb=2">
        <button type="button" class="btn btn-white bg-white"> <a class="text-black" href="{$URL_BASE}/prepare_add_gender">
            Agregar Genero</a></button>
      </div>
    {/if}
  </div>

</div>

{include file="footer.tpl"}