<?php
namespace Template\Slot;

use P3x\Template\Face;
use Operation\Resume;

class Social extends Face
{
    public function data() {

        $id = uniqid();
        $social_email = 'social-email-' . $id;
        $social_phone = 'social-phone-' . $id;
        return [
            'id' => $id,
            'social_email' => $social_email,
            'social_phone' => $social_phone,
            'tooltip_placement' => 'top',
            'resume-download-url' => Resume::ResumeDownloadUrl(),
            'slot-email' => \Operation\html::Email(EMAIL, $social_email, true),
            'social-data' => [
                'data-social-email' => $social_email,
                'data-social-phone-id' => $social_phone,
            ]
        ];
    }
}