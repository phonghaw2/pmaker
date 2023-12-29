<div class="p-social">
    <div class="choose-icon">
        <div class="choosen-icon">
            <img src="{{ asset($path) }}" id="choose-image-{{ $name }}" class="p-icon" alt="{{ $name }}">
            <i class="dropdown icon">
                <img src="{{ asset('images/down-chevron.svg') }}">
            </i>
        </div>
        <ul class=" select-icon-ul">
            @foreach ($social as $item)
                @if ($item->platform == $name)
                    <li class="options"
                        data-pick-platform="{{ $name }}"
                        data-image-src="{{ asset('images/social-media/' . $item->file_path) }}">
                        <img src="{{ asset('images/social-media/' . $item->file_path) }}" alt="{{ $name }} icon">
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <input class="field social-field" type="text"
            name="{{ $name }}" value="" required
            placeholder="{{ $placeholder }}"
            maxlength="{{ $length }}">
</div>
