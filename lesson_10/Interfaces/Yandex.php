<?php

namespace Interfaces;

class Yandex implements Mail
{

    public function auth()
    {
        print_r("Auth via yandex mail");
    }

    public function listEmails()
    {
        print_r("Get list emails for yandex");
    }

    public function sendEmail()
    {
        print_r("Send email for yandex");
    }

    public function deleteEmail()
    {
        print_r("Deleted email from yandex servers");
    }
}
