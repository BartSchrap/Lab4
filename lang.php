<?php
if (isset($_GET['language']) && $_GET['language'] === 'nl') {
    $langArray = [
        'titel' => 'makkelijk geld verdienen',
        'info' => 'Wilt u makkelijk geld verdienen vanuit huis? Als u dit wilt kis dit een perfecte kans hiervoor. Lotsamonny biedt een cursus aan waarmee u leert om makkelijk geld te verdienen.',
        'email' => 'Hiervoor hoeft u alleen maar u email hieronder in te voeren.',
        'submit' => 'Email opgeven'
    ];
    return $langArray;
} else if (isset($_GET['language']) && $_GET['language'] === 'en') {
    $langArray = [
        'titel' => 'Making easy money',
        'info' => 'Do you want to easily make money from home? If so than Lotsamonny has the perfect chance for this. We provide a class where you learn how to make money the easy way.',
        'email' => 'If this interests you, you only have to fill in your email addres under here.',
        'submit' => 'Submit email'
    ];
    return $langArray;
} else {
    $langArray = [
        'titel' => 'makkelijk geld verdienen',
        'info' => 'Wilt u makkelijk geld verdienen vanuit huis? Als u dit wilt kis dit een perfecte kans hiervoor. Lotsamonny biedt een cursus aan waarmee u leert om makkelijk geld te verdienen.',
        'email' => 'Hiervoor hoeft u alleen maar u email hieronder in te voeren.',
        'submit' => 'Email opgeven'
    ];
    return $langArray;
}
