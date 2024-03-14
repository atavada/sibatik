@extends('layouts.app')

@section('title', 'Detail Contact')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Contact</h1>
        
                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.contact.index') }}">Contact</a></div>
                    <div class="breadcrumb-item">Detail Contact</div>
                </div>
            </div>
        
            <div class="section-body">
        
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Contact</h4>
                    </div>
        
                    <div class="card-body">
                        <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAME</label>
                                <p>{{ $contact->name }}</p>
                            </div>
        
                            <div class="form-group">
                                <label>EMAIL</label>
                                <p>{{ $contact->email }}</p>
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <p>{!! $contact->message !!}</p>
                            </div>
                            
                            {{-- change status --}}
                            <div class="form-group">
                                <label>STATUS</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="1" {{ old('status', $contact->is_read == 1) ? 'selected' : '' }}>Sudah Dibaca</option>
                                    <option value="0" {{ old('status', $contact->is_read == 0) ? 'selected' : '' }}>Belum Dibaca</option>
                                </select>
                                <small class="form-text text-muted">Pilih status pesan</small>
                            </div>
        
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                                UPDATE</button>
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

    <!-- Page Specific JS File -->
@endpush