@extends('layout.common')

@section('title', '基本情報編集')
@section('type', 'website')
@section('description', '基本情報編集')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>基本情報編集内容の確認</h2>
        </div>
        <form method="post" action="{{url('/user_edit_done')}}" class="form-horizontal">
        {{csrf_field()}}
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="form-group">
                    <label>ユーザーID</label>{{$user}}
                    <input type="text" name="user" value="{{$user}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>ユーザー名</label>{{$user_name}}
                    <input type="text" name="user_name" value="{{$user_name}}" class="form-control">
                </div>
                <br>
                <input type="submit" value="編集内容を確認" class="btn-lg">
            </div>
        </form>
    </div>
</div>

@endsection

@include('layout.footer')
