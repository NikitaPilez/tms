<?php

namespace Interfaces;

class Google implements Mail
{

    public function auth()
    {
        print_r("Auth via google account");
    }

    public function listEmails()
    {
        print_r("Get list for google email");
    }

    public function sendEmail()
    {
        print_r("Sending email..");
    }

    public function deleteEmail()
    {
        print_r("Deleted email from servers");
    }
}
