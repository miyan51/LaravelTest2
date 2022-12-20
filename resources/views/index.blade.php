<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Laravel Test</title>
</head>

<body>
  <h3>Laravel Test</h3>
  @error('name')
  {{$message}}
  @enderror
  @error('password')
  {{$message}}
  @enderror
  <form action="/tests" method="POST">
    @csrf
    <input name="name" placeholder="name"><br>
    <input name="password" placeholder="password">
    <button type="submit">登録</button>
  </form>
  <ul>ユーザー名
    @foreach ($tests as $test)
    <li>
      {{ $test->name }}
    </li>
    @endforeach
</body>

</html>