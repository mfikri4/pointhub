@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="py-2">Data Supplier</h4>

                    <div class="card-header-action">
                        <a id="import" class="btn btn-success" href="{{ url('supplier/import') }}">Import</a>
                        @if (Session::has('status'))
                             <div class="alert alert-success">
                                {{ session::get('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            </tr>
                        </thead>
                        @foreach ($data as $dt)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$dt->code}}</td>
                                <td>{{$dt->name}}</td>
                                <td>{{$dt->email}}</td>
                                <td>{{$dt->address}}</td>
                                <td>{{$dt->phone}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                      <div class="d-flex">{!! $data->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

