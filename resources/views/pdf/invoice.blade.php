<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
        * {
            padding: 0;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
        }

        p {
            margin: 0;
            padding: 0;
        }

        tr {
            line-height: 25px;
        }

        td {
            margin: 0;
            padding: 0;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .w-100 {
            width: 100%;
        }

        .w-50 {
            width: 50%;
        }

        .spacing-0 {
            padding: 0;
            margin: 0;
        }

        .dark-blue {
            color: #133F5D;
        }

        .grey {
            color: #E0E4E7;
        }

        .lighter-blue {
            color: #4C6E84;
        }

        .blue {
            color: #4195D5;
        }

        .draw {
            background-color: #FFFFFF;
        }

        .light-blue {
            color: #859CAB;
        }

        .ta-r {
            text-align: right;
        }

        .ta-l {
            text-align: left;
        }

        .indent {
            margin: 5px 28px;
        }

        .line-height {
            line-height: 20px;
        }
    </style>
</head>
<body>
<p>{{$buyer_user_name}}</p>
<p>{{$buyer_company_name}}</p>
<p>{{$buyer_phone}}</p>
<p>{{$seller_name}}</p>
<p>{{$seller_phone}}</p>
<p>{{$amount}}</p>
<p>{{$external_id}}</p>
<p>{{$reference_note}}</p>
<p>{{$payment_date}}</p>
<p>{{$invoice}}</p>
<p>{{$sender_id}}</p>
<p>{{$disbursement_estimation_time}}</p>
<p>{{$bank_name}}</p>
<p>{{$bank_account_name}}</p>
<p>{{$bank_account_number}}</p>
<p>Dana telah diterima oleh Paper.id, dan akan kami proses untuk diteruskan ke rekening
penerima tercantum: </p>
</body>
</html>
