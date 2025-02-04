<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" style="width: 50px;" src="{{ asset('admin_assets/img/profile_small.jpg') }}">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Welcome {{ ucwords(Auth::guard('admin')->user()->username) }}</span>
                        <span class="text-muted text-xs block">
                            {{ get_section_content('project', 'site_title') }}
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    {{ ucwords(Auth::guard('admin')->user()->username) }}
                    <span class="text-muted text-xs block">
                        {{ get_section_content('project', 'short_site_title') }}
                    </span>
                </div>
            </li>


            <li class="{{ Request::is('admin/mosques') ? 'active' : '' }} {{ Request::is('admin/mosques*') ? 'active' : '' }}">
                <a href="{{ url('admin/mosques') }}"><i class="fa-solid fa-mosque"></i><span class="nav-label">Mosques</span></a>
            </li>

            <li class="{{ Request::is('admin/contacts') ? 'active' : '' }} {{ Request::is('admin/contacts*') ? 'active' : '' }}">
                <a href="{{ url('admin/contacts') }}"><i class="fa-solid fa-envelope"></i><span class="nav-label">Contacts</span></a>
            </li>

        </ul>
    </div>
</nav>