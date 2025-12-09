<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class AIChatController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Eres un asistente de mascotas llamado PetCore AI. Responde de forma amable y profesional.'],
                ['role' => 'user', 'content' => $request->message],
            ]
        ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
    }
}
