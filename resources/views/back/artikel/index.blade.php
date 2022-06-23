@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Data Artikel</h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Artikel
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('artikel.create') }}" class="btn app-btn-primary">
                            <i class='bx bx-plus'></i> Tambah Artikel</a>
                    </div>
                    <!--//card-header-actions-->
                </div>
                <!--//col-->
            </div>
        </div>
        <!--//app-card-header-->
        <div class="app-card-body p-3 p-lg-4">
            <div class="app-card app-card-orders-table shadow-sm">
                <div class="app-card-body">
                    @if (Session::has('success'))

                    @endif
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">ID</th>
                                    <th class="cell">Judul</th>
                                    <th class="cell">Slug</th>
                                    <th class="cell">Kategori</th>
                                    <th class="cell">Author</th>
                                    <th class="cell">Status</th>
                                    <th class="cell">Image</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikel as $row)
                                <tr>
                                    <td class="cell">{{ $row->id }}</td>
                                    <td class="cell">{{ $row->judul }}</td>
                                    <td class="cell">{{ $row->slug }}</td>
                                    <td class="cell">{{ $row->kategori->nama_kategori }}</td>
                                    <td class="cell">{{ $row->users->name }}</td>
                                    <td class="cell">
                                        @if($row->is_active == 1)
                                        Publish
                                        @else
                                        Draft
                                        @endif
                                    </td>
                                    <td class="cell">
                                        <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" style="width: 100px; max-height:50px; overflow:hidden;">
                                    </td>
                                    <td class="cell">
                                        <a href="{{ route('artikel.edit', $row->id) }}" class="btn app-btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('artikel.destroy', $row->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn app-btn-danger">
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="cell text-center" colspan="6">Data tidak ditemukan</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                </div>
                <!--//app-card-body-->
            </div>
        </div>
        <!--//app-card-body-->
    </div>
</div>

@endsection