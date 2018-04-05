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

                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <th>No</th>
                                            <th>Particulars</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Date of Transaction</th>
                                            </thead>

                                            <tbody>
                                            @foreach($cashBook->cash as $cash)
                                            <tr>
                                                <td>{{$cash->id}}</td>
                                                <td>{{$cash->particulars}}</td>
                                                @if($cash->type==0)
                                                    <td class="text-info">Credit</td>
                                                    @endif
                                                @if($cash->type==1)
                                                    <td class="text-danger">Debit</td>
                                                @endif

                                                <td>GHs {{number_format( $cash->amount, 2, ',', '.')}}</td>
                                                <td>{{$cash->date_of_transaction}}</td>
                                            </tr>
                                             @endforeach
                                            </tbody>
                                        </table>



                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="title-btn">Bank Entries</span>

                                        <div class="offset-md-7 ">
                                            <a href="{{url(route('bank.create'))}}" class="btn btn-info btn-sm">Create new Bank Entry</a>

                                        </div>

                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <th>No</th>
                                            <th>Particulars</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Date of Transaction</th>
                                            </thead>

                                            <tbody>
                                            @foreach($cashBook->bank as $bank)
                                                <tr>
                                                    <td>{{$bank->id}}</td>
                                                    <td>{{$bank->particulars}}</td>
                                                    @if($bank->type==0)
                                                        <td class="text-info">Credit</td>
                                                    @endif
                                                    @if($bank->type==1)
                                                        <td class="text-danger">Debit</td>
                                                    @endif

                                                    <td>GHs {{number_format( $bank->amount, 2, ',', '.')}}</td>
                                                    <td>{{$bank->date_of_transaction}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


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
