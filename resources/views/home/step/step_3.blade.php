<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/step3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <title>Pmaker - Step 3</title>
</head>
<body translate="no">
    <div class="pick-container">
        <div class="project-dv">
            <h1 class="h4 margin-bottom-16" style="color: #fb6f6f">Step 3: Make your color</h1>
        </div>
        <div class="flex pmaker-info p-mask">
            <div class="p-col left">
                <div class="text eyebrow red">Your Request</div>
                <div class="fo-desc__wrap">
                    <div class="fo-desc">
                        <h4 class="h-h4 var form">Experiences outside a linear career path.<br>Share these moments that make you unique.</h4>
                    </div>
                </div>
            </div>
            <div class="p-col right">
                <div class="form-info">
                    <div class="card">
                        <div class="front card-item">
                            <div class="form-col">
                                <label class="label" for="tag-input">Tech Stack? <span title="required">*</span></label>
                                <div class="tag-container">
                                    <div class="tag">
                                        <span>Example</span>
                                        <svg viewBox="0 0 50 50" width="16px" height="16px" onclick="remove(this, '')"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                                    </div>
                                    <input type="text" id="tag-input" maxlength="20" name="p_tech_stack">
                                </div>
                            </div>
                            <div class="form-col col-experience">
                                <label class="label" for="experience">Experience <span title="required">*</span></label>
                                <div class="button-wrapper">
                                    <button class="swiper-button swiper-prev-button" role="button" aria-label="Add field" id="add-field-exp">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/> </svg>
                                    </button>
                                </div>
                            </div>
                            <div id="experience-part">
                                <div class="form-experience-card">
                                    <div>
                                        <img src="{{ asset('images/company1.png') }}" alt="" width="48">
                                    </div>
                                    <div class="experience-card">
                                        <div class="experience-job-title">
                                            <span>PHP Developer</span>
                                        </div>
                                        <span class="experience-company">
                                            GLOBAL DESIGN IT Co,LTD.（グローバルデザインインフォメーションテクノロジー） · Full-time
                                        </span>
                                        <span class="experience-info">Nov 2022 - Present · 4 mos</span>
                                        <span class="experience-info">Da Nang, Da Nang City, Vietnam</span>
                                    </div>
                                    <div class="button-wrapper">
                                        <button class="swiper-button swiper-next-button" role="button" aria-label="Edit experience field">
                                            <svg viewBox="0 0 15 15" fill="none" stroke="currentColor"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z" fill="currentColor" /> </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="back card-item">
                            <div class="form-col">
                                <div class="col-education" style="margin-bottom: 0!important">
                                    <label class="label" for="name">Education <span title="required">*</span></label>
                                    <div class="button-wrapper">
                                        <button class="swiper-button swiper-prev-button" role="button" aria-label="Add field" id="add-education">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/> </svg>
                                        </button>
                                    </div>
                                </div>
                                <input class="field" type="text" value="" placeholder="University of California, Los Angeles" maxlength="150">
                            </div>
                            <div class="form-col col-certification">
                                <label class="label" for="certification">Certifications </label>
                                <div class="button-wrapper">
                                    <button class="swiper-button swiper-prev-button" role="button" aria-label="Add field"  id="add-certification">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/> </svg>
                                    </button>
                                </div>
                            </div>
                            <div id="certification-part">
                                <div class="form-certification-card">
                                    <div>
                                        <img src="{{ asset('images/company1.png') }}" alt="" width="48">
                                    </div>
                                    <div class="certification-card">
                                        <div class="certification-name">
                                            <span>Microsoft certified network associate security</span>
                                        </div>
                                        <span class="certification-organization">
                                            Microsoft
                                        </span>
                                        <span class="certification-info">Issued Nov 2022</span>
                                        <span class="certification-info">Credintial ID 9edc951212c</span>
                                    </div>
                                    <div class="button-wrapper">
                                        <button class="swiper-button swiper-next-button" role="button" aria-label="Edit certification field">
                                            <svg viewBox="0 0 15 15" fill="none" stroke="currentColor"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z" fill="currentColor" /> </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('step.step_4') }}" id="step-save" class="form-info">
        @csrf
        @method('POST')
        <input type="hidden" id="type" name="p_tech_stack" value="">
        <input type="hidden" id="type" name="p_education" value="">
    </form>
    {{-- EXPERIENCE --}}
    <div class="box-lightbox add-exp-modal">
        <div class="modal-dialog">
            {{-- Modal content--}}
            <div class="modal-content">
                <div class="btn-close-modal" role="button" aria-label="Close modal">
                    <svg fill="currentColor" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>
                </div>
                <div class="modal-header ember-view">
                    <h2>Add experience</h2>
                </div>
                <div class="model-body" id="add-experience">
                    <div class="div-suggest">
                        <h2 class="sugget-h2">Suggested based on your title</h2>
                        <div>
                            <button class="suggest-btn" type="button">
                                <span class="suggest-text">WordPress</span>
                            </button>
                            <button class="suggest-btn" type="button">
                                <span class="suggest-text">Database</span>
                            </button>
                            <button class="suggest-btn" type="button">
                                <span class="suggest-text">Oracle Database</span>
                            </button>
                            <button class="suggest-btn" type="button">
                                <span class="suggest-text">Content Management Systems</span>
                            </button>
                            <button class="suggest-btn" type="button">
                                <span class="suggest-text">CodeIgniter</span>
                            </button>
                        </div>
                    </div>
                    <p>
                        <label for="exp-title"><span>Title *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="exp-title" type="text" maxlength="50"></span>
                    </p>
                    <p>
                        <label for="exp-company"><span>Company name *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="exp-company" placeholder="Global Design IT" type="text" maxlength="70"></span>
                    </p>
                    <p>
                        <label for="exp-location"><span>Location *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="exp-location" placeholder="Da Nang, Da Nang City, Vietnam" type="text" maxlength="70"></span>
                    </p>
                    <p>
                        <label for="exp-type"><span>Employment type *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="exp-type" placeholder="Fulltime" type="text" maxlength="20"></span>
                    </p>
                    <div class="time">
                        <p style="flex:1">
                            <label for="exp-start-date"><span>Start date *</span></label><br>
                            <input type="month" id="exp-start-date">
                        </p>
                        <p style="flex:1">
                            <label for="exp-end-date"><span>End date *</span></label><br>
                            <input type="month" id="exp-end-date">
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="add-exp-btn">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="box-lightbox edit-field-modal">
        <div class="modal-dialog">
            {{-- Modal content--}}
            <div class="modal-content">
                <div class="btn-close-modal" role="button" aria-label="Close modal">
                    <svg fill="currentColor" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>
                </div>
                <div class="modal-header ember-view">
                    <h2>Edit experience</h2>
                </div>
                <div class="model-body" id="edit-experience">
                    <p>
                        <label for="edit-exp-title"><span>Title *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="edit-exp-title" type="text" maxlength="50"></span>
                    </p>
                    <p>
                        <label for="edit-exp-company"><span>Company name *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="edit-exp-company" placeholder="Global Design IT" type="text" maxlength="70"></span>
                    </p>
                    <p>
                        <label for="edit-exp-location"><span>Location *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="edit-exp-location" placeholder="Da Nang, Da Nang City, Vietnam" type="text" maxlength="70"></span>
                    </p>
                    <p>
                        <label for="edit-exp-type"><span>Employment type *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="edit-exp-type" placeholder="Fulltime" type="text" maxlength="20"></span>
                    </p>
                    <div class="time">
                        <p style="flex:1">
                            <label for="edit-exp-start-date"><span>Start date *</span></label><br>
                            <input type="month" id="edit-exp-start-date">
                        </p>
                        <p style="flex:1">
                            <label for="edit-exp-end-date"><span>End date *</span></label><br>
                            <input type="month" id="edit-exp-end-date">
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="edit-save">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- CERITIFICATION --}}
    <div class="box-lightbox add-certification-modal">
        <div class="modal-dialog">
            {{-- Modal content--}}
            <div class="modal-content">
                <div class="btn-close-modal" role="button" aria-label="Close modal">
                    <svg fill="currentColor" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>
                </div>
                <div class="modal-header ember-view">
                    <h2>Add license or certification</h2>
                </div>
                <div class="model-body" id="add-certification">
                    <p>
                        <label for="cert-name"><span>Name *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="cert-name" type="text" maxlength="150" placeholder="Ex: Microsoft certified network associate security"></span>
                    </p>
                    <p>
                        <label for="cert-organization"><span>Issuing organization  *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="cert-organization" placeholder="Ex: Microsoft" type="text" maxlength="150"></span>
                    </p>
                    <div class="time">
                        <p style="flex:1">
                            <label for="cert-issue-date"><span>Issue date *</span></label><br>
                            <input type="month" id="cert-issue-date">
                        </p>
                        <p style="flex:1">
                            <label for="cert-expiration-date"><span>Expiration date *</span></label><br>
                            <input type="month" id="cert-expiration-date">
                        </p>
                    </div>
                    <p>
                        <label for="cert-credential-id"><span>Credential ID </span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="cert-credential-id" type="text" maxlength="50"></span>
                    </p>
                    <p>
                        <label for="cert-credential-url"><span>Credential URL *</span></label><br>
                        <span class="wpcf7-form-control-wrap"><input id="cert-credential-url" type="text" maxlength="200"></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button id="add-cert-card">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="f-back" role="button" tabindex="0" aria-controls="w-slider-mask-0" aria-label="next slide">
        <img src="{{ asset('images/sign-back.png') }}" alt="">
    </div>

    <div class="p-func-right">
        <a class="f-next">
            <div id="cssda-badge">
                <span class="bagde-svg">
                    <svg height="32px" width="32px" version="1.1" id="Layer_1" viewBox="0 0 501.974 501.974" xml:space="preserve">
                        <g><g><g>
                            <path style="fill:#9dd2e4;" d="M151.642,491.974c-10.828,0-21.656-4.131-29.918-12.393c-16.523-16.523-16.523-43.313,0-59.836
                                l168.771-168.772L121.724,82.203c-16.523-16.523-16.523-43.313,0-59.836s43.313-16.523,59.836,0l198.689,198.689
                                c16.523,16.523,16.523,43.313,0,59.836L181.56,479.582C173.298,487.843,162.471,491.974,151.642,491.974z"/>
                            <path d="M151.642,501.974c-13.973,0-27.108-5.441-36.989-15.321c-9.88-9.88-15.321-23.017-15.321-36.989
                                s5.441-27.109,15.321-36.989l161.701-161.701l-161.701-161.7c-9.88-9.88-15.321-23.017-15.321-36.989s5.441-27.109,15.321-36.989
                                c20.397-20.396,53.583-20.394,73.979,0l198.689,198.689c9.88,9.88,15.321,23.017,15.321,36.989
                                c0,13.972-5.441,27.109-15.321,36.99l-198.69,198.689C178.75,496.533,165.614,501.974,151.642,501.974z M151.642,19.989
                                c-8.274,0-16.548,3.149-22.847,9.449c-6.103,6.103-9.464,14.216-9.464,22.847s3.361,16.744,9.464,22.847l168.771,168.771
                                c1.875,1.875,2.929,4.419,2.929,7.071s-1.054,5.196-2.929,7.071L128.795,426.817c-6.103,6.103-9.464,14.216-9.464,22.847
                                s3.361,16.744,9.464,22.847c6.103,6.103,14.217,9.464,22.847,9.464s16.744-3.361,22.847-9.464l198.689-198.689
                                c6.103-6.103,9.464-14.216,9.464-22.847c0-8.63-3.361-16.744-9.464-22.847l-198.69-198.69
                                C168.19,23.139,159.916,19.989,151.642,19.989z"/>
                        </g></g>
                            <g>
                                <path d="M284.75,185.702c-2.56,0-5.118-0.976-7.071-2.929L145.986,51.082c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.904,10.236-3.905,14.143,0L291.821,168.63c3.905,3.905,3.905,10.237,0,14.143
                                    C289.868,184.726,287.31,185.702,284.75,185.702z"/>
                            </g>
                            <g>
                                <path d="M330.234,231.186c-2.56,0-5.118-0.976-7.071-2.929l-16.131-16.131c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.905,10.236-3.905,14.143,0l16.131,16.131c3.905,3.905,3.905,10.237,0,14.143
                                    C335.352,230.21,332.793,231.186,330.234,231.186z"/>
                            </g>
                        </g>
                    </svg>
                </span>
                <span class="bagde-text">NEXT</span>
            </div>
        </a>
    </div>

    <div class="p-func-left">
        <a class="f-prev">
            <div id="cssda-badge">
                <span class="bagde-svg">
                    <svg height="32px" width="32px" version="1.1" id="Layer_1" viewBox="0 0 501.974 501.974" xml:space="preserve">
                        <g><g><g>
                            <path style="fill:#dc5081;" d="M151.642,491.974c-10.828,0-21.656-4.131-29.918-12.393c-16.523-16.523-16.523-43.313,0-59.836
                                l168.771-168.772L121.724,82.203c-16.523-16.523-16.523-43.313,0-59.836s43.313-16.523,59.836,0l198.689,198.689
                                c16.523,16.523,16.523,43.313,0,59.836L181.56,479.582C173.298,487.843,162.471,491.974,151.642,491.974z"/>
                            <path d="M151.642,501.974c-13.973,0-27.108-5.441-36.989-15.321c-9.88-9.88-15.321-23.017-15.321-36.989
                                s5.441-27.109,15.321-36.989l161.701-161.701l-161.701-161.7c-9.88-9.88-15.321-23.017-15.321-36.989s5.441-27.109,15.321-36.989
                                c20.397-20.396,53.583-20.394,73.979,0l198.689,198.689c9.88,9.88,15.321,23.017,15.321,36.989
                                c0,13.972-5.441,27.109-15.321,36.99l-198.69,198.689C178.75,496.533,165.614,501.974,151.642,501.974z M151.642,19.989
                                c-8.274,0-16.548,3.149-22.847,9.449c-6.103,6.103-9.464,14.216-9.464,22.847s3.361,16.744,9.464,22.847l168.771,168.771
                                c1.875,1.875,2.929,4.419,2.929,7.071s-1.054,5.196-2.929,7.071L128.795,426.817c-6.103,6.103-9.464,14.216-9.464,22.847
                                s3.361,16.744,9.464,22.847c6.103,6.103,14.217,9.464,22.847,9.464s16.744-3.361,22.847-9.464l198.689-198.689
                                c6.103-6.103,9.464-14.216,9.464-22.847c0-8.63-3.361-16.744-9.464-22.847l-198.69-198.69
                                C168.19,23.139,159.916,19.989,151.642,19.989z"/>
                        </g></g>
                            <g>
                                <path d="M284.75,185.702c-2.56,0-5.118-0.976-7.071-2.929L145.986,51.082c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.904,10.236-3.905,14.143,0L291.821,168.63c3.905,3.905,3.905,10.237,0,14.143
                                    C289.868,184.726,287.31,185.702,284.75,185.702z"/>
                            </g>
                            <g>
                                <path d="M330.234,231.186c-2.56,0-5.118-0.976-7.071-2.929l-16.131-16.131c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.905,10.236-3.905,14.143,0l16.131,16.131c3.905,3.905,3.905,10.237,0,14.143
                                    C335.352,230.21,332.793,231.186,330.234,231.186z"/>
                            </g>
                        </g>
                    </svg>
                </span>
                <span class="bagde-text">PREV</span>
            </div>
        </a>
    </div>

    <form action="{{ route('step.save') }}" method="post" id="step_save">
        @csrf
        <input type="hidden" id="type" name="p_type" value="">
        <input type="hidden" id="type" name="p_next_step" value="2">
    </form>
    <footer class="pmaker-footer">
        <div class="c-footer_thanks">
            <span class="c-footer_thanks_from -mobile" aria-hidden="true">From the Phong Ha</span>

            <span class="c-footer_thanks_text">
                Thank you<br> for your <span class="u-relative u-inline-block">support<span class="c-footer_thanks_from -desktop">From the Phong Ha</span></span>
            </span>
        </div>
    </footer>
    <script>
        const tags = [];
        const experience = [];
        const certificate = [];
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/step3.js') }}"></script>
    <script>
        function remove(ele, tag) {
            ele.parentElement.remove();
            $('#tag-input').show();
            let index = tags.indexOf(tag);
            if (index > -1) {
                tags.splice(index, 1);
            }
        }
    </script>
</body>
</html>
