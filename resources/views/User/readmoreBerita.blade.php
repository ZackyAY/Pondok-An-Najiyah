@extends('layouts.userLayout')

@section('title')
    An-Najiyah
@endsection

@section('content')
    <div class="my-20">
        @foreach ($berita as $item)
            <div class="flex flex-col mt-10 justify-center items-center">
                <a href="{{ route('berita.show', $item->id) }}">
                    <h5 class="flex mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        {{ $item->judul }}
                    </h5>
                </a>
            </div>
            <div class="flex justify-center items-center mx-4 mt-3 overflow-hidden text-white rounded">
                <img class="object-cover w-3/4 h-auto" src="{{ asset($item->image) }}" alt="{{ $item->judul }}">
            </div>
            <div class="flex flex-col mt-10 justify-center items-center">
                <p class="flex font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    {{ $item->deskripsi }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
