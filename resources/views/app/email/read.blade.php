@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Start -->
    <div class="email-read-content-area mt-20">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content d-flex email-sidebar" data-simplebar>
                    <div class="email-read-menu">
                        <button type="button" class="btn btn-primary btn-block compose-btn mb-4"><i class='bx bx-plus'></i> Compose</button>

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
            <div class="email-read-area">
                <div class="email-read-list-wrapper">
                    <div class="email-read-list">
                        <div class="email-read-list-header d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center">
                                <a href="#" class="d-inline-block go-back">
                                    <i class='bx bx-chevron-left'></i>
                                </a>
                                <h3 class="font-weight-bold mb-0">Tips for using your new inbox <span class="badge bg-success ml-1">Inbox</span></h3>
                            </div>

                            <div class="header-right d-flex align-items-center">
                                <ul class="list-inline m-0 d-flex">
                                    <li class="list-inline-item email-delete">
                                        <button type="button" class="btn-icon">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <button type="button" class="btn-icon">
                                            <i class='bx bx-envelope'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-info-square'></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit'></i> Drafts
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-info-square'></i> Spam
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-purchase-tag-alt'></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-duplicate'></i> Categories
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bxs-user-detail'></i> Social
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-up-arrow'></i> Updates
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-chat'></i> Forums
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trending-up'></i> Promotions
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="email-read-scroll-area" data-simplebar>
                            <ul class="list-wrapper">
                                <li class="email-read-list-item">
                                    <div class="email-read-list-detail">
                                        <div class="user-information">
                                            <img src="{{ asset('assets/img/user1.jpg') }}" alt="image">
                                            <span class="name d-block">Steven Smith <span class="email d-inline-block">(smith@gmail.com)</span></span>
                                            <p class="mb-0 to">to Luis Gustavo</p>
                                        </div>

                                        <div class="email-information d-flex align-items-center">
                                            <span class="date d-block">01:50 PM</span>

                                            <span class="favorite d-block">
                                                <i class='bx bx-star'></i>
                                            </span>

                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-reply'></i> Reply
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-reply-all'></i> Reply to all
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-caret-right'></i> Forward
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-trash'></i> Delete
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-printer'></i> Print
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="email-read-list-content">
                                        <p class="font-weight-bold">Dear Sir/Ma'am,</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

                                        <div class="email-read-list-footer">
                                            <label class="font-weight-bold d-block mb-2 text-uppercase">Attached Files</label>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/psd.png') }}" width="25" alt="image">
                                                        <span class="d-inline-block ml-2">fiva-design.psd</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/sketch.png') }}" width="25" alt="image">
                                                        <span class="d-inline-block ml-2">fiva-design.sketch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="email-read-list-item">
                                    <div class="email-read-list-detail">
                                        <div class="user-information">
                                            <img src="{{ asset('assets/img/user2.jpg') }}" alt="image">
                                            <span class="name d-block">Sarah Taylor <span class="email d-inline-block">(sarah@gmail.com)</span></span>
                                            <p class="mb-0 to">to Luis Gustavo</p>
                                        </div>

                                        <div class="email-information d-flex align-items-center">
                                            <span class="date d-block">01:50 PM</span>

                                            <span class="favorite d-block">
                                                <i class='bx bx-star'></i>
                                            </span>

                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-reply'></i> Reply
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-reply-all'></i> Reply to all
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-caret-right'></i> Forward
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-trash'></i> Delete
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class='bx bx-printer'></i> Print
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="email-read-list-content">
                                        <p class="font-weight-bold">Dear Sir/Ma'am,</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

                                        <div class="email-read-list-footer">
                                            <label class="font-weight-bold d-block mb-2 text-uppercase">Attached Files</label>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/psd.png') }}" width="25" alt="image">
                                                        <span class="d-inline-block ml-2">fiva-design.psd</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/img/sketch.png') }}" width="25" alt="image">
                                                        <span class="d-inline-block ml-2">fiva-design.sketch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="email-reply-list-item">
                                    <a href="#" class="d-inline-block"><i class='bx bx-reply'></i> Reply</a>
                                    <a href="#" class="d-inline-block"><i class='bx bx-reply-all'></i> Reply All</a>
                                    <a href="#" class="d-inline-block"><i class='bx bx-fast-forward'></i> Forward</a>
                                </li>
                            </ul>
                        </div>

                        <div class="email-list-footer d-flex justify-content-between align-items-center">
                            <p class="mb-0">Show: 1 - 10 of 590</p>

                            <div class="email-pagination-btn">
                                <button type="submit" class="email-pagination-prev d-inline-block"><i class='bx bx-arrow-to-left'></i></button>
                                <button type="submit" class="email-pagination-next d-inline-block"><i class='bx bx-arrow-to-right'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
