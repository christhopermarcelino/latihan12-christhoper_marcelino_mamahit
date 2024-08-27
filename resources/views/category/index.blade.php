@extends('layouts.general')

@section('content')
<section class="container">
    <div class="row">
        <!-- <div class="col-6">
            @auth
            <h1>Hi, {{ auth()->user()->name }}!</h1>
            @foreach($category as $item)
            <p>{{ $item['name'] }}</p>
            <p>{{ $item['uniqueID'] }}</p>
            @endforeach

            <hr>

            <p>{{ $product['name'] }}</p>
            <p>{{ $product['uniqueID'] }}</p>

            @endauth

            @guest
            <h1>Halo, harap login dahulu!</h1>
            @endguest
        </div>
        <div class="col-6">
            @include('category.form')
        </div> -->

        <h1 class="fw-bold">Product List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Final Price</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach($datas as $data)
                @foreach($data['products'] as $product)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>Rp {{ number_format($product['price']) }}</td>
                    <td>{{ $product['discount'] }}%</td>
                    <td>Rp {{ number_format($product['price'] * (100 - $product['discount']) / 100) }}</td>
                </tr>
                @endforeach
                @endforeach
                @php $index = 1 @endphp
            </tbody>
        </table>
    </div>
</section>
@endsection