<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

class SendMailToUsers
{
    private $userRepository;
    private $mailer;

    public function __construct(UserRepository $userRepository, IMailer $mailer)
    {
        $this->userRepository = $userRepository;
        $this->mailer = $mailer;
    }

    public function handle(): void
    {
        $emails = $this->userRepository->all();
        foreach ($emails as $email) {
            $this->mailer->send($email);
        }
    }
}

$job = new SendMailToUsers(new UserRepository, new MailGunMailer);
$job->handle();