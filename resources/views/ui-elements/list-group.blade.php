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
            <li class="item">List Group</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic List Group</h3>

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
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicListGroup"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Active Items List Group</h3>

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
            <ul class="list-group">
                <li class="list-group-item active">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="activeItemsListGroup"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeItemsListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Disabled Items List Group</h3>

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
            <ul class="list-group">
                <li class="list-group-item disabled">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="disabledItemsListGroup"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item disabled"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledItemsListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Links and Buttons List Group</h3>

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
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Cras justo odio
                </a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="linksButtonsListGroup2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
        Cras justo odio
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action disabled"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#linksButtonsListGroup2"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <div class="list-group mt-4">
                <button type="button" class="list-group-item list-group-item-action active">
                    Cras justo odio
                </button>
                <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="linksButtonsListGroup2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
        Cras justo odio
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#linksButtonsListGroup2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Flush List Group</h3>

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
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-0">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#customContentListGroup2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Contextual Classes List Group</h3>

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
            <ul class="list-group">
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                <li class="list-group-item list-group-item-success">This is a success list group item</li>
                <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                <li class="list-group-item list-group-item-info">This is a info list group item</li>
                <li class="list-group-item list-group-item-light">This is a light list group item</li>
                <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="contextualClassesListGroup"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-primary"</span><span class="nt">&gt;</span>This is a primary list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-secondary"</span><span class="nt">&gt;</span>This is a secondary list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-success"</span><span class="nt">&gt;</span>This is a success list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-danger"</span><span class="nt">&gt;</span>This is a danger list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-warning"</span><span class="nt">&gt;</span>This is a warning list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-info"</span><span class="nt">&gt;</span>This is a info list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-light"</span><span class="nt">&gt;</span>This is a light list group item<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-dark"</span><span class="nt">&gt;</span>This is a dark list group item<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#contextualClassesListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>With Badges List Group</h3>

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
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cras justo odio
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi leo risus
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="withBadgesListGroup"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
        Cras justo odio
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
        Dapibus ac facilisis in
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
        Morbi leo risus
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#withBadgesListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Custom Content List Group</h3>

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
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h4 class="mb-2 text-white">List group item heading</h4>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4 class="mb-2">List group item heading</h4>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4 class="mb-2">List group item heading</h4>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="customContentListGroup2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;small&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;small&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#customContentListGroup2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Custom Content List Group</h3>

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
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">Home</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab">Profile</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Messages</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">Settings</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel">
                            Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel">
                            Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel">
                            Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel">
                            Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.
                        </div>
                    </div>
                </div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="customContentListGroup">
<pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span> <span class="na">id=</span><span class="s">"list-tab"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span> <span class="na">id=</span><span class="s">"list-home-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-home"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"home"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-profile-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-profile"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-messages-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-messages"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"messages"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-settings-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-settings"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"settings"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span> <span class="na">id=</span><span class="s">"nav-tabContent"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade show active"</span> <span class="na">id=</span><span class="s">"list-home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-home-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-profile-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-messages-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-settings-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#customContentListGroup"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
