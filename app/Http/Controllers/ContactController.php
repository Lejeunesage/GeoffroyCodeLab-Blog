<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\HtmlPart;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        // Créer le corps du message en HTML
        $htmlBody = "
            <p><strong>Nom:</strong> {$validated['name']}</p>
            <p><strong>Email:</strong> {$validated['email']}</p>
            <p><strong>Message:</strong> {$validated['message']}</p>
        ";

        // Envoyer l'e-mail
        Mail::html($htmlBody, function ($message) use ($validated) {
            $message->to('geoffroyotegbeye@gmail.com')
                ->subject('Nouveau message depuis le formulaire de contact');
        });

        return response()->json(['message' => 'Votre message a été envoyé avec succès !']);
    }
}
