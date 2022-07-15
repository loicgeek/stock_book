@extends('layouts.app')


@section("content")

<h1>products list, Welcome {{$user}}</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
   
    @foreach ($products as $product)
    <tr>
        <td> {{ $product['id'] }}</td>
        <td> {{ $product['name'] }}</td>
        <td> {{ $product['price'] }} FCFA</td>
        <td> <a href="{{route('details',['id'=>$product['id']])}}">Details</a></td>
    </tr>
   
    @endforeach
   
</table>


@endsection
