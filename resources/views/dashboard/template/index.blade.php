@extends('dashboard.Layout.main')

@section('main')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Haii {{ $user }}</h1>
  </div>
  @if (session('success'))
  <div class="alert alert-success mt-1" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <a href="/dashboard/menutemplate" class="btn btn-success mt-2 mb-2">Kembali</a>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Nama Template</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($template as $index => $t)
            <tr>
              <td>{{ $index+1 }}</td>
              <td>{{ $t->kategori->nama }}</td>
              <td>{{ $t->nama }}</td>
              <td>
                <a href="/dashboard/menutemplate/template/{{ $t->id }}/check" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="/dashboard/menutemplate/template/{{ $t->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <form action="/dashboard/menutemplate/form/{{ $t->id }}" class="d-inline" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="badge bg-danger border-0" onclick="return confirm('Konfirmasi Menghapus Formulir ?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection