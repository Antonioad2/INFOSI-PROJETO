@extends('widgets.tables.layout.main')

@section('content-widgets-tables')
        <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Widgets</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Tables</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add widget</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Leads] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Users</th>
                                                <th>Proposal</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Archie Cantones</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Holmes Cherryman</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">New</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">In Progress </span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Malanie Hanvey</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Kenneth Hune</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Returning</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Valentine Maton</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Leads] end -->
                    <!-- [Top Selling] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Top Selling</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/1.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Headphones JBL</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$205</td>
                                                <td class="text-end">5 sold</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Smart watch</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$550</td>
                                                <td class="text-end">7 sold</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Hear Bud 202</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$350</td>
                                                <td class="text-end">6 sold</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">iPhone 14 Pro Max</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$600</td>
                                                <td class="text-end">4 sold</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/5.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Canon DSLR 1230</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$920</td>
                                                <td class="text-end">5 sold</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">More Products</a>
                        </div>
                    </div>
                    <!-- [Top Selling] end -->
                    <!-- [Remainders] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Remainders</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Remaining</th>
                                                <th scope="col">Stage</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <span class="wd-10 ht-10 bg-gray-400 rounded-circle d-inline-block me-2 lh-base"></span>
                                                        <div class="border-3 border-start rounded ps-3">
                                                            <a href="javascript:void(0);" class="mb-2 d-block">
                                                                <span>CRM Dashboard Redesign</span>
                                                            </a>
                                                            <p class="fs-12 text-muted mb-0">Management of project under "Duralux" brand</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">In Prograss</span>
                                                </td>
                                                <td>
                                                    <div data-time-countdown="countdown_1"></div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto">
                                                        <i class="feather-arrow-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <span class="wd-10 ht-10 bg-gray-400 rounded-circle d-inline-block me-2 lh-base"></span>
                                                        <div class="border-3 border-start rounded ps-3">
                                                            <a href="javascript:void(0);" class="mb-2 d-block">
                                                                <span>Duralux CRM Admin Project</span>
                                                            </a>
                                                            <p class="fs-12 text-muted mb-0">Duralux CRM Dashbaord Project</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-info text-info">Updading</span>
                                                </td>
                                                <td>
                                                    <div data-time-countdown="countdown_2"></div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto">
                                                        <i class="feather-arrow-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <span class="wd-10 ht-10 bg-gray-400 rounded-circle d-inline-block me-2 lh-base"></span>
                                                        <div class="border-3 border-start rounded ps-3">
                                                            <a href="javascript:void(0);" class="mb-2 d-block">
                                                                <span>Website Redesign for Nike</span>
                                                            </a>
                                                            <p class="fs-12 text-muted mb-0">Website Redesign for Nike</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-danger text-danger">Upcoming</span>
                                                </td>
                                                <td>
                                                    <div data-time-countdown="countdown_3"></div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto">
                                                        <i class="feather-arrow-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <span class="wd-10 ht-10 bg-gray-400 rounded-circle d-inline-block me-2 lh-base"></span>
                                                        <div class="border-3 border-start rounded ps-3">
                                                            <a href="javascript:void(0);" class="mb-2 d-block">
                                                                <span>Duralux CRM Dashbaord Project</span>
                                                            </a>
                                                            <p class="fs-12 text-muted mb-0">Duralux CRM Dashbaord Project</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-teal text-teal">Submitted</span>
                                                </td>
                                                <td>
                                                    <div data-time-countdown="countdown_4"></div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto">
                                                        <i class="feather-arrow-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <span class="wd-10 ht-10 bg-gray-400 rounded-circle d-inline-block me-2 lh-base"></span>
                                                        <div class="border-3 border-start rounded ps-3">
                                                            <a href="javascript:void(0);" class="mb-2 d-block">
                                                                <span>Update User Flows with UX Feedback</span>
                                                            </a>
                                                            <p class="fs-12 text-muted mb-0">Update User Flows with UX Feedback</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Working</span>
                                                </td>
                                                <td>
                                                    <div data-time-countdown="countdown_5"></div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto">
                                                        <i class="feather-arrow-right"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="active">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);">8</a></li>
                                        <li><a href="javascript:void(0);">9</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Remainders] end -->
                    <!-- [Tickets] start -->
                    <div class="col-xxl-4">
                        <div class="card widget-tickets-content">
                            <div class="card-header">
                                <h5 class="card-title">Tickets</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive tickets-items-wrapper">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ticket</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>
                                                    <a href="javascript:void(0);">#987456</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Meeting with beta testers <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <a href="javascript:void(0);">#963258</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Live stream for bpl live <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <a href="javascript:void(0);">#753951</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">CEO's private party <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <a href="javascript:void(0);">#456987</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Duralux public pnnouncement <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <a href="javascript:void(0);">#369852</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Marketing meeting with clients <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="active">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);">8</a></li>
                                        <li><a href="javascript:void(0);">9</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Tickets] end -->
                    <!-- [Leads Status] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads Status</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Lead Name</th>
                                                <th>Company</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th class="wd-250">Stage</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Archie Cantones</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$250.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Holmes Cherryman</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$500.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">In Progress </span>
                                                </td>
                                                <td>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Malanie Hanvey</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$200.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Kenneth Hune</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$300.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                                </td>
                                                <td>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Valentine Maton</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$450.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [ Leads Status] end -->
                    <!-- [Countries] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Countries</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive mb-3">
                                    <table class="table table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/us.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">United States</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success"><i class="feather-chevron-up fs-12 me-1"></i> 76.57%</td>
                                                <td class="fw-bold">968k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/in.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">India</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-danger"><i class="feather-chevron-down fs-12 me-1"></i> 35.00%</td>
                                                <td class="fw-bold">758k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/gb.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">United Kingdom</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success"><i class="feather-chevron-up fs-12 me-1"></i> 76.57%</td>
                                                <td class="fw-bold">691k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/au.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Australia</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-danger"><i class="feather-chevron-down fs-12 me-1"></i> 35.00%</td>
                                                <td class="fw-bold">558k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/bd.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Bangladesh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success"><i class="feather-chevron-up fs-12 me-1"></i> 76.57%</td>
                                                <td class="fw-bold">492k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/de.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Germany</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-danger"><i class="feather-chevron-down fs-12 me-1"></i> 35.00%</td>
                                                <td class="fw-bold">387k</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="wd-30">
                                                            <img src="assets/vendors/img/flags/4x3/tr.svg" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Turkey</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-success"><i class="feather-chevron-up fs-12 me-1"></i> 76.57%</td>
                                                <td class="fw-bold">322k</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Countries] end -->
                    <!-- [Contact Leads ] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Contact Leads</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Clients</th>
                                                <th scope="col" class="wd-100">Sale Rep.</th>
                                                <th scope="col">Contacted</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-success rounded"></div>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/12.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Archie Tones</a>
                                                            <span class="fs-12 text-muted">archie.tones@emial.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>15 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-success text-success">Deal Won</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$15.65K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-warning rounded"></div>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/11.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Holmes Cherry</a>
                                                            <span class="fs-12 text-muted">holmes.cherry@emial.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>20 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-warning text-warning">Intro Call</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$10.24K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-primary rounded"></div>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/10.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Kenneth Hune</a>
                                                            <span class="fs-12 text-muted">kenneth.hune@emial.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>18 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-primary text-primary">Stuck</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$12.47K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-danger rounded"></div>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/9.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Malanie Hanvey</a>
                                                            <span class="fs-12 text-muted">malanie.hanvey@emial.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>22 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-danger text-danger">Cancelled</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$10.88K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-dark rounded"></div>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/8.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Valentine Maton</a>
                                                            <span class="fs-12 text-muted">valentine.maton@emial.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>25 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-primary text-primary">Progress</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$13.85K</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Contact Leads] end -->
                    <!-- [Support Inbox] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Support Inbox</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Clients</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/1.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Alexandra Della</a>
                                                            <span class="fs-12 text-muted">My item doesn't shio to correct address</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="javascript:void(0);" class="btn btn-sm bg-soft-primary text-primary">2 hours ago</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Green Cute</a>
                                                            <span class="fs-12 text-muted">Can you please refund back my mony</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="javascript:void(0);" class="btn btn-sm bg-soft-primary text-primary">3 hours ago</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Marianne Audrey</a>
                                                            <span class="fs-12 text-muted">You Shipped Color, i need it to be</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="javascript:void(0);" class="btn btn-sm bg-soft-primary text-primary">4 hours ago</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Holland Scott</a>
                                                            <span class="fs-12 text-muted">Thank you very much for quick support!</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="javascript:void(0);" class="btn btn-sm bg-soft-primary text-primary">5 hours ago</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image rounded">
                                                            <img class="img-fluid" src="assets/images/avatar/5.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Gregory Miller</a>
                                                            <span class="fs-12 text-muted">You Shipped Color, i need it to be</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="javascript:void(0);" class="btn btn-sm bg-soft-primary text-primary">6 hours ago</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Support Inbox] end -->
                    <!-- [Campaign] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Campaign</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive mb-3">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Campaign Name</th>
                                                <th>Conversions</th>
                                                <th class="text-end">Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/brand/facebook.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Facebook Campaign</a>
                                                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">http://ads.facebook.com/#campaign</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-11 d-flex justify-content-between mb-1">
                                                        <span>Target: 50K</span>
                                                        <span>Reach: 46.44K</span>
                                                    </div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-primary text-primary">Active</span></td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Pause">
                                                            <i class="feather-pause"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Stop">
                                                            <i class="feather-stop-circle"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/brand/gmail.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Gmail Campaign</a>
                                                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">http://ads.google.com/#campaign</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-11 d-flex justify-content-between mb-1">
                                                        <span>Target: 30K</span>
                                                        <span>Reach: 22.82K</span>
                                                    </div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-warning text-warning">Paused</span></td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Pause">
                                                            <i class="feather-pause"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Stop">
                                                            <i class="feather-play"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/brand/youtube.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Youtube Campaign</a>
                                                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">http://ads.youtube.com/#campaign</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-11 d-flex justify-content-between mb-1">
                                                        <span>Target: 50K</span>
                                                        <span>Reach: 34.64K</span>
                                                    </div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-primary text-primary">Active</span></td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Pause">
                                                            <i class="feather-pause"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Stop">
                                                            <i class="feather-stop-circle"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/brand/pinterest.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Gmail Campaign</a>
                                                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">http://ads.pinterest.com/#campaign</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-11 d-flex justify-content-between mb-1">
                                                        <span>Target: 50K</span>
                                                        <span>Reach: 50K</span>
                                                    </div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-success text-success">Completed</span></td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Completed">
                                                            <i class="feather-check"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Repeat">
                                                            <i class="feather-repeat"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/brand/instagram.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Instagram Campaign</a>
                                                            <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">http://ads.instagram.com/#campaign</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-11 d-flex justify-content-between mb-1">
                                                        <span>Target: 30K</span>
                                                        <span>Reach: 21.48K</span>
                                                    </div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-primary text-primary">Active</span></td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Pause">
                                                            <i class="feather-pause"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Stop">
                                                            <i class="feather-stop-circle"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Campaign] end -->
                    <!-- [Visited Pages] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Visited Pages</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table">
                                        <thead class="small text-uppercase text-body-secondary">
                                            <tr>
                                                <th>Page</th>
                                                <th>Visitors</th>
                                                <th>Bounce</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>/app/widgets.html</td>
                                                <td>2514</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-success">23%</span>
                                                    <i class="feather-arrow-up text-success fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/analytics.html</td>
                                                <td>1912</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-success">22%</span>
                                                    <i class="feather-arrow-up text-success fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/index.html</td>
                                                <td>1245</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-danger">14%</span>
                                                    <i class="feather-arrow-down text-danger fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/reports.html</td>
                                                <td>458</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-success">12%</span>
                                                    <i class="feather-arrow-up text-success fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/chatting.html</td>
                                                <td>1245</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-danger">14%</span>
                                                    <i class="feather-arrow-down text-danger fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/settings.html</td>
                                                <td>458</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-success">07%</span>
                                                    <i class="feather-arrow-up text-success fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>/app/documentations.html</td>
                                                <td>1245</td>
                                                <td>
                                                    <span class="align-middle material-symbols-rounded ms-1 text-danger">10%</span>
                                                    <i class="feather-arrow-down text-danger fs-12 ms-1"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Visited Pages] end -->
                    <!-- [Projects Stats] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Projects Stats</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Project</th>
                                                <th>Budgets</th>
                                                <th>Stage</th>
                                                <th>Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image ounded">
                                                            <img src="assets/images/brand/app-store.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Apps Safety</div>
                                                            <div class="fs-12 text-muted">Project: <a href="javascript:void(0);" class="fw-normal text-muted border-bottom border-bottom-dashed">Valentine Maton</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="fw-bold text-dark">$2,550 USD</span></td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-primary text-primary">In Progress</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image ounded">
                                                            <img src="assets/images/brand/github.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Github Update</div>
                                                            <div class="fs-12 text-muted">Project: <a href="javascript:void(0);" class="fw-normal text-muted border-bottom border-bottom-dashed">Kenneth Hune</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="fw-bold text-dark">$1,200 USD</span></td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-warning text-warning">On Hold</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image ounded">
                                                            <img src="assets/images/brand/dropbox.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Dropbox Customization</div>
                                                            <div class="fs-12 text-muted">Project: <a href="javascript:void(0);" class="fw-normal text-muted border-bottom border-bottom-dashed">Malanie Hanvey</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="fw-bold text-dark">$3,300 USD</span></td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-success text-success">Completed</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image ounded">
                                                            <img src="assets/images/brand/facebook.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Facebook Marketing</div>
                                                            <div class="fs-12 text-muted">Project: <a href="javascript:void(0);" class="fw-normal text-muted border-bottom border-bottom-dashed">Archie Cantones</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="fw-bold text-dark">$2,000 USD</span></td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-primary text-primary">In Progress</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 22px">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image ounded">
                                                            <img src="assets/images/brand/figma.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Figma Dashboard</div>
                                                            <div class="fs-12 text-muted">Project: <a href="javascript:void(0);" class="fw-normal text-muted border-bottom border-bottom-dashed">Valentine Maton</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="fw-bold text-dark">$2,500 USD</span></td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-success rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-warning rounded-pill opacity-75"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                        <div class="wd-15 ht-4 bg-gray-300 rounded-pill"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="badge bg-soft-teal text-teal">Upcomming</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mt-1">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Projects Stats] end -->
                    <!-- [Project Progress] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Progress</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project</th>
                                                <th>Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="time-tracker-item">
                                                <td>
                                                    <div class="avatar-text bg-soft-primary text-primary">
                                                        <i class="feather-clock"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold mb-1">Search inspiration for project</div>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-clock fs-10"></i>
                                                            <span>04:00 PM</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-message-square fs-10"></i>
                                                            <span>32 comments</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                                        <i class="feather-bell fs-10 me-2"></i>
                                                        <span>Remainder</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="time-tracker-item">
                                                <td>
                                                    <div class="avatar-text bg-soft-primary text-primary">
                                                        <i class="feather-clock"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold mb-1">React admnin dashboard design</div>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-clock fs-10"></i>
                                                            <span>05:00 PM</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-message-square fs-10"></i>
                                                            <span>25 comments</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                                        <i class="feather-bell fs-10 me-2"></i>
                                                        <span>Remainder</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="time-tracker-item">
                                                <td>
                                                    <div class="avatar-text bg-soft-primary text-primary">
                                                        <i class="feather-clock"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold mb-1">Laravel ecommerce project tasks</div>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-clock fs-10"></i>
                                                            <span>02:30 PM</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-message-square fs-10"></i>
                                                            <span>45 comments</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                                        <i class="feather-bell fs-10 me-2"></i>
                                                        <span>Remainder</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="time-tracker-item">
                                                <td>
                                                    <div class="avatar-text bg-soft-primary text-primary">
                                                        <i class="feather-clock"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold mb-1">Search inspiration for project</div>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-clock fs-10"></i>
                                                            <span>06:25 PM</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-message-square fs-10"></i>
                                                            <span>30 comments</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                                        <i class="feather-bell fs-10 me-2"></i>
                                                        <span>Remainder</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="time-tracker-item">
                                                <td>
                                                    <div class="avatar-text bg-soft-primary text-primary">
                                                        <i class="feather-clock"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold mb-1">React admnin dashboard design</div>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-clock fs-10"></i>
                                                            <span>03:00 PM</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                            <i class="feather-message-square fs-10"></i>
                                                            <span>24 comments</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-md btn-light-brand">
                                                        <i class="feather-bell fs-10 me-2"></i>
                                                        <span>Remainder</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Project Progress] end -->
                    <!-- [Project Tracker] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Tracker</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Project</th>
                                                <th scope="col" class="w-25">Status</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Logged</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block mb-1">Search inspiration for project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>04:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>32 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td>08:30 - 09:30</td>
                                                <td class="fw-bold">00/h : 52/m : 34/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block mb-1">React admnin dashboard design</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>05:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>45 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">46% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%"></div>
                                                    </div>
                                                </td>
                                                <td>09:30 - 10:30</td>
                                                <td class="fw-bold">00/h : 50/m : 46/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block mb-1">Laravel ecommerce project tasks</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>06:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>22 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">65% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                    </div>
                                                </td>
                                                <td>11:00 - 12:30</td>
                                                <td class="fw-bold">00/h : 56/m : 47/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block mb-1">Search inspiration for project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>07:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>36 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">75% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                    </div>
                                                </td>
                                                <td>12:30 - 14:30</td>
                                                <td class="fw-bold">01/h : 48/m : 36/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block mb-1">Digital marketing for react project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>08:30 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>42 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">80% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                    </div>
                                                </td>
                                                <td>11:00 - 12:30</td>
                                                <td class="fw-bold">01/h : 22/m : 52/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Project Tracker] end -->
                    <!-- [Latest Tasks] start -->
                    <div class="col-xxl-12">
                        <div class="card widget-tasks-content">
                            <div class="card-header">
                                <h5 class="card-title">Latest Tasks</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive tasks-items-wrapper">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tasks</th>
                                                <th class="wd-250">Status</th>
                                                <th class="wd-250">Priority</th>
                                                <th class="wd-300">Assigned</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>
                                                    <div class="avatar-text bg-gray-200">01</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Meeting with beta testers <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted mt-2 text-truncate-1-line tasks-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tasks-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">Start</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" data-select2-selector="status">
                                                            <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                                                            <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                            <option value="success" data-bg="bg-success">Completed</option>
                                                            <option value="danger" data-bg="bg-danger">Rejected</option>
                                                            <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="priority">
                                                        <option value="primary" data-bg="bg-primary">Low</option>
                                                        <option value="teal" data-bg="bg-teal">Normal</option>
                                                        <option value="success" data-bg="bg-success">Medium</option>
                                                        <option value="warning" data-bg="bg-warning" selected>High</option>
                                                        <option value="danger" data-bg="bg-danger">Urgent</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3" selected>green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <div class="avatar-text bg-gray-200">02</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Live stream for bpl live <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted mt-2 text-truncate-1-line tasks-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tasks-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">Start</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="priority">
                                                        <option value="primary" data-bg="bg-primary">Low</option>
                                                        <option value="teal" data-bg="bg-teal">Normal</option>
                                                        <option value="success" data-bg="bg-success">Medium</option>
                                                        <option value="warning" data-bg="bg-warning">High</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Urgent</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4" selected>nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <div class="avatar-text bg-gray-200">03</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">CEO's private party <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted mt-2 text-truncate-1-line tasks-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tasks-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">Start</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="priority">
                                                        <option value="primary" data-bg="bg-primary">Low</option>
                                                        <option value="teal" data-bg="bg-teal">Normal</option>
                                                        <option value="success" data-bg="bg-success" selected>Medium</option>
                                                        <option value="warning" data-bg="bg-warning">High</option>
                                                        <option value="danger" data-bg="bg-danger">Urgent</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2" selected>john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <div class="avatar-text bg-gray-200">04</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Duralux public pnnouncement <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted mt-2 text-truncate-1-line tasks-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tasks-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">Start</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="priority">
                                                        <option value="primary" data-bg="bg-primary">Low</option>
                                                        <option value="teal" data-bg="bg-teal">Normal</option>
                                                        <option value="success" data-bg="bg-success">Medium</option>
                                                        <option value="warning" data-bg="bg-warning">High</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Urgent</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4" selected>nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <div class="avatar-text bg-gray-200">05</div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Marketing meeting with clients <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted mt-2 text-truncate-1-line tasks-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tasks-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">Start</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="priority">
                                                        <option value="primary" data-bg="bg-primary">Low</option>
                                                        <option value="teal" data-bg="bg-teal">Normal</option>
                                                        <option value="success" data-bg="bg-success" selected>Medium</option>
                                                        <option value="warning" data-bg="bg-warning">High</option>
                                                        <option value="danger" data-bg="bg-danger">Urgent</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2" selected>john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Latest Tasks] end -->
                    <!-- [Invoice Summary] start -->
                    <div class="col-xxl-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Invoice Summary</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>Customer</th>
                                                <th>Coupon</th>
                                                <th>Date</th>
                                                <th>Payment</th>
                                                <th class="wd-250">Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#896574</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Alexandra Della</div>
                                                            <div class="fs-12 text-muted">alex@outlook.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-success border border-success border-dashed">SU56HD246K</span>
                                                </td>
                                                <td>28-02-2023</td>
                                                <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown" data-bs-offset="0,28">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#478523</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Green Cute</div>
                                                            <div class="fs-12 text-muted">green.cute@hotmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-success border border-success border-dashed">SU56HD246K</span>
                                                </td>
                                                <td>27-02-2023</td>
                                                <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown" data-bs-offset="0,28">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#568745</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Marianne Audrey</div>
                                                            <div class="fs-12 text-muted">marianne.audrey@live.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-success border border-success border-dashed">SU56HD246K</span>
                                                </td>
                                                <td>25-02-2023</td>
                                                <td><i class="fab fa-cc-paypal me-1"></i> Paypal</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown" data-bs-offset="0,28">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#852369</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Holland Scott</div>
                                                            <div class="fs-12 text-muted">holland.scott@gmail.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-success border border-success border-dashed">SU56HD246K</span>
                                                </td>
                                                <td>22-02-2023</td>
                                                <td><i class="fab fa-cc-paypal me-1"></i> Paypal</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary" selected>Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown" data-bs-offset="0,28">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#558746</a>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">Gregory Miller</div>
                                                            <div class="fs-12 text-muted">gregory.miller@live.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-success border border-success border-dashed">SU56HD246K</span>
                                                </td>
                                                <td>20-02-2023</td>
                                                <td><i class="fab fa-cc-mastercard me-1"></i> Mastercard</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown" data-bs-offset="0,28">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-printer me-3"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-clock me-3"></i>
                                                                    <span>Remind</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-archive me-3"></i>
                                                                    <span>Archive</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-alert-octagon me-3"></i>
                                                                    <span>Report Spam</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Invoice Summary] end -->
                    <!-- [Traffic Reports] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Traffic Reports</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Source</th>
                                                <th>Sessions</th>
                                                <th>Changes</th>
                                                <th>Pages/Session</th>
                                                <th>Avg. Session</th>
                                                <th>Conversion Rate</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-warning me-2 d-inline-block rounded-circle"></span>
                                                        <span>Organic</span>
                                                    </a>
                                                </td>
                                                <td>8965 <small class="text-muted">(47.79%)</small></td>
                                                <td>69.74%</td>
                                                <td>2.76</td>
                                                <td>00:05:37</td>
                                                <td>2.00%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-primary me-2 d-inline-block rounded-circle"></span>
                                                        <span>Referral</span>
                                                    </a>
                                                </td>
                                                <td>3698 <small class="text-muted">(14.79%)</small></td>
                                                <td>61.80%</td>
                                                <td>6.76</td>
                                                <td>00:06:37</td>
                                                <td>3.48%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-success me-2 d-inline-block rounded-circle"></span>
                                                        <span>Direct</span>
                                                    </a>
                                                </td>
                                                <td>6542 <small class="text-muted">(68.79%)</small></td>
                                                <td>47.47%</td>
                                                <td>2.58</td>
                                                <td>00:04:58</td>
                                                <td>6.57%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-danger me-2 d-inline-block rounded-circle"></span>
                                                        <span>Affiliate</span>
                                                    </a>
                                                </td>
                                                <td>5896 <small class="text-muted">(65.54%)</small></td>
                                                <td>46.47%</td>
                                                <td>3.48</td>
                                                <td>00:04:37</td>
                                                <td>6.00%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-info me-2 d-inline-block rounded-circle"></span>
                                                        <span>Email</span>
                                                    </a>
                                                </td>
                                                <td>1597 <small class="text-muted">(14.41%)</small></td>
                                                <td>45.80%</td>
                                                <td>5.76</td>
                                                <td>00:04:47</td>
                                                <td>6.47%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <span class="wd-10 ht-10 bg-dark me-2 d-inline-block rounded-circle"></span>
                                                        <span>Other</span>
                                                    </a>
                                                </td>
                                                <td>1597 <small class="text-muted">(14.41%)</small></td>
                                                <td>45.80%</td>
                                                <td>5.76</td>
                                                <td>00:04:47</td>
                                                <td>6.47%</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Traffic Reports] end -->
                    <!-- [Store Overview] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Store Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Market Value</th>
                                                <th>Reviews</th>
                                                <th class="text-end">Status</th>
                                                <th class="text-end">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/logo/adwords.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="text-dark d-block">hazymemory.store</a>
                                                            <span class="fs-12 text-muted">http://hazymemory.store</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-bold">$86,954USD</a>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">Market Values</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 mb-1">
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">5,698 Reviews</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-primary text-primary">Trending</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/logo/app-store.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="text-dark d-block">slickthings.store</a>
                                                            <span class="fs-12 text-muted">http://slickthings.store</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-bold">$77,597USD</a>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">Market Values</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 mb-1">
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">7,875 Reviews</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-success text-success">Topper</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/logo/google-wallet.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="text-dark d-block">southernstyle.store</a>
                                                            <span class="fs-12 text-muted">http://southernstyle.store</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-bold">$67,578USD</a>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">Market Values</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 mb-1">
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">9,748 Reviews</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-warning text-warning">Feature</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/logo/pawprint.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="text-dark d-block">happydesire.store</a>
                                                            <span class="fs-12 text-muted">http://happydesire.store</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-bold">$60,447USD</a>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">Market Values</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 mb-1">
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">6,425 Reviews</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-danger text-danger">Exclusive</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/logo/shopping.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="text-dark d-block">alikedesire.store</a>
                                                            <span class="fs-12 text-muted">http://alikedesire.store</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript:void(0);" class="fw-bold">$59,697USD</a>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">Market Values</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-1 mb-1">
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                        <i class="fa fa-star text-warning fs-12"></i>
                                                    </div>
                                                    <div>
                                                        <span class="fs-12 text-muted">4,968 Reviews</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><span class="badge bg-soft-primary text-primary">Trending</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto"><i class="feather-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Store Overview] end -->
                    <!-- [New Customers] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">New Customers</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Country</th>
                                                <th>Payment method</th>
                                                <th>Created Date</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="Customer">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);">Alexandra Della</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>alex.della@email.com</td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-image avatar-sm">
                                                            <img src="assets/vendors/img/flags/1x1/us.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <span class="d-inline-block align-middle">United State</span>
                                                    </div>
                                                </td>
                                                <td><span>****6231</span></td>
                                                <td>21 Sep, 2023</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View User</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Delete User</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="Customer">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);">Valentine Maton</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>valentine.maton@email.com</td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-image avatar-sm">
                                                            <img src="assets/vendors/img/flags/1x1/gb.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <span class="d-inline-block align-middle">United Kingdom</span>
                                                    </div>
                                                </td>
                                                <td><span>****8563</span></td>
                                                <td>25 Sep, 2023</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View User</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Delete User</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="Customer">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);">Kenneth Hune</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>kenneth.hune@email.com</td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-image avatar-sm">
                                                            <img src="assets/vendors/img/flags/1x1/fr.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <span class="d-inline-block align-middle">Franch</span>
                                                    </div>
                                                </td>
                                                <td><span>****4524</span></td>
                                                <td>16 Sep, 2023</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View User</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Delete User</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="Customer">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);">Malanie Hanvey</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>malanie.hanvey@email.com</td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-image avatar-sm">
                                                            <img src="assets/vendors/img/flags/1x1/de.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <span class="d-inline-block align-middle">Germany</span>
                                                    </div>
                                                </td>
                                                <td><span>****3486</span></td>
                                                <td>20 Sep, 2023</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View User</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Delete User</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="Customer">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);">Archie Cantones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>archie.cantones@email.com</td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-image avatar-sm">
                                                            <img src="assets/vendors/img/flags/1x1/bd.svg" class="img-fluid" alt="">
                                                        </div>
                                                        <span class="d-inline-block align-middle">Bangladesh</span>
                                                    </div>
                                                </td>
                                                <td><span>****7896</span></td>
                                                <td>20 Sep, 2023</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md ms-auto" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View User</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Delete User</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [New Customers] end -->
                    <!-- [Recent Orders] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Recent Orders</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Country</th>
                                                <th>Date</th>
                                                <th>Company</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">iPhone 14 Pro Max</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Brasil</a>
                                                    <span class="fs-12 text-muted d-block">Code: PH</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">05/28/2020</a>
                                                    <span class="fs-12 text-muted d-block">Code: Paid</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Intertico</a>
                                                    <span class="fs-12 text-muted d-block">Web, UI/UX Design</span>
                                                </td>
                                                <td class="text-dark fw-bold">$3560</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/5.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Canon DSLR 1230</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Belarus</a>
                                                    <span class="fs-12 text-muted d-block">Code: BY</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">04/18/2021</a>
                                                    <span class="fs-12 text-muted d-block">Code: Paid</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Agoda</a>
                                                    <span class="fs-12 text-muted d-block">Houses &amp; Hotels</span>
                                                </td>
                                                <td class="text-dark fw-bold">$4850</td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Hear Bud 202</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Phillipines</a>
                                                    <span class="fs-12 text-muted d-block">Code: BH</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">07/23/2019</a>
                                                    <span class="fs-12 text-muted d-block">Code: Paid</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">RoadGee</a>
                                                    <span class="fs-12 text-muted d-block">Transportation</span>
                                                </td>
                                                <td class="text-dark fw-bold">$8376</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Smart watch</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Argentina</a>
                                                    <span class="fs-12 text-muted d-block">Code: BR</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">12/21/2021</a>
                                                    <span class="fs-12 text-muted d-block">Code: Paid</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">The Hill</a>
                                                    <span class="fs-12 text-muted d-block">Insurance</span>
                                                </td>
                                                <td class="text-dark fw-bold">$9486</td>
                                                <td>
                                                    <span class="badge bg-soft-danger text-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-image avatar-lg rounded">
                                                            <img class="img-fluid" src="assets/images/gallery/1.png" alt="">
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="d-block">Headphones JBL</a>
                                                            <span class="fs-12 text-muted">Electronics </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Agoda</a>
                                                    <span class="fs-12 text-muted d-block">Code: BT</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">05/28/2020</a>
                                                    <span class="fs-12 text-muted d-block">Code: Paid</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="d-block mb-1">Phillipines</a>
                                                    <span class="fs-12 text-muted d-block">Transportation</span>
                                                </td>
                                                <td class="text-dark fw-bold">$8476</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Recent Orders] end -->
                    <!-- [] start -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
@endsection