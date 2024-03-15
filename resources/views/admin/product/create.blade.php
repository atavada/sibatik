@extends('layouts.app')

@section('title', 'Tambah Produk')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Produk</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.product.index') }}">Produk</a></div>
                    <div class="breadcrumb-item">Tambah Produk</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Produk</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                <div class="form-text text-muted">The image must have a maximum size of 2MB</div>

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA PRODUK</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Produk" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>DESKRIPSI</label>
                                <textarea name="description" rows="10" placeholder="Masukkan Deskripsi Produk" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                                @error('description')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="number" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Produk" class="form-control @error('price') is-invalid @enderror">

                                @error('price')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>LINK SHOPEE</label>
                                <input type="text" name="shopee_url" value="{{ old('shopee_url') }}" placeholder="Masukkan Link Shopee Produk" class="form-control @error('shopee_url') is-invalid @enderror">

                                @error('shopee_url')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>LINK TOKOPEDIA</label>
                                <input type="text" name="tokopedia_url" value="{{ old('tokopedia_url') }}" placeholder="Masukkan Link Tokopedia Produk" class="form-control @error('tokopedia_url') is-invalid @enderror">

                                @error('tokopedia_url')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KATEGORI</label>
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">-- PILIH KATEGORI --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>STATUS</label>
                                <select class="form-control selectric @error('status') is-invalid @enderror" name="status">
                                    <option value="">-- PILIH STATUS --</option>
                                    <option value="publish">PUBLISH</option>
                                    <option value="draft">DRAFT</option>
                                </select>

                                @error('status')
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