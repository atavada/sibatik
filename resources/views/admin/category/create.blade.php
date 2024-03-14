@extends('layouts.app')

@section('title', 'Tambah Kategori')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Kategori</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.category.index') }}">Kategori</a></div>
                    <div class="breadcrumb-item">Tambah Kategori</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Kategori</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>NAMA KATEGORI</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Kategori" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
@endpush