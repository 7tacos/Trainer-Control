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
            <li class="item">Images</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Responsive Images</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded'></i>
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
            <img src="{{ asset('assets/img/1920x350.jpg') }}" class="img-fluid" alt="Responsive image">

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicResponsiveImages"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-fluid"</span> <span class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicResponsiveImages"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Image thumbnails</h3>

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
            <img src="{{ asset('assets/img/200x200.jpg') }}" alt="..." class="img-thumbnail">

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicImageThumbnails"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicImageThumbnails"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Aligning images</h3>

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
            <div class="clearfix">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="rounded float-left" alt="...">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="rounded float-right" alt="...">
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicAligningImages"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded float-left"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded float-right"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicAligningImages"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <div class="mt-4">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="rounded mx-auto d-block" alt="...">
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicAligningImages2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded mx-auto d-block"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicAligningImages2"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <div class="mt-4 text-center">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="rounded mx-auto d-block" alt="...">
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicAligningImages3"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicAligningImages3"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
