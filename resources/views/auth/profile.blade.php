@extends('admin.layout')

@section('content')
<main>
    <div class="px-4 pt-6">
        {{-- Contents --}}
        <div
            class="p-4 bg-white border mx-auto w-full max-w-lg border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="flex flex-col w-full gap-4">
                <h3 class="mb-4 text-lg md:text-xl font-semibold text-gray-900 dark:text-white">Profil User</h3>
                {{-- Data informasi --}}
                <div class="flex flex-col gap-4">
                    {{-- Photo profile circle --}}
                    <div class="flex items-start justify-center">
                        <img src="{{ asset('img/avatar.jpg') }}"
                            class="w-32 h-32 rounded-full border border-gray-200 dark:border-gray-700" alt="Profile">
                    </div>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 sm:gap-4">

                        <div>
                            <label for="website-admin"
                                class="block mb-2 text-sm text-gray-900 dark:text-white">Username</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center w-full max-w-[40px] text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <i class="mx-auto fa-solid fa-id-card fa-lg"></i>
                                </span>
                                <input id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:ring-0 flex-1 text-sm p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    readonly value="{{$user->username ?? 'Belum ada username'}}" />
                            </div>
                        </div>
                        <div>
                            <label for="website-admin"
                                class="block mb-2 text-sm text-gray-900 dark:text-white">Email</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center w-full max-w-[40px] text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <i class="mx-auto fa-solid fa-envelope fa-lg"></i>
                                </span>
                                <span type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-gray-500 flex-1 text-sm p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">{{$user->email
                                    ?? 'Belum ada email'}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Back button --}}
                <div class="flex justify-end w-full">
                    <a href="{{ route('admin.profile.edit') }}"
                        class="inline-flex items-center justify-between px-2 py-1 text-sm font-medium text-blue-700 bg-blue-100 border border-blue-200 rounded-md dark:text-blue-200 dark:bg-blue-700 dark:border-blue-700 hover:bg-blue-200 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">

                        <span>Edit Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif
@endpush
@endsection