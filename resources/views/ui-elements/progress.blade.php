@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="/"><i class='bx bx-home-alt'></i></a></li>
            <li class="item">Dashboard</li>
            <li class="item">Progress</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Default Progress</h3>

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
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="defaultProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"0"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>With Labels Progress</h3>

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
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="withLabelsProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 58%;"</span> <span class="na">aria-valuenow=</span><span class="s">"58"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;</span>25%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#withLabelsProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Height Progress</h3>

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
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress" style="height: 15px;">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress" style="height: 20px;">
                    <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="heightProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">style=</span><span class="s">"height: 1px;"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%;"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">style=</span><span class="s">"height: 20px;"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 99%;"</span> <span class="na">aria-valuenow=</span><span class="s">"99"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#heightProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Backgrounds Color Progress</h3>

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
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="bgColorProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#bgColorProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Multiple Bars Progress</h3>

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
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="multipleBarsProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 15%"</span> <span class="na">aria-valuenow=</span><span class="s">"15"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 30%"</span> <span class="na">aria-valuenow=</span><span class="s">"30"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 20%"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#multipleBarsProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Striped Progress</h3>

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
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="stripedProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 10%"</span> <span class="na">aria-valuenow=</span><span class="s">"10"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span>
    <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span>
    <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span>
    <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span>
    <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                        <button type="button" class="btn btn-clipboard" data-clipboard-target="#stripedProgress"><i class='bx bx-copy'></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Animated Progress</h3>

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
                <div class="radius-0 progress">
                    <div role="progressbar" class="progress-bar bg-primary progress-bar-animated progress-bar-striped" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                </div>
                <div class="radius-0 progress">
                    <div role="progressbar" class="progress-bar bg-success progress-bar-animated progress-bar-striped" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                <div class="radius-0 progress">
                    <div role="progressbar" class="progress-bar bg-info progress-bar-animated progress-bar-striped" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                </div>
                <div class="radius-0 progress">
                    <div role="progressbar" class="progress-bar bg-warning progress-bar-animated progress-bar-striped" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                </div>
                <div class="radius-0 progress">
                    <div role="progressbar" class="progress-bar bg-danger progress-bar-animated progress-bar-striped" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                </div>

                <div class="demo-code-preview" data-label="Code Example">
                        <div class="highlight" id="animatedProgress"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-primary progress-bar-animated progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 10%"</span> <span class="na">aria-valuenow=</span><span class="s">"10"</span>
    <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success progress-bar-animated progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span>
    <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info progress-bar-animated progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span>
    <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-warning progress-bar-animated progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span>
    <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-danger progress-bar-animated progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span>
    <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#animatedProgress"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
