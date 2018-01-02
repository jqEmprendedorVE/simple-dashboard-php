<nav class="navbar navbar-default navbar-static-top navbar-without-margin" style="z-index: 1001">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">
        <span>Ameda APP</span>
      </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
          <li>
            <a href="<?=$config['base_url']?>app/" class="text-left"><i class="fa fa-home" aria-hidden="true"></i><small> Home</small></a>
          </li>
          <li>
            <a href="<?=$config['base_url']?>app/ids_pendientes" class="text-left"><i class="fa fa-building" aria-hidden="true"></i><small> Estados IDs</small></a>
          </li>
        </ul>
        <form class="navbar-form navbar-left hidden-sm hidden">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default btn-block">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="javascript:void(0)">
              <i :class="notifications ? 'fa-envelope with-notifications' : 'fa-envelope without-notifications' " class="fa " aria-hidden="true"></i>
            </a>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i aria-hidden="true" class="fa fa-ellipsis-v"></i> <span class="caret hidden"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Perfíl</a></li>
              <li><a href="javascript:void(0)">Preferencias</a></li>
              <li><a href="javascript:void(0)">Configuración</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/off/logout">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <nav class="navbar navbar-inverse navbar-static-top z-999 hidden-xs navbar-without-margin visible-md visible-lg">
    <div class="container-fluid">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?=$config['base_url']?>app/" class="text-center"><i class="fa fa-home" aria-hidden="true"></i><br><small> Home</small></a>
          </li>
          <li>
            <a href="<?=$config['base_url']?>app/ids_pendientes" class="text-center"><i class="fa fa-building" aria-hidden="true"></i><br><small> Estados IDs</small></a>
          </li>
          <li class="hidden">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 2 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
              <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shield" aria-hidden="true"></i><br><small>Admin</small><span class="caret hidden"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Usuarios</a></li>
              <li><a href="javascript:void(0)">Roles</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>