<?php

declare(strict_types=1);

namespace app\models;

use yii\base\Model;
use yii\mail\MailerInterface;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $subject = '';
    public string $body = '';
    public string $verifyCode = '';

    /**
     * @return array the validation rules.
     */
    public function rules(): array
    {
        return [
            [['name'], 'required'],
            [['phone', 'subject', 'body', 'verifyCode'], 'safe'],
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels(): array
    {
        return [
            'verifyCode' => 'Verification Code',
            'phone' => 'Phone Number',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param MailerInterface $mailer the mailer component.
     * @param string $email the target email address.
     * @param string $senderEmail the sender email address.
     * @param string $senderName the sender name.
     *
     * @return bool whether the model passes validation.
     */
    public function contact(MailerInterface $mailer, string $email, string $senderEmail, string $senderName): bool
    {
        if ($this->validate()) {
            $targetEmail = 'pravatkumar95@gmail.com';
            $subjectLine = $this->subject !== '' ? 'Solar Enquiry: ' . $this->subject : 'New Solar Website Enquiry';
            $replyEmail = $this->email !== '' ? $this->email : $senderEmail;

            $fullBody = "New Enquiry Received on Solar Energy Website\n"
                . "--------------------------------------------\n"
                . "Full Name: " . $this->name . "\n"
                . "Phone Number: " . $this->phone . "\n"
                . "Email Address: " . ($this->email !== '' ? $this->email : 'Not provided') . "\n"
                . "Interested In: " . ($this->subject !== '' ? $this->subject : 'General Enquiry') . "\n\n"
                . "Message:\n" . ($this->body !== '' ? $this->body : 'No additional message.') . "\n";

            $mailer->compose()
                ->setTo($targetEmail)
                ->setFrom([$senderEmail => $senderName])
                ->setReplyTo([$replyEmail => $this->name])
                ->setSubject($subjectLine)
                ->setTextBody($fullBody)
                ->send();

            return true;
        }

        return false;
    }
}
