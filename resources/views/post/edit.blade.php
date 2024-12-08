@extends('layout')

@section('container')
<style>
    /* Styling untuk card */
    .card {
        border-radius: 12px;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    /* Header card dengan warna */
    .card-header {
        border-bottom: 2px solid #ffc107;
    }

    /* Efek input form */
    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #ffc107;
        box-shadow: 0 0 8px rgba(255, 193, 7, 0.3);
    }

    /* Tombol styling */
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

    /* Styling untuk alert */
    .alert {
        border-radius: 8px;
        font-size: 14px;
        padding: 15px;
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-white text-center">
                    <h4 class="mb-0">EDIT KRITIK DAN SARAN</h4>
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

                <form method="POST" action="{{ route('kritik_saran.update', $kritik_saran->id) }}" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="kritik" class="form-label fw-bold">Kritik</label>
                        <textarea name="kritik" class="form-control" id="kritik" required>{{ old('kritik', $kritik_saran->kritik) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="saran" class="form-label fw-bold">Saran</label>
                        <textarea name="saran" class="form-control" id="saran" required>{{ old('saran', $kritik_saran->saran) }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('kritik_saran.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection