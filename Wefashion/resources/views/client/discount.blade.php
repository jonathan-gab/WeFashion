@extends('layouts.master')
@section('content')
 <div class="row g-5">
    @include('components.products', ['products' => $products])

</div>   
@endsection
