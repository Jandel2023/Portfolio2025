@extends('layout')

{{-- @section('title', $blog->title) --}}

@section('content')
    {{-- <div style="background-color: #ffffff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 2.25rem; font-weight: bold; margin-bottom: 8px;">{{ $blog->title }}</h1>
        <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 16px;">
            Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
        </p>

        <div style="color: #1f2937; line-height: 1.6;">
            {!! nl2br(e($blog->content)) !!}
        </div>
        <a href="{{ route('home') }}" style="display: inline-block; margin-top: 24px; color: #2563eb; text-decoration: underline;">
            ← Back to Blog
        </a>
    </div> --}}
@endsection
