<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan'  => 'required|string',
        ]);

        $data = [
            'nama'   => $request->nama,
            'email'  => $request->email,
            'subjek' => $request->subjek,
            'pesan'  => $request->pesan,
        ];

        $apiKey = config('services.brevo.key');
        $fromEmail = config('services.brevo.from_email');
        $fromName = config('services.brevo.from_name');

        if (!$apiKey || !$fromEmail) {
            Log::error('Brevo config missing. Check BREVO_API_KEY/BREVO_FROM_EMAIL.');
            return back()->with('error', 'Konfigurasi email belum lengkap. Coba lagi nanti.');
        }

        $payload = [
            'sender' => [
                'name' => $fromName ?: 'Portfolio',
                'email' => $fromEmail,
            ],
            'to' => [
                ['email' => 'inuriadi73@gmail.com', 'name' => 'Iqmal Nuriadi'],
            ],
            'replyTo' => [
                'email' => $data['email'],
                'name' => $data['nama'],
            ],
            'subject' => 'Pesan Baru dari Website: ' . $data['subjek'],
            'htmlContent' => view('emails.contact', $data)->render(),
        ];

        $response = Http::withHeaders([
            'api-key' => $apiKey,
            'content-type' => 'application/json',
            'accept' => 'application/json',
        ])->timeout(8)->post('https://api.brevo.com/v3/smtp/email', $payload);

        if (!$response->successful()) {
            Log::error('Brevo send failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            return back()->with('error', 'Gagal mengirim pesan. Silakan coba lagi.');
        }

        Log::info('Brevo send ok', [
            'status' => $response->status(),
            'body' => $response->json(),
        ]);

        return back()->with('success', 'Pesan berhasil dikirim! Terima kasih.');
    }
}
