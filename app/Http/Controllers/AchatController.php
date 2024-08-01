<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Event;
use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use Illuminate\Support\Facades\DB;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Writer\PngWriter;
use PDF;

class AchatController extends Controller
{
    private function generateUniqueQRCode($userId, $achatId)
    {
        $qrData = 'user_' . $userId . '_achat_' . $achatId;

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($qrData)
            ->encoding(new Encoding('UTF-8'))
            ->size(150)
            ->margin(10)
            ->build();

        return base64_encode($result->getString());
    }

    public function achat(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $address = $request->input('address');
        $country = $request->input('country');
        $city = $request->input('city');

        $userId = Session::get('id');
        $achatId = DB::table('achat')->insertGetId([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'address' => $address,
            'country' => $country,
            'city' => $city,
            'user_id' => $userId,
        ]);

        // Generate a unique QR code using id
        $codeQR = $this->generateUniqueQRCode($userId, $achatId);

        // Update the purchase record with the generated QR code
        DB::table('achat')->where('id', $achatId)->update(['codeQR' => $codeQR]);

        // Store the QR code in the session
        Session::put('codeQR', $codeQR);

        return redirect()->route('confirmeTicketId', ['id' => $request->eventId]);
    }

    public function showpConfirmation($id)
    {
        $event = Event::join('users', 'events.user_id', '=', 'users.id')
            ->select('events.*', 'users.firstName', 'users.lastName')
            ->findOrFail($id);

        return view('client.confirmeTicket', ['event' => $event]);
    }

    public function showpticktfinale($id, Request $request)
    {
        $event = Event::join('users', 'events.user_id', '=', 'users.id')
            ->select('events.*', 'users.firstName', 'users.lastName')
            ->findOrFail($id);
            
        //$codeQR = Session::get('codeQR');

        // Check the format parameter
        $format = $request->query('format', 'html');
        // Check if the request format is PDF
        if ($format === 'pdf') {
            // Générer le contenu de l'attestation PDF
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('client.tickt_finale', ['event' => $event, 'codeQR' => Session::get('codeQR')]);

            // Retourner le contenu PDF pour affichage ou téléchargement
            return $pdf->stream('tickt_finale.pdf');
        }
        // If not PDF format requested, return HTML view
        return view('client.tickt_finale', ['event' => $event, 'codeQR' => Session::get('codeQR')]);

    }
}
