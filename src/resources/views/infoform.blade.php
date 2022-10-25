<head>
  <meta charset="utf-8">
  <!-- css をあてる際は以下のようにcssを読み込む-->
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
</head>

  <!-- MySQLから出力した結果を表形式 -->
<table border="1">
    <tr>
        <th>title</th>
        <th>content</th>
        <th>delete</th>
    </tr>
    @foreach ($infos as $info)
    <tr>
        <td>{{ $info->title }}</td>
        <td>{{ $info->content }}</td>
        <td>
          <form action="/info/delete/{{$info->title}}" method="POST">
          {{ csrf_field() }}
          <input type="submit" class="btn btn-danger btn-dell" value="削除">
          </form>
        </td>
    </tr>
    @endforeach
</table>

<form method="post" action="{{ url('/info') }}">
    {{ csrf_field() }}
    <p>
      <input type="text" name="title" placeholder="enter title">
    </p>
    <p>
      <textarea name="body" placeholder="enter body"></textarea>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>