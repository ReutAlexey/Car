@extends('layouts.header')

@section('content')
    <div>
        <div class="col-lg-6 col-md-10">
            <form
                action="/"
                method="GET"
                class="mb-3"
            >
                <div class="form-row align-items-center">
                    <div class="col-8">
                        <input
                            name="search"
                            type="text"
                            class="form-control col-auto"
                            placeholder="Enter vin/lot"
                        >
                    </div>
                    <div class="col-auto">
                        <button
                            class="btn btn-primary col-auto"
                        >Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">make</th>
                        <th scope="col">model</th>
                        <th scope="col">year</th>
                        <th scope="col">odometer</th>
                        <th scope="col">lot</th>
                        <th scope="col">vin</th>
                        <th scope="col">bid</th>
                    </tr>
                    </thead>
                    <tbody class="thead-light">
                    @foreach($lots as $lot)
                        <tr>
                            <td scope="row">{{$loop->index + 1}}</td>
                            <td>{{$lot->make}}</td>
                            <td>{{$lot->model}}</td>
                            <td>{{$lot->year}}</td>
                            <td>{{$lot->odometer}}</td>
                            <td>{{$lot->lot}}</td>
                            <td>{{$lot->vin}}</td>
                            <td>{{$lot->bid}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">

            @if (count($lots) >= 25)
                <div class="row justify-content-center mt-2">
                    <div class="row-md-10">
                        <div class="pagination-sm">
                            {{ $lots->onEachSide(0)->links() }}
                        </div>
                    </div>
                </div>
                <br>
            @endif
        </div>
    </div>
@endsection

