<ul class="nav">
    <li class="nav-item nav-category">Général</li>
    <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="grid"></i>
            <span class="link-title">Accueil</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('news.index') }}" class="nav-link">
            <i class="link-icon" data-feather="globe"></i>
            <span class="link-title">Actualités</span>
        </a>
    </li>
    <li class="nav-item nav-category">Gestion</li>
    <li class="nav-item">
        <a href="{{ route('studies.index') }}" class="nav-link">
            <i class="link-icon" data-feather="tag"></i>
            <span class="link-title">Formations</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('students.index') }}" role="button">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Étudiants</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('exchanges.index') }}" role="button">
            <i class="link-icon" data-feather="send"></i>
            <span class="link-title">Échanges</span>
        </a>
    </li>

    <li class="nav-item nav-category">Autres</li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="link-icon" data-feather="dollar-sign"></i>
            <span class="link-title">Budget</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="link-title">Statistiques</span>
        </a>
    </li>
</ul>
