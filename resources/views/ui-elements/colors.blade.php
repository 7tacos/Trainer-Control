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
            <li class="item">Colors</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Colors</h3>

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
            <p class="text-primary">.text-primary</p>
            <p class="text-secondary">.text-secondary</p>
            <p class="text-success">.text-success</p>
            <p class="text-danger">.text-danger</p>
            <p class="text-warning">.text-warning</p>
            <p class="text-info">.text-info</p>
            <p class="text-light bg-dark pl-2">.text-light</p>
            <p class="text-dark">.text-dark</p>
            <p class="text-muted">.text-muted</p>
            <p class="text-white bg-dark pl-2">.text-white</p>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicColors">
                    <pre><code class="language-markup" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>.text-primary<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-secondary"</span><span class="nt">&gt;</span>.text-secondary<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>.text-success<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>.text-danger<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>.text-warning<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>.text-info<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-light bg-dark"</span><span class="nt">&gt;</span>.text-light<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-dark"</span><span class="nt">&gt;</span>.text-dark<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>.text-muted<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-white bg-dark"</span><span class="nt">&gt;</span>.text-white<span class="nt">&lt;/p&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicColors"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Background Colors</h3>

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
            <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
            <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
            <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
            <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
            <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
            <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
            <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
            <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
            <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicBGColors">
                    <pre><code class="language-markup" data-lang="html"><span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-secondary"</span><span class="nt">&gt;</span>Secondary link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>Success link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>Danger link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>Warning link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>Info link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-light bg-dark"</span><span class="nt">&gt;</span>Light link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-dark"</span><span class="nt">&gt;</span>Dark link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Muted link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-white bg-dark"</span><span class="nt">&gt;</span>White link<span class="nt">&lt;/a&gt;&lt;/p&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBGColors"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
