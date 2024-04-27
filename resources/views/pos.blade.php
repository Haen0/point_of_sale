<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url('fonts/Montserrat-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            cursor: default;
        }
    </style>
</head>
<body>
    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container flex flex-row w-full mx-auto p-5 bg-slate-200 gap-5 rounded-xl shadow-lg">
                <div class="flex flex-row w-8/12">
                    <div class="grid grid-cols-3 grid-flow-row auto-rows-max basis-3/4 gap-5">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen2.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen3.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen2.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen3.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen3.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen2.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen2.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen3.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen2.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen3.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramen.jpg') }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 grid-flow-row auto-rows-max basis-1/4 ml-1.5 pl-3.5 gap-5">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramjn.jpg') }}" alt="ramen" class="bg-slate-600 w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ran2.jpg') }}" alt="ramen" class="bg-slate-600 w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/raen.jpg') }}" alt="ramen" class="bg-slate-600 w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">Ramen Shoyu</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ren2.jpg') }}" alt="ramen" class="bg-slate-600 w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu kare gar chi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('img/ramn3.jpg') }}" alt="ramen" class="bg-slate-600 w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen Shoyu udon tnu kui ga hachi</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col rounded-lg overflow-hidden shadow-lg h-fit">
                    <div class="flex justify-between items-center bg-blue-50">
                        <div class="flex flex-col bg-blue-200 p-2 items-center w-1/5">
                            <svg class="w-[40px] h-[40px] p-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <p class="text-xs">profile</p>
                        </div>
                        <div class="text-3xl w-4/5">
                            <p class="text-center bg-blue-50">New Customer</p>
                        </div>
                        <div class="flex flex-col bg-blue-200 p-2 items-center w-1/5">
                            <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5"/>
                            </svg>
                            <p class="text-xs truncate ">price list</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white" id="accordion-collapse" data-accordion="collapse">
                        <div class="flex justify-center p-4 border-b-4 bg-white" id="accordion-collapse-heading-1" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <p class="text-lg cursor-default">Dine in</p>
                            <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                            </svg>
                        </div>
                        <div class="p-5 text-lg" id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            
                            <ul class="dark:divide-gray-700">
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex min-w-0 w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Ramen cakalang udang rebon khas cianjur
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 320.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex min-w-0 w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Ramen cakalang udang rebon khas cianjur
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 320.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex min-w-0 w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Ramen cakalang udang rebon khas cianjur
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 320.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex min-w-0 w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Ramen cakalang udang
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x20
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 320.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                                <li class="pb-3 sm:pb-4 flex flex-col ">
                                    <div class="flex w-full items-center">
                                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                            Neil Sims
                                        </p>
                                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                            x2
                                        </p>
                                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                                            Rp 2.000.000
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-center p-4 mb-4 border-y-4 text-lg">
                            <p class="text-slate-500 hover:text-slate-400 cursor-default">Clear sale</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex">
                            <div class="w-full text-center text-xl p-4 border-r-2 border-white hover:bg-slate-300">Save Bill</div>
                            <div class="w-full text-center text-xl p-4 hover:bg-slate-300">Print Bill</div>
                        </div>
                        <div class="flex bg-blue-400 hover:bg-blue-500 items-center rounded-b-lg">
                            <div class="p-4 border-r-2">
                                <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 20v-5h2v6.988H3V15h1.98v5H17Z"/>
                                <path d="m6.84 14.522 8.73 1.825.369-1.755-8.73-1.825-.369 1.755Zm1.155-4.323 8.083 3.764.739-1.617-8.083-3.787-.739 1.64Zm3.372-5.481L10.235 6.08l6.859 5.704 1.132-1.362-6.859-5.704ZM15.57 17H6.655v2h8.915v-2ZM12.861 3.111l6.193 6.415 1.414-1.415-6.43-6.177-1.177 1.177Z"/>
                                </svg>
                            </div>
                            <div class="w-full p-4">
                                <p class="text-3xl text-center">Charge Rp <span>10.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>