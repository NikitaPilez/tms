<?php

namespace Interfaces;

interface Mail
{
    public function auth();
    public function listEmails();
    public function sendEmail();
    public function deleteEmail();
}
