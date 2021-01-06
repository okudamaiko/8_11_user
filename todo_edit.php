<?php
// var_dump($_GET);
// exit();
$id = $_GET['id'];

include('functions.php');
$pdo = connect_to_db();

$sql = 'SELECT * FROM users_table WHERE id =:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  // var_dump($record);
  // exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録（更新画面）</title>
</head>

<body>
  <form action="todo_update.php" method="POST">
    <fieldset>
      <legend>会員登録（更新画面）</legend>
      <!-- <a href="todo_read.php">一覧画面</a> -->
      <div>
        名前: <input type="text" name="username" value="<?= $record['username'] ?>">
      </div>
      パスワード: <input type="text" name="password" value="<?= $record['password'] ?>">
      </div>


      <div>
        : <input type="hidden" name="id" value="<?= $record['id'] ?>">
      </div>
      <div>
        <button>更新</button>
      </div>

    </fieldset>
  </form>

</body>

</html>