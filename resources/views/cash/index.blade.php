@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">My Cashbooks</div>

                    <div class="card-body">

                      <table class="table table-bordered table-striped">
                          <thead>
                          <th>Name</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                          </thead>
                          <tbody>

                          @foreach($cashbooks as $cashbook)
                          <tr>
                              <td>{{$cashbook->name}}</td>
                              <td><a class="btn btn-primary" href="{{route('cashbook.show',$cashbook->id)}}"><i class="fa fa-eye"></i></a></td>
                              <td><a class="btn btn-warning" href="{{route('cashbook.edit',$cashbook->id)}}"><i class="fa fa-pencil"></i></a></td>
                              <td>
                                  <form action="{{url('/cashbook/'.$cashbook->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')

                                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                  </form>
                              </td>
                          </tr>

                              @endforeach
                          </tbody>
                      </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
