<div id="login">
  <form role="form" id="login-form" action="login-form">
    <h4>Inicio de sesion</h4>
    <br>
    <div class="form-group">
      <input required type="text" class="form-control" id="user" placeholder="Nombre de usuario">
    </div>
    <div class="form-group">
      <input required v-model="user.password" type="password" class="form-control" id="password" placeholder="Contraseña">
    </div>
    <div class="checkbox form-group hidden">
      <label>
        <input v-model="user.remember" type="checkbox"> Recordarme por 30 días
      </label>
    </div>
    <button v-if="!iniciando" type="submit" class="btn btn-primary btn-block">Ingresar</button>
    <div v-else class="row text-center text-primary hidden" id="taskLoading">
      <div style="font-size:24px">
        <i class="fa fa-spin fa-cog fa-2" aria-hidden="true"></i>
      </div>
    </div>
  </form>
</div>

<script>
  $('#login-form').submit(function (e) {
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: '<?=$config['base_url']?>api/users/?valida=1',
      data: {
        user: $('#user').val(),
        password: $('#password').val()
      },
      success: function (data) {
        if(data.type==='success')
          window.location.replace('<?=$config['base_url']?>app/')
        console.log(data)
      }
    });
  })
</script>

<style>
  .form-group {
    text-align: justify;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fcfcfc;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h4 {
    text-align: center;
    line-height: 200%;
  }
</style>
