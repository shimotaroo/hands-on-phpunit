<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>PHPUnitでのテストコード実装入門ハンズオン</title>
</head>
<body>
    <div class='container'>
        <div class='text-center my-5' id="app">
            <h2>PHPUnitでのテストコード実装入門ハンズオン</h2>
        </div>
        <div class="row justify-content-center text-center">
            <h3 class="mb-3">メモ一覧</h3>
            <div class="col-md-10">
                <div class="row">
                    @foreach($memos as $memo)
                        <div class="col-md-4">
                            <div class="card mb-5">
                                <div class="card-header">
                                   {{ $memo->title }}
                                </div>
                                <div class="card-body">
                                    {{ $memo->body }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <h3 class="mb-3 text-center">メモの登録</h3>
            <div class="row justify-content-center">
                <form class="col-6" action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">タイトル</label>
                        <input name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">内容</label>
                        <input name='body' class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <input name='user_id' type='hidden' value='1' class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary px-3 py-2">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
