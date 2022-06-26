@extends('layouts.master')

@section('content')
@include('components.count', ['count' => $count])

@include('components.products', ['products' => $products])
@include('components.pagination', ['products' => $products])
@endsection