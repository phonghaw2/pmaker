<div class="relative w-10 h-10">
    <button type="button" aria-label="Profile Dropdown" id="profile-dropdown" class="block w-full h-full overflow-hidden bg-slate-300 rounded-full focus:outline-none">
        <img alt="Ha Quoc Phong" class="block w-full" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1658477717687/TfdhfyaOM.png?w=200&amp;h=200&amp;fit=crop&amp;crop=faces&amp;auto=compress">
    </button>
    <div id="profile-area" class="hidden absolute right-0 mt-4 overflow-hidden bg-white border rounded-lg shadow-xl top-100 w-72 dark:bg-black dark:border-slate-800">
        <div class="relative z-20 flex bg-white rounded-lg w-144 dark:bg-black transition-all ">
        <section class="transform translate-x-0 visible opacity-100 flex flex-col flex-1 transition-all">
            <div class="py-3" style="max-width: 18rem;">
                <a href="/@Phonghaw2" aria-label="User Profile" class="flex flex-row items-center px-4 py-1 hover:bg-slate-100 dark:hover:bg-slate-700" >
                    <div class="shrink-0 mr-4 overflow-hidden rounded-full w-9 h-9">
                        <img alt="Ha Quoc Phong" class="block" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1658477717687/TfdhfyaOM.png?w=200&amp;h=200&amp;fit=crop&amp;crop=faces&amp;auto=compress">
                    </div>
                    <div class="flex-1 min-w-0 leading-tight">
                        <div class="flex flex-row items-center">
                            <h2 title="Ha Quoc Phong" class="text-base font-semibold text-slate-900 truncate ">{{ $data->name }}</h2>
                        </div>
                        <p class="text-sm text-slate-600 truncate dark:text-slate-200">@Phonghaw2</p>
                    </div>
                    <div class="flex"><span class="status-dot offline"></span></div>
                </a>
            </div>
            <hr class="flex-1 h-px mx-6 dark:border-slate-800">
            <div class="py-3" style="max-width: 18rem;">
                <a href="/@Phonghaw2" aria-label="User Profile" class="flex flex-row items-center px-4 py-1 hover:bg-slate-100 dark:hover:bg-slate-700" >
                    <div class="shrink-0 mr-4 overflow-hidden rounded-full w-9 h-9">
                        <img alt="Ha Quoc Phong" class="block" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1658477717687/TfdhfyaOM.png?w=200&amp;h=200&amp;fit=crop&amp;crop=faces&amp;auto=compress">
                    </div>
                    <div class="flex-1 min-w-0 leading-tight">
                        <div class="flex flex-row items-center">
                            <h2 title="Ha Quoc Phong" class="text-base font-semibold text-slate-900 truncate ">{{ $data->name }}</h2>
                        </div>
                        <p class="text-sm text-slate-600 truncate dark:text-slate-200">@Phonghaw2</p>
                    </div>
                    <div class="flex"><span class="status-dot offline"></span></div>
                </a>
            </div>
        </section>
        </div>
    </div>
</div>
