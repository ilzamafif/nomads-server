@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel</h1>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('transaction.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="transaction_status">Status</label>
              <select name="transaction_status" required class="form-control" id="transaction_status">
                <option value="{{ $item->transaction_status }}">
                  Jangan Di Ubah ({{ $item->transaction_status }})
                </option>
                <option value="IN_CART">Keranjang</option>
                <option value="PENDING">Pending</option>
                <option value="SUCCESS">Sukses</option>
                <option value="CANCEL">Batal</option>
                <option value="FAILED">Gagal</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="button-transaction">Ubah</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->
@endsection