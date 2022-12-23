@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Start -->
    <div class="email-compose-content-area mt-20">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content d-flex email-compose-sidebar">
                    <div class="email-compose-menu">
                        <div class="list-group list-group-messages">
                            <a href="#" class="list-group-item active">
                                <i class='bx bx-envelope'></i>
                                Inbox
                                <span class="badge badge-success d-inline-block">5</span>
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bx-paper-plane'></i>
                                Sent
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bx-edit'></i>
                                Drafts
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bx-star'></i>
                                Starred
                                <span class="badge badge-primary d-inline-block">3</span>
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bxs-time-five'></i>
                                Snoozed
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bx-info-square'></i>
                                Spam
                            </a>

                            <a href="#" class="list-group-item">
                                <i class='bx bx-trash'></i>
                                Trash
                                <span class="badge badge-danger d-inline-block">8</span>
                            </a>
                        </div>

                        <label class="d-block list-group-label text-uppercase">Labels</label>

                        <div class="list-group list-group-labels">
                            <a href="#" class="list-group-item">
                                Categories
                            </a>

                            <a href="#" class="list-group-item">
                                Social
                            </a>

                            <a href="#" class="list-group-item">
                                Updates
                            </a>

                            <a href="#" class="list-group-item">
                                Forums
                            </a>

                            <a href="#" class="list-group-item">
                                Promotions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-right">
            <div class="email-compose-area">
                <div class="email-compose-list-wrapper">
                    <h3>New Message</h3>

                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="To">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="CC">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="BCC">
                        </div>

                        <div class="summernote"></div>

                        <div class="form-group mb-0 text-right mt-4">
                            <button type="button" class="btn btn-success mr-1">Save <i class='bx bx-save'></i></button>
                            <button type="button" class="btn btn-success mr-1">Trash <i class='bx bx-trash'></i></button>
                            <button type="submit" class="btn btn-primary">Send <i class='bx bx-send'></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
