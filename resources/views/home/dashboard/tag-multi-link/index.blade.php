<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div class="flex flex-row items-center justify-between mb-10">
       <h2 class="text-3xl font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">Tags & Multi-links</h2>
       <a class="flex flex-row items-center button-primary big" href="{{ route('dashboard.create-series') }}">
        <span>Create new</span>
    </a>
    </div>
    @foreach ($tags as $tag)
    <div class="flex flex-row flex-wrap items-flex-start justify-between py-6 mb-4 border-b dark:border-slate-800">
        <div class="flex-1 w-full mb-2 mr-4 md:w-auto md:mb-0">
            <h1 class="mb-1 text-2xl font-extrabold text-slate-900 dark:text-slate-100 font-heading">
                <a href="">
                    <span>{{ $tag->name }}</span>
                    <small class="block italic font-normal opacity-50">{{ $tag->sub_name }}</small>
                </a>
            </h1>
            <ul class="list-link">
                @foreach ($tag->children as $link)
                <li>
                    <a href="{{ $link->link }}" class="link-url">
                        <h6>{{ $link->link }}</h6>
                        <svg width="14" height="13" fill="none" class="link-svg"><path fill="#F9FDFE" fill-rule="evenodd" d="M1.002.5h12v12h-1V2.207L1.356 12.854l-.708-.708L11.295 1.5H1.002v-1Z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="flex flex-row items-center w-full md:w-auto">
            <button class="button-transparent small flex flex-row items-center tooltip-handle mr-2 " data-title="Show the page on the blog's Navbar">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 640 512">
                    <path d="M637 485.25L23 1.75A8 8 0 0011.76 3l-10 12.51A8 8 0 003 26.75l614 483.5a8 8 0 0011.25-1.25l10-12.51a8 8 0 00-1.25-11.24zM320 96a128.14 128.14 0 01128 128c0 21.62-5.9 41.69-15.4 59.57l25.45 20C471.65 280.09 480 253.14 480 224c0-36.83-12.91-70.31-33.78-97.33A294.88 294.88 0 01576.05 256a299.73 299.73 0 01-67.77 87.16l25.32 19.94c28.47-26.28 52.87-57.26 70.93-92.51a32.35 32.35 0 000-29.19C550.3 135.59 442.94 64 320 64a311.23 311.23 0 00-130.12 28.43l45.77 36C258.24 108.52 287.56 96 320 96zm60.86 146.83A63.15 63.15 0 00320 160c-1 0-1.89.24-2.85.29a45.11 45.11 0 01-.24 32.19zm-217.62-49.16A154.29 154.29 0 00160 224a159.39 159.39 0 00226.27 145.29L356.69 346c-11.7 3.53-23.85 6-36.68 6A128.15 128.15 0 01192 224c0-2.44.59-4.72.72-7.12zM320 416c-107.36 0-205.47-61.31-256-160 17.43-34 41.09-62.72 68.31-86.72l-25.86-20.37c-28.48 26.28-52.87 57.25-70.93 92.5a32.35 32.35 0 000 29.19C89.71 376.41 197.07 448 320 448a311.25 311.25 0 00130.12-28.43l-29.25-23C389.06 408.84 355.15 416 320 416z"></path>
                </svg>
                <span>Hidden</span>
            </button>
            <button class="mr-2 button-transparent small disabled tooltip-handle" data-title="You cannot edit this page" disabled="">Edit tags</button>
            <button class="button-transparent small hover:text-red-600 tooltip-handle" data-title="You cannot delete this page" disabled="">Delete</button>
        </div>
    </div>
    @endforeach
</div>

