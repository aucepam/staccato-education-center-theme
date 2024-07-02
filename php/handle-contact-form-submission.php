<?php

function handle_contact_form_submission() {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $turnstile_secret = sanitize_text_field(get_theme_mod('services-cloudflare-turnstile-secret'));
    $turnstile_response = $_POST['cf-turnstile-response'];
    $verify_response = wp_remote_post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
      'body' => ['secret' => $turnstile_secret, 'response' => $turnstile_response]
    ]);

    if (is_wp_error($verify_response)) {
      wp_send_json_error('Turnstile verification failed');
      exit();
    }

    $verification_result = json_decode(wp_remote_retrieve_body($verify_response), true);
    if (!$verification_result['success']) {
      wp_send_json_error('Turnstile verification failed');
      exit();
    }

    date_default_timezone_set('Europe/Kyiv');

    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_text_field($_POST['message']);
    $date = date('d.m.Y H:i:s');
    $output = "⚡ <b>Нове повідомлення із сайту:</b>\n\n<b>Ім'я:</b> $name\n<b>Телефон:</b> $phone\n<b>Дата:</b> $date\n<b>Повідомлення:</b>\n\n $message";

    $bot_token = sanitize_text_field(get_theme_mod('services-telegram-token'));
    $chat_id = sanitize_text_field(get_theme_mod('services-telegram-group'));
    $api_url = "https://api.telegram.org/bot$bot_token/sendMessage";

    $params = ['chat_id' => $chat_id, 'text' => $output, 'parse_mode' => 'HTML'];
    $options = ['http' => [
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($params)
    ]];

    $context = stream_context_create($options);
    $result = @file_get_contents($api_url, false, $context);

    if ($result != false) {
      $response = json_decode($result, true);
      
      if (isset($response['ok']) && $response['ok'] == true) {
        wp_send_json_success('Form submitted successfully and message sent to Telegram');
      } else {
        wp_send_json_error('Error from Telegram API: ' . $response['description']);
      }
    } else {
      wp_send_json_error('Error submitting form: unable to reach Telegram API');
    }
  }
}

?>