  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Agent</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('agents.create') }}">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="{{ route('agents.index') }}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#stagiaire" data-bs-toggle="collapse" href="#">
          <i class="bi bi-lightbulb"></i><span>Stagiaires</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="stagiaire" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('stagiaires.create') }}">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="{{ route('stagiaires.index') }}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#fonction" data-bs-toggle="collapse" href="#">
          <i class="bi bi-lightbulb"></i><span>Fonctions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="fonction" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('fonctions.create') }}">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="{{ route('fonctions.index') }}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#fiche" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tools"></i><span>Fiche</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="fiche" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('fiches.create') }}">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="{{ route('fiches.index') }}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->





    </ul>

  </aside><!-- End Sidebar-->