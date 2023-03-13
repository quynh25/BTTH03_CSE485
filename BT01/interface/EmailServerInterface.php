<?php
// namespace Mail\view;
    interface EmailServerInterface {
        public function sendEmail($to, $subject, $message);
    }
