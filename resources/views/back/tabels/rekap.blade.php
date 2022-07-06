@extends('layouts.default')
@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Rekap Data Sensor</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                        <div class="col-auto">
                            <select class="form-select w-auto">
                                <option selected value="option-1">All</option>
                                <option value="option-2">This week</option>
                                <option value="option-3">This month</option>
                                <option value="option-4">Last 3 months</option>
                            </select>
                        </div>

                        <div class="col-auto">
                            <a class="btn app-btn-secondary" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                Download CSV
                            </a>
                        </div> <!-- Download CSV -->
                    </div>
                    <!--//row-->
                </div>
                <!--//table-utilities-->
            </div>
            <!--//col-auto-->
        </div>
        <!--//row-->

        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">No</th>
                                        <th class="cell">Suhu</th>
                                        <th class="cell">PH</th>
                                        <th class="cell">TDS</th>
                                        <th class="cell">Air Baku</th>
                                        <th class="cell">Nutrisi</th>
                                        <th class="cell">PH UP</th>
                                        <th class="cell">PH Down</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sensor as $row)
                                    <tr>
                                        <td class="cell">{{ $row->id}}</td>
                                        <td class="cell">{{ $row->suhu}}</td>
                                        <td class="cell">{{ $row->ph}}</td>
                                        <td class="cell">{{ $row->tds}}</td>
                                        <td class="cell">{{ $row->pab}}</td>
                                        <td class="cell">{{ $row->ppn}}</td>
                                        <td class="cell">{{ $row->ppu}}</td>
                                        <td class="cell">{{ $row->ppd}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <!--//table-responsive-->

                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {{$sensor->links('pagination::bootstrap-4')}}
                    </ul>
                </nav>
                <!--//app-pagination-->

            </div>
            <!--//tab-pane-->
        </div>
        <!--//tab-content-->



    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->

@endsection
