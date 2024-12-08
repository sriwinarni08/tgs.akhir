@extends('layout')

@section('container')
<style>
    /* Styling tombol */
    .btn {
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: bold;
        transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .btn-success {
        background: linear-gradient(45deg, #28a745, #218838);
        border: none;
        color: white;
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #218838, #28a745);
        transform: scale(1.05);
    }

    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0069d9);
        border: none;
        color: white;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0069d9, #007bff);
        transform: scale(1.05);
    }

    .btn-danger {
        background: linear-gradient(45deg, #dc3545, #c82333);
        border: none;
        color: white;
    }

    .btn-danger:hover {
        background: linear-gradient(45deg, #c82333, #dc3545);
        transform: scale(1.05);
    }

    /* Styling card */
    .card {
        border-radius: 16px;
        overflow: hidden;
        background: linear-gradient(145deg, #ffffff, #f3f3f3);
        border: 1px solid #ddd;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: linear-gradient(90deg, #4e73df, #375a7f);
        color: white;
        padding: 15px;
        font-size: 1.2rem;
        text-align: center;
        font-weight: bold;
        letter-spacing: 1px;
    }

    /* Styling tabel */
    .table thead th {
        background: linear-gradient(45deg, #4e73df, #375a7f);
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .container {
        margin-top: 50px;
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }

    h3 {
        color: #4e73df;
    }
    .d-flex.gap-2 > * {
    margin-right: 8px; /* Atur jarak antar elemen anak */
}

.d-flex.gap-2 > *:last-child {
    margin-right: 0; /* Menghapus jarak tombol terakhir */
}


    /* Responsive Design */
    @media (max-width: 768px) {
        .btn {
            padding: 8px 12px;
            font-size: 0.9rem;
        }

        .card-header {
            font-size: 1rem;
        }
    }
</style>

<div class="container my-5 p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Kritik dan Saran</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-success">Tambah Kritik & Saran</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-lg">
        <div class="card-header">
            Daftar Kritik dan Saran
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kritik</th>
                            <th>Saran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->nama }}</td>
                                <td>{{ $post->kritik }}</td>
                                <td>{{ $post->saran }}</td>
                                <td>
                                <div class="d-flex justify-content-end gap-2">
                                 <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                 <form method="POST" action="{{ route('posts.destroy', $post->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kritik dan saran ini?');">
                                    @csrf
                                    @method('DELETE')
                                   <button type="submit" class="btn btn-danger">Hapus</button>
                                  </form>
                                 </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
