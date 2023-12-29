<div class="pick-container">
    <div class="project-dv">
        <h1 class="h4 margin-bottom-16" style="color: #7bf2f6;">Step 5: Your almost done!</h1>
    </div>
    <div class="flex pmaker-info p-mask">
        <div class="p-col left">
            <div class="text eyebrow red">Your layout</div>
            <div class="fo-desc__wrap">
                <div class="fo-desc">
                    <h4 class="h-h4 var form">Website layout shows the importance of each content. <br> Choose a highlight  <br> for yourself.</h4>
                </div>
            </div>
        </div>
        <div class="p-col right">
            <form action="" class="form-info">
                <div class="card">
                    <div class="front card-item">
                        <div class="form-layout">
                            @foreach ($layouts as $layout)
                            <div class="layout-card">
                                <div class="card-callout">
                                    <div class="card-callin">
                                        <div class="card-cell">
                                            <div class="number">{{ $layout['numb'] }}</div>
                                        </div>
                                        <div class="card-cell large-shrink">
                                            <span class="nbm">{{ $layout['name'] }}</span>
                                        </div>
                                        <div class="layout-image">
                                            <img src="{{ asset('images/layout/' . $layout['img']) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="f-back" role="button" onclick="turnBack('{{ route('step.step_4') }}')">
    <img src="{{ asset('images/sign-back.png') }}" alt="">
</div>

@include('home.step.layout.p-func-right')

@push('js-step')
    <script src="{{ asset('js/step4.js') }}"></script>
@endpush

