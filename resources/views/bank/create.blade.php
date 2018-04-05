@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Bank Entry</div>

                    <div class="card-body">

                        {!! Form::open(['route'=>'bank.store']) !!}

                        <div class="form-group">
                            {!! Form::label('particulars') !!}
                            {!! Form::text('particulars',null,['class'=>'form-control']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('amount') !!}
                            {!! Form::text('amount',null,['class'=>'form-control']) !!}
                            {!! Form::hidden('cash_book_id',$id) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('type') !!}
                            {!! Form::select('type',['0'=>'Credit','1'=>'Debit'],null,['class'=>'form-control']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('Date') !!}
                            {!! Form::date('date_of_transaction',null,['class'=>'form-control']) !!}

                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Add Entry</button>
                        {!! Form::close() !!}




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
