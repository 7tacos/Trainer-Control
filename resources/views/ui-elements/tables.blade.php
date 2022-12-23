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
            <li class="item">Tables</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Table Light</h3>

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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicTableExample"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicTableExample"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Table Head Options</h3>

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
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicTableHeadOptions"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-dark"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>

<span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-light"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicTableHeadOptions"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Striped Rows</h3>

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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicStripedRowsTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicStripedRowsTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Bordered Table</h3>

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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicBorderedTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBorderedTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Borderless Table</h3>

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
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicBorderlessTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-borderless"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicBorderlessTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Hoverable Rows</h3>

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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicHoverTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicHoverTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Small Table</h3>

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
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicSMTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicSMTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Contextual Classes</h3>

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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th scope="row">Active</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <th scope="row">Default</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Primary</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Secondary</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">Success</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">Danger</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-warning">
                        <th scope="row">Warning</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">Info</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-light">
                        <th scope="row">Light</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr class="table-dark">
                        <th scope="row">Dark</th>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </tbody>
            </table>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicContextualClassesTable"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-light"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-dark"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-light"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-dark"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicContextualClassesTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Responsive Tables</h3>

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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicResponsiveTable"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
        ...
    <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicResponsiveTable"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
