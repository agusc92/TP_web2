{include file="head.tpl"}
<div class="container mt-5 bg-dark">
  <div class="row justify-content-center">
    <h3 class="text-bold text-white text-center">Editar Genero</h3>

    <h5 class="text-bold text-white text-center">{$mensaje}</h5>

    <div class="col-6">
      <form method="post" action="{$URL_BASE}/edit_gender">
        <div class="mb-3">
          <label for="name" class="form-label">Genero</label>
          <input type="text" value="{$gender->name_gender}" class="form-control" id="name" name="name_gender"
            placeholder="" required>
        </div>
        <div class="mb-3">
          <label for="prox_estreno" class="form-label">Proximo Estreno</label>
          <input type="text" value="{$gender->prox_estreno}" class="form-control" id="prox_estreno" name="prox_estreno"
            placeholder="" required>
        </div>
        <input type="hidden" name="amount" value="{$gender->amount}"></input>
        <input type="hidden" name="id_gender" value="{$gender->id_gender}"></input>
        <button type="submit" class="btn btn-light">Enviar</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}