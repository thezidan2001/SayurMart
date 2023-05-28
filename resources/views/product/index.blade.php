@extends('layouts.app')

@section('content')
<div class="container">
	<a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.product.create') }}" role="button">Tambah Produk</a>
    @if (!empty($products))
<table class="table mt-2">
    <thead class="thead-dark">
      <tr>
		<th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">Nama</th>
		<th scope="col">Deskripsi</th>
        <th scope="col">Harga</th>
        <th scope="col">Gambar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
		@php
			$i = 0;
		@endphp
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ ++$i }}</th>
			<td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_description }}</td>
			<td>{{ $product->product_price }}</td>
			<td>{{ $product->image }}</td>
            <td>
				<a class="btn btn-primary mt-2 mb-2" href="/catalogue/edit/{{ $product->id }}" role="button">Edit</a>
				<a class="btn btn-danger mt-2 mb-2" href="/catalogue/delete/{{ $product->id }}" role="button">Hapus</a>
			</td>
			
        </tr>  
        @endforeach    
    
    </tbody>
  </table> 
    @else
        <h2>Tidak ada produk!</h2>
    @endif
</div> 
@endsection