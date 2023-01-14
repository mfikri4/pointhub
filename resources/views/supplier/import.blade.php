@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="py-2">Import Data Supplier</h4>
                        @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session::get('error') }}<br>
                            @error('code')
                                Kolom code wajib diisi!
                            @enderror<br>
                            @error('name')
                                Kolom name wajib diisi!
                            @enderror<br>
                            @error('email')
                                Kolom email wajib diisi!
                            @enderror<br>
                            @error('address')
                                Kolom address wajib diisi!
                            @enderror<br>
                            @error('phone')
                                Kolom phone wajib diisi!
                            @enderror
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                </div>
                <div class="card-body">
                    <form class="py-2" action="{{ url('supplier/import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 form-group">
                            <div class="col-md-6 text-left">
                                <input type="file" name="file" class="form-control">                                
                            </div>
                        </div> 
                        
                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('code') is-invalid @enderror" name="code" id="code">
                                    <option value="">Pilih Opsi</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                    <option value="phone">phone</option>
                                </select>
                                {{-- @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                                    <option value="">Pilih Opsi</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                    <option value="phone">phone</option>
                                </select>
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                                    <option value="">Pilih Opsi</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                    <option value="phone">phone</option>
                                </select>
                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('address') is-invalid @enderror" name="address" id="address">
                                    <option value="">Pilih Opsi</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                    <option value="phone">phone</option>
                                </select>
                                {{-- @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <select class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}">
                                    <option value="">Pilih Opsi</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                    <option value="phone">phone</option>
                                </select>
                                {{-- @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Import</button>                  

                    </form> 

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
