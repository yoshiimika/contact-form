<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <div class="mask-landscape">
      <h1>Thank you</h1>
      <div class=”thanks-message”>
        <p class="thanks-message__content">お問い合わせありがとうございました</p>
      </div>
      <form class="home__button" action="/" method="get">
        <button class="home__button-submit" type="submit" >HOME</button>
      </form>
    </div>
  </main>
</body>
</html>