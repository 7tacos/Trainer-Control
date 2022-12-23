@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="/"><i class='bx bx-home-alt'></i></a></li>
            <li class="item">Dashboard</li>
            <li class="item">Vertical Alignment</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Vertical Alignment</h3>

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
            <span class="align-baseline">baseline</span>
            <span class="align-top">top</span>
            <span class="align-middle">middle</span>
            <span class="align-bottom">bottom</span>
            <span class="align-text-top">text-top</span>
            <span class="align-text-bottom">text-bottom</span>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicVerticalAlignment"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-baseline"</span><span class="nt">&gt;</span>baseline<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-top"</span><span class="nt">&gt;</span>top<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-middle"</span><span class="nt">&gt;</span>middle<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-bottom"</span><span class="nt">&gt;</span>bottom<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-text-top"</span><span class="nt">&gt;</span>text-top<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"align-text-bottom"</span><span class="nt">&gt;</span>text-bottom<span class="nt">&lt;/span&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicVerticalAlignment"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>With Table Cells:</h3>

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
                <table style="height: 100px;">
                    <tbody>
                        <tr>
                            <td class="align-baseline">baseline</td>
                            <td class="align-top">top</td>
                            <td class="align-middle">middle</td>
                            <td class="align-bottom">bottom</td>
                            <td class="align-text-top">text-top</td>
                            <td class="align-text-bottom">text-bottom</td>
                        </tr>
                    </tbody>
                </table>

                <div class="demo-code-preview" data-label="Code Example">
                    <div class="highlight" id="basicVerticalAlignment2"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">style=</span><span class="s">"height: 100px;"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-baseline"</span><span class="nt">&gt;</span>baseline<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-top"</span><span class="nt">&gt;</span>top<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-middle"</span><span class="nt">&gt;</span>middle<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-bottom"</span><span class="nt">&gt;</span>bottom<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-text-top"</span><span class="nt">&gt;</span>text-top<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"align-text-bottom"</span><span class="nt">&gt;</span>text-bottom<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicVerticalAlignment2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
