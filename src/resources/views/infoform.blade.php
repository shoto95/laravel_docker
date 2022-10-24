<head>
  <meta charset="utf-8">
  <!-- css をあてる際は以下のようにcssを読み込む-->
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
</head>

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