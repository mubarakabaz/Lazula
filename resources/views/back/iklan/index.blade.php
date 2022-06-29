@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Data Iklan</h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Iklan
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        
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
                                    <th class="cell">Judul Iklan</th>
                                    <th class="cell">Link</th>
                                    <th class="cell">Gambar Iklan</th>
                                    <th class="cell">Views</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($iklan as $row)
                                <tr>
                                    <td class="cell">{{ $row->id }}</td>
                                    <td class="cell">{{ $row->judul_iklan }}</td>
                                    <td class="cell">{{ $row->link_iklan }}</td>
                                    <td class="cell">
                                        <img src="{{ asset('uploads/' . $row->gambar_iklan) }}" width="100">
                                    </td>

                                    <td class="cell">
                                    @if($row->status == 1)
                                            Publish
                                        @else
                                            Draft
                                        @endif
                                    </td>
                                    <td class="cell">
                                    <a href="{{ route('iklan.edit', $row->id) }}" class="btn app-btn-warning">
                                        <i class="bi bi-pencil"></i>
                                        </a>
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
