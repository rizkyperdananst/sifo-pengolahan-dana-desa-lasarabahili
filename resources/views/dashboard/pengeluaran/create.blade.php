@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Pengeluaran')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Pengeluaran</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('pengeluaran.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="tanggal" class="form-label">Tanggal</label>
                                   <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                                   @error('tanggal')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="pengeluaran" class="form-label">Keluar</label>
                                   <input type="number" name="pengeluaran" id="pengeluaran" class="form-control @error('pengeluaran') is-invalid @enderror" placeholder="masukkan pengeluaran">
                                   @error('pengeluaran')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="keterangan" class="form-label">Keterangan</label>
                                   <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror" placeholder="masukkan keterangan"></textarea>
                                   @error('keterangan')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12">
                                   <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Simpan</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection