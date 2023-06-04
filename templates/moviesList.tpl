{include file="head.tpl"}
<div class="container-fluid bg-dark d-flex justify-content-center">
<div class="col-10 bg-dark mt-3 ">
<h3 class="text-bold text-white text-center">Peliculas</h3>
    <div class="container mt-4 ">
    
    <ul class="list-group ">
    <li class="list-group-item bg-danger text-white ">
          <div class="row">
            <div class="col-3">nombre</div>
            <div class="col-3">genero</div>
            <div class="col-2">lanzamiento</div>
          </div>
          </li>
      {foreach $movies as $movie}
        <li class="list-group-item bg-dark text-white hover-effect ">
        <div class="row">
            <div class="col-3 "><a href="{$URL_BASE}/movieDetail/{$movie->id_movie}">{$movie->movie_name}</a></div>
            <div class="col-3 ">{$movie->name_gender}</div>
            <div class="col-2 ">{$movie->movie_date}</div>
            <div class="col-2 ">{$movie->amount}</div>
            <a class="col-1 " href="{$URL_BASE}/delete/{$movie->id_movie}">eliminar</a>
            <a class="col-1 " href="{$URL_BASE}/prepare_edit/{$movie->id_movie}">editar</a>
          </div>
        </li>
        {/foreach}
        
    </ul>
  
    </div>

    <div class="container mb=2">
    <button type="button" class="btn btn-danger"> <a href="{$URL_BASE}/add"> Agregar Pelicula</a></button>
    </div>

    
</div>

</div>

{include file="footer.tpl"}