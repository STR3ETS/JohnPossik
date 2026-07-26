<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diensten', function () {
    return view('diensten');
});

Route::get('/over-ons', function () {
    return view('over-ons');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacybeleid', function () {
    return view('privacybeleid');
});

Route::get('/algemene-voorwaarden', function () {
    return view('algemene-voorwaarden');
});

Route::get('/sitemap.xml', function () {
    $paginas = ['/', '/diensten', '/over-ons', '/contact', '/privacybeleid', '/algemene-voorwaarden'];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($paginas as $pagina) {
        $xml .= '  <url><loc>' . url($pagina) . '</loc></url>' . "\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'naam' => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'telefoon' => 'nullable|string|max:30',
        'bericht' => 'required|string|max:2000',
    ], [
        'naam.required' => 'Vul je naam in.',
        'email.required' => 'Vul je e-mailadres in.',
        'email.email' => 'Vul een geldig e-mailadres in.',
        'bericht.required' => 'Vul een bericht in.',
        'bericht.max' => 'Je bericht mag maximaal 2000 tekens zijn.',
    ]);

    Mail::raw(
        "Nieuw bericht via het contactformulier\n\n"
        . "Naam: {$data['naam']}\n"
        . "E-mail: {$data['email']}\n"
        . 'Telefoon: ' . ($data['telefoon'] ?? '-') . "\n\n"
        . "Bericht:\n{$data['bericht']}",
        function ($message) use ($data) {
            $message->to('info@jpkapsalon.nl')
                ->subject('Contactformulier — ' . $data['naam'])
                ->replyTo($data['email'], $data['naam']);
        }
    );

    return back()->with('success', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');
});
