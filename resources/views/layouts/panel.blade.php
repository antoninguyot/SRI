@extends('layouts.app')

@section('body')
    <div class="main-wrapper">

        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand w-75">
                    Manager <span>SRI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                @include('layouts.navbar')
            </div>
        </nav>

        <div class="page-wrapper">

            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <div class="search-form">
                        <p>Bonjour, Amal Bendaoud</p>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" role="button">
                                <img src=""
                                     alt="profile">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">@yield('title')</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        @yield('title-right')
                    </div>
                </div>
                @yield('content')
            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Projet tutoré 2019/2020</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Antonin, Arnaud, Fabien - {{ \Carbon\Carbon::now()->year }}</p>
            </footer>
            <!-- partial -->

        </div>
    </div>
@endsection
