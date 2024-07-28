@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
    <h1>Form Registrasi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tempat Tanggal Lahir:</label>
            <input type="date" name="birth_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Agama:</label>
            <input type="text" name="religion" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="gender" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kursus yang Diambil:</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <footer class="bg-light text-dark mt-5 p-4">
        <div class="row">
        <div class="col-md-6 text-left">
                <p><strong>Contact:</strong></p>
                <p>WhatsApp: <a href="https://wa.me/nomor_wa" target="_blank">0811235285778</a></p>
                <p>Instagram: <a href="https://instagram.com/username_instagram" target="_blank">speak easy</a></p>
                <p>Email: <a href="https://emsil.com/username_instagram" target="_blank">@speak_easy@gmail.com</a></p>
            </div>
            <div class="col-md-6">
                <p><strong>Alamat:</strong></p>
                <p>Jl. Citra Raya Boulevard Blok. S 25/ 01, Kelurahan Panongan, Kecamatan Panongan, Kabupaten Tangerang, Banten 15711</p>
            </div>
        </div>
    </footer>
@endsection
