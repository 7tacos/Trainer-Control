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
            <li class="item">Breadcrumb</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30 collapse-card-box">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Breadcrumb</h3>

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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicBreadcrumb">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBreadcrumb"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
