<?php

declare(strict_types=1);

require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

$recipient = 'jaybeedesolong@gmail.com';

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function loadEnv(string $path): array
{
    $env = [];

    if (!is_file($path)) {
        return $env;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return $env;
    }

    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '' || str_starts_with($trimmed, '#')) {
            continue;
        }

        [$key, $value] = array_pad(explode('=', $line, 2), 2, '');
        $env[trim($key)] = trim($value);
    }

    return $env;
}

function showResult(string $title, string $message, int $statusCode): never
{
    http_response_code($statusCode);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?= escape($title) ?> | Jaybee Desolong</title>
    </head>
    <body>
      <main>
        <h1><?= escape($title) ?></h1>
        <p><?= escape($message) ?></p>
        <a href="index.php#contact">Back to the portfolio</a>
      </main>
    </body>
    </html>
    <?php
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    showResult('Method not allowed', 'Please use the contact form to send a message.', 405);
}

$name = $_POST['name'] ?? null;
$senderEmail = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;

if (!is_string($name) || !is_string($senderEmail) || !is_string($message)) {
    showResult('Invalid form', 'Please complete all fields and try again.', 400);
}

$name = trim($name);
$senderEmail = trim($senderEmail);
$message = trim($message);

if ($name === '' || $senderEmail === '' || $message === '') {
    showResult('Missing information', 'Please fill in your name, email, and message.', 400);
}

if (strlen($name) > 100 || strlen($senderEmail) > 254 || strlen($message) > 5000) {
    showResult('Message too long', 'Please shorten your details and try again.', 400);
}

if (filter_var($senderEmail, FILTER_VALIDATE_EMAIL) === false) {
    showResult('Invalid email', 'Please enter a valid email address so I can reply.', 400);
}

$env = loadEnv(__DIR__ . '/.env');
$fromEmail = $env['SMTP_FROM_EMAIL'] ?? 'noreply@localhost';
$fromName = 'Jaybee Desolong';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = $env['SMTP_HOST'] ?? 'localhost';
$mail->SMTPAuth = true;
$mail->Username = $env['SMTP_USERNAME'] ?? '';
$mail->Password = $env['SMTP_PASSWORD'] ?? '';
$mail->SMTPSecure = $env['SMTP_ENCRYPTION'] ?? 'tls';
$mail->Port = (int) ($env['SMTP_PORT'] ?? 587);
$mail->setFrom($fromEmail, $fromName);
$mail->addReplyTo($senderEmail, $name);
$mail->addAddress($recipient, 'Jaybee Desolong');
$mail->Subject = 'Portfolio contact message';
$mail->CharSet = 'UTF-8';
$mail->isHTML(false);
$mail->Body = "Name: {$name}\nEmail: {$senderEmail}\n\nMessage:\n{$message}";
$mail->AltBody = $mail->Body;

try {
    if (!$mail->send()) {
        throw new RuntimeException('SMTP send failed unexpectedly.');
    }
} catch (Throwable $exception) {
    error_log('Portfolio contact email could not be sent via SMTP: ' . $exception->getMessage());
    showResult(
        'Message not sent',
        'The email server could not send your message. Please try again later.',
        503
    );
}

showResult('Message sent', 'Thank you. Your message has been sent.', 200);