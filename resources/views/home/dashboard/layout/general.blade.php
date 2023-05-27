<div class="p-5 col-span-full md:col-span-7 xl:col-span-8 xl:p-10 hsh-card">
    <div class="">
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-slate-600 xl:text-4xl font-heading dark:text-white">General Settings</h2>
        </div>
        <div class="mb-6">
            <label for="pubName" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Publication Name</label>
            <input type="text" class="input-text" id="pubName" placeholder="Publication Name" value="Phonghaw2 Blog">
        </div>
        <div class="mb-6">
            <label for="pubAbout" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                About <!-- -->Me
            </label>
            <textarea class="input-text min-h-16" id="pubAbout" placeholder="Tell the world the best thing about you…" style="height: 130px !important;">
                "Hi, My name is Phong. I'm a PHP Developer and a weightlifter.
                I’m currently learning : Laravel , VueJS"
            </textarea>
        </div>
    <div class="flex flex-row flex-wrap -mx-5">
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubTwitter" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg>
                <span>Twitter Profile</span>
                </label>
                <input type="url" pattern="(http|https)://twitter\.com\/(.+)|(http|https)://www\.twitter\.com\/(.+)" class="input-text }" id="pubTwitter" placeholder="https://twitter.com/username" value="https://twitter.com/HPhong24261595">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubMastodon" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" css="" viewBox="0 0 448 512">
                    <path d="M433 179.11c0-97.2-63.71-125.7-63.71-125.7-62.52-28.7-228.56-28.4-290.48 0 0 0-63.72 28.5-63.72 125.7 0 115.7-6.6 259.4 105.63 289.1 40.51 10.7 75.32 13 103.33 11.4 50.81-2.8 79.32-18.1 79.32-18.1l-1.7-36.9s-36.31 11.4-77.12 10.1c-40.41-1.4-83-4.4-89.63-54a102.54 102.54 0 0 1-.9-13.9c85.63 20.9 158.65 9.1 178.75 6.7 56.12-6.7 105-41.3 111.23-72.9 9.8-49.8 9-121.5 9-121.5zm-75.12 125.2h-46.63v-114.2c0-49.7-64-51.6-64 6.9v62.5h-46.33V197c0-58.5-64-56.6-64-6.9v114.2H90.19c0-122.1-5.2-147.9 18.41-175 25.9-28.9 79.82-30.8 103.83 6.1l11.6 19.5 11.6-19.5c24.11-37.1 78.12-34.8 103.83-6.1 23.71 27.3 18.4 53 18.4 175z"></path>
                </svg>
                <span>Mastodon Profile</span>
                </label>
                <input type="url" class="input-text }" id="pubMastodon" placeholder="https://mastodon.social/@username" value="">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubInstagram" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
                    <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                </svg>
                <span>Instagram Profile</span>
                </label>
                <input type="url" pattern="(http|https)://instagram\.com\/(.+)|(http|https)://www\.instagram\.com\/(.+)" class="input-text }" id="pubInstagram" placeholder="https://instagram.com/username" value="">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubGithub" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 496 512">
                    <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                </svg>
                <span>GitHub Profile</span>
                </label>
                <input type="url" pattern="(http|https)://github\.com\/(.+)|(http|https)://www\.github\.com\/(.+)" class="input-text }" id="pubGithub" placeholder="https://github.com/username" value="https://github.com/phonghaw2">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubWebsite" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                    <path d="M256 0c141.4 0 256 114.6 256 256S397.4 512 256 512 0 397.4 0 256 114.6 0 256 0zm0 480c16.7 0 40.4-14.4 61.9-57.3 9.9-19.8 18.2-44.6 23.2-70.7H170c5.9 26.1 14.2 50.9 24.1 70.7 21.5 42.9 45.2 57.3 61.9 57.3zm-91.7-160h183.4c2.8-20.2 4.3-41.7 4.3-64 0-22.3-1.5-43.8-4.3-64H164.3c-2.8 20.2-4.3 41.7-4.3 64 0 22.3 1.5 43.8 4.3 64zm176.8-160c-5-27-13.3-50.9-23.2-70.71C296.4 46.37 272.7 32 256 32c-16.7 0-40.4 14.37-61.9 57.29C184.2 109.1 175.9 133 170 160h171.1zm38 32c3.5 20.5 4.9 41.9 4.9 64s-1.4 43.5-4.9 64h91.6c6.1-20.3 9.3-41.8 9.3-64 0-22.2-3.2-43.7-9.3-64h-91.6zM327.5 43.66c21 28.33 37.6 68.74 47.2 116.34h83.7c-25.8-54.5-73.1-96.88-130.9-116.34zm-143 0C126.7 63.12 79.44 105.5 53.56 160h83.74c9.6-47.6 26.2-88.01 47.2-116.34zM32 256c0 22.2 3.24 43.7 9.28 64H132c-2.6-20.5-4-41.9-4-64s1.4-43.5 4-64H41.28C35.24 212.3 32 233.8 32 256zm426.4 96h-83.7c-9.6 47.6-26.2 88-47.2 116.3 57.8-19.4 105.1-61.8 130.9-116.3zm-321.1 0H53.56c25.88 54.5 73.14 96.9 130.94 116.3-21-28.3-37.6-68.7-47.2-116.3z"></path>
                </svg>
                <span>Your website</span>
                </label>
                <input type="url" class="input-text }" id="pubWebsite" placeholder="https://something.com" value="">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubHashnode" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 200 200" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.742 66.824c-18.323 18.323-18.323 48.029 0 66.352l53.082 53.082c18.323 18.323 48.029 18.323 66.352 0l53.082-53.082c18.323-18.323 18.323-48.03 0-66.352l-53.082-53.082c-18.323-18.323-48.03-18.323-66.352 0L13.742 66.824zm109.481 56.399c12.826-12.826 12.826-33.62 0-46.446s-33.62-12.826-46.446 0-12.826 33.62 0 46.446 33.62 12.826 46.446 0z"></path>
                </svg>
                <span>Hashnode Profile</span>
                </label>
                <input type="url" pattern="(http|https)://hashnode\.com\/(.+)|(http|https)://www\.hashnode\.com\/(.+)" class="input-text }" id="pubHashnode" placeholder="https://hashnode.com/@username" value="https://hashnode.com/@Phonghaw2">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubYoutube" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 576 512">
                    <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                </svg>
                <span>YouTube Channel</span>
                </label>
                <input type="url" pattern="(http|https)://youtube\.com\/channel\/(.+)|(http|https)://www\.youtube\.com\/channel\/(.+)|(http|https)://youtube\.com\/c\/(.+)|(http|https)://www\.youtube\.com\/c\/(.+)|(http|https)://youtube\.com\/@([a-zA-Z0-9._-]+)|(http|https)://www\.youtube\.com\/@([a-zA-Z0-9._-]+)" class="input-text }" id="pubYoutube" placeholder="https://www.youtube.com/channel/channel-name" value="https://www.youtube.com/@phonghaw2">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubDaily" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
                    <g fill-rule="evenodd">
                        <path d="M19.174 11.59l-2.207-2.208 1.103-2.207 3.587 3.587a1.17 1.17 0 010 1.655l-4.415 4.416a1.17 1.17 0 01-1.655-1.656l3.587-3.587z" opacity=".56"></path>
                        <path d="M15.588 6.343a1.17 1.17 0 011.655 0l.828.828-9.658 9.657a1.17 1.17 0 01-1.655 0L5.93 16l9.658-9.657zm-4.14 3.035l-1.655 1.656-2.208-2.208-2.76 2.76 2.208 2.207L5.93 16l-3.587-3.587a1.17 1.17 0 010-1.655l4.415-4.415a1.17 1.17 0 011.655 0l3.036 3.035z"></path>
                    </g>
                </svg>
                <span>Daily.dev Profile</span>
                </label>
                <input type="url" pattern="(http|https)://app\.daily\.dev\/(.+)" class="input-text }" id="pubDaily" placeholder="https://app.daily.dev/username" value="">
            </div>
        </div>
        <div class="w-full px-5 lg:w-1/2">
            <div class="mb-6">
                <label for="pubLinkedin" class="flex flex-row items-center mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 448 512">
                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                </svg>
                <span>LinkedIn Profile</span>
                </label>
                <input type="url" pattern="(http|https)://linkedin\.com\/in\/(.+)|(http|https)://www\.linkedin\.com\/in/(.+)|(http|https)://linkedin\.com\/company\/(.+)|(http|https)://www\.linkedin\.com\/company/(.+)" class="input-text }" id="pubLinkedIn" placeholder="https://www.linkedin.com/in/johndoe" value="https://www.linkedin.com/in/phonghaw2/">
            </div>
        </div>
    </div>
    <div class="mb-6"><label for="pubImprint" class="block mb-2 text-lg font-medium text-slate-600 dark:text-slate-300">Impressum</label><small class="block mb-2 -mt-2 text-base italic text-slate-500 dark:text-slate-400">Markdown supported. If you are not sure about adding an impressum, please leave it blank. <a class="text-blue-600" href="https://en.wikipedia.org/wiki/Impressum" target="_blank">More details</a>.</small><textarea class="input-text" id="pubImprint" placeholder="Enter the impressum here" style="height: 58px !important;"></textarea></div>
    </div>
</div>

