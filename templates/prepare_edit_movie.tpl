{include file="head.tpl"}
<div class="container mt-5 bg-dark">
  <div class="row justify-content-center ">
    <h3 class="text-bold text-white text-center">Edita pelicula</h3>

    <h5 class="text-bold text-white text-center">{$mensaje}</h5>

    <div class="col-6">
      <form method="post" action="{$URL_BASE}/edit_confirm">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" value="{$movie->movie_name}" class="form-control" id="name" name="movie_name"
            placeholder="las aventuras de web 2" required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Imagen</label>
          <input type="text" value="{$movie->movie_image}" class="form-control" id="image" name="image"
            placeholder="Inserte link hacia una imagen" required>
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Genero</label>
          <select class="form-control" id="gender" name="id_gender">
            {foreach $genders as $gender}
              {if $gender->id_gender != $movie->id_gender}
                <option value="{$gender->id_gender}">{$gender->name_gender}</option>
              {else}
                <option value="{$gender->id_gender}" selected>{$gender->name_gender}</option>
              {/if}
            {/foreach}
          </select>
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Año de lanzamiento</label>
          <input type="number" value="{$movie->movie_date}" class="form-control" id="date" name="date"
            placeholder="1995" required>
        </div>
        <div class="mb-3">
          <label for="synopsis" class="form-label">Sinopsis</label>
          <textarea class="form-control" id="synopsis" name="synopsis" placeholder="Una breve sinopsis de la pelicula"
            required>{$movie->synopsis}</textarea>
        </div>
        <input type="hidden" name="movie_id" value="{$movie->id_movie}"></input>
        <input type="hidden" name="old_gender" value="{$movie->id_gender}"></input>
        <button type="submit" class="btn btn-light">Enviar</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}