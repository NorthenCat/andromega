@extends('admin.layout')
@section('content')
<main class="px-4 pt-6 space-y-6">
    {{-- Header --}}
    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="items-center justify-between flex flex-col gap-4">
            <div class="flex justify-between items-center w-full">
                <div class="flex flex-col justify-center">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 dark:text-white">Settings Website</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="grid sm:grid-cols-2 gap-6">
        {{-- About Web --}}
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800"
            id="section-1">
            <div class="grid grid-cols-1 gap-4">
                <div class="items-start justify-start flex flex-col gap-4">
                    <h3 class="text-base md:text-lg font-bold text-gray-900 dark:text-white">Data Webiste & Meta</h3>
                    <hr class="w-full" />
                    <form id="metaForm" enctype="multipart/form-data" class="w-full">
                        @csrf
                        <div class="w-full space-y-4">
                            <div>
                                {{-- favicon --}}
                                @if($data->favicon)
                                <img src="{{asset('storage/'.$data->favicon)}}" class="h-32 mx-auto" alt="favion">
                                @endif
                                <label for="icon"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Favicon</label>
                                <input type="file" name="icon" id="icon"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="icon_help" accept=".ico">
                            </div>
                            <div>
                                <label for="nama_website"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website
                                    Name <span class="text-xs italic">(for meta too)</span></label>
                                <input type="text" id="nama_website"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Title" name="nama_website" value="{{$data->nama_website}}">
                            </div>
                            {{-- Meta --}}
                            <div>
                                <label for="meta_author"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                    Author</label>
                                <input type="text" id="meta_author"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Author" name="meta_author" value="{{$data->meta_author}}">
                            </div>
                            <div>
                                <label for="meta_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                    Description</label>
                                <textarea id="meta_description"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Meta Description"
                                    name="meta_description">{{$data->meta_description}}</textarea>
                            </div>
                            <div>
                                <label for="meta_keyword"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                    Keywords</label>
                                <textarea id="meta_keyword"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="e.g. it consultant, it solution, it service"
                                    name="meta_keyword">{{$data->meta_keyword}}</textarea>
                            </div>


                            <span id="textError" class="text-red-500 text-sm"></span>
                            <button type="submit" id="submitButton"
                                class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 ml-auto flex items-center gap-2">
                                <span id="buttonText">Save</span>
                                <svg id="loadingIcon" class="hidden w-4 h-4 animate-spin"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
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
        {{-- Contact Web --}}
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800"
            id="section-1">
            <div class="grid grid-cols-1 gap-4">
                <div class="items-start justify-start flex flex-col gap-4">
                    <h3 class="text-base md:text-lg font-bold text-gray-900 dark:text-white">Data Informasi Website</h3>
                    <hr class="w-full" />
                    <form id="informationForm" class="w-full">
                        @csrf
                        <div class="w-full space-y-4 pb-4">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="telepon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                                    <input type="text" id="telepon"
                                        class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                        placeholder="(62) 812 5823 4912" name="telepon" value="{{$data->telepon}}">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" id="email"
                                        class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                        placeholder=0812582349123" name="email" value="{{$data->email}}">
                                </div>
                            </div>
                            <div>
                                <label for="alamat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                <textarea id="alamat"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Jl. Raya Kedung Baruk No. 1, Surabaya"
                                    name="alamat">{{$data->alamat}}</textarea>
                            </div>

                            <div>
                                <label for="contact_sales"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Contact
                                    Sales</label>
                                <input type="text" id="contact_sales"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="https://wa.me/62812XXXXXXX" name="contact_sales"
                                    value="{{$data->contact_sales}}">
                            </div>
                            <div>
                                <label for="contact_support"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Support
                                    Contact</label>
                                <input type="text" id="contact_support"
                                    class="block w-full p-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                                    placeholder="https://wa.me/62812XXXXXXX" name="contact_support"
                                    value="{{$data->contact_support}}">
                            </div>

                            <span id="textError" class="text-red-500 text-sm"></span>
                        </div>
                        <button type="submit" id="submitButton"
                            class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 ml-auto flex items-center gap-2">
                            <span id="buttonText">Save</span>
                            <svg id="loadingIcon" class="hidden w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
{{-- About Form --}}
<script>
    $(document).ready(function() {
        $('#metaForm').on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const button = form.find('#submitButton');
            const buttonText = form.find('#buttonText');
            const loadingIcon = form.find('#loadingIcon');
            const textError = form.find('#textError');

            // Loading state
            button.prop('disabled', true);
            buttonText.text('Saving...');
            loadingIcon.removeClass('hidden');
            button.removeClass('bg-green-500 bg-red-500').addClass('bg-blue-700');

            var formData = new FormData(this);
            formData.append('_method', 'PUT');

            $.ajax({
                url: `{{route('admin.setting-web.update')}}`,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        button.removeClass('bg-blue-700').addClass('bg-green-500');
                        buttonText.text('Saved!');
                        loadingIcon.addClass('hidden');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
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
                }
            });
        });
    });
</script>

{{-- Contact Form --}}
<script>
    $(document).ready(function() {
        $('#informationForm').on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const button = form.find('#submitButton');
            const buttonText = form.find('#buttonText');
            const loadingIcon = form.find('#loadingIcon');
            const textError = form.find('#textError');

            // Loading state
            button.prop('disabled', true);
            buttonText.text('Saving...');
            loadingIcon.removeClass('hidden');
            button.removeClass('bg-green-500 bg-red-500').addClass('bg-blue-700');

            var formData = new FormData(this);
            formData.append('_method', 'PUT');

            $.ajax({
                url: `{{route('admin.setting-web.update')}}`,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        button.removeClass('bg-blue-700').addClass('bg-green-500');
                        buttonText.text('Saved!');
                        loadingIcon.addClass('hidden');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    } else {
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
                }
            });
        });
    });
</script>
@endpush
@endsection
