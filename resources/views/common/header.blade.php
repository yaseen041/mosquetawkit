 <header id='header'>
    <div class='container d-flex align-items-center justify-content-between'>
      <div class='logo'>
        <h1><a href="{{ url('/') }}">Tawkit</a></h1>
      </div>
      <nav id='navbar' class='navbar'>
        <ul>
          <li>
            <a class='nav-link scrollto' title='Tawkit Online App Administration' href="{{ url('admin') }}" target='_blank' >ADMINISTRATION</a>
          </li>
          <li>
            <a class='nav-link scrollto' title='Tawkit Live App' href="{{ url('offline') }}" target='_blank'>LIVE APP</a>
          </li>
          <li>
            <a class='nav-link scrollto' title='Tawkit Installation' href="{{ url('installation') }}">ANDROID INSTALLATION</a>
          </li>
          <li>
            <a class='nav-link scrollto' title='Installers' href="#Installers">INSTALLERS</a>

          </li>
          <li><a class='nav-link scrollto' href="{{ url('contact') }}">CONTACT</a></li>
        </ul>
        <i class='bi bi-list mobile-nav-toggle'></i>
      </nav>
    </div>
  </header>