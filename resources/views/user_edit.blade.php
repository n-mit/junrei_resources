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
            <h2>基本情報編集</h2>
        </div>
    </div>
    <div class="row">
        <form method="post" action="{{url('/user_edit_check', $user->admin_id)}}" class="form-horizontal">
        {{csrf_field()}}
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="form-group">
                    <label>ユーザーID</label><span class="text-danger">※半角英数字で記入</span>
                    <input type="text" name="user" value="{{$user->user}}"
                    class="form-control @if(!empty($errors->first('user')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('user')}}</span>
                </div>
                <div class="form-group">
                    <label>ユーザー名</label>
                    <input type="text" name="user_name" value="{{$user->user_name}}"
                    class="form-control @if(!empty($errors->first('user_name')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('user_name')}}</span>
                </div>
                <br>
                <input type="submit" value="編集内容を確認" class="btn-lg">
            </div>
        </form>
    </div>
</div>

@endsection

@include('layout.footer')
