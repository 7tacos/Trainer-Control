@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="/"><i class='bx bx-home-alt'></i></a></li>
            <li class="item">Dashboard</li>
            <li class="item">Pagination</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Pagination</h3>

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
            <nav>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="BasicPagination"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#BasicPagination"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>With Icon Pagination</h3>

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
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="withIconPagination"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#withIconPagination"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Disabled and Active Pagination</h3>

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
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="disabledActivePagination"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item active"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledActivePagination"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Sizing Pagination</h3>

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
            <nav>
                <ul class="pagination pagination-lg">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="sizingPaginationLarge"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingPaginationLarge"><i class='bx bx-copy'></i></button>
        </div>
    </div>

    <nav class="mt-4">
        <ul class="pagination pagination-sm">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
        <div class="highlight" id="sizingPaginationSmall"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingPaginationSmall"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Alignment Pagination</h3>

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
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="alignmentPagination"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination justify-content-center"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentPagination"><i class='bx bx-copy'></i></button>
        </div>
    </div>

    <nav class="mt-4">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="alignmentPagination2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination justify-content-end"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item disabled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">tabindex=</span><span class="s">"-1"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"page-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"page-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#alignmentPagination2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
