<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EchoLabs\Prism\Prism;
// use EchoLabs\Prism\Providers\ProviderRegistry;

class AiChatController extends Controller
{
    /**
     * Handle incoming chat requests for the future AI Chatbot.
     */
    public function handle(Request $request)
    {
        $message = $request->input('message', 'Hola, ¿qué puedes hacer?');

        // Placeholder for Prism (AI SDK) implementation
        // Example integration:
        /*
        $response = Prism::text()
            ->using('anthropic', 'claude-3-5-sonnet') // o provider de tu eleccion
            ->withSystemPrompt("Eres un asistente para el portafolio de Diego Morales Zumaya (Pato Hack)...")
            ->withPrompt($message)
            ->generate();

        return response()->json([
            'reply' => $response->text
        ]);
        */

        return response()->json([
            'reply' => '¡Hola! Este chatbot de IA para el portafolio de Diego Morales Zumaya está en construcción preparando Laravel 12 AI SDK.'
        ]);
    }
}
