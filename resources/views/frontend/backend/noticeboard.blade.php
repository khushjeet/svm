@extends('layouts.app')

@section('content_one')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center align-items-center">{{ __('Add Notice Board') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('noticeboard.noticeboard_store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="notice_board" class="col-md-4 col-form-label text-md-end">{{ __('Notice Board') }}</label>

                        <div class="col-md-6">
                            <input id="notice_board" type="text" class="form-control @error('notice_board') is-invalid @enderror" name="notice_board" value="{{ old('notice_wrapper') }}" required autocomplete="notice_board" autofocus>

                            @error('notice_board')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="link" class="col-md-4 col-form-label text-md-end">{{ __('Link') }}</label>

                        <div class="col-md-6">
                            <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" autocomplete="link">

                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
