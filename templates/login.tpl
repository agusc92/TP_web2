{include file="head.tpl"}
<div class="container">

  <div class="row justify-content-center">
    <h3 class="text-bold text-white text-center">Login</h3>
    <div class="col-6">
      <form method="POST" action="{$URL_BASE}/verify_login">
        <div class="form-group">
          <label for="name_user">username</label>
          <input type="text" class="form-control" id="name_user" name="name_user" aria-describedby="name_user"
            placeholder="usuario" required>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          </div>

          <button type="submit" class="btn btn-light mt-3">Enviar</button>
      </form>

      <div class="container">
        <p class="text-white">{$message}</p>
        <div>
        </div>
      </div>
    </div>

{include file="footer.tpl"}