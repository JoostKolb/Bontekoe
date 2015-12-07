<?php

class DBKMailer
{
    protected $phpmailer;

    public function __construct()
    {
        $this->phpmailer = new PHPMailer;

        $this->phpmailer->isSMTP();
        $this->phpmailer->Host = 'smtp.gmail.com';
        $this->phpmailer->SMTPAuth = true;
        $this->phpmailer->Username = 'aladebontekoe@gmail.com';
        $this->phpmailer->Password = 'debontekoe';
        $this->phpmailer->SMTPSecure = 'tls';
        $this->phpmailer->Port = 587;

        $this->phpmailer->From = 'aladebontekoe@gmail.com';
        $this->phpmailer->FromName = 'De Bonte Koe';

        $this->phpmailer->IsHTML(true);
    }

    public function addAddress($email, $name)
    {
        $this->phpmailer->addAddress($email, $name);
    }

    public function Subject($subject)
    {
        $this->phpmailer->Subject = $subject;
    }

    public function Body($body)
    {
        $this->phpmailer->Body = $body;
    }

    public function send()
    {
        $this->phpmailer->send();
    }
}
