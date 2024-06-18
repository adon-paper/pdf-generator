<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/csrf', function () {
    return csrf_token();
});

Route::group(['prefix' => 'pdf'], function () {
    Route::post('/generate', function () {
        $data = [
            'buyer_user_name' => 'Abdian Rizky',
            'buyer_company_name' => 'ADNS',
            'buyer_phone' => '085157572725',
            'seller_name' => 'Rifka Adzanti',
            'seller_phone' => '085157572725',
            'amount' => '100.000,00',
            'external_id' => 'EXTERNALID123',
            'reference_note' => 'test',
            'payment_date' => 'test',
            'invoice' => 'test',
            'sender_id' => 'test',
            'disbursement_estimation_time' => 'test',
            'bank_name' => 'test',
            'bank_account_name' => 'test',
            'bank_account_number' => 'test',
        ];

        $pdf = Pdf::loadView('pdf.payout_complete_payment', $data);
        // $pdf = Pdf::loadView('pdf.invoice', $data);
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
        ]);
        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed' => true,
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ])
        );
        $pdf->setPaper([0, 0, 595.2765, 793.702], 'portrait');

        $pathFile = 'export/' . $data['sender_id'] . '/digital-payment/pdf/';
        $file_name = 'Payment_' . preg_replace('/[^A-Za-z0-9\-]/', '_', $data['external_id']) . microtime(true);

        $file_path = $pathFile . $file_name . '.pdf';
        $disk = Storage::disk('gcs');
        $disk->put($file_path, $pdf->output(), ['metadata' => [
            'cacheControl' => 'private, max-age=0, no-transform',
        ]]);
        $disk->setVisibility($file_path, 'public');

        return [
            'status' => 200,
            'message' => $file_name . ' has been uploaded',
            'base' => $file_name,
            'path' => $disk->url($file_path),
        ];

        // return $pdf->stream('invoice.pdf');

        // // dd($data);
        // // return view('pdf.payout_complete_payment', $data);
        // $pdf = Pdf::loadView('pdf.payout_complete_payment', $data);
        // // $pdf->getDomPDF()->setHttpContext(
        // //     stream_context_create([
        // //         'ssl' => [
        // //             'allow_self_signed' => TRUE,
        // //             'verify_peer' => FALSE,
        // //             'verify_peer_name' => FALSE,
        // //         ]
        // //     ])
        // // );
        // // $pdf->setPaper($this->setPaperConvert([0, 0, 21, 28], "cm"), 'portrait');
        // $pdf->setPaper([0, 0 , 595.2765, 793.702], 'portrait');

        // // save pdf to storage
        // // $pdf->save(storage_path('app/public/invoice.pdf'));
        // // return $pdf->stream('invoice.pdf');
        // return response()->streamDownload(function () use ($pdf) {
        //     echo $pdf->output();
        // }, 'invoice.pdf');
    });
});
