@extends('layouts.dashboard')
@section('title', 'Admin | Edit Akun')
    
@section('content')
<div class="container">
     <div class="row mt-2 mb-2">
          <div class="col-md-12">
               @error('error')
                   <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
               @enderror
          </div>
     </div>
     <div class="row mt-2 mb-2">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Edit Akun</h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('akun.update', $u->id) }}" method="POST">
                              @csrf
                              @method('put')
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="name" value="{{ $u->name }}" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Input Nama">
                                        @error('name')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ $u->email }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Input Username">
                                        @error('username')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="passwordOld" class="form-label">Password Lama</label>
                                        <input type="password" name="passwordOld" id="passwordOld" class="form-control @error('passwordOld') is-invalid @enderror" placeholder="Input Password">
                                        @error('passwordOld')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="password" class="form-label">Password Baru</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input Password">
                                        @error('password')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <a href="{{ route('akun.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                        <button class="btn btn-primary float-end">Update</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection