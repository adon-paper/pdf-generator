<html>

<head>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> --}}
    <link href="{{ asset('/fonts/lato/font-lato.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/payout_complete_payment.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<div class="draw indent">
    <br>
    <center style="margin-top: 0px;">
        <img src="{{ asset('assets/img/paperlogofinal-cropped.png')}}" alt="">
    </center>
    <table style="width:100%;">
        <tr class="line-height">
            <td class="light-blue w-50">
                Pengirim
            </td>
            <td class="light-blue ta-r">
                Penerima
            </td>
        </tr>
        <tr class="line-height">
            <td class="dark-blue" style="width:50%;">
                <b>{{$buyer_user_name}}</b>
            </td>
            <td class="ta-r dark-blue">
                <b>{{$seller_name}}</b>
            </td>
        </tr>
        <tr class="line-height">
            <td class="dark-blue" style="width:50%;">
                {{$buyer_company_name}}
            </td>
            <td class="ta-r dark-blue">
                @if($seller_phone != "")
                    +{{$seller_phone}}
                @else
                    -
                @endif
            </td>
        </tr>
        <tr class="line-height">
            <td class="dark-blue" style="width:50%;">
                @if($buyer_phone != "")
                    +{{$buyer_phone}}
                @else
                    -
                @endif
            </td>
            <td class="ta-r dark-blue">
            </td>
        </tr>
    </table>
    <hr style="border: 1px solid rgba(212, 218, 222, 1);">
    <p class="dark-blue" style="text-align: justify; font-family: 'lato';">
        Dana telah diterima oleh Paper.id, dan akan kami proses untuk diteruskan ke rekening penerima tercantum:
    </p>
    <center class="spacing-0">
        <p class="light-blue spacing-0">
            Nominal Transaksi
        </p>
        <p class="spacing-0" style="color: #4195d5; font-size: 20pt;">
            <b style="font-family: 'lato';">Rp {{$amount}}</b>
        </p>
        <p class="dark-blue">
            (Estimasi dana diteruskan <b>{{$disbursement_estimation_time}} WIB</b>)
        </p>
    </center>
    <table class="w-100 indent" style="font-family: 'lato';">
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="font-family: 'lato';">
                Nama Rekening Penerima
            </td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="spacing-0 ta-r dark-blue">
                    <b class="ta-r dark-blue" style="font-family: 'lato';">{{$bank_account_name}}</b>
                </p>
            </td>
        </tr>
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="vertical-align:top; font-family: 'lato';">Bank Penerima</td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="spacing-0 ta-r dark-blue">{{$bank_name}}</p>
            </td>
        </tr>
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="font-family: 'lato';">No. Rekening Penerima</td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                {{$bank_account_number}}
            </td>
        </tr>
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="vertical-align:top; font-family: 'lato';">Nama Rekening Pengirim
            </td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="spacing-0 ta-r dark-blue">PT Pakar Digital Global</p>

            </td>
        </tr>
        <tr class="w-100 spacing-0 line-height">
            <td class="w-50 ta-l light-blue" style="font-family: 'lato';"></td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="light-blue spacing-0 ta-r">
                    a/n {{$buyer_company_name}}
                </p>
            </td>
        </tr>
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="font-family: 'lato';">
                Tanggal Pembayaran
            </td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="spacing-0 ta-r dark-blue">
                    {{$payment_date}}
                </p>
            </td>
        </tr>
        <tr class="w-100">
            <td class="w-50 ta-l light-blue" style="font-family: 'lato';">No. Referensi</td>
            <td class="w-50 ta-r dark-blue" style="font-family: 'lato';">
                <p class="spacing-0 ta-r dark-blue">
                    {{$external_id}}
                </p>
            </td>
        </tr>
    </table>
    <hr style="border: 1px solid rgba(212, 218, 222, 1);">
    <p style="color: #859CAB; font-family: 'lato';">
        Berita Acara
    </p>
    <p style="color: #133F5D; text-align: justify; font-family: 'lato';">
        {{$reference_note}}
    </p>
    <p class="lighter-blue" style="font-size:13px;">
        <i>
            *Bukti pembayaran telah dikirimkan secara otomatis kepada pengirim dan penerima.
        </i>
    </p>
    <hr style="border: 1px solid rgba(212, 218, 222, 1);">
    <center style="margin-top: 10px;">
        <p class="lighter-blue">
            Paper.id - Platform Solusi Pembayaran B2B No.1 di Indonesia
        </p>
    </center>
</div>
</body>

</html>
