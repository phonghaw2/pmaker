<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div class="flex flex-row items-center justify-between mb-10">
       <h2 class="text-3xl font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">Series</h2>
       <a class="flex flex-row items-center button-primary big" href="{{ route('dashboard.create-series') }}">
        <span>Create new Series</span>
    </a>
    </div>

    @foreach ($series as $serie)
        <div class="flex flex-row flex-wrap items-center justify-between py-6 mb-4 border-b dark:border-slate-800">
            <div class="flex-1 w-full mb-2 mr-4 md:w-auto md:mb-0">
            <h1 class="mb-1 text-2xl font-extrabold text-slate-900 dark:text-slate-100 font-heading">
                <a href="{{ route('page-series', ['user-code' => $data->user_code, 'series-slug' => $serie->slug]) }}">{{ $serie->name }}</a></h1>
            </div>
            <div class="flex flex-row items-center w-full md:w-auto">
            <a target="_blank" class="flex flex-row items-center mr-2 button-transparent text-blue-600" href="">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                    <path d="M400 288c-8.8 0-16 7.2-16 16v144c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V160c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H64c-35.35 0-64 28.65-64 64v288c0 35.35 28.65 64 64 64h288c35.35 0 64-28.65 64-64V304c0-8.8-7.2-16-16-16zM496 0H336c-8.8 0-16 7.156-16 16s7.2 16 16 16h121.4L180.7 308.7c-6.25 6.25-6.25 16.38 0 22.62 3.1 3.08 7.2 4.68 11.3 4.68s8.188-1.562 11.31-4.688L480 54.63V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.844-7.2-16-16-16z"></path>
                </svg>
                <span>View Series</span>
            </a>
            <a class="mr-2 button-transparent" href="">Edit Series</a>
            <form action="{{ route('dashboard.delete-series', $serie->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="button-transparent hover:text-red-600">Delete</button>
            </form>
            </div>
        </div>
    @endforeach
</div>

@if (session('error'))
    @push('css-dashboard')
        <link rel="stylesheet" href="{{ asset('css/home/dashboard/toast.css') }}">
    @endpush
    <div id="toast">
        <div class="toast toast-error" style="animation: 0.4s ease 0s 1 normal none running slideInLeft, 1s linear 4s 1 normal forwards running fadeOut;">
            <div class="toast-icon">
                <svg height="32" style="overflow:visible;enable-background:new 0 0 32 32" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><g id="Error"><circle cx="16" cy="16" id="BG" r="16" style="fill:#D72828;"/><path d="M14.5,25h3v-3h-3V25z M14.5,6v13h3V6H14.5z" style="fill:#E6E6E6;"/></g></g></g></svg>
            </div>
            <div class="toast-body">
                <h3 class="toast-title">Something went wrong!</h3>
                <p class="toast-msg">You are deleting a series that does not exist.</p>
            </div>
        </div>
    </div>
@endif
