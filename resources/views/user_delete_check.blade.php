@extends('layout.common')

@section('title', 'ユーザー情報削除')
@section('type', 'website')
@section('description', 'ユーザー情報削除')
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
            <h2>ユーザー削除</h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <h3>削除するユーザー情報</h3>
        </div>
        <form method="post" action="{{url('/user_delete_done', $user->admin_id)}}">
        {{csrf_field()}}
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ユーザーID</th>
                    <td>{{$user->user}}</td>
                </tr>
                <tr>
                    <th>ユーザー名</th>
                    <td>{{$user->user_name}}</td>
                </tr>
            </table>
            <br>
            <input type="button" value="戻る" onclick="histry.back()">
            <br><br>
            <input type="submit" value="削除" class="btn-lg btn-danger" onclick="return confirm('本当に削除しますか？')">
        </form>
    </div>
</div>

@endsection

@include('layout.footer')
