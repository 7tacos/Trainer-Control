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
            <li class="item">Alerts</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Default Alerts</h3>

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
            <div class="alert alert-primary" role="alert">
                This is a primary alert—check it out!
            </div>
            <div class="alert alert-secondary" role="alert">
                This is a secondary alert—check it out!
            </div>
            <div class="alert alert-success" role="alert">
                This is a success alert—check it out!
            </div>
            <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
                This is a warning alert—check it out!
            </div>
            <div class="alert alert-info" role="alert">
                This is a info alert—check it out!
            </div>
            <div class="alert alert-light" role="alert">
                This is a light alert—check it out!
            </div>
            <div class="alert alert-dark" role="alert">
                This is a dark alert—check it out!
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="defaultAlerts"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultAlerts"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Rounded Alerts</h3>

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
            <div class="alert alert-primary rounded-pill" role="alert">
                This is a primary alert—check it out!
            </div>
            <div class="alert alert-secondary rounded-pill" role="alert">
                This is a secondary alert—check it out!
            </div>
            <div class="alert alert-success rounded-pill" role="alert">
                This is a success alert—check it out!
            </div>
            <div class="alert alert-danger rounded-pill" role="alert">
                This is a danger alert—check it out!
            </div>
            <div class="alert alert-warning rounded-pill" role="alert">
                This is a warning alert—check it out!
            </div>
            <div class="alert alert-info rounded-pill" role="alert">
                This is a info alert—check it out!
            </div>
            <div class="alert alert-light rounded-pill" role="alert">
                This is a light alert—check it out!
            </div>
            <div class="alert alert-dark rounded-pill" role="alert">
                This is a dark alert—check it out!
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="roundedAlerts"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark rounded-pill"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#roundedAlerts"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Link Color Alerts</h3>

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
            <div class="alert alert-primary" role="alert">
                This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-secondary" role="alert">
                This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-success" role="alert">
                This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-danger" role="alert">
                This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-warning" role="alert">
                This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-info" role="alert">
                This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-light" role="alert">
                This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-dark" role="alert">
                This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="linkColorAlerts"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
... <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. ...
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#linkColorAlerts"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dismissing Alerts</h3>

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
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Holy primary!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <strong>Holy secondary!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy success!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Holy danger!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy warning!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Holy info!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <strong>Holy light!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>Holy dark!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="dismissingAlerts"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy primary!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy secondary!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy success!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy danger!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy warning!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy info!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy light!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;strong&gt;</span>Holy dark!<span class="nt">&lt;/strong&gt;</span> You should check in on some of those fields below.
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#dismissingAlerts"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Additional Content Alerts</h3>

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
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="additionalContentAlerts"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"alert-heading"</span><span class="nt">&gt;</span>Well done!<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;p&gt;</span>........................................<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;hr&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>......................................<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#additionalContentAlerts"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
