{include file="head.tpl"}
<div class="container mt-5 bg-dark">
  <div class="row justify-content-center">
  <h3 class="text-bold text-white text-center">Agregar Genero</h3>
    <div class="col-6">
      <form method="post" action="{$URL_BASE}/add_gender">
        <div class="mb-3">
          <label for="name_gender" class="form-label">Genero</label>
          <input type="text" class="form-control" id="name" name="name_gender" placeholder=" ">
        </div >
        <div class="mb-3">
          <label for="prox_estreno" class="form-label">Proximo Estreno</label>
          <input type="text" class="form-control" id="prox_estreno" name="prox_estreno" placeholder="">
        </div>
       
        </div>
        
        <button type="submit" class="btn btn-light">Agregar</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}