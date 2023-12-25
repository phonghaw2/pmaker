@push('css-step')
    <link rel="stylesheet" href="{{ asset('css/home/step4.min.css') }}">
@endpush

<div class="pick-container">
    <div class="project-dv">
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
            <form action="" class="form-info">
                <div class="card">
                    <div class="front card-item">
                        <div class="form-col" id="social-div">
                            <label class="label" for="name" style="margin-bottom: 2vw;">What your's URL? <span title="required">*</span></label>
                            <div class="p-social">
                                <div class="choose-icon">
                                    <div class="choosen-icon">
                                        <img src="{{ asset('images/facebook_default.svg') }}" class="p-icon" alt="facebook">
                                        <i class="dropdown icon">
                                            <img src="{{ asset('images/down-chevron.svg') }}">
                                        </i>
                                    </div>
                                    <ul class=" select-icon-ul">
                                        @foreach ($social as $item)
                                            @if ($item->platform == 'facebook')
                                                <li class="options">
                                                    <img src="{{ asset('images/social-media/' . $item->file_path) }}" alt="{{ $item->platform }} icon">
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <input class="field social-field" type="text" name="facebook" value="" required placeholder="/user-name/" maxlength="100">
                            </div>
                            <div class="p-social">
                                <div class="choose-icon">
                                    <div class="choosen-icon">
                                        <img src="{{ asset('images/youtube_default.svg') }}" class="p-icon" alt="youtube">
                                        <i class="dropdown icon">
                                            <img src="{{ asset('images/down-chevron.svg') }}">
                                        </i>
                                    </div>
                                    <ul class="select-icon-ul">
                                        @foreach ($social as $item)
                                            @if ($item->platform == 'youtube')
                                                <li class="options">
                                                    <img src="{{ asset('images/social-media/' . $item->file_path) }}" alt="{{ $item->platform }} icon">
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <input class="field social-field" type="text" name="youtube" value="" required placeholder="/@phonghaw2" maxlength="100">
                            </div>
                            <div class="p-social">
                                <div class="choose-icon">
                                    <div class="choosen-icon">
                                        <img src="{{ asset('images/twitter_default.svg') }}" class="p-icon" alt="twitter">
                                        <i class="dropdown icon">
                                            <img src="{{ asset('images/down-chevron.svg') }}">
                                        </i>
                                    </div>
                                    <ul class="select-icon-ul">
                                        @foreach ($social as $item)
                                            @if ($item->platform == 'twitter')
                                                <li class="options">
                                                    <img src="{{ asset('images/social-media/' . $item->file_path) }}" alt="{{ $item->platform }} icon">
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <input class="field social-field" type="text" name="twitter" value="" required placeholder="/HPhong24261595" maxlength="100">
                            </div>
                            <div class="p-social">
                                <div class="choose-icon">
                                    <div class="choosen-icon">
                                        <img src="{{ asset('images/instagram_default.svg') }}" class="p-icon" alt="instagram" title="instagram">
                                        <i class="dropdown icon">
                                            <img src="{{ asset('images/down-chevron.svg') }}">
                                        </i>
                                    </div>
                                    <ul class="select-icon-ul">
                                        @foreach ($social as $item)
                                            @if ($item->platform == 'instagram')
                                                <li class="options">
                                                    <img src="{{ asset('images/social-media/' . $item->file_path) }}" alt="{{ $item->platform }} icon">
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <input class="field social-field" type="text" name="instagram" value="" required placeholder="/HPhong24261595" maxlength="100">
                            </div>
                        </div>
                        <div class="flex">
                            <button type="button" class="btn-social">
                                <div class="basebtn-bottom-border"></div>
                                <span class="basebtn-content">Add More Link</span>
                                <span class="basebtn-content-link">
                                    @foreach ($platform as $item)
                                        @if (!in_array($item, array('twitter', 'facebook', 'instagram', 'youtube')))
                                            <img src="{{ asset('images/' . $item . '_default.svg') }}" alt="{{ $item }}" title="{{ $item }}" data-platform="{{ $item }}">
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

@push('js-step')
    <script src="{{ asset('js/step4.js') }}"></script>
@endpush

