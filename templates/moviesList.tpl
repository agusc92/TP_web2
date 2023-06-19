{include file="head.tpl"}
<div class="container-fluid bg-dark d-flex justify-content-center">
  <div class="col-10 bg-dark mt-3 ">
    <h3 class="text-bold text-white text-left">Peliculas</h3>

    <h5 class="text-bold text-white text-left">{$mensaje}</h5>

    <div class="container mt-4 ">

      <ul class="list-group ">
        <li class="list-group-item bg-white text-black ">
          <div class="row">
            <div class="col-3">Nombre</div>
            <div class="col-3">Genero</div>
            <div class="col-2">Estreno</div>
          </div>
        </li>
        {foreach $movies as $movie}
          <li class="list-group-item bg-dark text-white hover-effect ">
            <div class="row">
              <div class="col-3 "><a href="{$URL_BASE}/movieDetail/{$movie->id_movie}">{$movie->movie_name}</a></div>
              <div class="col-3 ">{$movie->name_gender}</div>
              <div class="col-2 ">{$movie->movie_date}</div>
              <div class="col-2 ">{$movie->amount}</div>
              {if $loged == true }
                <a class="col-1 " href="{$URL_BASE}/delete/{$movie->id_movie}"><i class="bi bi-trash"></i></a>
                <a class="col-1 " href="{$URL_BASE}/prepare_edit/{$movie->id_movie}"><i class="bi bi-pencil-square"></i></a>
              {/if}
            </div>
          </li>
        {/foreach}

      </ul>

    </div>
    {if $loged==true}
      <div class="container mb=2">
        <button type="button" class="btn btn-light"> <a class="text-black" href="{$URL_BASE}/add"> Agregar
            Pelicula</a></button>
      </div>
    {/if}

  </div>

</div>

{include file="footer.tpl"}