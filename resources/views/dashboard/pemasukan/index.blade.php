@extends('layouts.dashboard')
@section('title', 'Admin | Data Pemasukan')
    
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
                    <h4>Data Pemasukan</h4>
                    <a href="{{ route('pemasukan.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Sumber Dana</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no=1;
                                   @endphp
                                   @foreach ($pemasukan as $p)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>@currency($p->pemasukan)</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td width="16%">
                                             {{-- <a href="#" class="btn btn-info">
                                                 <i class="fa-solid fa-eye"></i>
                                             </a> --}}
                                             <a href="{{ route('pemasukan.edit', $p->id) }}" class="btn btn-warning">
                                                 {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                                 Edit
                                             </a>
                                             <form action="{{ route('pemasukan.destroy', $p->id) }}" method="POST"
                                                 class="d-inline mb-1">
                                                 @csrf
                                                 @method('delete')
                                                 <button type="submit" class="btn btn-danger">
                                                  {{-- <i class="fa-solid fa-trash"></i></button> --}}
                                                  Hapus
                                             </form>
                                         </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                              <tfoot>
                                   <tr>
                                        <th colspan="2">Total</th>
                                        <th colspan="3">@currency($total)</th>
                                   </tr>
                              </tfoot>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection