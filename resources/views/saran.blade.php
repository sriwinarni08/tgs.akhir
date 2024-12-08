@extends('layout')
@section('container')

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        KRITIK DAN SARAN
                    </div>
                    @if (session('success'))
                        <div class="alert-success ">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store') }}" class="p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Email</label>
                            <input type="Email" name="title" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Kesan</label>
                            <input type="text" name="body" class="form-control" id="body">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection