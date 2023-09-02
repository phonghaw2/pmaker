<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div class="mb-10">
        <h2 class="text-3xl font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">New Series</h2>
    </div>
    <form action="{{ route('dashboard.store-series') }}" id="create-series-form">
        @csrf
    <div class="rounded-lg ">
        <div class="flex flex-col mx-auto mb-8">
            <label for="nameField" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Series name</label>
            <div class="flex-1">
                <input type="text" name="name" id="nameField" class="input-text" placeholder="Enter series name" maxlength="80" value="">
            </div>
        </div>
        <div class="flex flex-col items-start w-full mb-6 md:w-1/2 md:pr-4">
            <label for="slugField" class="block mb-2 text-sm font-semibold text-slate-900 dark:text-slate-300">Series Slug</label>
            <small class="block mb-2 -mt-2 text-base italic text-slate-500 dark:text-slate-400">e.g. javascript-basics. Only lowercase alphanumeric and "-" are allowed. Only include the path, not the domain name.</small>
            <input type="text" name="slug" class="input-text" id="slugField" placeholder="series-path" value="">
        </div>
        <div class="flex flex-col mx-auto mb-8 ">
            <label for="descField" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Describe the series</label>
            <textarea type="text" name="describe" id="descField" class="input-text min-h-30" placeholder="In this series, I will…" maxlength="200"></textarea>
            <small class="block mt-1 ml-2 leading-tight text-slate-600"> <!-- -->0/200</small>
        </div>
        <div class="flex flex-col mx-auto mb-8 ">
            <label for="descField" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Set a cover for the series</label>
            <label class="flex flex-col items-center justify-center w-full px-4 py-16 tracking-wide uppercase border-2 border-dashed rounded-lg cursor-pointer hover:border-blue-600 dark:border-slate-800/80 hover:shadow-xl text-slate-700 dark:text-slate-200">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path></svg>
                <span class="mt-2 text-base leading-normal">Upload</span>
                <input type="file" name="cover" class="hidden custom-file-input" id="customFile">
            </label>
        </div>

        <div class="flex flex-col w-full mb-6 mb-8 md:w-1/2 md:pr-4 ">
            <label for="sortOrder" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Sort your post in this series and show:</label>
            <div class="relative text-slate-700 border rounded-lg dark:text-slate-400 dark:border-slate-800/80">
                <select name="sort" id="sortOrder" class="w-full p-4 text-base text-slate-900 border rounded-lg outline-none appearance-none bg-slate-50 dark:text-white dark:bg-slate-950 dark:border-slate-800/80">
                    <option selected="" value="1">Oldest Post First</option>
                    <option value="2">Latest Post First</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex flex-row items-center px-2 pointer-events-none">
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 448 512"><path d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z"></path></svg>
                </div>
            </div>
        </div>
    </div>
    <div style="min-height: 89px;">
        <div>
            <button type="submit" class="flex flex-row items-center btn-primary undefined">Create Series</button>
        </div>
    </div>
    </form>
</div>

@push('js-dashboard')
    <script>
        $(document).ready(function () {
            $("#create-series-form").submit(function(e) {

                e.preventDefault();

                var form = $(this);
                var actionUrl = form.attr('action');
                const formData = new FormData(form[0]);

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    dataType: 'json',
                    data: formData,
                    async: false,
                    cache: false,
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data', // serializes the form's elements.
                    success: function(data)
                    {
                        document.location.href = '{{ route('dashboard.appearance') }}';
                    },
                    error: function (res)
                    {
                        alert(res.responseJSON.message);
                    }
                });
            });
        });
    </script>
@endpush
