{include file="head.tpl"}
<div class="container-fluid bg-dark d-flex justify-content-center">
<div class="col-10 bg-dark mt-2 ">
<h3 class="text-bold text-white text-center">Peliculas</h3>
    <div class="container mt-5 ">
    
    <ul class="list-group ">
    <li class="list-group-item bg-dark text-white ">
          <div class="row">
            <div class="col-3">nombre</div>
            <div class="col-3">genero</div>
            <div class="col-2">lanzamiento</div>
          </div>
          </li>
      {foreach $movies as $movie}
        <li class="list-group-item bg-dark text-white hover-effect ">
        <div class="row">
            <div class="col-3 ">{$movie->movie_name}</div>
            <div class="col-3 ">{$movie->name_gender}</div>
            <div class="col-2 ">{$movie->date}</div>
            <div class="col-2 ">editar</div>
            <div class="col-2 ">borrar</div>
          </div>
        </li>
        {/foreach}
        
    </ul>
    </div>
</div>

</div>

{include file="footer.tpl"}