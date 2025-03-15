@extends('admin.layout')

@section('content')
<main>
    <div class="px-4 pt-6">
        {{-- Contents --}}
        <div
            class="p-4 bg-white border mx-auto w-full max-w-lg border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h2 class="mb-8 text-xl font-bold text-gray-900 dark:text-white">Form Ubah User</h2>
            <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data"
                x-data="{ password: '', password_confirmation: '' }">
                @csrf
                @method('PUT')
                {{-- Show erros --}}
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <span class="block sm:inline">Something seriously bad happened.</span>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="flex flex-wrap gap-4 sm:gap-6">
                    <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 w-full">
                        <div class="w-full">
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="johndoe" value="{{$user->username}}" required="">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="john.doe@example.org" value="{{$user->email}}" required="">
                        </div>
                        <div class="flex flex-col justify-between">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">Change
                                Password</label>
                            <input type="password" name="password" id="password" x-model="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="********">
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change Password
                                Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                x-model="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="********">
                            <div x-show="password.length > 0 && password_confirmation.length > 0 && password !== password_confirmation"
                                class="text-red-500 text-sm mt-2">
                                Passwords do not match.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex justify-between items-center mt-4 sm:mt-6">
                    <a href="{{ route('admin.profile') }}"
                        class="inline-flex items-center justify-between px-5 py-2.5 text-sm font-medium text-blue-700 bg-blue-100 border border-blue-200 rounded-md dark:text-blue-200 dark:bg-blue-700 dark:border-blue-700 hover:bg-blue-200 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18">
                            </path>
                        </svg>
                        <span>Back</span>
                    </a>

                    <button :disabled="password.length > 0 && password !== password_confirmation"
                        class="inline-flex items-center justify-between px-5 py-2.5 text-sm font-medium text-blue-700 bg-blue-100 border border-blue-200 rounded-md dark:text-blue-200 dark:bg-blue-700 dark:border-blue-700 hover:bg-blue-200 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <span>Simpan Perubahan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection