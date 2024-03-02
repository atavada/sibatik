@extends('layouts.app')
@section('title', 'Edit User')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
        
                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.user.index') }}">Users</a></div>
                    <div class="breadcrumb-item">Users Edit</div>
                </div>
            </div>
        
            <div class="section-body">
        
                <div class="card">
                    <div class="card-header">
                        <h4></i> Edit User</h4>
                    </div>
        
                    <div class="card-body">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>NAME</label>
                                <p>{{ $user->name }}</p>
                                {{-- <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                    placeholder="Masukkan Nama User"
                                    class="form-control @error('name') is-invalid @enderror">
        
                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
        
                            <div class="form-group">
                                <label>EMAIL</label>
                                <p>{{ $user->email }}</p>
                                {{-- <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                    placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">
        
                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
        
                            <div class="form-group">
                                <label class="font-weight-bold">ROLE</label>
                                <br>
                                <select class="form-control" name="role">
                                    <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
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
@stop