<!-- Header -->
<div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
    <div class="mdk-header__content">
        <div class="navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt" id="default-navbar" data-primary>
            <!-- Navbar toggler -->
            <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Brand -->
            <a href="/" class="navbar-brand">
                <img class="navbar-brand-icon mr-0 mr-md-8pt" src="{{ asset('assets/images/logo/white-100@2x.png') }}" width="30" alt="Eduversity">
                <span class="d-none d-md-block">Eduversity</span>
            </a>
            <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Courses <i class="material-icons">arrow_drop_down</i></button>

            <form class="search-form search-form--black search-form-courses d-none d-md-flex" action="library-filters.html">
                <input type="text" class="form-control" placeholder="What would you like to learn?">
                <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
            </form>
            <!-- Main Navigation -->
            <ul class="nav navbar-nav ml-auto flex-nowrap" style="white-space: nowrap;">
                <li class="ml-16pt nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="material-icons">lock_open</i>
                        <span class="sr-only">Login</span>
                    </a>
                </li>
                <li class="d-none d-sm-flex nav-item">
                    <a href="/pages/pricing" class="btn btn-accent">Get started</a>
                </li>
            </ul>
            <!-- // END Main Navigation -->
        </div>

    </div>
</div>
    <!-- // END Header -->