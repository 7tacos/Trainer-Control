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
            <li class="item">Figures</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Figures</h3>

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
            <figure class="figure">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicFigures1"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"figure"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"figure-img img-fluid rounded"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;figcaption</span> <span class="na">class=</span><span class="s">"figure-caption"</span><span class="nt">&gt;</span>A caption for the above image.<span class="nt">&lt;/figcaption&gt;</span>
<span class="nt">&lt;/figure&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicFigures1"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <figure class="figure mt-4">
                <img src="{{ asset('assets/img/200x200.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
            </figure>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicFigures2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"figure"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"figure-img img-fluid rounded"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;figcaption</span> <span class="na">class=</span><span class="s">"figure-caption text-right"</span><span class="nt">&gt;</span>A caption for the above image.<span class="nt">&lt;/figcaption&gt;</span>
<span class="nt">&lt;/figure&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicFigures2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
