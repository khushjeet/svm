@extends('layouts.app')

@section('content_one')
<div class="container" style="width: 1000px; height: 1200px;">
    <h1>Notice Board</h1>
    <a href="{{ route('noticeboard.create') }}" class="btn btn-primary mb-3">Add New Notice</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Notice</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notices as $notice)
                <tr>
                    <td>{{ $notice->id }}</td>
                    <td>{{ $notice->notice_board }}</td>
                    <td>
                        @if($notice->link)
                            <a href="{{ $notice->link }}" target="_blank">{{ $notice->link }}</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('noticeboard.edit', $notice->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('noticeboard.destroy', $notice->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
