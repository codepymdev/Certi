@extends('layouts.app')
@section("title", "Verify Certify")
@section('content')

<div class="main h-screen md:h-screen sm:h-screen" style="padding-bottom:15px;overflow-y:scroll; background-image: url('https://www.fkkas.com/assets/img/abt/abt1.jpg');background-position:center;background:size:cover;background-repeat:no-repeat;">
<div class="container flex items-center justify-center">
        @csrf
        <div class="w-full md:w-2/3 sm:w-2/3 bg-white p-3 mx-auto mt-20 sm:mt-40 md:mt-40 rounded shadow">
            <div class="items-center text-center flex justify-center flex-col">
                <img src="https://www.fkkas.com/assets/img/logo.png" alt="Logo" style="width: 50px;height:60px;">
                <h1 class="mb-1 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">First Kingdom Kids Academy</h1>
                <p class="mb-6 text-sm font-normal text-gray-500 lg:text-sm sm:px-16 xl:px-48 dark:text-gray-400">Verify Certificate</p>
            </div>
            @if($user)
            <div class="mb-6">
                <label for="studentid" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Student ID</label>
                <input type="text" name="studentid" value="{{ $user->reg_no }}" id="studentid" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400">
            </div>
            <div class="mb-6">
                <label for="firstname" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">First Name</label>
                <input type="text" name="firstname" value="{{ $user->first_name }}" id="firstname" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400">
            </div>
            <div class="mb-6">
                <label for="lastname" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Last Name</label>
                <input type="text" name="lastname" value="{{ $user->last_name }}" id="lastname" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400">
            </div>
            <div class="mb-6">
                <label for="issued_date" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Issued Date</label>
                <input type="text" name="issued_date" value="{{ date('l M dS, Y', strtotime($user->modified)) }}" id="issued_date" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400">
            </div>

            @else
            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                 Oops, this certificate is not validate. Please try again to be sure!
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </div>
            @endif
        </div>

</div>
</div>
@endsection
