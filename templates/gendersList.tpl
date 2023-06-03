{include file="head.tpl"}
<div class="container-fluid bg-dark d-flex justify-content-center">
<div class="col-10 bg-dark mt-2 ">
<h3 class="text-bold text-white text-center">Categorias</h3>
    <div class="container mt-5 ">
    
    <ul class="list-group ">
    <li class="list-group-item bg-dark text-white ">
          <div class="row">
            <div class="col-3">Genero</div>
            <div class="col-3">cantidad</div>
            <div class="col-3">Recomendada del mes</div>
            <div class="col-2"></div>
          </div>
          </li>
      {foreach $genders as $gender}
        <li class="list-group-item bg-dark text-white hover-effect ">
        <div class="row">
            <div class="col-3 ">{$gender->name_gender}</div>
            <div class="col-3">{$gender->amount}</div>
            <div class="col-3 ">falta base dato</div>
            <a class="col-1 " href="{$URL_BASE}"><i class="bi bi-trash"></i></a>
            <a class="col-1 " href="#"><i class="bi bi-pencil-square"></i></a>
          </div>
        </li>
        {/foreach}
        
    </ul>
    </div>
</div>

</div>

{include file="footer.tpl"}