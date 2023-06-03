{include file="head.tpl"}
<div class="container-fluid bg-dark">


{foreach from=$movie item=mov}
<div class="card mb-3">
  <img class="card-img-top" src="{$mov->movie_image}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{$mov->movie_name}</h5>
    <p class="card-text">{$mov->synopsis}</p>
    <p class="card-text"><small class="text-muted">{$mov->name_gender}</small></p>
    <p class="card-text"><small class="text-muted">{$mov->movie_date}</small></p>
  </div>
</div>

{/foreach}






<div >

<div>


</div>



{include file="footer.tpl"}

