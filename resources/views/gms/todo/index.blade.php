@extends('gms.layouts.master')
@push('css-gms')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush
@section('content')
    <div data-scroll-container="" id="main">
        <main data-barba="container" data-barba-namespace="chapter" class="c-main" data-theme="coal">
            <div class="p-container">
                <div class="p-child-container mt-n5">
                    <div class="col-lg-3 pad-right">
                        <div class="card" style="height: calc(100vh - 70px - 60px - 142px);">
                            <div class="card-body">
                                <button class="btn inline-flex justify-center btn-dark w-full block w-100">
                                    <span class="flex items-center">
                                        <span class="mr-2 text-[20px]">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                    width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                                    viewBox="0 0 24 24" class="iconify iconify--heroicons-outline">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <span>Add task</span>
                                    </span>
                                    <!---->
                                    <!---->
                                </button>
                                <div class="mt-3 mx-n4 px-4 contact-sidebar-menu" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 24px;">
                                                        <ul class="list mt-6">
                                                            <li>
                                                                <label class="flex items-center cursor-pointer px-2 py-3 rounded bg-slate-100 text-slate-900 dark:bg-slate-700 dark:text-slate-200">
                                                                    <div class="flex-1 flex space-x-2">
                                                                        <span class="text-xl text-slate-900 dark:text-slate-100"><span>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"  width="1em" height="1em"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"
                                                                                    class="iconify iconify--uil">
                                                                                    <path fill="currentColor"
                                                                                        d="M19 2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a2.81 2.81 0 0 0 .49-.05l.3-.07h.12l.37-.14l.13-.07c.1-.06.21-.11.31-.18a3.79 3.79 0 0 0 .38-.32l.07-.09a2.69 2.69 0 0 0 .27-.32l.09-.13a2.31 2.31 0 0 0 .18-.35a1 1 0 0 0 .07-.15c.05-.12.08-.25.12-.38v-.15a2.6 2.6 0 0 0 .1-.6V5a3 3 0 0 0-3-3ZM5 20a1 1 0 0 1-1-1v-4.31l3.29-3.3a1 1 0 0 1 1.42 0l8.6 8.61Zm15-1a1 1 0 0 1-.07.36a1 1 0 0 1-.08.14a.94.94 0 0 1-.09.12l-5.35-5.35l.88-.88a1 1 0 0 1 1.42 0l3.29 3.3Zm0-5.14L18.12 12a3.08 3.08 0 0 0-4.24 0l-.88.88L10.12 10a3.08 3.08 0 0 0-4.24 0L4 11.86V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z">
                                                                                    </path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                    <span class="capitalize text-sm font-medium"> My Task </span></div>
                                                                    <span class="flex-none font-normal capitalize text-sm"></span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label
                                                                    class="flex items-center cursor-pointer px-2 py-3 rounded text-slate-600 dark:text-slate-300">
                                                                    <div class="flex-1 flex space-x-2"><span
                                                                            class="text-xl text-slate-400 dark:text-slate-400"><span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    aria-hidden="true" role="img"
                                                                                    width="1em" height="1em"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="iconify iconify--heroicons">
                                                                                    <path fill="none" stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            class="capitalize text-sm font-normal">Starred</span>
                                                                    </div><span
                                                                        class="flex-none font-normal capitalize text-sm"></span>
                                                                </label></li>
                                                            <li><label
                                                                    class="flex items-center cursor-pointer px-2 py-3 rounded text-slate-600 dark:text-slate-300">
                                                                    <div class="flex-1 flex space-x-2"><span
                                                                            class="text-xl text-slate-400 dark:text-slate-400"><span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    aria-hidden="true" role="img"
                                                                                    width="1em" height="1em"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="iconify iconify--heroicons">
                                                                                    <path fill="none" stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            class="capitalize text-sm font-normal">Completed</span>
                                                                    </div><span
                                                                        class="flex-none font-normal capitalize text-sm"></span>
                                                                </label></li>
                                                            <li><label
                                                                    class="flex items-center cursor-pointer px-2 py-3 rounded text-slate-600 dark:text-slate-300">
                                                                    <div class="flex-1 flex space-x-2"><span
                                                                            class="text-xl text-slate-400 dark:text-slate-400"><span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    aria-hidden="true" role="img"
                                                                                    width="1em" height="1em"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="iconify iconify--heroicons">
                                                                                    <path fill="none" stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            class="capitalize text-sm font-normal">Trash</span>
                                                                    </div><span
                                                                        class="flex-none font-normal capitalize text-sm"></span>
                                                                </label></li>
                                                        </ul>
                                                        <div
                                                            class="block py-4 text-slate-800 dark:text-slate-400 font-semibold text-xs uppercase">
                                                            Tags </div>
                                                        <ul>
                                                            <li
                                                                class="flex space-x-2 text-sm capitalize py-2 cursor-pointer items-center font-normal text-slate-600 dark:text-slate-300">
                                                                <span
                                                                    class="inline-block h-2 w-2 rounded-full ring-opacity-30 transition-all duration-150 bg-danger-500 ring-danger-500




                    ring-0"></span><span
                                                                    class="transition duration-150">Team</span></li>
                                                            <li
                                                                class="flex space-x-2 text-sm capitalize py-2 cursor-pointer items-center font-normal text-slate-600 dark:text-slate-300">
                                                                <span
                                                                    class="inline-block h-2 w-2 rounded-full ring-opacity-30 transition-all duration-150 bg-success-500 ring-success-500



                    ring-0"></span><span
                                                                    class="transition duration-150">low</span></li>
                                                            <li
                                                                class="flex space-x-2 text-sm capitalize py-2 cursor-pointer items-center font-normal text-slate-600 dark:text-slate-300">
                                                                <span
                                                                    class="inline-block h-2 w-2 rounded-full ring-opacity-30 transition-all duration-150 bg-warning-500 ring-warning-500


                    ring-0"></span><span
                                                                    class="transition duration-150">medium</span></li>
                                                            <li
                                                                class="flex space-x-2 text-sm capitalize py-2 cursor-pointer items-center font-normal text-slate-600 dark:text-slate-300">
                                                                <span
                                                                    class="inline-block h-2 w-2 rounded-full ring-opacity-30 transition-all duration-150 bg-primary-500 ring-primary-500

                    ring-0"></span><span
                                                                    class="transition duration-150">high</span></li>
                                                            <li
                                                                class="flex space-x-2 text-sm capitalize py-2 cursor-pointer items-center font-normal text-slate-600 dark:text-slate-300">
                                                                <span
                                                                    class="inline-block h-2 w-2 rounded-full ring-opacity-30 transition-all duration-150 bg-info-500 ring-info-500
                    ring-0"></span><span
                                                                    class="transition duration-150">update</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 368px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar simplebar-visible"
                                            style="height: 0px; display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-9 pad-left">
                        <div class="card" style="height: calc(100vh - 70px - 60px - 142px);">
                            <div class="card-body">
                                <div id="recomended-jobs" class="table-card">
                                    <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                        <div class="gridjs-wrapper" style="height: auto;">
                                            <table role="grid" class="gridjs-table" style="height: auto;">
                                                <thead class="gridjs-thead">
                                                    <tr class="gridjs-tr">
                                                        <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0">
                                                            <div class="gridjs-th-content">Name</div>
                                                            <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                        <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0">
                                                            <div class="gridjs-th-content">Email</div><button tabindex="-1"aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                        <th data-column-id="phone" class="gridjs-th gridjs-th-sort"
                                                            tabindex="0">
                                                            <div class="gridjs-th-content">Phone</div><button tabindex="-1"
                                                                aria-label="Sort column ascending"
                                                                title="Sort column ascending"
                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                        <th data-column-id="country" class="gridjs-th gridjs-th-sort"
                                                            tabindex="0">
                                                            <div class="gridjs-th-content">Country</div><button tabindex="-1"
                                                                aria-label="Sort column ascending"
                                                                title="Sort column ascending"
                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                        <th data-column-id="label" class="gridjs-th gridjs-th-sort"
                                                            tabindex="0">
                                                            <div class="gridjs-th-content">Label</div><button tabindex="-1"
                                                                aria-label="Sort column ascending"
                                                                title="Sort column ascending"
                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                        <th data-column-id="action" class="gridjs-th gridjs-th-sort"
                                                            tabindex="0" style="width: 150px;">
                                                            <div class="gridjs-th-content">Action</div><button tabindex="-1"
                                                                aria-label="Sort column ascending"
                                                                title="Sort column ascending"
                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                        </th>
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                        <div id="gridjs-temp" class="gridjs-temp"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--end col-->
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
