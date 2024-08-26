@extends('layouts.general')

@section('content')
<section class="container bg-white p-4 rounded shadow-sm mb-4">
    <div class="mb-3">
        <h1 class="fw-bold">Create Biodata</h1>
    </div>

    <form method="POST" action="{{ route('biodata.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="{{ old('umur') }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" cols="30" rows="2" required>{{ old('alamat') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</section>
@endsection