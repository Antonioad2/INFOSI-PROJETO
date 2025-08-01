<!--! ================================================================ !-->
    <!--! BEGIN: Calling Modal [Voice] !-->
    <!--! ================================================================ !-->
    <div class="modal fade calling-modal-screen" id="voiceCallingModalScreen" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="voiceCallingModalScreen" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
            <div class="modal-content rounded-0">
                <div class="h-100 d-flex aling-items-center justify-content-center">
                    <div class="w-100 chat-calling-content">
                        <!--! BEGIN: [chat-calling-info] !-->
                        <div class="d-flex align-items-center justify-content-between px-4 py-3">
                            <div class="d-flex align-items-center justify-content-center content-sub-header-left chat-calling-info">
                                <div class="avatar-image me-3">
                                    <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center">Erna Serpa</a>
                                    <div class="text typing">
                                        <div class="ringing active">
                                            <div class="d-flex align-items-baseline">
                                                <div class="fs-11 fw-semibold text-success">Contacting</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-12 fw-medium text-success timetracker">00:00:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="avatar-text avatar-md me-2 d-none d-lg-flex chat-message-sidebar-toggle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Text Message"><i class="feather-message-circle fs-11"></i></a>
                                <a href="javascript:void(0)" class="avatar-text avatar-md bg-soft-danger d-flex close-icon call-ended" data-bs-dismiss="modal" onClick="javascript:$('.timetracker').timetracker('reset');">
                                    <i class="feather-x text-danger"></i>
                                </a>
                            </div>
                        </div>
                        <!--! END: [chat-calling-info] !-->
                        <!--! BEGIN: [voice-call-content] !-->
                        <div class="d-flex align-items-center justify-content-center flex-column voice-call-content">
                            <div class="wd-150 ht-150">
                                <img src="assets/images/avatar/1.png" class="rounded-circle border border-5 img-fluid animation-infinite" alt="image">
                            </div>
                            <div class="my-4 text-center">
                                <h2 class="fs-13 fw-bold text-dark mb-1">Alexandra Della</h2>
                                <span class="fs-12 text-muted d-block">alex.della@outlook.com</span>
                            </div>
                            <div class="gap-2 d-flex align-items-center justify-content-center calling-receiver-action">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Mute Call"><i class="feather-mic-off fs-12"></i></a>
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Switch Video">
                                    <span class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-target="#videoCallingModalScreen" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="feather-video fs-12"></i></span>
                                </a>
                                <a href="javascript:void(0)" class="call-received btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Received Call" onClick="javascript:$('.timetracker').timetracker('start');"><i class="feather-phone-call fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon btn-danger rounded-circle call-ended" data-bs-toggle="tooltip" data-bs-trigger="hover" title="End Call" data-bs-dismiss="modal" style="display: none" onClick="javascript:$('.timetracker').timetracker('reset');"><i class="feather-phone-off fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Calls"><i class="feather-plus fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Hold Call" onClick="javascript:$('.timetracker').timetracker('stop');"><i class="feather-pause fs-12"></i></a>
                            </div>
                        </div>
                        <!--! END: [voice-call-content] !-->
                    </div>
                    <!--! BEGIN: [chat-calling-text-message-sidebar] !-->
                    <div class="d-none d-lg-block chat-calling-text-message-sidebar active">
                        <div class="p-4 fs-16 fw-bold text-dark border-bottom">In-call messages</div>
                        <div class="d-flex flex-column position-relative in-call-messages-items" data-scrollbar-target="#psScrollbarInit">
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hello Erna!!! Welcome to Live Chat!!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hi, I wanted to check my order status.....</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks for the information!!! Give me one moment please while I check on that for you.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks. I'm worried😳 it won't arrive in time⌚ for my daughter's birthday🎂 party🎉 this weekend.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern… I wouldn't want my child's gift to arrive late either.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">The birthday🎂 ceremony preparation almost completed</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern......!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="d-flex align-items-baseline text typing">
                                                <div class="fs-11 text-success">Typing</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 fs-16 fw-bold border-top">
                            <input class="form-control border-0 emoji-picker" placeholder="Type your message here...">
                        </div>
                    </div>
                    <!--! END: [chat-calling-text-message-sidebar] !-->
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Calling Modal [Voice] !-->
    <!--! ================================================================ !-->
