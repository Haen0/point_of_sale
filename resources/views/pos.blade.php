<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Point Of Sale</title>
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

    @if(session('success'))
        <div id="alert-border-4" class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('success_tambah'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session('success_tambah') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('success_ubah'))
        <div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session('success_ubah') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @elseif (session('success_hapus'))
        <div id="alert-border-5" class="flex items-center p-4 border-t-4 border-gray-300 bg-gray-50 dark:bg-gray-800 dark:border-gray-600" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium text-gray-800 dark:text-gray-300">
                {{ session('success_hapus') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white" data-dismiss-target="#alert-border-5" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">POS</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">TAMBAH MENU</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container flex flex-row w-full mx-auto p-5 bg-slate-200 gap-5 rounded-xl shadow-lg">
                <div class="flex flex-row w-8/12">
                    <div class="grid grid-cols-3 grid-flow-row auto-rows-max basis-3/4 gap-5">
                        @foreach ($menus as $menu)
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:opacity-90" onclick="tambahMenu('{{ $menu->id }}', '{{ $menu->nama }}', '{{ $menu->harga }}')">
                            <img src="{{ asset('storage/' . $menu->foto) }}" alt="ramen" class="w-full h-56 object-cover">
                            <p class="text-center p-2 text-md whitespace-nowrap">{{ $menu->nama }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-1 grid-flow-row auto-rows-max basis-1/4 ml-1.5 pl-3.5 gap-5">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-slate-600 w-full h-56 object-cover flex items-center justify-center text-gray-100 text-4xl">
                                Ra
                            </div>
                            <p class="text-center p-2 text-md whitespace-nowrap ">Ramen</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-slate-600 w-full h-56 object-cover flex items-center justify-center text-gray-100 text-4xl">
                                Ud
                            </div>
                            <p class="text-center p-2 text-md whitespace-nowrap ">Udon</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-slate-600 w-full h-56 object-cover flex items-center justify-center text-gray-100 text-4xl">
                                Su
                            </div>
                            <p class="text-center p-2 text-md whitespace-nowrap">Sushi</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-slate-600 w-full h-56 object-cover flex items-center justify-center text-gray-100 text-4xl">
                                Mi
                            </div>
                            <p class="text-center p-2 text-md whitespace-nowrap ">Minuman</p>
                        </div>
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-slate-600 w-full h-56 object-cover flex items-center justify-center">
                                <svg class="w-40 h-40 text-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.891 15.107 15.11 8.89m-5.183-.52h.01m3.089 7.254h.01M14.08 3.902a2.849 2.849 0 0 0 2.176.902 2.845 2.845 0 0 1 2.94 2.94 2.849 2.849 0 0 0 .901 2.176 2.847 2.847 0 0 1 0 4.16 2.848 2.848 0 0 0-.901 2.175 2.843 2.843 0 0 1-2.94 2.94 2.848 2.848 0 0 0-2.176.902 2.847 2.847 0 0 1-4.16 0 2.85 2.85 0 0 0-2.176-.902 2.845 2.845 0 0 1-2.94-2.94 2.848 2.848 0 0 0-.901-2.176 2.848 2.848 0 0 1 0-4.16 2.849 2.849 0 0 0 .901-2.176 2.845 2.845 0 0 1 2.941-2.94 2.849 2.849 0 0 0 2.176-.901 2.847 2.847 0 0 1 4.159 0Z"/>
                                </svg>
                            </div>
                            
                            <p class="text-center p-2 text-md whitespace-nowrap ">Happy Hour</p>
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
                            <p class="text-xs truncate ">Billing list</p>
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
                            
                            <ul class="dark:divide-gray-700" id="daftar-menu">






                                
                            </ul>
                            <div class="pb-3 sm:pb-4 flex flex-col">
                                <div class="flex min-w-0 w-full items-center">
                                    <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                        Sub-Total :
                                    </p>
                                    <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                    </p>
                                    <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right" id="total-harga-sub">
                                        Rp 0
                                    </p>
                                </div>
                            </div>

                            <div class="pb-3 sm:pb-4 flex flex-col">
                                <div class="flex min-w-0 w-full items-center">
                                    <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                                        Total :
                                    </p>
                                    <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                                    </p>
                                    <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right" id="total-harga-kasir">
                                        Rp 0
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center p-4 mb-4 border-y-4 text-lg">
                            <form action="{{ route('menu.index')}}" method="GET">
                                <button type="submit" class="text-slate-500 hover:text-slate-400 cursor-default">Clear sale</button>
                            </form>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex w-full">
                            <form action="{{ route('pesanan.tambah')}}" method="POST" class="w-full">
                                @csrf
                                <input type="hidden" id="isi" name="isi" value="">
                                <input type="hidden" id="total-harga-push" name="total_harga" value="">
                                <button type="submit" class="w-full text-center text-xl p-4 border-r-2 border-white hover:bg-slate-300">Save Bill</button>
                            </form>
                            <form action="{{ route('pesanan.tambah')}}" method="POST" class="w-full">
                                @csrf
                                <input type="hidden" id="total-harga-print" name="total_harga" value="">
                                <button type="button" class="w-full text-center text-xl p-4 hover:bg-slate-300">Print Bill</button>
                            </form>
                        </div>
                        <form action="{{ route('pesanan.tambah')}}" method="POST">
                            @csrf
                            <button type="button" class="flex bg-blue-400 hover:bg-blue-500 items-center rounded-b-lg w-full" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                <div class="p-4 border-r-2">
                                    <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 20v-5h2v6.988H3V15h1.98v5H17Z"/>
                                    <path d="m6.84 14.522 8.73 1.825.369-1.755-8.73-1.825-.369 1.755Zm1.155-4.323 8.083 3.764.739-1.617-8.083-3.787-.739 1.64Zm3.372-5.481L10.235 6.08l6.859 5.704 1.132-1.362-6.859-5.704ZM15.57 17H6.655v2h8.915v-2ZM12.861 3.111l6.193 6.415 1.414-1.415-6.43-6.177-1.177 1.177Z"/>
                                    </svg>
                                </div>
                                <div class="w-full p-4">
                                    <p class="text-3xl text-center">Charge Rp <span id="total-harga">0</span></p>
                                </div>
                            </button>

                            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Charge
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <div class="">
                                                <p for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Charge</p>
                                                <p class="text-xl">Rp <span id="total-harga-charge">0</span></p>
                                            </div>
                                            <div class="">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uang Pembeli</label>
                                                <input type="number" name="pembeli" id="pembeli" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp 0" required="">
                                            </div>
                                            <div class="">
                                                <p for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Kembalian</p>
                                                <p class="text-xl">Rp <span id="kembalian">0</span></p>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <form action="{{ route('menu.index')}}" method="GET">
                                                <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="container flex flex-row w-full mx-auto p-5 bg-slate-200 gap-5 rounded-xl shadow-lg">
                

                <div class="w-full overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="sr-only">Foto</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="flex px-6 py-3">
                                    <p class="flex mx-auto font-medium text-md text-green-600 dark:text-green-400 hover:text-green-500" data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                                        <svg class="w-[20px] h-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        Tambah Produk
                                    </p>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4">
                                    <img src="{{ asset('storage/' . $menu->foto) }}" class="w-16 h-16 md:w-32 md:h-32 max-w-full max-h-full object-cover rounded-lg" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ $menu->nama}}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ $menu->kategori}}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 gap-5">
                                    <div class="flex justify-around gap-5">

                                        <p class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-modal-target="crud-modal-{{ $menu->id}}" data-modal-toggle="crud-modal-{{ $menu->id}}">Edit</p>

                                        <p class="font-medium text-red-600 dark:text-red-500 hover:underline" data-modal-target="popup-modal-{{ $menu->id}}" data-modal-toggle="popup-modal-{{ $menu->id}}">Hapus</p>

                                        <div id="crud-modal-{{ $menu->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Tambah Menu Baru
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-{{ $menu->id}}">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <form class="p-4 md:p-5" action="{{ route('menu.ubah', $menu->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                                            <div class="col-span-2">
                                                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $menu->nama}}" required>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                                                <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required value="{{ $menu->harga }}">
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                                                <input type="text" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $menu->kategori}}" required>
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Unggah Foto</label>
                                                                <input name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                                            Perbaharui Menu
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 

                                        <div id="popup-modal-{{ $menu->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <form action="{{ route('menu.hapus', $menu->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        {{-- <input type="hidden" name="id" value="{{ $menu->id}}"> --}}
                                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-{{ $menu->id}}">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Hapus Menu {{ $menu->nama}}?</h3>
                                                            <button data-modal-hide="popup-modal-{{ $menu->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya
                                                            </button>
                                                            <button data-modal-hide="popup-modal-{{ $menu->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tambah Menu Baru
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="POST" action="{{ route('menu.tambah')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ramen Udon" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="30000" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <input type="text" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ramen" required>
                        </div>
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Unggah Foto</label>
                            <input name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Tambah Menu
                    </button>
                </form>
            </div>
        </div>
    </div> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        const menuItems = {};
        let totalHarga = 0;

        function tambahMenu(idMenu, namaMenu, hargaMenu) {

            hargaMenu = parseFloat(hargaMenu);

            var menuHarga = hargaMenu.toLocaleString('id-ID')
            if (menuItems[idMenu]) {
                menuItems[idMenu].qty++;
            } else {
                const tambah = document.createElement('li');
                tambah.classList.add('pb-3', 'sm:pb-4', 'flex', 'flex-col');

                tambah.innerHTML = `
                    <div class="flex min-w-0 w-full items-center">
                        <p class="text-md font-medium text-gray-900 truncate dark:text-white w-2/3">
                            ${namaMenu}
                        </p>
                        <p class="text-md text-gray-500 truncate dark:text-gray-400 w-1/6 text-right pr-2">
                            x<span class="qty">${1}</span>
                        </p>
                        <p class="font-semibold text-gray-900 dark:text-white w-1/3 text-right">
                            Rp ${menuHarga}
                        </p>
                    </div>
                `;

                const daftarMenu = document.getElementById('daftar-menu');
                daftarMenu.appendChild(tambah);

                // Simpan informasi item menu ke dalam objek menuItems
                menuItems[idMenu] = {
                    nama: namaMenu,
                    harga: hargaMenu,
                    qty: 1,
                    elemen: tambah // Simpan referensi elemen <li> untuk item ini
                };
            }

            // Perbarui tampilan quantity di elemen <li>
            if (menuItems[idMenu]) {
                const qtyElement = menuItems[idMenu].elemen.querySelector('.qty');
                if (qtyElement) {
                    qtyElement.textContent = menuItems[idMenu].qty;
                }
            }

            hitungTotalHarga();

            var menuItemsString = JSON.stringify(menuItems);
            const isiInput = document.getElementById('isi');
            isiInput.value = menuItemsString;
        }

        function hitungTotalHarga() {
            // Reset total harga menjadi 0 sebelum dihitung ulang
            totalHarga = 0;

            // Hitung total harga berdasarkan setiap item menu dan jumlahnya
            for (const idMenu in menuItems) {
                const item = menuItems[idMenu];
                totalHarga += item.harga * item.qty; // Kalikan harga dengan qty untuk setiap item
            }

            const spanTotalHarga = document.getElementById('total-harga');
            if (spanTotalHarga) {
                spanTotalHarga.textContent = totalHarga.toLocaleString('id-ID');
            }

            const spanTotalHargaKasir = document.getElementById('total-harga-kasir');
            if (spanTotalHargaKasir) {
                spanTotalHargaKasir.textContent = totalHarga.toLocaleString('id-ID');
            }

            const spanTotalHargaSub = document.getElementById('total-harga-sub');
            if (spanTotalHargaSub) {
                spanTotalHargaSub.textContent = totalHarga.toLocaleString('id-ID');
            }

            const spanTotalHargaPush = document.getElementById('total-harga-push');
            if (spanTotalHargaPush) {
                spanTotalHargaPush.value = totalHarga;
            }
            
            const spanTotalHargaPrint = document.getElementById('total-harga-print');
            if (spanTotalHargaPrint) {
                spanTotalHargaPrint.value = totalHarga;
            }

            const spanTotalHargaCharge = document.getElementById('total-harga-charge');
            if (spanTotalHargaCharge) {
                spanTotalHargaCharge.textContent = totalHarga.toLocaleString('id-ID');
            }

            const uangPembeli = document.getElementById('pembeli');

            uangPembeli.addEventListener('input', function(event) {
                const nilaiUangPembeli = parseFloat(event.target.value) || 0;

                const totalKembalian = nilaiUangPembeli - totalHarga;

                const kembalian = document.getElementById('kembalian');
                kembalian.textContent = totalKembalian.toLocaleString('id-ID');
            });
        }
    </script>
</body>
</html>