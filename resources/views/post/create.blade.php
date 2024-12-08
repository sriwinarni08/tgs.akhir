@extends('layout')

@section('container')
<style>
    /* Styling untuk card */
    .card {
        border-radius: 12px;
        overflow: hidden;
        position: center;
        background-color: #f8f9fa;
    }

    /* Efek hover dan fokus pada input */
    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
    }

    /* Styling tombol */
    .btn {
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 8px;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    /* Alert styling */
    .alert {
        border-radius: 8px;
        padding: 15px;
        font-size: 14px;
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">NEW KRITIK DAN SARAN</h4>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                        <p class="mb-0">{{ session('success') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                        @foreach ($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('posts.index') }}" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="Nama" class="form-label fw-bold">Nama</label>
                        <textarea name="Nama" class="form-control" type="text" placeholder="Masukkan Nama Anda" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kritik" class="form-label fw-bold">Kritik</label>
                        <textarea name="kritik" class="form-control" id="kritik" placeholder="Masukkan kritik Anda" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="saran" class="form-label fw-bold">Saran</label>
                        <textarea name="saran" class="form-control" id="saran" placeholder="Masukkan saran Anda" required></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection