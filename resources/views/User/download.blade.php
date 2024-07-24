<!-- resources/views/home.blade.php -->
@extends('layouts.userLayout')

@section('content')
    <div class="mt-96 mb-96">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @if (session('pdfPath'))
                <div class="mt-4">
                    <a href="{{ asset(session('pdfPath')) }}" class="btn btn-primary">Download PDF</a>
                </div>
            @endif
        @endif
    </div>
    <!-- Rest of your home page content -->
@endsection