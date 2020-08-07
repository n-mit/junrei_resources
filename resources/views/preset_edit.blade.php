@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>プリセットの編集</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto" style="width:70%">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <form method="post" action="{{url('/preset_edit_check', $data->id)}}" class="form-horizontal">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>プリセット名</label>
                        <input type="text" name="preset_name" class="form-control" value="{{$data->preset_name}}">
                    </div>
                    <div class="form-group">
                        <label>事業の内容</label>
                        <textarea name="discription" rows="5" class="form-control">{{$data->discription}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>所要額の内訳</label>
                        <textarea name="sum" rows="5" class="form-control">{{$data->sum}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>備考</label>
                        <input type="text" name="note" class="form-control" value="{{$data->note}}">
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="編集" class="btn-primary btn-lg" style="width:100%">
                    </div>
                </form>
                <hr class="my-5">
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <a href="/preset_list" class="btn-primary btn-lg">プリセット一覧に戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection