@extends('admin.layout')
@push('head-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
@endpush
@section('content')
<main class="px-4 pt-6 space-y-6">
    {{-- Header --}}
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="items-center justify-between flex flex-col gap-4">
            <div class="flex justify-between items-center w-full">
                <div class="flex flex-col justify-center">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-white">Daftar Paket Internet</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 space-y-4"
        id="section-1">
        <div class="items-start justify-start flex flex-col gap-4">
            <h3 class="text-base md:text-lg font-bold text-gray-900 dark:text-white">Data Paket
            </h3>
            <hr class="w-full" />
            <!-- Table -->
            <div class="flex flex-col space-y-4 w-full">
                <div class="flex flex-row gap-4">
                    <a href="{{ route('admin.paket-internet.index') }}"
                        class="inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4" />
                        </svg>
                    </a>
                    <button data-modal-target="search-modal" data-modal-toggle="search-modal"
                        class="inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 gap-2">
                        <i class="fa-solid fa-search fa-lg" type="button"></i>
                        <span>Pencarian</span>
                    </button>
                    <div class="flex justify-start">
                        <button data-modal-target="paket-modal" data-modal-toggle="paket-modal" onclick="addModal()"
                            class="inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 gap-2">
                            <i class="fa-solid fa-plus fa-lg" type="button"></i>
                            <span>Tambah Paket</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto rounded-lg overflow-y-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="w-1/12 p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Informasi Paket
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Harga
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs text-center font-medium tracking-wider text-gray-500 uppercase dark:text-white">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    @if($datas->count() == 0)
                                    <tr>
                                        <td class="p-4 text-sm text-center text-gray-500 dark:text-white" colspan="5">No
                                            data
                                            found
                                        </td>
                                    </tr>
                                    @else
                                    @foreach($datas as $data)
                                    <tr>
                                        <td class="p-4 text-sm text-gray-500 dark:text-white">
                                            {{ $loop->iteration }}</td>
                                        <td class="p-4 text-sm text-gray-500 dark:text-white text-nowrap">
                                            <p class="font-medium text-lg">Nama : {{$data->nama_paket}}</p>
                                            <p class="font-medium">Kecepatan : {{$data->kecepatan}}</p>
                                            <p class="font-medium capitalize">Tipe : {{$data->tipe_paket}}</p>
                                        </td>
                                        <td class="p-4 text-sm text-gray-500 dark:text-white text-nowrap">
                                            Rp. {{ number_format($data->harga)}}</td>
                                        <td class="p-4 text-sm text-gray-500 dark:text-white h-full">
                                            <div class="flex items-center justify-center h-full">
                                                <button data-modal-target="paket-modal" data-modal-toggle="paket-modal"
                                                    onclick="editModal({{$data}})"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-6 h-6 mr-2 text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                    </svg>
                                                    Ubah Data
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->

        <div class="pagination">
            {{ $datas->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</main>

<div id="paket-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 id="modalTitle" class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Paket
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="paket-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="paketForm" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                @csrf
                <input type="hidden" id="paket_id" name="paket_id">
                <div class="grid sm:grid-cols-2 gap-4 mb-4 grid-cols-2">
                    <div class="col-span-full flex flex-col justify-between">
                        <label for="nama_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
                        <input type="text" name="nama_paket" id="nama_paket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. Paket A" required="">
                    </div>
                    <div class="col-span-full flex flex-col justify-between">
                        <label for="tipe_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Paket</label>
                        <select name="tipe_paket" id="tipe_paket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="">Pilih Tipe Paket</option>
                            <option value="harian">Harian</option>
                            <option value="bulanan">Bulanan</option>
                            <option value="tahunan">Tahunan</option>
                        </select>
                    </div>
                    <div class="col-span-1 flex flex-col justify-between">
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" id="harga" min="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. 265000" required="">
                    </div>
                    <div class="col-span-1 flex flex-col justify-between">
                        <label for="kecepatan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kecepatan</label>
                        <input type="text" name="kecepatan" id="kecepatan" min="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. 25 Mbps" required="">
                    </div>
                    <div class="col-span-full flex flex-col justify-between">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi"
                            class="ck-content bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            rows="4"></textarea>
                    </div>
                </div>
                <span id="textError" class="text-red-500 text-sm"></span>
                <div class="flex justify-between">
                    <button id="deleteButton" data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                        type="button"
                        class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2  flex items-center gap-2">
                        <span class="text-white">Delete</span>
                    </button>
                    <button type="submit" id="submitButton"
                        class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2  flex items-center gap-2">
                        <span id="buttonText">Save</span>
                        <svg id="loadingIcon" class="hidden w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Search Modal --}}
<div id="search-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Pencarian
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="search-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form action="{{route('admin.paket-internet.index')}}" class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    {{-- Nama Paket --}}
                    <div>
                        <label for="nama_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Paket</label>
                        <input id="nama_paket" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            name="nama_paket" placeholder="e.g. Paket A">
                    </div>
                    {{-- Tipe Paket --}}
                    <div>
                        <label for="tipe_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                            Paket</label>
                        <select id="tipe_paket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            name="tipe_paket">
                            <option value="">Pilih Tipe Paket</option>
                            <option value="harian">Harian</option>
                            <option value="bulanan">Bulanan</option>
                            <option value="tahunan">Tahunan</option>
                        </select>
                    </div>

                    <div class="col-span-full">
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Delete Modal --}}
<div id="delete-modal" tabindex="1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="delete-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete
                    this data?</h3>
                <form id="deleteForm" class="inline-flex">
                    @csrf
                    <input type="hidden" id="deleteType" name="type">
                    <input type="hidden" id="deleteId" name="id">

                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        <span id="deleteButtonText">Yes, I'm sure</span>
                        <svg id="deleteLoadingIcon" class="hidden w-4 h-4 ml-2 animate-spin"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </button>
                    <button type="button" data-modal-hide="delete-modal"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        cancel
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div id="detail-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[50] justify-center items-center w-full h-full bg-black/80">
    <div class="relative p-4 w-full max-w-4xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg dark:bg-gray-700  border border-gray-300 shadow-lg">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Data Paket - <span id="nama_paket" class="capitalize"></span>
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="detail-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="detailForm" class="p-4 md:p-5">
                @csrf
                <input type="hidden" name="paket_id" id="paket_id" value="">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div>
                        <label for="nama_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
                        <input type="text" name="nama_paket" id="nama_paket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. Paket A" readonly>
                    </div>
                    <div>
                        <label for="tipe_paket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Paket</label>
                        <input type="text" name="tipe_paket" id="tipe_paket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. Bulanan" readonly>
                    </div>
                    <div>
                        <label for="kecepatan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecepatan</label>
                        <input type="text" name="kecepatan" id="kecepatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. 10 Mbps" readonly>
                    </div>
                    <div>
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="text" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="cth. Rp 200.000" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

@push('scripts')

{{-- <script>
    // Define functions in global scope
    function openModalDetail(data) {
        const $modal = $('#detail-modal');

        // Set data
        $('#booker_name').text(data.fullname);
        $('#fullname').val(data.fullname);
        $('#phone_number').val(data.phone_number);
        $('#email').val(data.email);
        $('#blok').val(data.paket_id);
        $('#ktp_image').attr('src', `/storage/bookinginfo/${data.ktp_image}`);
        $('#payment_image').attr('src', `/storage/bookinginfo/${data.payment_image}`);
        $('#paket_id').val(data.id);

        if(data.is_confirmed){
            $('#confirmationContainer').hide();
        } else {
            $('#confirmationContainer').show();
        }

        // Show modal
        $modal.removeClass('hidden').addClass('flex');
    }

    function showDetail(id) {
        $.ajax({
            url: `/admin/bookinglist/${id}`,
            type: 'GET',
            success: function(response) {
                if (response.success) {
                    openModalDetail(response.data);
                }
            },
            error: function(xhr) {
                alert('Error loading data');
            }
        });
    }

    $(document).ready(function() {
        const $modal = $('#detail-modal');

        // Function to close modal
        function closeModalDetail() {
            // Hide modal
            $modal.addClass('hidden').removeClass('flex');

            // Reset form
            $('#detail-modal form')[0].reset();
            $('#paket_id').val('');
            $('#booker_name').text('');
            $('#ktp_image').attr('src', '');
            $('#payment_image').attr('src', '');
        }

        // Event handlers
        $('[data-modal-toggle="detail-modal"]').on('click', closeModalDetail);
        $('[data-modal-hide="detail-modal"]').on('click', closeModalDetail);

        // Close on outside click
        $modal.on('click', function(e) {
            if (e.target === this) {
                closeModalDetail();
            }
        });

        // Close on escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModalDetail();
            }
        });
    });
</script> --}}
<script>
    let editor;
    // CKEditor 5 initialization
    ClassicEditor
        .create(document.querySelector('#deskripsi'), {
            toolbar: ['bold', 'italic','numberedList', 'bulletedList'],
            removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed']
        })
        .then(editorInstance => {
            // Store editor instance for later use
            editor = editorInstance;
        })
        .catch(error => {
            console.error(error);
        });

    function editModal(paket) {
        $('#paket-modal #modalTitle').text('Edit Paket');
        $('#paketForm #paket_id').val(paket.id);
        $('#paketForm #nama_paket').val(paket.nama_paket);
        $('#paketForm #tipe_paket').val(paket.tipe_paket);
        $('#paketForm #harga').val(paket.harga);
        $('#paketForm #kecepatan').val(paket.kecepatan);
        editor.setData(paket.deskripsi);
        $('#paket-modal').removeClass('hidden');
        $('#paketForm').attr('data-mode', 'edit');
        $('#paketForm #deleteButton').show();
        $('#paketForm #deleteButton').attr('onclick', `deleteModal('paket', ${paket.id})`);
    }

    function addModal() {
        $('#paket-modal #modalTitle').text('Tambah Paket');
        $('#paketForm')[0].reset();
        $('#paketForm #paket_id').val('');
        editor.setData('');
        $('#paket-modal').removeClass('hidden');
        $('#paketForm').attr('data-mode', 'add');
        $('#paketForm #deleteButton').hide();
        $('#paketForm #deleteButton').attr('onclick', '');
    }

    $(document).ready(function() {
        $('#paketForm').on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const mode = form.attr('data-mode');
            const button = form.find('#submitButton');
            const buttonText = form.find('#buttonText');
            const loadingIcon = form.find('#loadingIcon');
            const textError = form.find('#textError');

            button.prop('disabled', true);
            buttonText.text('Saving...');
            loadingIcon.removeClass('hidden');
            button.removeClass('bg-green-500 bg-red-500').addClass('bg-blue-700');

            var formData = new FormData(this);
            // Add CKEditor content to form data
            formData.append('deskripsi', editor.getData());

            const url = mode === 'edit'
                ? `{{route('admin.paket-internet.update')}}`
                : `{{route('admin.paket-internet.store')}}`;

            if (mode === 'edit') {
                formData.append('_method', 'PUT');
            }

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        button.removeClass('bg-blue-700').addClass('bg-green-500');
                        buttonText.text('Saved!');
                        loadingIcon.addClass('hidden');
                        setTimeout(() => location.reload(), 1000);
                    } else {
                        console.log(response);
                        button.prop('disabled', false);
                        setTimeout(() => {
                            textError.text(response.message);
                            button.removeClass('bg-blue-700').addClass('bg-red-500');
                            buttonText.text('Error!');
                            setTimeout(() => {
                                button.removeClass('bg-red-500').addClass('bg-blue-700');
                                buttonText.text('Save');
                                textError.text('');
                            }, 2000);
                        }, 1000);
                        loadingIcon.addClass('hidden');
                    }
                },
                error: function(xhr) {
                    button.prop('disabled', false);
                    button.removeClass('bg-blue-700').addClass('bg-red-500');
                    buttonText.text('Error!');
                    loadingIcon.addClass('hidden');
                    console.log('Error:', xhr.responseText);
                }
            });
        });
    });
</script>

{{-- Delete Modal --}}
<script>
    function deleteModal(type, id) {
        console.log(type, id);
        $('#deleteType').val(type);
        $('#deleteId').val(id);
        $('#delete-modal').removeClass('hidden');
    }

    $(document).ready(function() {
        $('#deleteForm').on('submit', function(e) {
            e.preventDefault();
            const button = $(this).find('button[type="submit"]');
            const buttonText = $('#deleteButtonText');
            const loadingIcon = $('#deleteLoadingIcon');
            const type = $('#deleteType').val();
            const id = $('#deleteId').val();

            console.log(type, id);

            button.prop('disabled', true);
            buttonText.text('Deleting...');
            loadingIcon.removeClass('hidden');

            let url = '';
            switch(type) {
                case 'paket':
                    url = "{{ route('admin.paket-internet.delete', ':id') }}".replace(':id', id);
                    break;
            }

            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                },
                error: function(xhr) {
                    button.prop('disabled', false);
                    buttonText.text('Error!');
                    loadingIcon.addClass('hidden');
                    setTimeout(() => {
                        buttonText.text("Yes, I'm sure");
                    }, 2000);
                }
            });
        });
    });
</script>
@endpush
@endsection
