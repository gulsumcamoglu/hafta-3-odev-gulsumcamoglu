@extends('layout.admin')
@section('title',$data_['title'])
@section('breakcrumb')

<li class="breadcrumb-item active" aria-current="page">{{$data_['title']}}</li>

@endsection
