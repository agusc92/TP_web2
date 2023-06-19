{include file="head.tpl"}
<div class="container mt-5 bg-dark">
  <div class="row justify-content-center">
    <h3 class="text-bold text-white text-center">Agregar pelicula</h3>

    <h5 class="text-bold text-white text-center">{$mensaje}</h5>

    <div class="col-6">
      <form method="post" action="{$URL_BASE}/add_confirm">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="movie_name" placeholder="las aventuras de web 2"
            required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Imagen</label>
          <input type="text" class="form-control" id="image" name="image" placeholder="Inserte link hacia una imagen"
            required>
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Genero</label>
          <select class="form-control" id="gender" name="id_gender">
            {foreach $genders as $gender}
              <option value="{$gender->id_gender}">{$gender->name_gender}</option>
            {/foreach}
          </select>
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Año de lanzamiento</label>
          <input type="number" class="form-control" id="date" name="date" placeholder="1995" required>
        </div>
        <div class="mb-3">
          <label for="synopsis" class="form-label">Sinopsis</label>
          <textarea class="form-control" id="synopsis" name="synopsis" placeholder="Una breve sinopsis de la pelicula"
            required></textarea>
        </div>

        <button type="submit" class="btn btn-light">Agregar</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}