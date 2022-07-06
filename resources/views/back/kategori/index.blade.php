@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Data Kategori</h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Kategori
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('kategori.create') }}" class="btn app-btn-primary">
                            <i class='bx bx-plus'></i> Kategori</a>
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
                                    <th class="cell">Nama Kategori</th>
                                    <th class="cell">Slug</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $row)
                                <tr>
                                    <td class="cell">{{ $row->id }}</td>
                                    <td class="cell">{{ $row->nama_kategori }}</td>
                                    <td class="cell">{{ $row->slug }}</td>
                                    <td class="cell">
                                        <a href="{{ route('kategori.edit', $row->id) }}" class="btn app-btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('kategori.destroy', $row->id) }}" method="POST"
                                            class="d-inline">
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
                                    <td class="cell">Data tidak ditemukan</td>
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

    <nav class="app-pagination">
        <ul class="pagination justify-content-center">
            {{$kategori->links('pagination::bootstrap-4')}}
        </ul>
    </nav>
    <!--//app-pagination-->
</div>

@endsection
