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
            <li class="item">Navbar</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
<div class="card-header d-flex justify-content-between align-items-center">
    <h3>Base Navbar</h3>

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicBaseNavbar"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarSupportedContent"</span> <span class="na">aria-controls=</span><span class="s">"navbarSupportedContent"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarSupportedContent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">id=</span><span class="s">"navbarDropdown"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          Dropdown
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline my-2 my-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBaseNavbar"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

<div class="card mb-30">
<div class="card-header d-flex justify-content-between align-items-center">
    <h3>Brand</h3>

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
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
    </nav>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light mt-3">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicBaseNavbarBrand"><pre><code class="language-markup" data-lang="html"><span class="c">&lt;!-- As a link --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="c">&lt;!-- As a heading --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-brand mb-0 h1"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBaseNavbarBrand"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Nav</h3>

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicBaseNavbarNav"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNav"</span> <span class="na">aria-controls=</span><span class="s">"navbarNav"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBaseNavbarNav"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Forms</h3>

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
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicBaseNavbarForms"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBaseNavbarForms"><i class='bx bx-copy'></i></button>
            </div>
        </div>
    </div>
</div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Text</h3>

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </nav>

        <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicBaseNavbarText"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar w/ text<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarText"</span> <span class="na">aria-controls=</span><span class="s">"navbarText"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarText"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
      Navbar text with an inline element
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBaseNavbarText"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Color Schemes</h3>

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
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark mt-3 bg-secondary">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-success mt-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark mt-3 bg-danger">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-warning mt-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor05">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-info mt-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor06">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor08">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarColors"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-primary"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-secondary"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-success"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-danger"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-warning"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-info"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-dark"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarColors"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Placement</h3>

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
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Default</a>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarDefault"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarDefault"><i class='bx bx-copy'></i></button>
        </div>
    </div>

    <nav class="navbar navbar-light bg-light mt-4">
        <a class="navbar-brand" href="#">Fixed Top</a>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarFixedTop"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-top navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarFixedTop"><i class='bx bx-copy'></i></button>
        </div>
    </div>

    <nav class="navbar navbar-light bg-light mt-4">
        <a class="navbar-brand" href="#">Fixed Bottom</a>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarFixedBottom"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-bottom navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarFixedBottom"><i class='bx bx-copy'></i></button>
        </div>
    </div>

    <nav class="navbar navbar-light bg-light mt-4">
        <a class="navbar-brand" href="#">Sticky Top</a>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarStickyTop"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar sticky-top navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarStickyTop"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>External Content</h3>

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
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h5 class="text-white h4">Collapsed content</h5>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler cursor-pointer" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="basicNavbarExternalContent"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pos-f-t"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"navbarToggleExternalContent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-dark p-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"text-white h4"</span><span class="nt">&gt;</span>Collapsed content<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Toggleable via the navbar brand.<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-dark"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarToggleExternalContent"</span> <span class="na">aria-controls=</span><span class="s">"navbarToggleExternalContent"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicNavbarExternalContent"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
