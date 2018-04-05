@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$cashBook->name}}'s cashbook</div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="title-btn">Cash Entries</span>
                                        <div class="offset-md-7">
                                            <a href="{{url(route('cash.create'))}}" class="btn btn-danger btn-sm">Create new Cash Entry</a>

                                        </div>

                                    </div>
                                    <div class="card-body">



                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="title-btn">Bank Entries</span>

                                        <div class="offset-md-7 ">
                                            <a href="{{url(route('bank.index'))}}" class="btn btn-info btn-sm">Create new Bank Entry</a>

                                        </div>

                                    </div>
                                    <div class="card-body">



                                    </div>

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
