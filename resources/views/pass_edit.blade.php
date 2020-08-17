@extends('layout.common')

@section('title', 'パスワード変更')
@section('type', 'website')
@section('description', 'パスワード変更')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>パスワード変更</h2>
        </div>
        <form method="post" action="{{url('/pass_edit_check', $user->admin_id)}}" class="form-horizontal">
        {{csrf_field()}}
            <div class="form-group @if(!empty($errors->first('now_pass'))) has-error @endif">
                <label>現在のパスワード</label>
                <input type="password" name="now_pass" class="form-control @if(!empty($errors->first('now_pass')))border-danger @endif">
                <span class="help-block text-danger">{{$errors->first('now_pass')}}</span>
                @if(session('pass_message'))
                    <span class="help-block text-danger">{{session('pass_message')}}</span>
                @endif
            </div>
            <div class="form-group @if(!empty($errors->first('new_pass'))) has-error @endif">
                <label>新しいパスワード</label>
                <input type="password" name="new_pass" class="form-control @if(!empty($errors->first('new_pass')))border-danger @endif">
                <span class="help-block text-danger">{{$errors->first('new_pass')}}</span>
            </div>
            <br>
            <input type="submit" value="変更内容を確認" class="btn-lg">
        </form>
    </div>
</div>

<br><br>

@endsection

@include('layout.footer')

