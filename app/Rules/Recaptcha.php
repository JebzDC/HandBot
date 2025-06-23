<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\HTTP;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $gResponseToken = (string) $value;

        $response = HTTP::asForm()
                ->post(
                    'https://www.google.com/recaptcha/api/siteverify?',
                ['secret' => env('RECAPTCHA_SECRET_KEY'), 'response' => $gResponseToken]
            );

        \Log::debug(print_r($response->body(), true));
        if (!json_decode($response->body(), true)['success']){
            $fail('Invalid recaptcha');
        }
    }
}
