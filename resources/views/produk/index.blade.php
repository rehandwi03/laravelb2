@extends('template.master')
@section('dhead')
<h1 class="m-0 text-dark">Data Produk</h1>
@endsection
@section('content')
<section class="content">
    @if ($message = Session::get('success'))
    <div class="alert alert-primary" role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah</a>
            </h3>
            {{-- <div class="float-right mr-3">
                <button type="button" class="btn btn-circle btn-sm btn-info" data-toggle="modal"
                    data-target="#exampleModal"><i class="ti-plus"></i></button><span
                    class="ml-2 font-normal text-dark">Tambah Mobil</span>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Kategori Produk</th>
                        <th>Qty</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $row->nama_produk }}</th>
                        <th>{{ $row->kategori->nama_kategori }}</th>
                        <th>{{ $row->qty }}</th>
                        <th>
                            <a href="{{ route('produk.edit', $row->id) }}" class="badge badge-warning">Ubah</a>
                            <button class="badge badge-danger" type="submit">Hapus</button>
                        </th>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@endsection