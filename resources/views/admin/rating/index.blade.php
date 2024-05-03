@extends('layouts.app')

@section('title', 'Rating')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Rating</h1>

                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Rating</div>
                </div>
            </div>
        
            <div class="section-body">
        
                <div class="card">
                    <div class="card-header">
                        <h4>Rating</h4>
                    </div>
        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col" style="width: 15%;text-align: center">RATING</th>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col" style="width: 15%;text-align: center">CREATED AT</th>
                                    <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($ratings as $no => $rating)
                                    <tr>
                                        <td>{{ $rating->name }}</td>
                                        <td>{{ $rating->user->email }}</td>
                                        <td class="text-center">{{ $rating->rating }}/5</td>
                                        <td>{{ $rating->content }}</td>
                                        <td class="text-center">{{ $rating->created_at }}</td>
                                        <td class="text-center">
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $rating->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>  
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: center">
                                {{$ratings->links("vendor.pagination.bootstrap-5")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
        <script>
            //ajax delete
            function Delete(id)
                {
                    var id = id;
                    var token = $("meta[name='csrf-token']").attr("content");
        
                    swal({
                        title: "APAKAH KAMU YAKIN ?",
                        text: "INGIN MENGHAPUS DATA INI!",
                        icon: "warning",
                        buttons: [
                            'TIDAK',
                            'YA'
                        ],
                        dangerMode: true,
                    }).then(function(isConfirm) {
                        if (isConfirm) {
        
                            //ajax delete
                            jQuery.ajax({
                                url: "{{ route("admin.rating.index") }}/"+id,
                                data:     {
                                    "id": id,
                                    "_token": token
                                },
                                type: 'DELETE',
                                success: function (response) {
                                    if (response.status == "success") {
                                        swal({
                                            title: 'BERHASIL!',
                                            text: 'DATA BERHASIL DIHAPUS!',
                                            icon: 'success',
                                            timer: 1000,
                                            showConfirmButton: false,
                                            showCancelButton: false,
                                            buttons: false,
                                        }).then(function() {
                                            location.reload();
                                        });
                                    }else{
                                        swal({
                                            title: 'GAGAL!',
                                            text: 'DATA GAGAL DIHAPUS!',
                                            icon: 'error',
                                            timer: 1000,
                                            showConfirmButton: false,
                                            showCancelButton: false,
                                            buttons: false,
                                        }).then(function() {
                                            location.reload();
                                        });
                                    }
                                }
                            });
        
                        } else {
                            return true;
                        }
                    })
                }
        </script>
    <!-- Page Specific JS File -->
@endpush
