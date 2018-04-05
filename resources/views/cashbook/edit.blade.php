@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Cashbook</div>

                    <div class="card-body">

                        {!! Form::model($cashBook,['route' => ['cashbook.update',$cashBook->id],'method'=>'patch']) !!}

                        <div class="form-group">
                            {!! Form::label('name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}

                        </div>
                        <button class="btn btn-block btn-warning" type="submit">Update</button>
                        {!! Form::close() !!}




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
