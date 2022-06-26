@extends('layouts.master')
@section('content')


 <div class="row g-5">
    @include('components.count', ['count' => $count])

    @include('components.products', ['products' => $products])
    @include('components.pagination', ['products' => $products])

</div>   
@endsection
