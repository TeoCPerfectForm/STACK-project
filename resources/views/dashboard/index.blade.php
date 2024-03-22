@extends('dashboard.layouts.main')


@section('container')
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Welcome, {{ auth()->user()->username }}</h1>
  </div>
@endsection
