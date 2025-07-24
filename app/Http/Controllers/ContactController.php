<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Método que recibe los datos del formulario.
     */
    public function enviar(Request $request)
    {
        // 1. Validación de los datos
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'empresa' => 'nullable|string|max:255', // Opcional
            'message' => 'required|string',
        ]);

        // 2. Envío del correo
        // Se envía a la dirección de la empresa.
        // Se crea una instancia de nuestro Mailable (ContactFormMail) pasándole los datos validados.
        Mail::to('contacto@proserma.cl')->send(new ContactFormMail($data));

        // 3. Redirección con mensaje de éxito
        // Redirige al usuario de vuelta a la página de contacto con un mensaje de éxito.
        return redirect()->route('contacto')->with('success', '¡Mensaje enviado con éxito! Nos pondremos en contacto contigo a la brevedad.');
    }
}