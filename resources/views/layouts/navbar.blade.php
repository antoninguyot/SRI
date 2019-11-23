<ul class="nav">
    <li class="nav-item nav-category">Général</li>
    <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="home"></i>
            <span class="link-title">Accueil</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('news.index') }}" class="nav-link">
            <i class="link-icon" data-feather="globe"></i>
            <span class="link-title">Actualités</span>
        </a>
    </li>
    <li class="nav-item nav-category">Établissement</li>
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

    <li class="nav-item nav-category">Échanges</li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('internships.index') }}" role="button">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Stages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('semesters.index') }}" role="button">
            <i class="link-icon" data-feather="globe"></i>
            <span class="link-title">Semestres étr.</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" role="button">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Semaines int.</span>
        </a>
    </li>

    <li class="nav-item nav-category">Budget</li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="link-icon" data-feather="grid"></i>
            <span class="link-title">Vue d'ensemble</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('orders.index') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Commandes</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('missions.index') }}" class="nav-link">
            <i class="link-icon" data-feather="map"></i>
            <span class="link-title">Missions</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('transfers.index') }}" class="nav-link">
            <i class="link-icon" data-feather="send"></i>
            <span class="link-title">Virements</span>
        </a>
    </li>

    <li class="nav-item nav-category">Autres</li>

    <li class="nav-item">
        <a href="{{ route('stats') }}" class="nav-link">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="link-title">Statistiques</span>
        </a>
    </li>
</ul>
