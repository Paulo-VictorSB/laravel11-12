@extends('layouts.MainLayout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">

            @include('TopBar')

            <!-- label and cancel -->
            <div class="row">
                <div class="col">
                    <p class="display-6 mb-0">NEW NOTE</p>
                </div>
                <div class="col text-end">
                    <a href="{{ route('home') }}" class="btn btn-outline-danger">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>

            <!-- form -->
            <form action="{{ route('newNoteSubmit') }}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Note Title</label>
                            <input type="text" class="form-control bg-primary text-white" name="text_title" value="{{ old('text_title') }}">
                            {{-- Show error --}}
                            @error('text_title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Note Text</label>
                            <textarea class="form-control bg-primary text-white" name="text_note" rows="5" value="{{ old('text_note') }}">{{ old('text_note') }}</textarea>
                            {{-- Show error --}}
                            @error('text_note')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-end">
                        <a href="{{ route('home') }}" class="btn btn-primary px-5"><i
                                class="fa-solid fa-ban me-2"></i>Cancel</a>
                        <button type="submit" class="btn btn-secondary px-5"><i
                                class="fa-regular fa-circle-check me-2"></i>Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
