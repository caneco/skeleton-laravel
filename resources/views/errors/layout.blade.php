@extends('layouts.min')

@section('content')
<x-container class="flex-col h-full flex-center">
    <h1 class="text-4xl font-bold leading-none text-gray-800 md:text-16xl">
        @yield('code') @yield('message')
    </h1>
    <a href="/" class="mt-2 font-bold text-indigo-500 hover:text-indigo-700">
        ← <span class="hover:underline">@lang('Back to home')</span>
    </a>
</x-container>
@endsection
