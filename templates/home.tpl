{include file="head.tpl"}
<div class="container-fluid bg-dark">



    <div class="row">
      <!-- Lateral con lista de películas -->
        <div class="col-3 bg-dark mt-4">
        <h3 class="text-bold text-white">Categorias</h3>
            <div class="container mt-4">
            
            <ul class="list-group">
            
            {foreach from=$genders item=gender}
                <li class="list-group-item bg-dark text-white">{$gender->name_gender} ({$gender->amount})</li>
            {/foreach}
            </ul>
            </div>
        </div>
      
      <!-- Galería de previsualización de películas -->
        <div class="col-9 mt-4">
        <h3 class="text-bold text-white mg-5px" >Ultimas agregadas</h3>
        
        
        <div class="row row-cols-1 row-cols-md-5 g-2 mt-2">
        
        
        {foreach from=$movies item=movie}
        <div class="col">
          <div class="card">
            <img src={$movie->movie_image}" class="card-img-center " alt="...">
           
          </div>
        </div>
        
        {/foreach}
      </div>
            </div>{*internal row*}
        <div>  {*movies col*}     
    </div>{*principal row*}
</div>{*container-fluid*}

{include file="footer.tpl"}