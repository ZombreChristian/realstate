<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
          Service<span>BIR</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class=
            "link-title">Accueil</span>
          </a>
        </li>
        <li class="nav-item nav-category">Tableau de bord</li>

      @if (Auth::user()->can('menu.personnel'))
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Gestion du personnels</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Personnels</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Missions</a>
              </li>


            </ul>
          </div>
        </li>

        @endif


       @if (Auth::user()->can('menu.permanence'))

       <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Gestion de la permanence</span>

            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item nav-category">Permanence</li>

              {{-- @if (Auth::user()->can('Arme.menu')) --}}
              <li class="nav-item">
                <a href="#" class="nav-link">Liste permanence</a>
              </li>
              {{-- @endif
              @if (Auth::user()->can('add.arme')) --}}

            </ul>
          </div>
          <div class="collapse" >
              <ul class="nav sub-menu">
                <li class="nav-item nav-category">Visiteur</li>

                {{-- @if (Auth::user()->can('Arme.menu')) --}}
                <li class="nav-item">
                  <a href="#" class="nav-link">Liste visiteur</a>
                </li>
                {{-- @endif
                @if (Auth::user()->can('add.arme')) --}}

              </ul>
            </div>
            <div class="collapse">
              <ul class="nav sub-menu">
                <li class="nav-item nav-category">Evènement</li>

                {{-- @if (Auth::user()->can('Arme.menu')) --}}
                <li class="nav-item">
                  <a href="#" class="nav-link">Liste évènement</a>
                </li>
                {{-- @endif
                @if (Auth::user()->can('add.arme')) --}}

              </ul>
            </div>
        </li>
       @endif



         @if (Auth::user()->can('menu.AMO'))

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Gestion AMO</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Liste armes</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Liste munition</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Liste optique</a>
                </li>


            </ul>
          </div>
        </li>

        @endif
       @if (Auth::user()->can('menu.role'))

        <li class="nav-item nav-category">Profiles et Droits</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Profiles et Droits</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.permission')}}" class="nav-link">Liste des droits</a>
              </li>
              <li class="nav-item">
                  <a href="{{route('all.roles')}}" class="nav-link">Liste profiles</a>
                </li>

                <li class="nav-item">
                  <a href="{{route('add.roles.permission')}}" class="nav-link">Droits de profile</a>
                </li>

                <li class="nav-item">
                  <a href="{{route('all.roles.permission')}}" class="nav-link">Liste des Droits de Profiles</a>
                </li>


            </ul>
          </div>
        </li>
         @endif
        @if (Auth::user()->can('menu.utilisateur'))
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Gestion Utilisateurs</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="admin">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.admin')}}" class="nav-link">Liste des utilisateurs</a>
              </li>

            </ul>
          </div>
        </li>

      @endif

      </ul>


    </div>
  </nav>
