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
            <li class="item">Forms</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Forms</h3>

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
            <form>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="basicForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>We'll never share your email with anyone else.<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"exampleCheck1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"exampleCheck1"</span><span class="nt">&gt;</span>Check me out<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#basicForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Form Controls Forms</h3>

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
            <form>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label>Example select</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Example multiple select</label>
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Example textarea</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="formControlsFroms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"name@example.com"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Example select<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Example multiple select<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Example textarea<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#formControlsFroms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Sizing Forms</h3>

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
            <form>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Default input">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="sizingForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".form-control-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <form class="mt-5">
                <div class="form-group">
                    <select class="form-control form-control-lg">
                        <option>Large select</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control form-control-sm">
                        <option>Small select</option>
                    </select>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="sizingForms2"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-lg"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>Large select<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>Default select<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control form-control-sm"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>Small select<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#sizingForms2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Readonly Forms</h3>

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
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="readonlyForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input here..."</span> <span class="na">readonly</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#readonlyForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Readonly Plain Text Forms</h3>

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
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="readonlyPlainTextForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">readonly</span> <span class="na">class=</span><span class="s">"form-control-plaintext"</span> <span class="na">id=</span><span class="s">"staticEmail"</span> <span class="na">value=</span><span class="s">"email@example.com"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#readonlyPlainTextForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Range Inputs Forms</h3>

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
            <form>
                <div class="form-group">
                    <label>Example Range input</label>
                    <input type="range" class="form-control-range" id="formControlRange">
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="rangeInputsForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span><span class="nt">&gt;</span>Example Range input<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"range"</span> <span class="na">class=</span><span class="s">"form-control-range"</span> <span class="na">id=</span><span class="s">"formControlRange"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#rangeInputsForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Checkboxes and Radios Forms</h3>

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
            <form>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                    <label class="form-check-label" for="defaultCheck2">
                        Disabled checkbox
                    </label>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="checkboxesRadiosForms2"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">id=</span><span class="s">"defaultCheck1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"defaultCheck1"</span><span class="nt">&gt;</span>
            Default checkbox
        <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">id=</span><span class="s">"defaultCheck2"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"defaultCheck2"</span><span class="nt">&gt;</span>
            Disabled checkbox
        <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                <button type="button" class="btn btn-clipboard" data-clipboard-target="#checkboxesRadiosForms2"><i class='bx bx-copy'></i></button>
            </div>
        </div>

        <form class="mt-5">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Second default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                </label>
            </div>
        </form>

        <div class="demo-code-preview" data-label="Code Example">
            <div class="highlight" id="checkboxesRadiosForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"exampleRadios1"</span><span class="nt">&gt;</span>
            Default radio
        <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"exampleRadios2"</span><span class="nt">&gt;</span>
            Second default radio
        <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"exampleRadios3"</span><span class="nt">&gt;</span>
            Disabled radio
        <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#checkboxesRadiosForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Inline Checkboxes and Radios Forms</h3>

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
            <form>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="inlineCheckboxesRadiosForms1"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineCheckbox1"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineCheckbox2"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineCheckbox3"</span><span class="nt">&gt;</span>3 (disabled)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

            <button type="button" class="btn btn-clipboard" data-clipboard-target="#inlineCheckboxesRadiosForms1"><i class='bx bx-copy'></i></button>
        </div>
    </div>

        <form class="mt-5">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
    </form>

    <div class="demo-code-preview" data-label="Code Example">
        <div class="highlight" id="inlineCheckboxesRadiosForms2"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineRadio1"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineRadio2"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"inlineRadio3"</span><span class="nt">&gt;</span>3 (disabled)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#inlineCheckboxesRadiosForms2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Without Labels Checkboxes and Radios Forms</h3>

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
            <form>
                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1">
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="withoutLabelsCheckboxesRadiosForms"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input position-static"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input position-static"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#withoutLabelsCheckboxesRadiosForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Forms Grid</h3>

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
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="formsGrid1"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First name"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Last name"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#formsGrid1"><i class='bx bx-copy'></i></button>
                </div>
            </div>

            <form class="mt-5">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label>Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label>State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="formsGrid2"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail4"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword4"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress"</span><span class="nt">&gt;</span>Address<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress"</span> <span class="na">placeholder=</span><span class="s">"1234 Main St"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress2"</span><span class="nt">&gt;</span>Address 2<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress2"</span> <span class="na">placeholder=</span><span class="s">"Apartment, studio, or floor"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputCity"</span><span class="nt">&gt;</span>City<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputCity"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-4"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputState"</span><span class="nt">&gt;</span>State<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"inputState"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Choose...<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;option&gt;</span>...<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputZip"</span><span class="nt">&gt;</span>Zip<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputZip"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"gridCheck"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"gridCheck"</span><span class="nt">&gt;</span>
                Check me out
            <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#formsGrid2"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Forms Row</h3>

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
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="formsRow"><pre><code><span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First name"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Last name"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#formsRow"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Horizontal Forms</h3>

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
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                                </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-2">Checkbox</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="horizontalForms"><pre><code><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;legend</span> <span class="na">class=</span><span class="s">"col-form-label col-sm-2 pt-0"</span><span class="nt">&gt;</span>Radios<span class="nt">&lt;/legend&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"gridRadios1"</span><span class="nt">&gt;</span>
            First radio
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"gridRadios2"</span><span class="nt">&gt;</span>
            Second radio
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gridRadios"</span> <span class="na">id=</span><span class="s">"gridRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"gridRadios3"</span><span class="nt">&gt;</span>
            Third disabled radio
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-2"</span><span class="nt">&gt;</span>Checkbox<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"gridCheck1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"gridCheck1"</span><span class="nt">&gt;</span>
          Example checkbox
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>

                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#horizontalForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Supported Elements Forms</h3>

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
            <form class="was-validated">
                <div class="mb-3">
                    <label for="validationTextarea">Textarea</label>
                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>

                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>

                <div class="form-group">
                    <select class="custom-select" required>
                        <option value="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </form>

            <div class="demo-code-preview" data-label="Code Example">
                <div class="highlight" id="supportedElementsForms"><pre><code><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"was-validated"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mb-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"validationTextarea"</span><span class="nt">&gt;</span>Textarea<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control is-invalid"</span> <span class="na">id=</span><span class="s">"validationTextarea"</span> <span class="na">placeholder=</span><span class="s">"Required example textarea"</span> <span class="na">required</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invalid-feedback"</span><span class="nt">&gt;</span>
      Please enter a message in the textarea.
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-control custom-checkbox mb-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">id=</span><span class="s">"customControlValidation1"</span> <span class="na">required</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control-label"</span> <span class="na">for=</span><span class="s">"customControlValidation1"</span><span class="nt">&gt;</span>Check this custom checkbox<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invalid-feedback"</span><span class="nt">&gt;</span>Example invalid feedback text<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-control custom-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">id=</span><span class="s">"customControlValidation2"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">required</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control-label"</span> <span class="na">for=</span><span class="s">"customControlValidation2"</span><span class="nt">&gt;</span>Toggle this custom radio<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-control custom-radio mb-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">class=</span><span class="s">"custom-control-input"</span> <span class="na">id=</span><span class="s">"customControlValidation3"</span> <span class="na">name=</span><span class="s">"radio-stacked"</span> <span class="na">required</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-control-label"</span> <span class="na">for=</span><span class="s">"customControlValidation3"</span><span class="nt">&gt;</span>Or toggle this other custom radio<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invalid-feedback"</span><span class="nt">&gt;</span>More example invalid feedback text<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span> <span class="na">required</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>Open this select menu<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"1"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invalid-feedback"</span><span class="nt">&gt;</span>Example invalid custom select feedback<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"custom-file"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"custom-file-input"</span> <span class="na">id=</span><span class="s">"validatedCustomFile"</span> <span class="na">required</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-file-label"</span> <span class="na">for=</span><span class="s">"validatedCustomFile"</span><span class="nt">&gt;</span>Choose file...<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invalid-feedback"</span><span class="nt">&gt;</span>Example invalid custom file feedback<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
                    <button type="button" class="btn btn-clipboard" data-clipboard-target="#supportedElementsForms"><i class='bx bx-copy'></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
