{include file="head.tpl"}
<div class="container-fluid bg-dark">



    <div class="row">
      <!-- Lateral con lista de películas -->
        <div class="col-3 bg-dark mt-2">
        <h3 class="text-bold text-white">Categorias</h3>
            <div class="container mt-4">
            
            <ul class="list-group">
            
            {foreach from=$genders item=gender}
                <li class="list-group-item bg-dark text-white">{$gender->name_gender}</li>
            {/foreach}
            </ul>
            </div>
        </div>
      
      <!-- Galería de previsualización de películas -->
        <div class="col-9 mt-2">
        <h3 class="text-bold text-white mg-5px" >Ultimas agregadas</h3>
        <div class="row row-cols-1 row-cols-md-6 g-2 mt-2">
        <div class="col">
          <div class="card">
            <img src="./images/mr.jpg" class="card-img-center " alt="...">
           
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./images/mario.png" class="card-img-center" whith=50% alt="...">
           
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./images/deadpool.jpg" class="card-img-center" alt="...">
         
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./images/it.jpg" class="card-img-center" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./images/joker.jpg" class="card-img-center" alt="...">
            
          </div>
        </div>
        <div class="col">
        <div class="card">
          <img src="./images/rapidos.jpeg" class="card-img-center" alt="...">
         
        </div>
        </div>
        <div class="col">
        <div class="card">
          <img src="./images/gato.png" class="card-img-center" alt="...">
         
        </div>
      
        </div
        <div class="col">
        <div class="card">
          <img src="./images/harry.jpeg" class="card-img-center" alt="...">
          
        </div>
      
        </div





      </div>
            </div>{*internal row*}
        <div>  {*movies col*}     
    </div>{*principal row*}
</div>{*container-fluid*}

{include file="footer.tpl"}