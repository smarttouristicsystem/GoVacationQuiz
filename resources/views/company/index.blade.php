@extends('layouts.app')

@section('title', 'Company List')

@section('content')

    <h2 class="text-center mb-4">Select a Company</h2>

    <div class="row">
        @foreach ($companies as $company)
            @include('components.company-card', ['company' => $company])
        @endforeach
    </div>

@endsection
