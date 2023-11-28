<?php

namespace App\Services\ChatGPT;

use Illuminate\Support\Facades\Http;

class ChatGPTClient
{
    const API_HOST = 'https://api.openai.com/';

    const CHAT_URL = 'v1/chat/completions';

    const IMAGES_GENERATION_URL = 'v1/images/generations';

    const ROLE_USER = 'user';

    const ROLE_ASSISTANT = 'assistant';

    private function request(string $url, ?array $post_fields)
    {
        $headers = [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . config('chatgpt.api_key')
        ];

        $response = Http::withHeaders($headers)->post(self::API_HOST . $url, $post_fields);

        return $response->body();
    }

    public function getChat(?string $prompt, array $context = []): string
    {
        if (empty($context) && $prompt) {
            $context = $this->createContext($prompt);
        }

        $post_fields = array(
            "model"       => "gpt-3.5-turbo",
            "messages"    => $context,
            "max_tokens"  => 3000,
            "temperature" => 0
        );

        $result = $this->request(self::CHAT_URL, $post_fields);

        $result = json_decode($result, true);
        $result = $result['choices'][0]['message']['content'];

        return $result;
    }


    private function getGeneratedImageUrl(string $prompt, int $w = 1024, int $h = 1024): string
    {
        $size = $w . 'x' . $h;

        $post_fields = array(
            "prompt" => $prompt,
            "n"      => 1,
            "size"   => $size
        );

        $result = $this->request(self::CHAT_URL, $post_fields);

        $result = json_decode($result, true);

        $result = $result['data'][0]['url'];

        return $result;
    }


    private function createContext(string $prompt)
    {
        $dialog = [];

        $dialog[] = [
            'role'    => self::ROLE_USER,
            'content' => $prompt
        ];

        return $dialog;
    }
}
