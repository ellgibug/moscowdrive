<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзыв</title>
</head>
<body>
<p><strong>Имя: </strong>{{ $contact->name }}</p>
<p><strong>Телефон: </strong>{{ $contact->phone }}</p>
<p><strong>Емейл: </strong>{{ $contact->email }}</p>
<p><strong>Тема: </strong>{{ $contact->theme }}</p>
<p><strong>Сообщение: </strong>{{ $contact->message }}</p>
<p><strong>Дата: </strong>{{ $contact->created_at }}</p>
</body>
</html>
