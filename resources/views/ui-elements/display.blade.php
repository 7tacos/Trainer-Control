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
            <li class="item">Display</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Display property</h3>

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
            <div class="d-inline p-2 bg-primary text-white">d-inline</div>
            <div class="d-inline p-2 bg-dark text-white">d-inline</div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="displayInlineBlock"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline p-2 bg-primary text-white"</span><span class="nt">&gt;</span>d-inline<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline p-2 bg-dark text-white"</span><span class="nt">&gt;</span>d-inline<span class="nt">&lt;/div&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#displayInlineBlock"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <div class="d-block mt-4 p-2 bg-primary text-white">d-inline</div>
            <div class="d-block p-2 bg-dark text-white">d-inline</div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="displayBlock"><pre><code class="language-markup" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-block p-2 bg-primary text-white"</span><span class="nt">&gt;</span>d-inline<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-block p-2 bg-dark text-white"</span><span class="nt">&gt;</span>d-inline<span class="nt">&lt;/div&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#displayBlock"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Hiding elements</h3>

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
            <div class="table-responsive">
                <table class="mb-0 table table-bordered">
                    <thead>
                        <tr>
                            <th>Screen Size</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hidden on all</td>
                            <td><code class="highlighter-rouge">.d-none</code></td>
                        </tr>
                        <tr>
                            <td>Hidden only on xs</td>
                            <td><code class="highlighter-rouge">.d-none .d-sm-block</code></td>
                        </tr>
                        <tr>
                            <td>Hidden only on sm</td>
                            <td><code class="highlighter-rouge">.d-sm-none .d-md-block</code></td>
                        </tr>
                        <tr>
                            <td>Hidden only on md</td>
                            <td><code class="highlighter-rouge">.d-md-none .d-lg-block</code></td>
                        </tr>
                        <tr>
                            <td>Hidden only on lg</td>
                            <td><code class="highlighter-rouge">.d-lg-none .d-xl-block</code></td>
                        </tr>
                        <tr>
                            <td>Hidden only on xl</td>
                            <td><code class="highlighter-rouge">.d-xl-none</code></td>
                        </tr>
                        <tr>
                            <td>Visible on all</td>
                            <td><code class="highlighter-rouge">.d-block</code></td>
                        </tr>
                        <tr>
                            <td>Visible only on xs</td>
                            <td><code class="highlighter-rouge">.d-block .d-sm-none</code></td>
                        </tr>
                        <tr>
                            <td>Visible only on sm</td>
                            <td><code class="highlighter-rouge">.d-none .d-sm-block .d-md-none</code></td>
                        </tr>
                        <tr>
                            <td>Visible only on md</td>
                            <td><code class="highlighter-rouge">.d-none .d-md-block .d-lg-none</code></td>
                        </tr>
                        <tr>
                            <td>Visible only on lg</td>
                            <td><code class="highlighter-rouge">.d-none .d-lg-block .d-xl-none</code></td>
                        </tr>
                        <tr>
                            <td>Visible only on xl</td>
                            <td><code class="highlighter-rouge">.d-none .d-xl-block</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
