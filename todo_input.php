<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>会員登録（入力画面）</legend>
      <!-- <a href="todo_read.php">一覧画面</a> -->
      <div>
        名前: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>

      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>