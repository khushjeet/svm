@extends('layouts.app')

@section('content_one')
<div class="container" style="width: 1000px; height: 1200px;">
    <h1>Edit Notice</h1>
    <form method="POST" action="{{ route('noticeboard.update', $notice->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="notice_board" class="form-label">Notice</label>
            <input type="text" name="notice_board" id="notice_board" class="form-control @error('notice_board') is-invalid @enderror" value="{{ $notice->notice_board }}" required>
            @error('notice_board')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ $notice->link }}">
            @error('link')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('noticeboard.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
