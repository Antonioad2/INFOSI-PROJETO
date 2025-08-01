@extends('applications.email.layout.main')

@section('content-email')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-email">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Email</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#composeMail">
                            <i class="feather-plus me-2"></i>
                            <span>Compose</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0);">
                                    <span class="d-flex align-items-center">
                                        <i class="feather-inbox me-3"></i>
                                        <span>Inbox</span>
                                    </span>
                                    <span class="badge bg-soft-primary text-primary">5</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-send"></i>
                                    <span>Send</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-edit"></i>
                                    <span>Draft</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0);">
                                    <span class="d-flex align-items-center">
                                        <i class="feather-inbox me-3"></i>
                                        <span>Spam</span>
                                    </span>
                                    <span class="badge bg-soft-danger text-danger">7</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-trash-2"></i>
                                    <span>Delete</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Label</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-primary rounded-circle"></span>
                                    <span>Work</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-warning rounded-circle"></span>
                                    <span>Partnership</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-teal rounded-circle"></span>
                                    <span>In Progress</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-danger rounded-circle"></span>
                                    <span>Personal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-success rounded-circle"></span>
                                    <span>Payments</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Filter</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-star"></i>
                                    <span>Favorite</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-bell"></i>
                                    <span>Snoozed</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0);">
                                    <span class="d-flex align-items-center">
                                        <i class="feather-info me-3"></i>
                                        <span>Important</span>
                                    </span>
                                    <span class="badge bg-soft-success text-success">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header bg-white sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div class="custom-control custom-checkbox ms-1 me-2">
                                <input type="checkbox" class="custom-control-input" id="checkAll" data-checked-action="show-options">
                                <label class="custom-control-label" for="checkAll"></label>
                            </div>
                            <div class="action-list-items">
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-eye me-3"></i>
                                                <span>Read</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-eye-off me-3"></i>
                                                <span>Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-star me-3"></i>
                                                <span>Starred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-shield-off me-3"></i>
                                                <span>Unstarred</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-clock me-3"></i>
                                                <span>Snooze</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-check-circle me-3"></i>
                                                <span>Add Tasks</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-archive me-3"></i>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-alert-octagon me-3"></i>
                                                <span>Report Spam</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="feather-trash-2 me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tags">
                                            <i class="feather-tag"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Office" checked="checked">
                                                <label class="custom-control-label c-pointer" for="Office">Office</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Family">
                                                <label class="custom-control-label c-pointer" for="Family">Family</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Friend" checked="checked">
                                                <label class="custom-control-label c-pointer" for="Friend">Friend</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Marketplace">
                                                <label class="custom-control-label c-pointer" for="Marketplace"> Marketplace </label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Development">
                                                <label class="custom-control-label c-pointer" for="Development"> Development </label>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span>Create Tag</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-tag me-3"></i>
                                            <span>Manages Tag</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Labels">
                                            <i class="feather-folder-plus"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Updates">
                                                <label class="custom-control-label c-pointer" for="Updates">Updates</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Socials">
                                                <label class="custom-control-label c-pointer" for="Socials">Socials</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Primary" checked="checked">
                                                <label class="custom-control-label c-pointer" for="Primary">Primary</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Forums">
                                                <label class="custom-control-label c-pointer" for="Forums">Forums</label>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="Promotions" checked="checked">
                                                <label class="custom-control-label c-pointer" for="Promotions"> Promotions </label>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span>Create Label</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-folder-plus me-3"></i>
                                            <span>Manages Label</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span>Add to Group</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-user-plus me-3"></i>
                                            <span>Add to Contact</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Make as Unread</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Filter Messages</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-archive me-3"></i>
                                            <span>Make as Archive</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Report phishing</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-download me-3"></i>
                                            <span>Download Messages</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="d-none d-sm-flex">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Refresh">
                                    <i class="feather-refresh-cw"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="d-none d-sm-flex">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Snooze">
                                    <i class="feather-bell"></i>
                                </div>
                            </a>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div class="hstack">
                                    <a href="javascript:void(0)" class="search-form-open-toggle">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search">
                                            <i class="feather-search"></i>
                                        </div>
                                    </a>
                                    <form class="search-form" style="display: none">
                                        <div class="search-form-inner">
                                            <a href="javascript:void(0)" class="search-form-close-toggle">
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Back">
                                                    <i class="feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="emailSearch" placeholder="Search..." autocomplete="off">
                                        </div>
                                    </form>
                                </div>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="btn btn-light-brand btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,23" aria-expanded="false">1-15 of 762 </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Replied</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ascending</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Descending</a></li>
                                    </ul>
                                </div>
                                <div class="hstack d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="d-flex me-1">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Previous">
                                            <i class="feather-chevron-left"></i>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex me-1">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Next">
                                            <i class="feather-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body p-0">
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_1"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Alexandra Della</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Friends</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Ruhul Hasan, log into Facebook with one click</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_2" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_2"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Green Cute</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Update</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Latest news updates on your subscribed channel</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_3" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_3"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Marianne Audrey</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Primary</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Flatlogic Contact Form: I am requesting to submit a template</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_4" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_4"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Alexandra Della</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Friends</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Ruhul Hasan, log into Facebook with one click</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_5" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_5"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Green Cute</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Update</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Latest news updates on your subscribed channel</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_6" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_6"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Marianne Audrey</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Primary</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Flatlogic Contact Form: I am requesting to submit a template</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_7" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_7"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Alexandra Della</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Friends</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Ruhul Hasan, log into Facebook with one click</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_8" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_8"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Green Cute</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Update</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Latest news updates on your subscribed channel</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_9" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_9"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Marianne Audrey</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Primary</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Flatlogic Contact Form: I am requesting to submit a template</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-items">
                            <!--! [item-meta] !-->
                            <div class="d-flex wd-80 gap-4 ms-1 item-meta">
                                <div class="item-checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_10" data-checked-action="show-options">
                                        <label class="custom-control-label" for="checkBox_10"></label>
                                    </div>
                                </div>
                                <div class="item-favorite">
                                    <a href="javascript:void(0)">
                                        <i class="feather-star fs-12"></i>
                                    </a>
                                </div>
                            </div>
                            <!--! [item-info] !-->
                            <div class="d-flex align-items-center gap-4 w-100 item-info" data-view-toggle="details">
                                <a href="javascript:void(0)" class="hstack gap-3 wd-200 item-user">
                                    <div class="avatar-image avatar-md">
                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-truncate-1-line mb-0">Alexandra Della</div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-md-block">
                                    <div class="w-100 text-truncate-1-line item-desc">
                                        <span class="badge bg-gray-200 text-dark me-2">Friends</span>
                                        <i class="feather-link-2 fs-12"></i>
                                        <span class="ms-3">Ruhul Hasan, log into Facebook with one click</span>
                                    </div>
                                </a>
                            </div>
                            <!--! [item-date] !-->
                            <div class="d-flex align-items-center justify-content-end wd-150 gap-3 item-data">
                                <div class="fs-11 fw-medium text-muted text-uppercase d-none d-sm-block item-time">26 May, 2023</div>
                                <div class="item-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 28">
                                            <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item" data-view-toggle="details">
                                                <i class="feather-eye me-3"></i>
                                                <span>View</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-corner-up-right me-3"></i>
                                                <span>Reply</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-fast-forward me-3"></i>
                                                <span>Forward</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-repeat me-3"></i>
                                                <span>Reply All</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailDeleteMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white d-flex align-items-center justify-content-center justify-content-md-between">
                            <div class="content-sidebar-footer wd-300 d-none d-md-block">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h2 class="fs-11 tx-spacing-1 mb-0">Storage</h2>
                                    <div class="fs-11 text-muted">43.5GB used of <span class="fw-bold text-dark">100GB</span></div>
                                </div>
                                <div class="progress ht-3">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"></div>
                                </div>
                            </div>
                            <div class="hstack gap-2 fs-11">
                                <a href="javascript:void(0);">Terms</a>
                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle"></span>
                                <a href="javascript:void(0);">Privacy</a>
                                <span class="wd-3 ht-3 bg-gray-500 rounded-circle"></span>
                                <a href="javascript:void(0);">Policies</a>
                            </div>
                        </div>
                    </div>
                    <div class="items-details" data-scrollbar-target="#psScrollbarInit">
                        <div class="items-details-header bg-white sticky-top">
                            <div class="d-flex align-items-center">
                                <div class="avatar-text avatar-md item-info-close" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Back">
                                    <i class="feather-arrow-left"></i>
                                </div>
                                <span class="vr mx-4"></span>
                                <div class="d-flex align-items-center">
                                    <h4 class="fw-bold mb-0 text-dark text-truncate-1-line">[Update] Latest news updates on your subscribed channel</h4>
                                    <span class="vr mx-2 d-none d-sm-block"></span>
                                    <span class="d-none d-sm-inline-flex gap-2">
                                        <span class="badge bg-soft-primary text-primary">Product</span>
                                        <span class="badge bg-soft-success text-success">Design</span>
                                        <span class="badge bg-soft-danger text-danger">Office</span>
                                    </span>
                                </div>
                            </div>
                            <div class="ms-4 d-none d-md-flex gap-1">
                                <a href="javascript:void(0)" class="d-flex me-1 successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Print">
                                        <i class="feather-printer"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex me-1 successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Snooze">
                                        <i class="feather-bell"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex me-1 successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Favorite">
                                        <i class="feather-star"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex me-1 successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Flag">
                                        <i class="feather-flag"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex me-1" data-action-target="#mailDeleteMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Delete">
                                        <i class="feather-trash-2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="items-details-body">
                            <div class="accordion">
                                <!--! BEGIN: [accordion-item] !-->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-image avatar-md">
                                                    <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <h2 class="fs-13 mb-1 text-truncate-1-line">Alexandra Della</h2>
                                                    <div class="fs-12 fw-normal text-muted text-truncate-1-line" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content='<ul class="list-unstyled mb-0">
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> from: </span>
																	<span class="fs-12 d-inline-block text-dark"> no-reply@google.com </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> to: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> bcc: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> date: </span>
																	<span class="fs-12 d-inline-block text-dark">Oct 18, 2022, 12:01 PM</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> subject: </span>
																	<span class="fs-12 d-inline-block text-dark"> Security alert for Account </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> mailed: </span>
																	<span class="fs-12 d-inline-block text-dark">gaia.bounces.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> singed: </span>
																	<span class="fs-12 d-inline-block text-dark">accounts.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> security: </span>
																	<span class="fs-12 d-inline-block text-dark"> Standard encryption (TLS) </span>
																</li>
															</ul>'>
                                                        <span>to: mar.audrey@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-flex align-items-center gap-3 position-absolute" style="top: 25px; right: 50px">
                                                <div class="fs-10 fw-medium text-muted text-uppercase item-time d-none d-sm-block">27 May, 2023</div>
                                                <div class="c-pointer" data-bs-toggle="collapse" data-bs-target="#collapseMessageEditor">
                                                    <i class="feather-repeat fs-12"></i>
                                                </div>
                                                <div class="text-warning c-pointer">
                                                    <i class="feather-star fs-12"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p>Hey, Audrey!</p>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English.</p>
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.</p>
                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            <br>
                                            <p class="mb-0">Looking forward to hearing from you!</p>
                                            <div class="fs-12">Thanks by, <a href="javascript:void(0);">Alex</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--! END: [accordion-item] !-->
                                <!--! BEGIN: [accordion-item] !-->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-image avatar-md">
                                                    <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <h2 class="fs-13 mb-1 text-truncate-1-line">Marianne Audrey</h2>
                                                    <div class="fs-12 fw-normal text-muted text-truncate-1-line" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content='<ul class="list-unstyled mb-0">
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> from: </span>
																	<span class="fs-12 d-inline-block text-dark"> no-reply@google.com </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> to: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> bcc: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> date: </span>
																	<span class="fs-12 d-inline-block text-dark">Oct 18, 2022, 12:01 PM</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> subject: </span>
																	<span class="fs-12 d-inline-block text-dark"> Security alert for Account </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> mailed: </span>
																	<span class="fs-12 d-inline-block text-dark">gaia.bounces.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> singed: </span>
																	<span class="fs-12 d-inline-block text-dark">accounts.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> security: </span>
																	<span class="fs-12 d-inline-block text-dark"> Standard encryption (TLS) </span>
																</li>
															</ul>'>
                                                        <span>to: alex.della@outlook.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-flex align-items-center gap-3 position-absolute" style="top: 25px; right: 50px">
                                                <div class="fs-10 fw-medium text-muted text-uppercase item-time d-none d-sm-block">25 May, 2023</div>
                                                <div class="c-pointer" data-bs-toggle="collapse" data-bs-target="#collapseMessageEditor">
                                                    <i class="feather-repeat fs-12"></i>
                                                </div>
                                                <div class="text-warning c-pointer">
                                                    <i class="feather-star fs-12"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p>Hey, Alex!</p>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English.</p>
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.</p>
                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            <br>
                                            <p class="mb-0">Looking forward to hearing from you!</p>
                                            <div class="fs-12">Thanks by, <a href="javascript:void(0);">Marianne Audrey</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--! END: [accordion-item] !-->
                                <!--! BEGIN: [accordion-item] !-->
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-image avatar-md">
                                                    <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <h2 class="fs-13 mb-1 text-truncate-1-line">Alexandra Della</h2>
                                                    <div class="fs-12 fw-normal text-muted text-truncate-1-line" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content='<ul class="list-unstyled mb-0">
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> from: </span>
																	<span class="fs-12 d-inline-block text-dark"> no-reply@google.com </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> to: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> bcc: </span>
																	<span class="fs-12 d-inline-block text-dark">wrapcode.info@gmail.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> date: </span>
																	<span class="fs-12 d-inline-block text-dark">Oct 18, 2022, 12:01 PM</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> subject: </span>
																	<span class="fs-12 d-inline-block text-dark"> Security alert for Account </span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> mailed: </span>
																	<span class="fs-12 d-inline-block text-dark">gaia.bounces.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> singed: </span>
																	<span class="fs-12 d-inline-block text-dark">accounts.google.com</span>
																</li>
																<li class="mb-1">
																	<span class="d-inline-block wd-50 text-muted text-end fs-12 me-3"> security: </span>
																	<span class="fs-12 d-inline-block text-dark"> Standard encryption (TLS) </span>
																</li>
															</ul>'>
                                                        <span>to: mar.audrey@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-flex align-items-center gap-3 position-absolute" style="top: 25px; right: 50px">
                                                <div class="fs-10 fw-medium text-muted text-uppercase item-time d-none d-sm-block">26 May, 2023</div>
                                                <div class="c-pointer" data-bs-toggle="collapse" data-bs-target="#collapseMessageEditor">
                                                    <i class="feather-repeat fs-12"></i>
                                                </div>
                                                <div class="text-warning c-pointer">
                                                    <i class="feather-star fs-12"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p>Hello, Marianne!</p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui pariatur?</p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui pariatur? adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui pariatur?</p>
                                            <p>
                                                Neque porro quisquam est,
                                                <strong>
                                                    <em>qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</em>
                                                </strong>
                                                , sed quia non numquam eius modi tempora incidunt ut consectetur, adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Quis autem vel eum iure reprehenderit qui pariatur?
                                            </p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt utconsectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iurereprehenderit qui pariatur?</p>
                                            <br>
                                            <p class="mb-0">Looking forward to hearing from you!</p>
                                            <div class="fs-12">Thanks by, <a href="javascript:void(0);">Alexandra Della</a></div>
                                            <hr class="border-dashed">
                                            <!--! BEGIN: [attachment-section] !-->
                                            <div class="attachment-section">
                                                <p class="text-muted mb-4"><i class="bi bi-paperclip fs-12"></i><span>Attachments</span> <span>(5+) -</span> <a href="javascript:void(0)" class="font-bld file-download">Download all</a> | <a href="javascript:void(0);" class="font-bld">View all</a></p>
                                                <div class="row">
                                                    <!--! BEGIN: [single-attachment-item] !-->
                                                    <div class="col-xxl-6 col-xl-12 col-md-6">
                                                        <div class="mb-4 text-dark d-flex align-items-center justify-content-between border rounded-3">
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                                                    <img src="assets/images/file-icons/zip.png" class="img-fluid" alt="image">
                                                                </a>
                                                                <div class="d-block ms-3">
                                                                    <a href="javascript:void(0)" class="fs-13 font-bld text-truncate-1-line">Projects.zip</a>
                                                                    <small class="fw-normal text-muted">40.65/MB</small>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center p-3 border-start">
                                                                <a href="javascript:void(0)" class="avatar-text file-download">
                                                                    <i class="feather-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! BEGIN: [single-attachment-item] !-->
                                                    <div class="col-xxl-6 col-xl-12 col-md-6">
                                                        <div class="mb-4 text-dark d-flex align-items-center justify-content-between border rounded-3">
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                                                    <img src="assets/images/file-icons/png.png" class="img-fluid" alt="image">
                                                                </a>
                                                                <div class="d-block ms-3">
                                                                    <a href="javascript:void(0)" class="fs-13 font-bld text-truncate-1-line">Document.png</a>
                                                                    <small class="fw-normal text-muted">480/KB</small>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center p-3 border-start">
                                                                <a href="javascript:void(0)" class="avatar-text file-download">
                                                                    <i class="feather-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! BEGIN: [single-attachment-item] !-->
                                                    <div class="col-xxl-6 col-xl-12 col-md-6">
                                                        <div class="mb-4 mb-xxl-0 mb-xl-4 mb-md-0 text-dark d-flex align-items-center justify-content-between border rounded-3">
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                                                    <img src="assets/images/file-icons/psd.png" class="img-fluid" alt="image">
                                                                </a>
                                                                <div class="d-block ms-3">
                                                                    <a href="javascript:void(0)" class="fs-13 font-bld text-truncate-1-line">Document.psd</a>
                                                                    <small class="fw-normal text-muted">36.58/MB</small>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center p-3 border-start">
                                                                <a href="javascript:void(0)" class="avatar-text file-download">
                                                                    <i class="feather-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! BEGIN: [single-attachment-item] !-->
                                                    <div class="col-xxl-6 col-xl-12 col-md-6">
                                                        <div class="text-dark d-flex align-items-center justify-content-between border rounded-3">
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                                                    <img src="assets/images/file-icons/pdf.png" class="img-fluid" alt="image">
                                                                </a>
                                                                <div class="d-block ms-3">
                                                                    <a href="javascript:void(0)" class="fs-13 font-bld text-truncate-1-line">Photos.pdf</a>
                                                                    <small class="fw-normal text-muted">03.24/KB</small>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center p-3 border-start">
                                                                <a href="javascript:void(0)" class="avatar-text file-download">
                                                                    <i class="feather-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--! END: [accordion-item] !-->
                            </div>
                        </div>
                        <div class="items-details-footer mail-action-editor m-4 border border-top-0 rounded-3">
                            <div class="p-0 ht-400 border-top position-relative editor-section" data-scrollbar-target="#psScrollbarInit">
                                <div class="position-relative border-bottom">
                                    <div class="px-2 d-flex align-items-center">
                                        <div class="p-0 w-100">
                                            <input class="form-control border-0 text-dark" name="tomailcontent" placeholder="TO">
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="position-absolute top-50 end-0 translate-middle badge bg-gray-200 border fw-semibold text-uppercase text-dark rounded-pill c-pointer z-index-100" id="ccbccToggleContent"><span data-bs-toggle="tooltip" data-bs-trigger="hover" title="CC / BCC" style="font-size: 9px !important">CC / BCC</span></a>
                                </div>
                                <div class="border-bottom" id="ccbccToggleContentFileds" style="display: none">
                                    <div class="px-2 w-100 d-flex align-items-center border-bottom">
                                        <input class="form-control border-0 text-dark" name="ccmailcontent" placeholder="CC">
                                    </div>
                                    <div class="px-2 w-100 d-flex align-items-center">
                                        <input class="form-control border-0 text-dark" name="bccmailcontent" placeholder="BCC">
                                    </div>
                                </div>
                                <div class="px-3 w-100 d-flex align-items-center">
                                    <input class="form-control border-0 my-1 w-100 shadow-none" type="email" placeholder="Subject">
                                </div>
                                <div class="ht-150 border-0" id="mailEditor"></div>
                            </div>
                            <div class="px-4 py-3 d-flex align-items-center justify-content-between border-top">
                                <!--! BEGIN: [mail-editor-action-left] !-->
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 0">
                                            <span class="btn btn-primary dropdown-toggle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Send Message"> Send </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#mailActionMessage">
                                                <i class="feather-send me-3"></i>
                                                <span>Instant Send</span>
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item successAlertMessage">
                                                <i class="feather-clock me-3"></i>
                                                <span>Schedule Send</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                <i class="feather-x me-3"></i>
                                                <span>Discard Now</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                <i class="feather-edit-3 me-3"></i>
                                                <span>Save as Draft</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown d-none d-sm-block">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 0">
                                            <span class="btn btn-icon" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Pick Template">
                                                <i class="feather-hash"></i>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu wd-300">
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Welcome you message</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Your issues solved</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Thank you message</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Make a offer message</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Add the Unsubscribe option</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span class="text-truncate-1-line">Thank your customer for joining</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-save me-3"></i>
                                                <span class="text-truncate-1-line">Save as Template</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-sun me-3"></i>
                                                <span>Manage Template</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, 0">
                                            <span class="btn btn-icon" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Upload Attachments">
                                                <i class="feather-upload"></i>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-image me-3"></i>
                                                <span>Upload Images</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-video me-3"></i>
                                                <span>Upload Videos</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-mic me-3"></i>
                                                <span>Upload Musics</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>Upload Documents</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [mail-editor-action-right] !-->
                                <div class="d-flex align-items-center">
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-offset="0, -1">
                                            <span class="btn btn-icon" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Editing Actions">
                                                <i class="feather-more-horizontal"></i>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-type me-3"></i>
                                                <span>Plain Text Mode</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-check me-3"></i>
                                                <span>Check Spelling</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-compass me-3"></i>
                                                <span>Smart Compose</span>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i class="feather-feather me-3"></i>
                                                <span>Manage Signature</span>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Discard Message">
                                        <i class="feather-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
@endsection
