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
            <li class="item">Tooltips</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Tooltips</h3>

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
            <button type="button" class="btn btn-secondary mt-2 mr-2" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                Tooltip on top
            </button>
            <button type="button" class="btn btn-secondary mt-2 mr-2" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                Tooltip on right
            </button>
            <button type="button" class="btn btn-secondary mt-2 mr-2" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                Tooltip on bottom
            </button>
            <button type="button" class="btn btn-secondary mt-2" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                Tooltip on left
            </button>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicToolTips"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"top"</span> <span class="na">title=</span><span class="s">"Tooltip on top"</span><span class="nt">&gt;</span>
    Tooltip on top
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"right"</span> <span class="na">title=</span><span class="s">"Tooltip on right"</span><span class="nt">&gt;</span>
    Tooltip on right
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Tooltip on bottom"</span><span class="nt">&gt;</span>
    Tooltip on bottom
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"left"</span> <span class="na">title=</span><span class="s">"Tooltip on left"</span><span class="nt">&gt;</span>
    Tooltip on left
<span class="nt">&lt;/button&gt;</span></code></pre>

                            <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicToolTips"><i class='bx bx-copy'></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Disabled Tooltips</h3>

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
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Disabled tooltip">
                        <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                    </span>

                    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="disabledToolTips"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"d-inline-block"</span> <span class="na">tabindex=</span><span class="s">"0"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Disabled tooltip"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">style=</span><span class="s">"pointer-events: none;"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledToolTips"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
