<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.html" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>



          @if (Auth::user()->can('menu.perso'))

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


         @if (Auth::user()->can('menu.perma'))

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
         @if (Auth::user()->can('menu1'))

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
          @if (Auth::user()->can('menu2'))
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
                <li class="nav-item">
                    <a href="{{route('add.admin')}}" class="nav-link">Ajouter user</a>
                  </li>
              </ul>
            </div>
          </li>

        @endif
        </ul>
      </div>
    </nav>
