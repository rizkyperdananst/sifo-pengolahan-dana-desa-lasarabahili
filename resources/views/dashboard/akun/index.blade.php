@extends('layouts.dashboard')
@section('title', 'Admin | Data Akun')
    
@section('content')
<div class="row mb-3">
     <div class="col-md-12">
          @if (session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
          @endif
     </div>
</div>

<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header d-flex justify-content-between">
                    <h4>Data Akun</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td>{{ Auth::user()->email }}</td>
                                        <td width="8%">
                                             <a href="{{ route('akun.edit', Auth::user()->id) }}" class="btn btn-warning">
                                                 <i class="fa-solid fa-pen-to-square"></i>
                                             </a>
                                         </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection