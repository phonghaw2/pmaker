@push('dashboard-font')
<link rel="preload" href="https://hashnode.com/fonts/SuisseIntl-Book-WebXL.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://hashnode.com/fonts/SuisseIntl-Medium-WebXL.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://hashnode.com/fonts/SuisseIntl-SemiBold-WebXL.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://hashnode.com/fonts/SuisseIntl-Bold-WebXL.woff2" as="font" type="font/woff2" crossorigin="anonymous">
@endpush

<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div class="flex flex-row flex-wrap items-center justify-between">
       <h2 class="text-3xl mb-10 font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">Published (22)</h2>
       <div class="flex flex-row mb-10 text-base"><button class="flex flex-row items-center button-transparent md:px-3 md:mr-2 text-blue-600 dark:text-blue-600 focus:border-red-600"><span class="capitalize">published</span></button><button class="flex flex-row items-center button-transparent md:px-3 md:mr-2  focus:border-red-600"><span class="capitalize">scheduled</span></button><button class="flex flex-row items-center button-transparent md:px-3 md:mr-2  focus:border-red-600"><span class="capitalize">deleted</span></button></div>
    </div>
    <div class="flex flex-row justify-between mb-2"><span class="text-lg font-semibold text-slate-600 font-heading dark:text-white">Article</span><span class="hidden md:block pr-24 text-lg font-semibold text-slate-600 font-heading dark:text-white">Status</span></div>
    <div style="height:1px" class="w-full mb-2 bg-slate-100 dark:bg-slate-700"></div>
    @foreach ($articles as $article)
        <div class="flex flex-row flex-wrap items-start justify-between py-6 mb-4 border-b dark:border-slate-800/80">
        <div class="w-full mb-4 mr-4 md:w-auto md:mb-0 md:flex-1">
            <h1 class="mb-1 text-2xl font-extrabold text-slate-900 dark:text-slate-100 font-heading">
                <a href="https://phonghaw2coder.hashnode.dev/title-too-short" target="_blank">{{ $article->title }}</a>
            </h1>
            <p class="text-slate-500">{{ $article->time_read }} min read - <span class="font-semibold">Published on {{ $article->publish_time }}</span></p>
        </div>
        <div class="relative flex flex-row items-center md:justify-start h-30px">
            <div class="flex flex-col" data-published="{{ $article->publish_tag }}"><span class="bg-slate-200 text-slate-700 cursor-pointer text-sm uppercase font-bold w-28 text-center rounded-lg px-2 py-1">published</span></div>
            <button data-article-id="" class="flex flex-row rounded-lg ml-8 px-2 py-3 border border-transparent hover:bg-slate-100 dark:hover:bg-slate-800 focus:border-red-600">
                <div class="rounded-full bg-black dark:bg-white" style="height: 4px; width: 4px;"></div>
                <div class="rounded-full bg-black dark:bg-white ml-1" style="height: 4px; width: 4px;"></div>
                <div class="rounded-full bg-black dark:bg-white ml-1" style="height: 4px; width: 4px;"></div>
            </button>
        </div>
        </div>
    @endforeach
    <span style="font-size: 0px;"></span>
</div>

@push('js-dashboard')
<script>
    $(document).ready(function () {
        $('[data-published]').hover(function () {
                // over
                const tag = document.createElement('div');
                tag.classList.add('absolute', 'text-xs', 'z-50', 'py-2', 'px-4', 'rounded-lg', 'left-0', 'mt-1', 'text-white', 'bg-slate-800', 'shadow-lg', 'top-100');
                tag.innerHTML = '<span>Published on<br>' + $(this).data( "published" ) + ' </span>';
                this.parentElement.appendChild(tag);

            }, function () {
                // out
                this.parentElement.removeChild(this.parentElement.lastChild);
            }
        );
        $('[data-article-id]').click(function (e) {
            let have_div = false;
            if ($(this.parentElement).children('#article-action').length > 0) {
                have_div = true;
            }
            $("#article-action").remove();
            if (!have_div) {
                const article_action = document.createElement('div');
                article_action.id = 'article-action';
                article_action.classList.add('absolute','border','overflow-hidden','z-50','md:right-0','w-56','h-auto','mt-1','bg-white','rounded-lg','shadow-lg','dark:border-slate-800/80','top-100','dark:bg-slate-950');
                let strHTML = '<a href="/edit/clm1bgm8l000208mi9tvfhucb" class=" block w-full border border-transparent rounded-tl-lg rounded-tr-lg dark:bg-slate-950 leading-normal text-left font-semibold p-4 text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800">Edit</a>'
                            + '<button class=" text-red-600 rounded-bl-lg rounded-br-lg block w-full border border-transparent leading-normal hover:bg-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800 text-left font-semibold p-4">Delete</button></div>';
                article_action.innerHTML = strHTML;
                this.parentElement.appendChild(article_action);
            }
        });
    });
</script>
@endpush
