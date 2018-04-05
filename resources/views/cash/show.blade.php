@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Oyibi cashbook</div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">

                                    <div class="card-body">

                                        <a href="{{url(route('cashbook.create'))}}" class="btn btn-danger">Create new Credit Entry</a>

                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="card">

                                    <div class="card-body">

                                        <a href="{{url(route('cashbook.index'))}}" class="btn btn-info">Create new Bank Entry</a>

                                    </div>
                                </div>


                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
