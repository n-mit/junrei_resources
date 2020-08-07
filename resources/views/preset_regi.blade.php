@extends('layout/layout')
@section('contents')
<br>

<div class="text-center">
    <p><h2>プリセット登録</h2></p>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="mx-auto" style="width:70%">
                <form method="post" action="/preset_regi_check" class="form-horizontal">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>プリセット名</label>
                        <input type="text" name="preset_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>事業の内容</label>
                        <textarea name="discription" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>所要額の内訳</label>
                        <textarea name="sum" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>備考</label>
                        <input type="text" name="note" class="form-control">
                    </div>
                    <br>
                    <input type="submit" value="登録" class="btn-primary btn-lg" style="width:100%">
                </form>
                <br>
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <a href="/preset_list" class="btn-primary btn-lg">プリセット一覧に戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection