<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div>
       <div class="mb-10">
          <h2 class="text-3xl font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">Appearance Settings</h2>
       </div>
       <div class="mb-6">
          <label class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Portfolio layout</label>
          <div class="flex flex-row flex-wrap">
             <div class="flex w-full md:w-1/3 px-5 flex-row "><input type="radio" class="mr-2" id="magazine" name="pub-layout" value="magazine"><label for="magazine"><img class="block mb-1 rounded hover:shadow cursor-pointer border" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1636706743943/YLupdhItt.png?auto=compress"><span class="block p-1 font-semibold text-center text-slate-800 dark:text-slate-300">Magazine Layout</span></label></div>
             <div class="flex w-full md:w-1/3 px-5 flex-row "><input type="radio" class="mr-2" id="stacked" name="pub-layout" value="stacked"><label for="stacked"><img class="block mb-1 rounded cursor-pointer hover:shadow border" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1636706762583/3hSd15WPH.png?auto=compress"><span class="block p-1 font-semibold text-center text-slate-800 dark:text-slate-300">Stacked Layout (Default)</span></label></div>
             <div class="flex w-full md:w-1/3 px-5 flex-row selected"><input type="radio" class="mr-2" id="grid" name="pub-layout" value="grid" checked=""><label for="grid"><img class="block mb-1 rounded cursor-pointer hover:shadow border-blue-600 border-2" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1636706753003/sZG7g8sBQ.png?auto=compress"><span class="block p-1 font-semibold text-center text-slate-800 dark:text-slate-300">Grid Layout</span></label></div>
          </div>
       </div>
       <div class="flex flex-row flex-wrap -mx-5">
          <div class="w-full px-5">
             <div class="mb-6">
                <label class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Preview</label>
                <div class="relative w-2/3 mb-2 border rounded dark:border-slate-800">
                    <iframe src="{{ route('dashboard.appearance') }}" frameborder="0" style="width:100%;height: 800px;border: 2px solid;"></iframe>
                </div>
             </div>
          </div>
       </div>
       <div class="flex flex-row flex-wrap -mx-5">
          <div class="w-full px-5 lg:w-1/2">
             <div class="mb-6">
                <label class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Custom CSS</label><small class="block mb-2 -mt-2 text-base italic text-slate-500 dark:text-slate-400">Change/override the appearance of your blog using custom CSS</small>
                <div class="flex flex-row items-center px-5 py-2 mb-2 border rounded dark:border-slate-800">
                   <div class="flex-1 block p-2 -mx-2"><span class="flex flex-row items-center"><span class="mr-4 font-bold dark:text-slate-100 text-slate-900">Custom CSS Enabled</span></span></div>
                   <button class="button-transparent block text-green-600 dark:text-green-600">
                      <svg class="w-8 h-8 fill-current" viewBox="0 0 576 512">
                         <path d="M384 96c88.426 0 160 71.561 160 160 0 88.426-71.561 160-160 160H192c-88.426 0-160-71.561-160-160 0-88.425 71.561-160 160-160h192m0-32H192C85.961 64 0 149.961 0 256s85.961 192 192 192h192c106.039 0 192-85.961 192-192S490.039 64 384 64zm0 304c61.856 0 112-50.144 112-112s-50.144-112-112-112-112 50.144-112 112c0 28.404 10.574 54.339 27.999 74.082C320.522 353.335 350.548 368 384 368z"></path>
                      </svg>
                   </button>
                </div>
                <div class="flex flex-row items-start">
                   <a href="appearance/customcss" class="flex flex-row items-center font-bold button-transparent text-blue-600 dark:text-blue-600">
                      <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 384 512">
                         <path d="M155.3 276.7c-6.25-6.25-16.38-6.25-22.62 0l-48 48c-6.25 6.25-6.25 16.38 0 22.62l48 48C135.8 398.4 139.9 400 144 400s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62L118.6 336l36.69-36.69c6.31-6.21 6.31-16.41.01-22.61zm210-151.4L258.8 18.8C246.7 6.742 230.5 0 213.5 0H64C28.65 0 0 28.66 0 64l.006 384c0 35.34 28.65 64 64 64H320c35.35 0 64-28.66 64-64V170.5c0-17-6.7-33.2-18.7-45.2zM224 34.08c4.477 1.562 8.666 3.844 12.12 7.297l106.5 106.5c3.48 3.423 5.78 7.623 7.28 12.123H240c-8.8 0-16-7.2-16-16V34.08zM352 448c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V64c0-17.64 14.36-32 32-32h128v112c0 26.5 21.5 48 48 48h112v256zM228.7 299.3l36.7 36.7-36.69 36.69c-6.25 6.25-6.25 16.38 0 22.62C231.8 398.4 235.9 400 240 400s8.188-1.562 11.31-4.688l48-48c6.25-6.25 6.25-16.38 0-22.62l-48-48c-6.25-6.25-16.38-6.25-22.62 0s-6.29 16.408.01 22.608z"></path>
                      </svg>
                      <span>Edit Custom Stylesheet</span>
                   </a>
                </div>
             </div>
          </div>
          <div class="w-full px-5 lg:w-1/2"></div>
       </div>
    </div>
 </div>
