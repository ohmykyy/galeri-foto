@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Like dan Komentar</h2>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form untuk menambahkan like dan komentar -->
    <form action="{{ route('likes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="like" class="form-label">Like</label>
            <select class="form-control" id="like" name="like" required>
                <option value="1">Like</option>
                <option value="0">Dislike</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" name="komentar" rows="4" placeholder="Tulis komentar..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
