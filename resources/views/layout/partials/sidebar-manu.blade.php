<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('assets/img/small-logo.png') }}" alt="image">
            <span>FW</span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item-title">Main</li>

            <li class="nav-item {{Request::is('dashboard') ? 'mm-active' : ''}}">
                <a href="/dashboard" class="nav-link">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Dashboard</span>
                    <span class="badge">2</span>
                </a>
            </li>



            <li class="nav-item-title">Training Material Requests</li>



            <li class="nav-item {{Request::is('create-tmr') ? 'mm-active' : ''}}">
                <a href="/create-tmr" class="nav-link">
                    <span class="icon"><i class='bx bx-location-plus'></i></span>
                    <span class="menu-title">Create TMR</span>
                </a>
            </li>
            <li class="nav-item {{Request::is('view-tmr-list') ? 'mm-active' : ''}}">
                <a href="/view-tmr-list" class="nav-link">
                    <span class="icon"><i class='bx bx-grid-alt'></i></span>
                    <span class="menu-title">View/Edit TMR</span>
                </a>
            </li>
            <!-- <li class="nav-item {{Request::is('app/todo') ? 'mm-active' : ''}}">
                <a href="/app/todo" class="nav-link">
                    <span class="icon"><i class='bx bx-badge-check'></i></span>
                    <span class="menu-title">Todo</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('app/calendar') ? 'mm-active' : ''}}">
                <a href="/app/calendar" class="nav-link">
                    <span class="icon"><i class='bx bx-calendar'></i></span>
                    <span class="menu-title">Calendar</span>
                </a>
            </li> -->

            <!-- <li class="nav-item-title">View</li>

            <li class="nav-item {{Request::is('ui-elements/grid') ? 'mm-active' : ''}}">
                <a href="/ui-elements/grid" class="nav-link">
                    <span class="icon"><i class='bx bx-grid-alt'></i></span>
                    <span class="menu-title">Material Requests</span>
                </a>
            </li> -->

            <!-- <li class="nav-item {{Request::is('ui-elements/colors') ? 'mm-active' : ''}}">
                <a href="/ui-elements/colors" class="nav-link">
                    <span class="icon"><i class='bx bxs-color-fill'></i></span>
                    <span class="menu-title">Colors</span>
                </a>
            </li> -->

            <!-- <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-brightness'></i></span>
                    <span class="menu-title">Icons</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('icons/boxicons') ? 'mm-active' : ''}}">
                        <a href="/icons/boxicons" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">BoxIcons</span>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('icons/feathericons') ? 'mm-active' : ''}}">
                        <a href="/icons/feathericons" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Feather Icons</span>
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-card'></i></span>
                    <span class="menu-title">Card</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('ui-elements/basic-card') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/basic-card" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Basic Card</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/colors-card') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/colors-card" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Colors Card</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/statistics-card') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/statistics-card" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Statistics Card</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-chart'></i></span>
                    <span class="menu-title">Component</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('ui-elements/alerts') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/alerts" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Alert</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/badges') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/badges" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Badge</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/borders') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/borders" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Border</span>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('ui-elements/breadcrumb') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/breadcrumb" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Breadcrumb</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/buttons') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/buttons" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Buttons</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/button-group') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/button-group" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Button Group</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/carousel') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/carousel" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Slider</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/collapse') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/collapse" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Collapse</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/display') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/display" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Display</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/dropdowns') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/dropdowns" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Dropdown</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/embed') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/embed" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Embed</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/figures') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/figures" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Figures</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/images') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/images" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Images</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/jumbotron') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/jumbotron" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Jumbotron</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/list-group') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/list-group" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">List Group</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/media-object') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/media-object" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Media Object</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/modal') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/modal" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Modal</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/navs') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/navs" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Navs</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/navbar') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/navbar" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Navbar</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/pagination') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/pagination" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Pagination</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/progress') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/progress" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Progress</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/spinners') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/spinners" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Spinner</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/text') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/text" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Text</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/vertical-align') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/vertical-align" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Vertical Alignment</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/typography') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/typography" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Typography</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/tooltips') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/tooltips" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Tooltips</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('ui-elements/popovers') ? 'mm-active' : ''}}">
                        <a href="/ui-elements/popovers" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Popovers</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item-title">Forms & Table</li>

            <li class="nav-item {{Request::is('ui-elements/forms') ? 'mm-active' : ''}}">
                <a href="/ui-elements/forms" class="nav-link">
                    <span class="icon"><i class='bx bxs-layer'></i></span>
                    <span class="menu-title">Form Layout</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('ui-elements/input-group') ? 'mm-active' : ''}}">
                <a href="/ui-elements/input-group" class="nav-link">
                    <span class="icon"><i class='bx bx-file'></i></span>
                    <span class="menu-title">Form Input Group</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('ui-elements/tables') ? 'mm-active' : ''}}">
                <a href="/ui-elements/tables" class="nav-link">
                    <span class="icon"><i class='bx bx-table'></i></span>
                    <span class="menu-title">Table</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('ui-elements/tables-dark') ? 'mm-active' : ''}}">
                <a href="/ui-elements/tables-dark" class="nav-link">
                    <span class="icon"><i class='bx bx-calendar'></i></span>
                    <span class="menu-title">Table Dark</span>
                </a>
            </li>

            <li class="nav-item-title">Pages</li>

            <li class="nav-item {{Request::is('pages/profile') ? 'mm-active' : ''}}">
                <a href="/pages/profile" class="nav-link">
                    <span class="icon"><i class='bx bx-user-circle'></i></span>
                    <span class="menu-title">Profile</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('pages/faq') ? 'mm-active' : ''}}">
                <a href="/pages/faq" class="nav-link">
                    <span class="icon"><i class='bx bx-help-circle'></i></span>
                    <span class="menu-title">FAQ</span>
                </a>
            </li> -->

            <!-- <li class="nav-item {{Request::is('pages/invoice') ? 'mm-active' : ''}}">
                <a href="/pages/invoice" class="nav-link">
                    <span class="icon"><i class='bx bx-receipt'></i></span>
                    <span class="menu-title">Invoice</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('pages/gallery') ? 'mm-active' : ''}}">
                <a href="/pages/gallery" class="nav-link">
                    <span class="icon"><i class='bx bx-images'></i></span>
                    <span class="menu-title">Gallery</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('pages/timeline') ? 'mm-active' : ''}}">
                <a href="/pages/timeline" class="nav-link">
                    <span class="icon"><i class='bx bx-align-justify'></i></span>
                    <span class="menu-title">Timeline</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('pages/pricing') ? 'mm-active' : ''}}">
                <a href="/pages/pricing" class="nav-link">
                    <span class="icon"><i class='bx bx-money'></i></span>
                    <span class="menu-title">Pricing</span>
                </a>
            </li>

            <li class="nav-item {{Request::is('pages/blank-pag') ? 'mm-active' : ''}}">
                <a href="/pages/blank-page" class="nav-link">
                    <span class="icon"><i class='bx bx-file-blank'></i></span>
                    <span class="menu-title">Blank Page</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-lock-open'></i></span>
                    <span class="menu-title">Authentication</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('pages/login') ? 'mm-active' : ''}}">
                        <a href="/pages/login" class="nav-link">
                            <span class="icon"><i class='bx bx-log-in'></i></span>
                            <span class="menu-title">Login v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/login-with-image') ? 'mm-active' : ''}}">
                        <a href="/pages/login-with-image" class="nav-link">
                            <span class="icon"><i class='bx bxs-log-in'></i></span>
                            <span class="menu-title">Login v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/register') ? 'mm-active' : ''}}">
                        <a href="/pages/register" class="nav-link">
                            <span class="icon"><i class='bx bx-log-in-circle'></i></span>
                            <span class="menu-title">Register v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/register-with-image') ? 'mm-active' : ''}}">
                        <a href="/pages/register-with-image" class="nav-link">
                            <span class="icon"><i class='bx bxs-log-in-circle'></i></span>
                            <span class="menu-title">Register v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/forgot-password') ? 'mm-active' : ''}}">
                        <a href="/pages/forgot-password" class="nav-link">
                            <span class="icon"><i class='bx bx-lock'></i></span>
                            <span class="menu-title">Forgot Password v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/forgot-password-with-image') ? 'mm-active' : ''}}">
                        <a href="/pages/forgot-password-with-image" class="nav-link">
                            <span class="icon"><i class='bx bx-lock-alt'></i></span>
                            <span class="menu-title">Forgot Password v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/reset-password') ? 'mm-active' : ''}}">
                        <a href="/pages/reset-password" class="nav-link">
                            <span class="icon"><i class='bx bx-log-out'></i></span>
                            <span class="menu-title">Reset Password v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/reset-password-with-image') ? 'mm-active' : ''}}">
                        <a href="/pages/reset-password-with-image" class="nav-link">
                            <span class="icon"><i class='bx bx-log-out-circle'></i></span>
                            <span class="menu-title">Reset Password v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/session-lock-screen') ? 'mm-active' : ''}}">
                        <a href="/pages/session-lock-screen" class="nav-link">
                            <span class="icon"><i class='bx bxs-lock-open-alt'></i></span>
                            <span class="menu-title">Lock Screen v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('pages/session-lock-screen-with-image') ? 'mm-active' : ''}}">
                        <a href="/pages/session-lock-screen-with-image" class="nav-link">
                            <span class="icon"><i class='bx bxs-lock-open'></i></span>
                            <span class="menu-title">Lock Screen v2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-share-alt'></i></span>
                    <span class="menu-title">Miscellaneous</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('miscellaneous/not-authorized') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/not-authorized" class="nav-link">
                            <span class="icon"><i class='bx bx-traffic-cone'></i></span>
                            <span class="menu-title">Not Authorized v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('miscellaneous/not-authorized-with-image') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/not-authorized-with-image" class="nav-link">
                            <span class="icon"><i class='bx bxs-traffic-cone'></i></span>
                            <span class="menu-title">Not Authorized v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('miscellaneous/maintenance') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/maintenance" class="nav-link">
                            <span class="icon"><i class='bx bx-recycle'></i></span>
                            <span class="menu-title">Maintenance v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('miscellaneous/maintenance-with-image') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/maintenance-with-image" class="nav-link">
                            <span class="icon"><i class='bx bx-recycle bx-rotate-90'></i></span>
                            <span class="menu-title">Maintenance v2</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('miscellaneous/coming-soon') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/coming-soon" class="nav-link">
                            <span class="icon"><i class='bx bxs-up-arrow'></i></span>
                            <span class="menu-title">Coming Soon v1</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('miscellaneous/coming-soon-with-image') ? 'mm-active' : ''}}">
                        <a href="/miscellaneous/coming-soon-with-image" class="nav-link">
                            <span class="icon"><i class='bx bxs-right-arrow'></i></span>
                            <span class="menu-title">Coming Soon v2</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-share-alt'></i></span>
                            <span class="menu-title">Error</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item {{Request::is('error/error-404') ? 'mm-active' : ''}}">
                                <a href="/error/error-404" class="nav-link">
                                    <span class="icon"><i class='bx bx-error'></i></span>
                                    <span class="menu-title">404 v1</span>
                                </a>
                            </li>

                            <li class="nav-item {{Request::is('error-404-with-image') ? 'mm-active' : ''}}">
                                <a href="/error/error-404-with-image" class="nav-link">
                                    <span class="icon"><i class='bx bxs-error'></i></span>
                                    <span class="menu-title">404 v2</span>
                                </a>
                            </li>

                            <li class="nav-item {{Request::is('error/error-500') ? 'mm-active' : ''}}">
                                <a href="/error/error-500" class="nav-link">
                                    <span class="icon"><i class='bx bx-error-circle'></i></span>
                                    <span class="menu-title">500 v1</span>
                                </a>
                            </li>

                            <li class="nav-item {{Request::is('error/error-500-with-image') ? 'mm-active' : ''}}">
                                <a href="/error/error-500-with-image" class="nav-link">
                                    <span class="icon"><i class='bx bxs-error-circle'></i></span>
                                    <span class="menu-title">500 v2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item-title">Charts & Maps</li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-chart'></i></span>
                    <span class="menu-title">Charts</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item {{Request::is('charts/apex-charts') ? 'mm-active' : ''}}">
                        <a href="/charts/apex-charts" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Apex Charts</span>
                        </a>
                    </li>

                    <li class="nav-item {{Request::is('charts/chartjs') ? 'mm-active' : ''}}">
                        <a href="/charts/chartjs" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Chartjs</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{Request::is('pages/maps') ? 'mm-active' : ''}}">
                <a href="/pages/maps" class="nav-link">
                    <span class="icon"><i class='bx bx-world'></i></span>
                    <span class="menu-title">Maps</span>
                </a>
            </li>

            <li class="nav-item-title">Others</li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-menu'></i></span>
                    <span class="menu-title">Menu Levels</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">First Level</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                            <span class="menu-title">Second Level</span>
                        </a>

                        <ul class="sidemenu-nav-third-level">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Second Level 2.1</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="icon"><i class='bx bx-right-arrow-alt'></i></span>
                                    <span class="menu-title">Second Level 2.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link disabled">
                    <span class="icon"><i class='bx bx-unlink'></i></span>
                    <span class="menu-title">Disable Menu</span>
                </a>
            </li>

            <li class="nav-item-title">Support</li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="icon"><i class='bx bx-file'></i></span>
                    <span class="menu-title">Documentation</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="mailto:hello@envytheme.com" class="nav-link">
                    <span class="icon"><i class='bx bx-support'></i></span>
                    <span class="menu-title">Support</span>
                </a>
            </li> -->
        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
