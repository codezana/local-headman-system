<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بەشی نوێکردنەوە - موختاری گەڕەک</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/1.png') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>


    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/tempus-dominus.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('assets/js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/auth/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/notyf.min.css') }}">
    <script src="{{ asset('assets/js/notyf.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



    <!-- Styles -->
    <style>
        body {
            direction: rtl;
            text-align: unset;
            padding: 10px;
        }

        tbody {
            overflow: auto;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: right;
            padding: 0 20px;
            flex-direction: column;

        }

        tr td:nth-of-type(3) ul {
            list-style: arabic-indic !important;
        }




        * {
            box-sizing: border-box;
        }

        #myInput {
            background: #00000000;
            height: 40px;
            border: 1px solid rgba(145, 158, 171, 0.32);
            width: 200px;
            border-radius: 5px;
            padding: 0 15px 0 30px;
        }

        #myTable {
            border-collapse: collapse;
            width: 95%;
            margin: auto;
            border: 1px solid #ddd;
            font-size: 18px;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            height: 100vh;

        }

        #myTable th {
            background-color: #03b8e1;
            color: white;
            font-weight: bold;
            position: sticky;
            top: 0;
        }

        #myTable th,
        #myTable td {
            text-align: center;
            padding: 12px;
            white-space: nowrap;
        }

        #myTable td {
            text-align: center;
            padding: 0 10px !important;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: rgb(233, 236, 236);
            cursor: pointer;
        }

        li {
            margin-top: 5px;
        }

        ::-webkit-scrollbar {

            -webkit-appearance: none;
            height: 6px;
            width: 6px;
            background-color: lightgrey;

        }

        ::-webkit-scrollbar-thumb {
            background: #03b8e1;
            border-radius: 10px;
        }

        .table-top {
            margin-bottom: 20px;
            padding: 5px 20px !important;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .tableheader {
            width: 95%;
            background: #fff;
            margin: 25px auto;
        }

        #filter_search img {

            background: #03b8e1;
            padding: 6px;
            border-radius: 10px;
            cursor: pointer;
        }

        .search-input a {
            position: absolute;
            left: 5px;

        }

        .search-set {
            display: flex;
            align-items: center;
        }

        .search-set div {
            padding: 0 3px;
        }

        .card {
            border: none;
            margin: 0 0 -8px;
            border: 1px solid white;
            border-radius: 6px;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        #filter_inputs .card-body {
            padding: 0;
        }

        @media (max-width: 991.98px) {
            .card .card-body {
                padding: 15px;
            }
        }

        .form-group input {
            margin-top: 5px;
        }

        /* Toggle class to show filter image and hide close image */

        .btn-filter.active .close-img {
            display: none !important;
        }

        #filter_inputs {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transition: opacity .1s ease, height 1s ease;
            margin: 20px auto;
            width: 95%;
        }

        #checkbox_filter:checked~#filter_inputs {
            opacity: 1;
            height: 10rem;
            display: block;
        }

        #checkbox_filter:checked .close-img {
            display: block;



        }


        .row-checkbox {
            width: 17px;
            height: 17px;


        }

        .form-group input[type="text"] {
            height: 40px;
            width: 100%;
            font-size: 14px;
            font-weight: 500;
            color: #637381;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .form-control:focus {
            box-shadow: none;
            border: 1px solid #01919c;

        }

        .row {
            align-items: center;
        }

        #clear {
            width: 33px;
        }

        a {
            text-decoration: none !important;
        }

        .modal-content {

            width: 70% !important;

            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 1.3rem;
            margin: auto;
        }

        .addbtn {
            color: white;
            background-color: #03b8e1;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid rgb(3, 170, 170);
            cursor: pointer;
            text-align: center;
        }

        .wordset:hover {
            box-shadow: -2px 3px 0px 0px #03b8e1;
            transition: .2s;
        }


        /* CSS */
        .addbtn {
            appearance: none;
            backface-visibility: hidden;
            background-color: #0287A6;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
            box-sizing: border-box;
            color: #fff !important;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 2.5;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .addbtn:hover {
            background-color: #07bee7;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
            color: white !important;
            box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;

        }

        .addbtn:active {
            transform: translateY(2px);
            transition-duration: .35s;
        }


        /* CSS */
        .btn-logout {
            color: white;
            background-color: #711010;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid rgb(120, 6, 6);
            cursor: pointer;
            text-align: center;
        }

        .btn-logout {
            appearance: none;
            backface-visibility: hidden;
            background-color: #711010;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
            box-sizing: border-box;
            color: #fff !important;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 2.5;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .btn-logout:hover {
            background-color: #a81111;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
            color: white !important;
            box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;

        }

        .btn-logout:active {
            transform: translateY(2px);
            transition-duration: .35s;
        }

        @media (min-width: 992px) {
            .col-lg {
                flex: 0 0 auto;
                width: 25%;
            }

        }

        @media (min-width:480px) {

            #checkbox_filter:checked~#filter_inputs {

                height: 32rem !important;
            }

        }

        @media (min-width:576px) {

            #checkbox_filter:checked~#filter_inputs {

                height: 18rem !important;
            }

        }

        @media (min-width: 991.98px) {
            #checkbox_filter:checked~#filter_inputs {

                height: 11rem !important;
            }
        }




        @font-face {
            font-family: "K24KurdishLight-Light";
            src: url("assets/font/K24KurdishLight-Light.eot");
            /* IE9 Compat Modes */
            src: url("assets/font/K24KurdishLight-Light.eot?#iefix") format("embedded-opentype"),
                /* IE6-IE8 */
                url("assets/font/K24KurdishLight-Light.ttf") format("truetype"),
                /* Safari, Android, iOS */
                url("assets/font/K24KurdishLight-Light.woff") format("woff");
            /* Modern Browsers */
            font-weight: normal;
            font-style: normal;
        }



        .font_K24KurdishLight-Light {
            font-family: 'K24KurdishLight-Light';
            direction: rtl;
            font-weight: 600;
            text-align: justify;
            line-height: 1.8;
            font-size: 18px;
        }

        .sedan-regular {
            font-family: "Sedan", serif;
            font-weight: 400;
            font-style: normal;
        }

        .sedan-regular-italic {
            font-family: "Sedan", serif;
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: "rudawbold";
            src: url("assets/font/rudawbold.eot");
            /* IE9 Compat Modes */
            src: url("assets/font/rudawbold.eot?#iefix") format("embedded-opentype"),
                /* IE6-IE8 */
                url("assets/font/rudawbold.ttf") format("truetype"),
                /* Safari, Android, iOS */
                url("assets/font/rudawbold.woff") format("woff");
            /* Modern Browsers */
            font-weight: normal;
            font-style: normal;
        }



        .font_rudawbold {
            font-family: 'rudawbold';
            direction: rtl;
            font-size: 18px;
            text-align: justify;
            line-height: 1.5;
        }

        @font-face {
            font-family: "Rabar_028";
            src: url("assets/font/Rabar_028.eot");
            /* IE9 Compat Modes */
            src: url("assets/font/Rabar_028.eot?#iefix") format("embedded-opentype"),
                /* IE6-IE8 */
                url("assets/font/Rabar_028.ttf") format("truetype"),
                /* Safari, Android, iOS */
                url("assets/font/Rabar_028.woff") format("woff");
            /* Modern Browsers */
            font-weight: normal;
            font-style: normal;
        }



        .font_Rabar_028 {
            font-family: 'Rabar_028';
            direction: rtl;
            font-size: 22px;
            text-align: justify;
            line-height: 1.5;
        }



        .table {
            border-color: rgb(208 208 208) !important;
            margin-top: 5px;
        }

        .topinfo {
            display: flex;


        }

        .topinfo .photos div {
            width: 6rem;
            height: 8rem;
            background-color: #ededed;
            border-radius: 15px;
            margin: 0 8px;

        }

        .topinfo .photos {
            display: flex;
            align-items: center;
            margin-right: 1rem;

        }

        .topinfo .inf .bottomtext {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            width: 115%;

        }

        .topinfo .inf .bottomtext input {
            margin-right: 3px;


        }

        .information {
            margin: 15;
        }

        .information input {
            padding: 3px;
        }

        .topinfo .toptext {
            color: red;
            font-size: 18px;
        }

        .topinfo .toptext input {
            margin-right: 20px;
        }

        .information .bottominfo {
            display: flex;
            margin: 15px 0;
            justify-content: start;
            align-items: center;
            justify-items: center;
            flex-wrap: wrap;
            gap: 20px;

        }



        .information .bottominfo input {
            margin-right: 8px;
        }

        textarea {
            margin-top: 5px;
            padding: 5px;
        }

        #tablesubinfo input {
            margin-right: 10px;
        }

        #additionalinforight p {
            margin-right: 10px;
            margin-top: 10;
        }

        #additionalinfo p {
            margin-right: 50px;
            margin-top: 10;
        }

        #additionalinfo input,
        #additionalinforight input {
            margin-right: 10px !important;
        }


        .responsivetable table tr,
        .responsivetable table th {
            text-align: center;
            font-size: 14px;
        }



        .responsivetable table th:first-child {
            background-color: rgb(126 126 126);
            color: white;
        }

        .responsivetable table thead tr th:first-child {
            background-color: #0287A6 !important;
            font-weight: bold;
        }

        .responsivetable table thead tr th {
            background-color: #0287A6 !important;
            color: white !important;
            font-weight: bold;


        }

        .container {
            margin-bottom: 20px;
            padding: 15px;
        }

        .button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0287A6;
            color: white;
            border: 1px solid rgb(234, 234, 234);
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }

        .button:hover {
            background-color: #03b0d6;
        }

        .responsivetable {
            overflow-x: scroll;
        }

        ::-webkit-scrollbar {

            -webkit-appearance: none;
            height: 6px;
            width: 6px;
            background-color: lightgrey;

        }

        ::-webkit-scrollbar-thumb {
            background: #03b8e1;
            border-radius: 10px;
        }

        @media (max-width:767px) {

            #additionalinfo input,
            #additionalinforight input {
                margin-top: 10px !important;
            }
        }


        #container-wrapper {
            display: flex;
            flex-direction: column-reverse;
        }


        .tableheader textarea {
            margin-top: 10px;
        }

        #container_wrapper input,
        #container_wrapper textarea:focus {
            outline-color: #03b8e1 !important;
        }

        @media (min-width: 768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: none;
            }
        }

        .delete-set {
            cursor: pointer;
        }

        .operations button,
        .operations a {
            padding: 10px;
        }

        .operations {
            text-align: left;
        }

        .form-control {
            border-radius: 0px 5px 5px 0px !important;
            height: unset !important;
        }

        .datepicker-days {
            padding: 5px;
        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: unset;
            }
        }

        .bottom-info {
            display: flex;
            align-items: stretch;
        }

        .bottom-info label {
            margin-bottom: 15px;
        }

        .bottom-info .left {
            margin-right: 60px;
        }

        .bottom-info .left,
        .bottom-info .right {
            margin-top: 20px;
        }

        .bottom-info .right div,
        .bottom-info .left div {
            display: flex;
            margin: 20px 0;

            justify-content: space-between;
            align-items: center;
            width: 16rem;
            flex-direction: column;
            align-items: stretch;
        }


        input {
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        @media (max-width: 632px) {
            .bottom-info {
                flex-wrap: wrap;

            }

            .bottom-info .left,
            .bottom-info .right {
                margin-top: unset;
                width: 100%;
            }

            .bottom-info .left {
                margin-right: unset;
            }

            .bottom-info .right div,
            .bottom-info .left div {
                margin: unset;
                margin-top: 20px;
            }
        }

        .form-inline {
            display: unset;
        }

        @media (min-width: 576px) {
            .form-inline label {
                display: unset;

            }
        }







        .notyf__toast {
            font-family: 'rudawbold';
            /* Change to your desired font family */
            border-radius: 10px;
            /* Adjust the radius to your preference */
            width: 400px;
            /* Set the width of the notification */
            font-size: 14px;
            /* Customize the font size */
        }

        /* Hide the icon for success notifications */
        .notyf__toast--success .notyf__icon {
            display: none;
            /* Hide the icon */
        }

        .notyf__toast--success {
            background-color: #28a745;
            /* Optional: Change the background color for success notifications */
            color: white;
            /* Ensure text color contrasts with the background */
            width: 350px;
            /* Set the width of the notification */
        }

        .notyf__toast--success .notyf__message {
            font-size: 15px;
            /* Customize the font size */
        }

        .notyf__toast--error .notyf__icon {
            display: none;
            /* Hide the icon */
        }

        .notyf__toast--error {
            background-color: red;
            /* Optional: Change the background color for error notifications */
            color: white;
            /* Ensure text color contrasts with the background */
        }

        .notyf__toast--error .notyf__message {
            font-size: 15px;
            /* Customize the font size */
        }
    </style>

</head>

<body>


    <div id="container_wrapper">
        <div class="container">
            <div class="information">

                <form class="form-inline" method="POST" action="{{ route('update') }}">
                    @csrf
                    <div class="topinfo">
                        <div class="font_Rabar_028"> <label for="muxtar">موختاری گەڕەکی :</label>
                            <input type="text" id="muxtar" value="{{ $invoices->name }}">
                        </div>
                    </div>
                    <div class="bottominfo">


                        <input type="text" style="display: none" name="" id="id"
                            value="{{ $invoices->id }}">

                        <div class="font_Rabar_028"> <label for="neighborhood">کۆڵانی :</label>
                            <input type="text" value="{{ $invoices->neighborhood }}" id="neighborhood">
                        </div>

                        <div class="font_Rabar_028"> <label for="houseform">خانووی :</label>
                            <input type="text" value="{{ $invoices->house }}" id="houseform">
                        </div>
                        <div class="font_Rabar_028"> <label for="streetform">شەقام :</label>
                            <input type="text" value="{{ $invoices->street }}" id="streetform">
                        </div>
                        <div class="font_Rabar_028"> <label for="floorform">قاتی :</label>
                            <input type="text" value="{{ $invoices->floor }}" id="floorform">
                        </div>
                        <div class="font_Rabar_028"> <label for="origin">ڕەچەڵەک :</label>
                            <input type="text" value="{{ $invoices->origin }}" value="کورد" id="origin">
                        </div>
                        <div class="font_Rabar_028"> <label for="date">بەروار :</label>
                            <input type="text" value="{{ $invoices->date }}" id="date" disabled>
                        </div>
                        <div class="font_Rabar_028"> <label for="computercode">کۆدی کۆمپیوتەر </label>
                            <input type="text" value="{{ $invoices->computer_code }}" id="computercode">
                        </div>





                    </div>

                    <div class="responsivetable">
                        <table class="table table-bordered border-black">
                            <thead>
                                <tr>

                                    <th scope="col" class="font_rudawbold">ژ</th>
                                    <th class="font_rudawbold">سڕینەوە</th>
                                    <th scope="col" class="font_rudawbold">ناوی ئەندامانی خێزان</th>
                                    <th scope="col" style="display: none" class="font_rudawbold">id</th>

                                    <th scope="col" class="font_rudawbold">موالید</th>
                                    <th scope="col" class="font_rudawbold">پیشە</th>
                                    <th scope="col" class="font_rudawbold">شوێنی کار</th>
                                    <th scope="col" class="font_rudawbold">کۆدی ئاسایش</th>
                                    <th scope="col" class="font_rudawbold">ژ.مۆبایل</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($invoices->families as $family)
                                    <tr>

                                        <th scope="row" style="font-size: 23px" class="font_Rabar_028">
                                            {{ $loop->iteration }}</th>
                                        <td>
                                            <a onclick="deleteRow(this)" class="delete-set"><img
                                                    src="{{ asset('assets/img/delete.svg') }}" alt="svg"></a>
                                        </td>

                                        <td class="font_Rabar_028"><input type="text" value="{{ $family->name }}"
                                                id="familyname" class="familyname">
                                        </td>
                                        <td class="font_Rabar_028" style="display: none"><input type="text"
                                                value="{{ $family->id }}" id="idfamily" class="idfamily">
                                        </td>

                                        <td class="font_Rabar_028">
                                            <div class="input-group date" id="datepicker{{ $family->id }}">
                                                <input type="text" class="font_Rabar_028 form-control"
                                                    id="borndate" value="{{ $family->born }}"
                                                    style="border-radius: unset; font-size: 22px; font-weight: 800; color: black; font-family: 'Rabar_028';  width: 125px;">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white"
                                                        style="border-radius: 5px 0 0px 5px;
                                border-right: none;">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>

                                                    <script type="text/javascript">
                                                        $(function() {
                                                            $('#datepicker{{ $family->id }}').datepicker({
                                                                dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                                            });
                                                        });
                                                    </script>

                                            </div>
                                        </td>
                                        <td class="font_Rabar_028"><input type="text"
                                                value="{{ $family->occupation }}"></td>
                                        <td class="font_Rabar_028"><input type="text"
                                                value="{{ $family->Workplace }}"></td>
                                        <td class="font_Rabar_028"><input type="text"
                                                value="{{ $family->security_code }}"
                                                oninput="this.value = this.value.replace(/[^0-9\u0660-\u0669\u06F0-\u06F9]/g, '');">
                                        </td>
                                        <td class="font_Rabar_028"><input type="text"
                                                value="{{ $family->phone }}" id="phone"
                                                oninput="this.value = this.value.replace(/[^0-9\u0660-\u0669\u06F0-\u06F9]/g, '');">

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="button font_rudawbold" onclick="addRow(this)"><i
                            class="fa-solid fa-circle-plus" style="position: relative;top: 4px;margin-left: 2px"></i>
                        زیادکردن</button>

                    <div class="bottom-info">
                        <div class="right">


                            <div class="font_Rabar_028">
                                <label for="identification_number">ژ.پێناس :</label>
                                <input id="identification_number" type="text"
                                    value="{{ $invoices->identification_number }}">
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#identification_number').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>







                            <div class="font_Rabar_028">
                                <label for="birthday">ڕۆژی لەدایکبوون :</label>
                                <div class="input-group date" id="datepicker220"
                                    style="flex-direction: unset; margin: unset;">
                                    <input type="text" class="font_Rabar_028 form-control"
                                        style=" font-weight:800;color: black;font-family: 'Rabar_028'; border-radius: 0px 0px 0px 0px ; height:32px; font-size:22px; width: 135px;"
                                        value="{{ $invoices->birthday }}" id="DateOfBirthform">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white"
                                            style="border-radius: 5px 0px 0px 5px; border-right: none;">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>


                                <script type="text/javascript">
                                    $(function() {
                                        $('#datepicker220').datepicker({
                                            dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                        });
                                    });
                                </script>

                            </div>

                            <div class="font_Rabar_028"> <label for="office">فەرمانگە :</label>
                                <input id="office" type="text" value="{{ $invoices->office }}">
                            </div>

                            <div class="font_Rabar_028"> <label for="record">تۆمار :</label>
                                <input id="record" type="text" value="{{ $invoices->record }}">
                            </div>

                            {{-- <div class="font_Rabar_028"> <label for="page">لاپەڕە :</label>
                                <input id="page" type="text">
                            </div> --}}
                        </div>

                        <div class="left">
                            <div class="font_Rabar_028"> <label for="mother">ناوی دایکی سەرۆک خێزان :</label>
                                <input id="mother" type="text" value="{{ $invoices->mother }}">
                            </div>

                            <div class="font_Rabar_028"> <label for="foodFormNumber">ژمارەی فۆڕمی خۆراک :</label>
                                <input id="foodFormNumber" type="text" value="{{ $invoices->food_form_number }}">
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#foodFormNumber').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>
                            <div class="font_Rabar_028"> <label for="notes">تێبینی :</label>
                                <textarea id="notes">{{ $invoices->notice }}</textarea>
                            </div>
                        </div>


                    </div>


                    <div class="operations text-start mt-4">
                        <button type="button" id="submit_button" class="addbtn font_Rabar_028"
                            style="font-size: 22px; text-align: justify; line-height: 1.5;">
                            <i class="fa-regular fa-keyboard"
                                style="margin-left: 3px;position: relative;top: 3px;font-size: 18px;"></i> نوێکردنەوە
                        </button>

                        <a class="btn-logout font_Rabar_028" style="margin-right: 10px; text-decoration:none;"
                            onclick="goBackWithRefresh(); return false;">
                            <i class="fa-solid fa-circle-chevron-right"
                                style="margin-left: 5px; position: relative; top: 4px; font-size: 21px;"></i> گەرانەوە
                        </a>

                        <script>
                            function goBackWithRefresh() {
                                // Get the previous URL
                                let previousURL = document.referrer;

                                // Check if there is a previous URL (document.referrer might be empty if no referrer)
                                if (previousURL) {
                                    // Redirect to the previous URL with a forced reload
                                    window.location.href = previousURL;
                                } else {
                                    // If no referrer is available, just go back one step in history with reload
                                    window.history.back();
                                    // Optionally, you can force a reload after going back
                                    setTimeout(function() {
                                        window.location.reload(true);
                                    }, 50);
                                }
                            }
                        </script>
                    </div>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 1px solid #03b8e1;">
                                    <h5 class="modal-title font_rudawbold" id="exampleModalLongTitle">چاپکردنی فۆڕم 🖨
                                    </h5>
                                    <button type="button" id="close_button" class="close" data-dismiss="modal"
                                        aria-label="Close"
                                        style="border: none; background-color: unset; color: red; font-size: 30px; margin: 0;">
                                        <span aria-hidden="true" style="font-size: 28px"
                                            class="font_rudawbold">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body font_Rabar_028" style="text-align: center">
                                    دڵنیایت دەتەوێت ئەم فۆڕمە چاپبکەیت ؟
                                </div>
                                <div class="modal-footer"
                                    style="border-top: none; display: list-item; text-align: center">
                                    <button type="button" class="btn btn-success font_rudawbold"
                                        style="text-align: center" id="print_button">
                                        <i class="fa-solid fa-print"
                                            style="margin-left: 6px; position: relative; top: 3px; font-size: 18px;"></i>بەڵێ
                                    </button>
                                    <button type="button" id="close_button_footer"
                                        class="btn btn-danger font_rudawbold" style="text-align: center"
                                        data-dismiss="modal">
                                        <i class="fa-solid fa-circle-chevron-right"
                                            style="margin-left: 6px; position: relative; top: 3px; font-size: 18px;"></i>نەخێر
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        document.getElementById('close_button').addEventListener('click', function() {
                            $('#exampleModalCenter').modal('hide');
                        });

                        document.getElementById('close_button_footer').addEventListener('click', function() {
                            $('#exampleModalCenter').modal('hide');
                        });
                    </script>



            </div>

            <script>
                var increment = 1000;

                function addRow(button) {
                    const container = button.closest('.container');
                    const tableBody = container.querySelector('tbody');
                    const rowCount = tableBody.rows.length + 1;
                    const newRow = document.createElement('tr');

                    newRow.innerHTML = `
        <th scope="row" style="font-size: 23px" class="font_Rabar_028">${rowCount}</th>
        <td>
            <a onclick="deleteRow(this)" class="delete-set">
                <img src="{{ asset('assets/img/delete.svg') }}" alt="Delete icon">
            </a>
        </td>
        <td class="font_Rabar_028"><input type="text" id="familyname" class="familyname"></td>
        <td class="font_Rabar_028">
            <div class="input-group date" id="datepicker${increment}">
                <input type="text" class="font_Rabar_028 form-control" 
                 id="borndate"   style="border-radius: unset; font-size: 22px; font-weight: 800; color: black; font-family: 'Rabar_028'; width: 125px;">
                <span class="input-group-append">
                    <span class="input-group-text bg-white" f
                        style="border-radius: 5px 0 0px 5px; 
    border-right: none;">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>
        </td>
        <td class="font_Rabar_028"><input type="text"></td>
        <td class="font_Rabar_028"><input type="text"></td>
        <td class="font_Rabar_028"><input type="text" oninput="this.value = this.value.replace(/[^0-9\u0660-\u0669\u06F0-\u06F9]/g, '');"></td>
        <td class="font_Rabar_028"><input type="text" id="phone" oninput="this.value = this.value.replace(/[^0-9\u0660-\u0669\u06F0-\u06F9]/g, '');"></td>
    `;






                    tableBody.appendChild(newRow);

                    // Initialize datepicker after adding the row to the DOM
                    $(`#datepicker${increment}`).datepicker({
                        dateFormat: 'yy-mm-dd' // Year-Month-Day format
                    });
                    increment++;
                }






                function deleteRow(element) {
                    var row = element.closest('tr');

                    row.parentNode.removeChild(row);
                    isFirstClick = true;

                }


                const ageInput = $("#age").val();

                let formattedDate = "";
                if (ageInput && ageInput.length === 10) {
                    const day = ageInput.slice(0, 2);
                    const month = ageInput.slice(3, 5);
                    const year = ageInput.slice(6, 10);
                    formattedDate = `${year}-${day}-${month}`;
                }


                var age = formattedDate || "بەتال";






                const date = new Date();

                let day = date.getDate();
                let month = date.getMonth() + 1;
                let year = date.getFullYear();

                // This arrangement can be altered based on how we want the date's format to appear.
                let currentDate = `${year}-${month}-${day}`;
                document.querySelector('#Date').value = currentDate;
            </script>



<script>
    $(document).ready(function() {
        const notyf = new Notyf({
            duration: 4000,
            position: {
                x: 'left',
                y: 'top'
            },
            dismissible: true
        });

        $('#submit_button').click(function(e) {
            e.preventDefault();

            let formData = {
                id: $('#id').val(),
                mother: $('#mother').val() || 'بەتاڵ',
                muxtar: $('#muxtar').val() || 'بەتاڵ',
                kolan: $('#neighborhood').val() || 'بەتاڵ',
                house: $('#houseform').val() || 'بەتاڵ',
                street: $('#streetform').val() || 'بەتاڵ',
                floor: $('#floorform').val() || 'بەتاڵ',
                origin: $('#origin').val() || 'بەتاڵ',
                date: $('#date').val() || new Date().toISOString().split('T')[0],
                birthday: $('#DateOfBirthform').val() || new Date().toISOString().split('T')[0],
                computercode: $('#computercode').val() || 'بەتاڵ',
                identification_number: $('#identification_number').val() || 0,
                office: $('#office').val() || 'بەتاڵ',
                record: $('#record').val() || 'بەتاڵ',
                foodFormNumber: $('#foodFormNumber').val() || 0,
                notes: $('#notes').val() || 'بەتاڵ',
                familyMembers: [],
                _token: '{{ csrf_token() }}'
            };

            $('table tbody tr').each(function(index, row) {
                let id = $(row).find('input.idfamily').val() || 0;
                let familyMember;

                if (id != 0) {
                    familyMember = {
                        id: id,
                        name: $(row).find('input.familyname').val() || 'بەتاڵ',
                        birthDate: $(row).find('input').eq(2).val() || new Date().toISOString().split('T')[0],
                        occupation: $(row).find('td input').eq(3).val() || 'بەتاڵ',
                        workplace: $(row).find('td input').eq(4).val() || 'بەتاڵ',
                        securityCode: $(row).find('td input').eq(5).val() || 0,
                        mobileNumber: $(row).find('td input').eq(6).val() || 0
                    };
                } else {
                    familyMember = {
                        name: $(row).find('input.familyname').val() || 'بەتاڵ',
                        birthDate: $(row).find('input').eq(1).val() || new Date().toISOString().split('T')[0],
                        occupation: $(row).find('td input').eq(2).val() || 'بەتاڵ',
                        workplace: $(row).find('td input').eq(3).val() || 'بەتاڵ',
                        securityCode: $(row).find('td input').eq(4).val() || 0,
                        mobileNumber: $(row).find('td input').eq(5).val() || 0
                    };
                }

                formData.familyMembers.push(familyMember);
            });

            console.log('Final formData:', formData);

            $.ajax({
                url: "{{ route('update') }}",
                method: 'POST',
                data: formData,
                success: function(response) {
                    notyf.success('بەسەرکەوتووی زانیاریەکان نوێکرایەوە');

                    $('#exampleModalCenter').modal("show");

                    $('#print_button').click(function() {
                        $.ajax({
                            url: "{{ route('print') }}",
                            method: 'POST',
                            data: formData,
                            success: function(response) {
                                notyf.success('چاپکردنی فۆڕم بەسەرکەوتووی ئەنجامدرا');
                                window.location.href = "{{ route('view') }}";
                            },
                            error: function(xhr, status, error) {
                                notyf.error('کێشەیەک هەیە لە چاپکردنی فۆڕم');
                                console.error(xhr, status, error);
                            }
                        });
                    });

                },
                error: function(xhr, status, error) {
                    $('#exampleModalCenter').modal("hide");
                    notyf.error('کێشەیەک هەیە لە نوێکردنەوەی زانیاریەکان');
                    console.error(xhr, status, error);
                }
            });
        });
    });
</script>












            <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>



</body>

</html>
