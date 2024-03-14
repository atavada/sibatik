@extends('layouts.app')

@section('title', 'Tambah About')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah About</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.about.index') }}">About</a></div>
                    <div class="breadcrumb-item">Tambah About</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4>Tambah About</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.about.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul" class="form-control @error('title') is-invalid @enderror">

                                @error('title')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>ISI ABOUT</label>
                                <textarea name="description" placeholder="Masukkan Isi About" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                                @error('description')
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
    <script src="https://cdn.tiny.cloud/1/musghnkfkuhbg0cm2vj0jhi0clvlr89cnisreudieuxm5ov0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Page Specific JS File -->
    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate mentions tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endpush