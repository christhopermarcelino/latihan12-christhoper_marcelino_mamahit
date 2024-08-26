@extends('layouts.general')

@section('content')
<section class="container bg-white p-4 rounded shadow-sm mb-4">
    <div class="mb-3">
        <h1 class="fw-bold">List Biodata</h1>
        <a href="{{ route('biodata.create') }}" class="btn btn-success">Add New Biodata</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biodata as $item)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="{{ route('biodata.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('biodata.destroy', $item->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection