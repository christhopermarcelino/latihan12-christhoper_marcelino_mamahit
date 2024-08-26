<?php

namespace App\Http\Controllers;

use App\Models\HistoryChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeminiAIController extends Controller
{
    protected $geminiService;

    // public function __construct(GeminiService $geminiService)
    // {
    //     $this->geminiService = $geminiService;
    // }

    public function handleChat(Request $request)
    {
        $input = $request->input('message');

        $url = env('GEMINI_API_BASE_URL') . "?key=" . env('GEMINI_API_KEY');

        // prepare payload
        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        [
                            'text' => $input
                        ]
                    ]
                ]
            ]
        ];


        // send request
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, $payload);

        // extract response
        $answer = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response';

        // return response
        return redirect()->back()->with('response', $answer);
    }

    public function index()
    {
        $history_chat = HistoryChat::all();
        return view('gemini.index')->with('history_chat', $history_chat);
    }

    public function store(Request $request)
    {
        $input = $request->input('message');

        $url = env('GEMINI_API_BASE_URL') . "?key=" . env('GEMINI_API_KEY');

        // prepare payload
        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        [
                            'text' => $input
                        ]
                    ]
                ]
            ]
        ];


        // send request
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, $payload);

        // extract response
        $answer = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response';

        HistoryChat::create([
            'send_chat' => $input,
            'get_chat' => $answer
        ]);

        return redirect()->back()->with('response', $answer);
    }
}
