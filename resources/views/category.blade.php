<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$category}}の一覧</title>
</head>
<body>
    <p>{{$category}}の一覧</p>

    @if ($category=='news')
        <p>本日のニュースをお伝えします</p>
    @endif
</body>
</html>
