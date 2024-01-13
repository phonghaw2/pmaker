@push('css-step')
    <link rel="stylesheet" href="{{ asset('css/home/step4.min.css') }}">
@endpush

<div class="pick-container">
    <div class="project-dv">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="h4 margin-bottom-16" style="color: #7bf2f6;">Step 4: Make your social network</h1>
    </div>
    <div class="flex pmaker-info p-mask">
        <div class="p-col left">
            <div class="text eyebrow red">Your network</div>
            <div class="fo-desc__wrap">
                <div class="fo-desc">
                    <h4 class="h-h4 var form">Connectez-vous avec des personnes de votre réseau social. <br> Partageons-le.</h4>
                </div>
            </div>
        </div>
        <div class="p-col right">
            <form method="post" action="{{ route('step.step_5') }}" id="step-save" class="form-info">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="front card-item">
                        {{-- @error('p_name')
                            <button class="btn-msg-error">{{ $message }}</button>
                        @enderror --}}
                        <div class="form-col" id="social-div">
                            <label class="label" for="name" style="margin-bottom: 2vw;">What your's URL? <span title="required">*</span></label>
                            @foreach ($platform_default as $data)
                                <x-field-social-link :data="$data" :social="$social"/>
                            @endforeach
                        </div>
                        <div class="flex">
                            <button type="button" class="btn-social">
                                <div class="basebtn-bottom-border"></div>
                                <span class="basebtn-content">Add More Link</span>
                                <span class="basebtn-content-link">
                                    @foreach ($platform as $item)
                                        @if (!in_array($item, array('x', 'facebook', 'instagram', 'youtube')))
                                            <img src="{{ asset('images/' . $item . '_default.svg') }}"
                                            alt="{{ $item }}" title="{{ $item }}" data-platform="{{ $item }}">
                                        @endif
                                    @endforeach
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="f-back" role="button" onclick="turnBack('{{ route('step.step_3') }}')">
    <img src="{{ asset('images/sign-back.png') }}" alt="">
</div>

@include('home.step.layout.p-func-right')

{{-- <form method="post" action="{{ route('step.step_5') }}" id="step-save" class="form-info">
    @csrf
    @method('POST')
    <input type="hidden" id="p_type" name="p_type" value="{{ $data->p_type }}" />
    <input type="hidden" id="tech_stack" name="tech_stack" value="">
    <input type="hidden" id="education" name="education" value="">
    <input type="hidden" id="skill_stack" name="skill_stack" value="">
</form> --}}

@push('js-step')
    <script src="{{ asset('js/step4.js') }}"></script>
@endpush

