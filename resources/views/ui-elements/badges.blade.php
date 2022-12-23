@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="/">
                    <i class='bx bx-home-alt'></i>
                </a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">Badges</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Heading Badges</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h1>Example heading <span class="badge badge-primary">New</span></h1>
            <h2>Example heading <span class="badge badge-secondary">New</span></h2>
            <h3>Example heading <span class="badge badge-success">New</span></h3>
            <h4>Example heading <span class="badge badge-danger">New</span></h4>
            <h5>Example heading <span class="badge badge-warning">New</span></h5>
            <h6>Example heading <span class="badge badge-info">New</span></h6>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="headingBadges"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h6&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#headingBadges"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 badge-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Counter Badges</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <button type="button" class="mt-2 mr-2 btn btn-outline-primary">
                Notifications
                <span class="badge badge-primary">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-outline-secondary">
                Notifications
                <span class="badge badge-secondary">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-outline-success">
                Notifications
                <span class="badge badge-success">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-outline-danger">
                Notifications
                <span class="badge badge-danger">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-outline-warning">
                Notifications
                <span class="badge badge-warning">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-outline-info">
                Notifications
                <span class="badge badge-info">9</span>
            </button>
            <button type="button" class="mt-2 btn btn-outline-dark">
                Notifications
                <span class="badge badge-dark">9</span>
            </button>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="counterBadges"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-dark"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#counterBadges"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 badge-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Counter Badges Style 2</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <button type="button" class="mt-2 mr-2 btn btn-primary">
                Notifications
                <span class="badge badge-light">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-secondary">
                Notifications
                <span class="badge badge-light">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-success">
                Notifications
                <span class="badge badge-light">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-danger">
                Notifications
                <span class="badge badge-light">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-warning">
                Notifications
                <span class="badge badge-dark">9</span>
            </button>
            <button type="button" class="mt-2 mr-2 btn btn-info">
                Notifications
                <span class="badge badge-light">9</span>
            </button>
            <button type="button" class="mt-2 btn btn-dark">
                Notifications
                <span class="badge badge-light">9</span>
            </button>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="counterBadges2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-dark"</span><span class="nt">&gt;</span>
Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#counterBadges2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 badge-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Contextual Variations Badges</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <span class="badge badge-primary mt-2 mr-2">Primary</span>
            <span class="badge badge-secondary mt-2 mr-2">Secondary</span>
            <span class="badge badge-success mt-2 mr-2">Success</span>
            <span class="badge badge-danger mt-2 mr-2">Danger</span>
            <span class="badge badge-warning mt-2 mr-2">Warning</span>
            <span class="badge badge-info mt-2 mr-2">Info</span>
            <span class="badge badge-light mt-2 mr-2">Light</span>
            <span class="badge badge-dark mt-2">Dark</span>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="contextualVariationsBadges"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#contextualVariationsBadges"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 badge-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Pill Badges</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <span class="badge badge-pill badge-primary mt-2 mr-2">Primary</span>
            <span class="badge badge-pill badge-secondary mt-2 mr-2">Secondary</span>
            <span class="badge badge-pill badge-success mt-2 mr-2">Success</span>
            <span class="badge badge-pill badge-danger mt-2 mr-2">Danger</span>
            <span class="badge badge-pill badge-warning mt-2 mr-2">Warning</span>
            <span class="badge badge-pill badge-info mt-2 mr-2">Info</span>
            <span class="badge badge-pill badge-light mt-2 mr-2">Light</span>
            <span class="badge badge-pill badge-dark mt-2">Dark</span>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="pillBadges"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#pillBadges"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 badge-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Links Badges</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">Success</a>
            <a href="#" class="badge badge-danger">Danger</a>
            <a href="#" class="badge badge-warning">Warning</a>
            <a href="#" class="badge badge-info">Info</a>
            <a href="#" class="badge badge-light">Light</a>
            <a href="#" class="badge badge-dark">Dark</a>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="linkBadges"><pre><code class="language-html" data-lang="html">
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/a&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#linkBadges"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
