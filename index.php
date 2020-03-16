<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax練習</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <p>現在時刻:<?= date('H:i:s') ?></p>
    <div class="container">
      <form method="post" action="" class="form">
      <h1>入力を即時表示</h1>
      <p>送信された文字</p>
        <div class="ajaxInput"></div>
        <label for="name" class="form__label">入力フォーム</label>
        <input
          type="text"
          name="name"
          class="form__input js-getVal"
          autocomplete="off"
        />

        <input
          type="submit"
          name="submit"
          value="送信"
          class="form__btn"
        />
      </form>
    </div>
    <div class="container">
      <h1>サーバー側から追加ファイルを取得</h1>
      <button class="btn__add">追加ファイル取得</button>
      <div id="add"></div>
    </div>

    
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="index.js"></script>
  </body>
</html>
