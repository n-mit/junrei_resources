@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>プリセットの登録内容確認</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto" style="width:70%">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <form method="post" action="/preset_regi_done">
                {{csrf_field()}}
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>プリセット名</th><td>{{$preset_name}}</td>
                            <input type="hidden" name="preset_name" value="{{$preset_name}}">
                        </tr>
                        <tr>
                            <th>事業の内容</th><td>{{$discription}}</td>
                            <input type="hidden" name="discription" value="{{$discription}}">
                        </tr>
                        <tr>
                            <th>所要額の内訳</th><td>{{$sum}}</td>
                            <input type="hidden" name="sum" value="{{$sum}}">
                        </tr>
                        <tr>
                            <th>備考</th><td>{{$note}}</td>
                            <input type="hidden" name="note" value="{{$note}}">
                        </tr>
                    </table>
                    <input type="submit" value="登録" style="width:100%" class="btn-primary btn-lg"><br/><br/>
                        <form>
                            <div class="text-center">
                                <input type="button" onclick="history.back()"value="戻る" style="width:20%" class="btn-primary btn-lg">
                            </div>  
                        </form>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection