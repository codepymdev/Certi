@extends('layouts.app')
@section("title", "Download Certificate")
@section('content')

<div class="main h-screen md:h-screen sm:h-screen" style="background-image: url('https://www.fkkas.com/assets/img/abt/abt1.jpg');background-position:center;background:size:cover;background-repeat:no-repeat;">
<div class="container flex items-center justify-center">
    <form action="{{ route("get.certificate") }}" method="post">
        @csrf
        <div class="w-full md:w-2/3 sm:w-2/3 bg-white p-3 mx-auto mt-20 sm:mt-40 md:mt-40 rounded shadow">
            <div class="items-center text-center flex justify-center flex-col">
                <img src="https://www.fkkas.com/assets/img/logo.png" alt="Logo" style="width: 50px;height:60px;">
                <h1 class="mb-1 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">First Kingdom Kids Academy</h1>
                <p class="mb-6 text-sm font-normal text-gray-500 lg:text-sm  dark:text-gray-400">Search and download student Certificate here.</p>
            </div>
            <div class="mb-6">
                <label for="studentid" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Search by Student ID</label>
                <input type="text" name="studentid" id="studentid" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Student ID">
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

</div>
</div>
@endsection
