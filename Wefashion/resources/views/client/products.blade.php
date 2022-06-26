@extends('layouts.master')

@section('content')
    @include ('components.products', ['products'=>$products])
@endsection