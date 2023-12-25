@push('css-step')
    <link rel="stylesheet" href="{{ asset('css/home/step3.min.css') }}">
@endpush

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
                                @if (old('p_tech_stack'))
                                    @foreach (explode('|pts|', old('p_tech_stack')) as $name)
                                    <div class="tag">
                                        <span data-tag-name="{{ $name }}">{{ $name }}</span>
                                        <svg viewBox="0 0 50 50" width="16px" height="16px" onclick="remove(this, '')"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                                    </div>
                                    @endforeach
                                @elseif (!$data->tech_stack)
                                    <div class="tag">
                                        <span>Example</span>
                                        <svg viewBox="0 0 50 50" width="16px" height="16px" onclick="remove(this, '')"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                                    </div>
                                @else
                                    @foreach ($data->tech_stack as $name)
                                    <div class="tag">
                                        <span data-tag-name="{{ $name }}">{{ $name }}</span>
                                        <svg viewBox="0 0 50 50" width="16px" height="16px" onclick="remove(this, '')"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                                    </div>
                                    @endforeach
                                @endif
                                <input type="text" id="tag-input" maxlength="20" value="">
                            </div>
                            @error('p_tech_stack')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
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
                            @if (old('p_education'))
                                @foreach (explode('|pts|', old('p_education')) as $name)
                                <input class="field" data-p-education="" value="{{ $name }}" type="text" maxlength="150">
                                @endforeach
                            @elseif (!$data->education)
                                <input class="field" data-p-education="" type="text" placeholder="University of California, Los Angeles" maxlength="150">
                            @else
                                @foreach ($data->education as $name)
                                <input class="field" data-p-education="" value="{{ $name }}" type="text" maxlength="150">
                                @endforeach
                            @endif
                            @error('p_education')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
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
                            @if (!$certification)
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
                            @else
                                @foreach ($certification as $cert)
                                <div class="form-certification-card">
                                    <div>
                                        <img src="{{ asset('images/company1.png') }}" alt="" width="48">
                                    </div>
                                    <div class="certification-card">
                                        <div class="certification-name">
                                            <span>{{ $cert->name }}</span>
                                        </div>
                                        <span class="certification-organization">
                                            {{ $cert->organization }}
                                        </span>
                                        <span class="certification-info">Issued {{ $cert->date_issue }}</span>
                                        <span class="certification-info">Credintial ID {{ $cert->credential_id }}</span>
                                    </div>
                                    <div class="button-wrapper">
                                        <button class="swiper-button swiper-next-button" role="button" aria-label="Edit certification field">
                                            <svg viewBox="0 0 15 15" fill="none" stroke="currentColor"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645ZM4.42166 9.28547L11.5 2.20711L12.7929 3.5L5.71455 10.5784L4.21924 11.2192L3.78081 10.7808L4.42166 9.28547Z" fill="currentColor" /> </svg>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            @endif
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
    <input type="hidden" id="p_type" name="p_type" value="{{ $data->p_type }}" />
    <input type="hidden" id="tech_stack" name="tech_stack" value="">
    <input type="hidden" id="education" name="education" value="">
    <input type="hidden" id="skill_stack" name="skill_stack" value="">
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

<div class="f-back" role="button" onclick="turnBack('{{ route('step.step_2') }}')">
    <img src="{{ asset('images/sign-back.png') }}" alt="">
</div>

@include('home.step.layout.p-func-left')
@include('home.step.layout.p-func-right')

<form action="{{ route('step.save') }}" method="post" id="step_save">
    @csrf
    <input type="hidden" id="type" name="p_type" value="">
    <input type="hidden" id="type" name="p_next_step" value="2">
</form>

@push('js-step')
    <script>
        const tags = [];
        const experience = [];
        const certificate = [];
    </script>
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
@endpush

