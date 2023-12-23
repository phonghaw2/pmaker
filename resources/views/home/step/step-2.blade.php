@push('css-step')
    <link rel="stylesheet" href="{{ asset('css/home/step2.min.css') }}">
@endpush

<div class="pick-container">
    <div class="project-dv">
        <h1 class="h4 margin-bottom-16">Step 2: Your Information</h1>
    </div>
    <div class="flex pmaker-info p-mask">
        <div class="p-col left">
            <div class="text eyebrow red">Your Request</div>
            <div class="fo-desc__wrap">
                <div class="fo-desc">
                    <h4 class="h-h4 var form">Start a conversation<br>about a new business<br>or media inquiries.</h4>
                    <svg style="position: absolute; z-index: -1; top: -150px; right: 0; opacity: 0.6; width: 800px;" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800">
                        <defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="vvvortex-grad">
                            <stop stop-color="hsl(1.4, 100%, 67%)" stop-opacity="1" offset="0%"></stop>
                            <stop stop-color="hsl(167, 52%, 78%)" stop-opacity="1" offset="100%"></stop>
                        </linearGradient></defs>
                        <g stroke="url(#vvvortex-grad)" fill="none" stroke-linecap="round">
                            <circle r="363" cx="400" cy="400" stroke-width="11" stroke-dasharray="13 27" stroke-dashoffset="25" transform="rotate(123, 400, 400)" opacity="0.05"></circle>
                            <circle r="346.5" cx="400" cy="400" stroke-width="11" stroke-dasharray="20 48" stroke-dashoffset="25" transform="rotate(335, 400, 400)" opacity="0.10"></circle>
                            <circle r="330" cx="400" cy="400" stroke-width="10" stroke-dasharray="41 36" stroke-dashoffset="25" transform="rotate(269, 400, 400)" opacity="0.14"></circle>
                            <circle r="313.5" cx="400" cy="400" stroke-width="10" stroke-dasharray="46 21" stroke-dashoffset="25" transform="rotate(255, 400, 400)" opacity="0.19"></circle>
                            <circle r="297" cx="400" cy="400" stroke-width="10" stroke-dasharray="33 39" stroke-dashoffset="25" transform="rotate(185, 400, 400)" opacity="0.23"></circle>
                            <circle r="280.5" cx="400" cy="400" stroke-width="10" stroke-dasharray="48 48" stroke-dashoffset="25" transform="rotate(101, 400, 400)" opacity="0.28"></circle>
                            <circle r="264" cx="400" cy="400" stroke-width="9" stroke-dasharray="13 32" stroke-dashoffset="25" transform="rotate(359, 400, 400)" opacity="0.32"></circle>
                            <circle r="247.5" cx="400" cy="400" stroke-width="9" stroke-dasharray="19 30" stroke-dashoffset="25" transform="rotate(234, 400, 400)" opacity="0.37"></circle>
                            <circle r="231" cx="400" cy="400" stroke-width="9" stroke-dasharray="48 37" stroke-dashoffset="25" transform="rotate(46, 400, 400)" opacity="0.41"></circle>
                            <circle r="214.5" cx="400" cy="400" stroke-width="8" stroke-dasharray="23 37" stroke-dashoffset="25" transform="rotate(16, 400, 400)" opacity="0.46"></circle>
                            <circle r="198" cx="400" cy="400" stroke-width="8" stroke-dasharray="14 32" stroke-dashoffset="25" transform="rotate(74, 400, 400)" opacity="0.50"></circle>
                            <circle r="181.5" cx="400" cy="400" stroke-width="8" stroke-dasharray="16 17" stroke-dashoffset="25" transform="rotate(117, 400, 400)" opacity="0.55"></circle>
                            <circle r="165" cx="400" cy="400" stroke-width="8" stroke-dasharray="14 18" stroke-dashoffset="25" transform="rotate(104, 400, 400)" opacity="0.59"></circle>
                            <circle r="148.5" cx="400" cy="400" stroke-width="7" stroke-dasharray="19 45" stroke-dashoffset="25" transform="rotate(70, 400, 400)" opacity="0.64"></circle>
                            <circle r="132" cx="400" cy="400" stroke-width="7" stroke-dasharray="24 43" stroke-dashoffset="25" transform="rotate(193, 400, 400)" opacity="0.68"></circle>
                            <circle r="115.5" cx="400" cy="400" stroke-width="7" stroke-dasharray="51 45" stroke-dashoffset="25" transform="rotate(290, 400, 400)" opacity="0.73"></circle>
                            <circle r="99" cx="400" cy="400" stroke-width="6" stroke-dasharray="18 33" stroke-dashoffset="25" transform="rotate(210, 400, 400)" opacity="0.77"></circle>
                            <circle r="82.5" cx="400" cy="400" stroke-width="6" stroke-dasharray="54 28" stroke-dashoffset="25" transform="rotate(282, 400, 400)" opacity="0.82"></circle>
                            <circle r="66" cx="400" cy="400" stroke-width="6" stroke-dasharray="21 54" stroke-dashoffset="25" transform="rotate(190, 400, 400)" opacity="0.86"></circle>
                            <circle r="49.5" cx="400" cy="400" stroke-width="6" stroke-dasharray="49 17" stroke-dashoffset="25" transform="rotate(71, 400, 400)" opacity="0.91"></circle>
                            <circle r="33" cx="400" cy="400" stroke-width="5" stroke-dasharray="39 41" stroke-dashoffset="25" transform="rotate(210, 400, 400)" opacity="0.95"></circle>
                            <circle r="16.5" cx="400" cy="400" stroke-width="5" stroke-dasharray="45 54" stroke-dashoffset="25" transform="rotate(253, 400, 400)" opacity="1.00"></circle>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="p-col right">
            <form method="post" action="{{ route('step.step_3') }}" id="step-save" class="form-info">
                <input type="hidden" name="p_type" id="p_type" value="{{ $data->p_type }}">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="front card-item">
                        <div class="form-col">
                            <label class="label" for="name">What's your blog name? <span title="required">*</span>
                            </label>
                            <input class="field" type="text" name="p_name" id="name" value="{{ old('p_name', $data->p_name ?? '') }}" placeholder="My name is Jeff" maxlength="100">
                            @error('p_name')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
                        </div>

                        <div class="form-col">
                            <label class="label" for="about">About Your <span title="required">*</span>
                            </label>
                            <textarea class="field" name="p_about" id="about" placeholder="Hello dude! ..." maxlength="500">{{ old('p_about', $data->p_about ?? '') }}</textarea>
                            @error('p_about')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
                        </div>
                    </div>
                    <div class="back card-item">
                        <div class="form-col">
                            <label class="label" for="working">WHAT'S YOUR COMPANY & FUNCTION?<span title="required">*</span>
                            </label>
                            <input class="field" type="text" name="p_company_func" id="working" value="{{ old('p_company_func', $data->company_func ?? '') }}"  placeholder="Company Name, Job Title" maxlength="150">
                            @error('p_company_func')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-col">
                            <label class="label" for="address">Address<span title="required">*</span>
                            </label>
                            <input class="field" type="text" name="p_address" id="address" value="{{ old('p_address', $data->address ?? '') }}"  placeholder="501 Poplar Court Lafayette, IN 47905" maxlength="150">
                            @error('p_address')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-col">
                            <label class="label" for="phone">WHAT'S YOUR PHONE NUMBER?<span title="required">*</span>
                            </label>
                            <input class="field" type="tel" name="p_phone" id="phone" value="{{ old('p_phone', $data->phone_number ?? '') }}"  placeholder="+31 6 12 34 56 78" maxlength="11">
                            @error('p_phone')
                                <button class="btn-msg-error">{{ $message }}</button>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="f-back" role="button" onclick="turnBack('{{ route('step.step_1') }}')">
    <img src="{{ asset('images/sign-back.png') }}" alt="">
</div>


@include('home.step.layout.p-func-left')
@include('home.step.layout.p-func-right')

@push('js-step')
    <script src="{{ asset('js/step2.js') }}"></script>
@endpush

