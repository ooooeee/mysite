<?php
define('HAS_ATTACH_REQUIRED', true);
define('HAS_ATTACH_IN_BODY', false);

// MAIL_CONFIG
define('EMAIL_SETTINGS', [
  'addresses' => ['m.r.arki@mail.ru'], // кому необходимо отправить письмо
  'from' => ['no-reply@domain.ru', 'mysite'], // от какого email и имени необходимо отправить письмо
  'subject' => 'заявка', // тема письма
  'host' => 'smtp.mail.ru', // SMTP-хост
  'username' => 'm.r.arki@mail.ru', // // SMTP-пользователь
  'password' => 'ahklydw235dg', // SMTP-пароль
  'port' => '465' // SMTP-порт
]);