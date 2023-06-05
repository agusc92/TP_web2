{include file="head.tpl"}
<div class="container-fluid bg-dark">


  {foreach from=$movie item=mov}



    <div class="card mb-3 row  bg-dark">
      <h5 class="card-title text-center display-2">{$mov->movie_name}</h5>
      <div class=" col-2 mx-auto">
        <img class="card-img-top img-fluid" src="{$mov->movie_image}" alt="Card image cap">
      </div>
      <div class=" tarjeta text-center ">

        <p class="card-text">{$mov->synopsis}</p>
        <p class="card-text"><small class="">Genero: {$mov->name_gender}</small></p>
        <p class="card-text"><small class="">Estreno: {$mov->movie_date}</small></p>
      </div>
    </div>

  {/foreach}






</div>





{include file="footer.tpl"}