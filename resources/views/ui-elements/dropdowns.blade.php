@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="/"><i class='bx bx-home-alt'></i></a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">Dropdowns</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Single Button Dropdowns</h3>

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
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown button
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="singleButtonDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown button
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#singleButtonDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Single Link Dropdowns</h3>

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
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown link
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="singleLinkDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown show"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown link
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#singleLinkDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Multiple Color Dropdowns</h3>

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
            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Primary
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Secondary
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Success
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Info
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Warning
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Danger
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="multipleColorDropdowns">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Primary
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Secondary
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Success
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Info
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Warning
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Danger
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#multipleColorDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Split Button Dropdowns</h3>

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
            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Danger
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="splitButtonDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="c">&lt;!-- Example split danger button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn  btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#splitButtonDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Sizing Dropdowns</h3>

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
            <div class="btn-group mt-2 mr-2">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true">
                    Large button
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="btn-group mt-2 mr-2">
                <button class="btn btn-secondary btn-lg" type="button">
                    Large split button
                </button>
                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="btn-group mt-2 mr-2">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true">
                    Small button
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="btn-group mt-2">
                <button class="btn btn-secondary btn-sm" type="button">
                    Small split button
                </button>
                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="sizingDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="c">&lt;!-- Large button groups (default and split) --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
    Large button
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
        Large split button
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    ...
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button groups (default and split) --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Small button
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        ...
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
        Small split button
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        ...
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dropup Dropdowns</h3>

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
            <!-- Default dropup button -->
            <div class="btn-group dropup mr-2 mt-2">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Dropup
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <!-- Split dropup button -->
            <div class="btn-group dropup mt-2">
                <button type="button" class="btn btn-secondary">
                    Split dropup
                </button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="dropupDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="c">&lt;!-- Default dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropup
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Split dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>
        Split dropup
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span         class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropupDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dropright Dropdowns</h3>

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
            <!-- Default dropup button -->
            <div class="btn-group dropright mr-2 mt-2">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Dropright
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <!-- Split dropup button -->
            <div class="btn-group dropright mt-2">
                <button type="button" class="btn btn-success">
                    Split Dropright
                </button>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="droprightDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="c">&lt;!-- Default dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropright"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropright
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="c">&lt;!-- Split dropup button --&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropright"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>
            Split Dropright
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#droprightDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30 dropdowns-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dropleft Dropdowns</h3>

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
            <!-- Default dropup button -->
            <div class="btn-group dropleft mr-2 mt-2">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    Dropleft
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <!-- Split dropup button -->
            <div class="btn-group dropleft mt-2">
                <button type="button" class="btn btn-danger">
                    Split Dropleft
                </button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="dropleftDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="c">&lt;!-- Default dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropleft"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropleft
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Split dropup button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropleft"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>
        Split Dropleft
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle dropdown-toggle-split"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropleftDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Menu Headers Dropdowns</h3>

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
            <div class="dropdown show">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown link
                </a>

                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Dropdown header</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="menuHeaderDropdowns">
<pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown show"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown link
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/h6&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#menuHeaderDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Menu Forms Dropdowns</h3>

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
            <div class="dropdown show">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown link
                </a>

                <div class="dropdown-menu">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 d-block w-100">Sign in</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="menuFormsDropdowns">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown show"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown link
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"px-4 py-3"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;label</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"email@example.com"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"dropdownCheck"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"dropdownCheck"</span><span class="nt">&gt;</span>
                    Remember me
                <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary mt-2 d-block w-100"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/form&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>New around here? Sign up<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Forgot password?<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#menuFormsDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Active Menu Items Dropdowns</h3>

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
            <div class="dropdown show">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown link
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Regular link</a>
                    <a class="dropdown-item active" href="#">Active link</a>
                    <a class="dropdown-item" href="#">Another link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="activeMenuItemsDropdown">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown show"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown link
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</   span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeMenuItemsDropdown"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Disabled Menu Items Dropdowns</h3>

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
            <div class="dropdown show">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                    Dropdown link
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Regular link</a>
                    <a class="dropdown-item disabled" href="#">Disabled link</a>
                    <a class="dropdown-item" href="#">Another link</a>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="disabledMenuItemsDropdowns">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown show"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span><span class="nt">&gt;</span>
        Dropdown link
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledMenuItemsDropdowns"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
