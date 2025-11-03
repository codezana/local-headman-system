<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>بەشی سەرەکی - موختاری گەڕەک</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/1.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/model.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>


    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/tempus-dominus.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/auth/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/notyf.min.css') }}">
    <script src="{{ asset('assets/js/notyf.min.js') }}"></script>




    <style>
        body {
            direction: rtl;
        }

        article {
            overflow-x: auto;
            border-radius: 6px;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: right;
            padding: 0 20px;
            flex-direction: column;

        }

        tr td:nth-of-type(4) ul {
            list-style: arabic-indic !important;
        }




        * {
            box-sizing: border-box;
        }


        .row-checkbox:checked::before {
            display: block;
            content: "\2713";
            width: 17px;
            height: 17px;
            background-color: teal;
            border-radius: 3px;
            text-align: center;
            line-height: 23px;
            color: white;
            font-size: 15px;
        }

        #backupSection {
            text-align: right;
        }

        #backupSection div {
            margin-top: 15px;
        }

        @media (max-width:983px) {
            #backupModal .modal-content {
                width: 60% !important;
            }
        }

        #backupSection select {
            margin-right: 10px;
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
            border: none !important;
            font-size: 18px;
            position: relative;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;


        }

        #myTable th {
            background-color: teal;
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
            vertical-align: middle;
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
            background: teal;
            border-radius: 10px;
        }

        .table-top {
            margin-bottom: 20px;
            padding: 5px 20px !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

        }

        .tableheader {
            width: 95%;
            background: #fff;
            margin: 25px auto;
        }

        #filter_search img {

            background: teal;
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

        /* .form-group input {
            margin-top: 5px;
        } */

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


        .form-control:focus {
            box-shadow: none;
            border: 1px solid #01919c;

        }

        .form-control {
            padding: 5px 10px !important;

        }

        .dropdown-menu {
            padding: .5rem !important;
        }

        #clear {
            width: 33px;
        }

        a {
            text-decoration: none !important;
        }

        .modal-content {
            margin: auto;
            width: 70%;

            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 1.3rem;
        }

        .addbtn {
            color: white;
            background-color: teal;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid rgb(3, 170, 170);
            cursor: pointer;
            text-align: center;
        }

        .wordset:hover {
            box-shadow: -2px 3px 0px 0px teal;
            transition: .2s;
        }

        @media (max-width:697px) {
            .search-set {

                margin-bottom: 20px;
            }
        }

        /* CSS */
        .addbtn {
            appearance: none;
            backface-visibility: hidden;
            background-color: #27ae60;
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
            background-color: #1e8449;
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
        .backup {
            appearance: none;
            backface-visibility: hidden;
            background-color: #071a0f;
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

        .backup:hover {
            background-color: #0c1e14;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
            color: white !important;
            box-shadow: rgba(9, 35, 20, 0.2) 0 6px 12px;

        }

        .backup:active {
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



        /* CSS */
        .btn-backup {
            color: white;
            background-color: #008080;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid #008080;
            cursor: pointer;
            text-align: center;
        }

        .btn-backup {
            appearance: none;
            backface-visibility: hidden;
            background-color: #064747;
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

        .btn-backup:hover {
            background-color: #008080;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
            color: white !important;
            box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;

        }

        .btn-backup:active {
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

                height: 70rem !important;
            }

        }

        @media (max-width:480px) {

            #checkbox_filter:checked~#filter_inputs {

                height: 63rem !important;
            }

        }

        @media (min-width:576px) {

            #checkbox_filter:checked~#filter_inputs {

                height: 32rem !important;
            }

        }

        @media (min-width: 991.98px) {
            #checkbox_filter:checked~#filter_inputs {

                height: 17rem !important;
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

        .datepicker-dropdown {
            top: 220.2px !important;
        }

        .notyf__toast {
            font-family: 'rudawbold';
            /* Change to your desired font family */
            border-radius: 20px;
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
            text-align: right
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
            text-align: right
        }






        #pagination {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        #pagination button {
            margin: 0 5px;
            padding: 5px;
            width: 50px;
            outline: none;
            border-radius: 5px;
            border: 1px solid teal;
            background-color: white;
            color: #071a0f;
            font-family: 'rudawbold'
        }

        .hidden {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
            display: none !important;
        }




        .active-paginator-button {
            background-color: teal !important;
            color: white !important;
        }

        .modal-header .close {
            padding: 0;
            margin: 0;
        }

        #backupbtn {
            margin-left: 10px;
            width: 70px;
            text-align: center;
            border: 2px solid teal;
            background-color: teal;
            color: white;
            border-radius: 5px;


        }

        #backupbtn:hover {
            background-color: unset;
            color: teal;
        }

        #backupModal .modal-content {
            width: 40%;
        }


        #backupModal .modal-dialog {
            width: 100% !important;
        }



        #backupModal .modal-body {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }




        @media (min-width: 576px) {
            #backupModal .modal-dialog {
                max-width: 90%;
                height: 100vh;
            }
        }

        @media (max-width: 1113px) {

            .listofbtn button,
            .listofbtn a {
                margin-top: 15px;
            }
        }

        #Printbtn {
            background-color: white;
            border-radius: 12px;
            cursor: pointer;
            border: 1px solid teal;
            height: 43px;
            width: 60px;
            outline: none;
        }

        #Printbtn:hover {
            border-color: red;
        }
    </style>

</head>

<body>







    <div class="tableheader">
        <div class="table-top">
            <div class="search-set">
                <div class="search-path">
                    <label for="checkbox_filter">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="{{ asset('assets/img/filter.svg') }}" alt="img" class="filter-img">
                            <img src="{{ asset('assets/img/closes.svg') }}" alt="img" class="close-img"
                                style="background-color: rgb(188, 4, 4); display: none;">
                        </a></label>
                </div>
                <div class="search-input" style="position: relative;">
                    <a class="btn btn-searchset"><img src="{{ asset('assets/img/search-white.svg') }}"
                            alt="img"></a>
                    <input class="font_Rabar_028" type="text" onkeyup="filter(event)" id="myInput"
                        placeholder="گەڕان"
                        style="padding: 10px 25px;border-radius: 15px; border: 1px solid teal; font-size: 20px;">
                </div>
                <div class="col-lg-1  ms-auto">
                    <div>
                        <a class="btn btn-filters ms-auto" style="background-color: #ffffff; padding:0;"><img
                                src="{{ asset('assets/img/clean.png') }}" width="50px" alt="img"
                                id="clear"></a>
                    </div>
                </div>
            </div>
            <div class="d-flex listofbtn" style="align-items: center;  flex-wrap: wrap;">
                <form action="logout" method="POST">
                    @csrf
                    <button class="btn-logout font_Rabar_028"
                        style="margin-left: 10px;width: 145px;text-align: center"><i
                            class="fa-solid fa-right-from-bracket"
                            style="position: relative;top: 3px;font-size: 18px;margin-left: 3px"></i>
                        چوونەدەرەوە
                    </button>
                </form>


                <button class="btn-backup font_Rabar_028" id="run-backup-btn"
                    style="margin-left: 10px;width: 160px;text-align: center">
                    <i class="fa-solid fa-database"
                        style="position: relative;top: 2px;font-size: 18px;margin-left: 3px"></i>
                    فایلەکە هەڵبگرە
                </button>

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

                        // Function to perform the backup AJAX call
                        function performBackup() {
                            $.ajax({
                                url: '{{ route('run-backup') }}',
                                type: 'POST',
                                data: {
                                    _token: $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    notyf.success('هەڵگرتنی داتا بە سەرکەوتوویی جێبەجێ کرا');
                                },
                                error: function(xhr, status, error) {
                                    notyf.error('کێشەیەک لە هەڵگرتنی داتا هەیە');
                                    console.error(xhr, status, error);
                                }
                            });
                        }

                        // Handle click event on backup button
                        $('#run-backup-btn').click(function() {
                            performBackup();
                        });

                        // Function to start the interval backup
                        function startIntervalBackup() {
                            setInterval(function() {
                                performBackup();
                            }, 7200000); // 7200000 ms = 2 hour
                        }

                        // Start the interval backup after  hour (7200000 ms) delay
                        setTimeout(function() {
                            startIntervalBackup();
                        }, 7200000); // 7200000 ms = 2 hour
                    });
                </script>




                <!-- Backup Button -->
                <button type="button" class="backup font_Rabar_028"
                    style="margin-left: 10px; width: 170px; height: 43px; text-align: center;" data-toggle="modal"
                    data-target="#backupModal">
                    <i class="fa-solid fa-server"
                        style="position: relative;top: 3px;font-size: 18px;margin-left: 10px"></i>پاشەکەوتکردن
                </button>

                <!-- Backup Modal -->
                <div class="modal fade" id="backupModal" tabindex="-1" role="dialog"
                    aria-labelledby="backupModalTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="border-bottom: 1px solid teal;">
                                <h5 class="modal-title font_rudawbold" id="backupModalTitle">💾 ڕێکخستنی داتاکان</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="border: none; background-color: unset; color: red; font-size: 30px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body font_Rabar_028" style="text-align: center; align-items: center;">
                                <div id="backupSection">
                                    <div style="display: flex;
    justify-content: space-between; flex-wrap:wrap;">
                                        <label for="backupChoice">ئایا فۆڵدەری پاشەکەوتکردن دەگۆڕیت ؟</label>
                                        <select id="backupChoice" onchange="toggleSections()">
                                            <option value="no">نەخێر</option>
                                            <option value="yes">بەڵێ</option>
                                        </select>
                                    </div>
                                    <div style="display: flex;
    justify-content: space-between; flex-wrap:wrap;">
                                        <label for="importChoice">ئایا فایلێکت هەڵبژاردووە بۆ پاشەکەوتکردن ؟</label>
                                        <select id="importChoice" onchange="toggleSections()">
                                            <option value="no">نەخێر</option>
                                            <option value="yes">بەڵێ</option>
                                        </select>
                                    </div>
                                    <div id="importSection" style="display: none;">
                                        <label for="importFile" class="font_Rabar_028">فایلێکی پاشەکەوت
                                            هەڵبژێرە:</label>
                                        <input type="file" class="form-control" id="importFile"
                                            name="importFile">
                                        <button type="button" id="importButton" class="addbtn font_Rabar_028"
                                            style="margin-left: 10px; width: 120px; text-align: center; margin-top: 15px; margin-bottom: 4px">ناردن</button>
                                    </div>

                                    <div id="folderSelectSection" style="display: none;">
                                        <form id="backupForm" action="{{ route('backup') }}" method="POST">
                                            @csrf
                                            <label for="backupFolder">فۆڵدەری پاشەکەوتکردن بگۆڕە :</label>
                                            <input type="text" style="font-size: 20px;text-align: center"
                                                value="{{ $backup->path }}" id="backupFolder" class="form-control"
                                                placeholder="ڕێڕەوی فۆڵدەری پاشەکەوت داخڵ بکە" name="backupFolder">
                                            <button type="button" id="backup" class="addbtn font_Rabar_028"
                                                style="margin-left: 10px; width: 120px; text-align: center; margin-top: 15px; margin-bottom: 4px">گۆرین</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    function toggleSections() {
                        const backupChoice = document.getElementById('backupChoice').value;
                        const importChoice = document.getElementById('importChoice').value;
                        const importSection = document.getElementById('importSection');
                        const folderSelectSection = document.getElementById('folderSelectSection');

                        // Toggle import section based on import choice
                        if (importChoice === 'yes') {
                            importSection.style.display = 'block';
                            folderSelectSection.style.display = 'none';
                        } else {
                            importSection.style.display = 'none';
                        }

                        // Toggle folder select section based on backup choice
                        if (backupChoice === 'yes') {
                            folderSelectSection.style.display = 'block';
                            importSection.style.display = 'none';
                        } else {
                            folderSelectSection.style.display = 'none';
                        }
                    }

                    $(document).ready(function() {
                        const notyf = new Notyf({
                            duration: 4000,
                            position: {
                                x: 'left',
                                y: 'top'
                            },
                            dismissible: true
                        });

                        $('#backup').click(function(e) {
                            e.preventDefault();
                            let path = document.getElementById('backupFolder').value;
                            if (path.startsWith('"') && path.endsWith('"')) {
                                path = path.substring(1, path.length - 1);
                            }
                            console.log('Backup folder path:', path);

                            // Update the path value in the form input
                            document.getElementById('backupFolder').value = path;

                            const formData = new FormData(document.getElementById('backupForm'));

                            $.ajax({
                                url: "{{ route('backup') }}",
                                method: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    $('#backupModal').modal("hide");
                                    notyf.success('بەسەرکەوتووی زانیاریەکان نوێکرایەوە');
                                },
                                error: function(xhr, status, error) {
                                    notyf.error('کێشەیەک هەیە لە نوێکردنەوەی زانیاریەکان');
                                    console.error(xhr, status, error);
                                }
                            });
                        });

                        $('#importButton').click(function(e) {
                            e.preventDefault();

                            const importFile = document.getElementById('importFile').files[0];
                            if (importFile) {
                                const formData = new FormData();
                                formData.append('importFile', importFile);
                                formData.append('_token',
                                    '{{ csrf_token() }}'); // Include the CSRF token in the form data

                                $.ajax({
                                    url: "{{ route('import.database') }}",
                                    method: 'POST',
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    success: function(response) {
                                        $('#backupModal').modal("hide");
                                        notyf.success(
                                            'بەسەرکەوتووی داتاکان هاتنە ژوورەوە. لە نوێ دایبەزێنەوە...');
                                        location.reload();
                                    },
                                    error: function(xhr, status, error) {
                                        notyf.error('کێشەیەک ڕووی دا لە هێنانی داتاکان.');
                                        console.error(xhr, status, error);
                                    }
                                });
                            } else {
                                notyf.error('تکایە فایلێکی پاشەکەوت هەڵبژێرە بۆ هێنان.');
                            }
                        });
                    });
                </script>


                <a href="{{ route('insert') }}" class="addbtn font_Rabar_028"
                    style="margin-left: 10px;width: 122px;height: 43px;text-align: center"><i
                        class="fa-solid fa-circle-plus"
                        style="position: relative;top: 4px;font-size: 18px;margin-left: 3px"></i> زیادکردن </a>






                <button title="چاپکردن" data-bs-toggle="tooltip" data-bs-placement="top" title="print"
                    id="Printbtn"><img src="{{ asset('assets/img/printer.svg') }}" alt="img"
                        style="filter: brightness(0.5); margin-bottom:3px;"></button>






            </div>
        </div>


        <input type="checkbox" id="checkbox_filter" style="display: none;">
        <div class="card mb-0" id="filter_inputs">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">

                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="NameOfEntireFamily"
                                        placeholder="ناوی ئەندامانی خێزان">
                                </div>
                            </div>

                            <div class="col-lg col-sm-6 col-12">
                                <div class="font_Rabar_028">
                                    <div class="input-group date" id="datepicker2" style="margin-bottom: 15px;">
                                        <input type="text" class="font_Rabar_028 form-control"
                                            style=" font-weight:800;color: black;font-family: 'Rabar_028'; border-radius: 0px 0px 0px 0px ;"
                                            id="Dateofborn" placeholder="موالید">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white"
                                                style="border-radius: 5px 0px 0px 5px; border-right: none;">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>


                                    <script type="text/javascript">
                                        $(function() {
                                            $('#datepicker2').datepicker({
                                                dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                            });
                                        });
                                    </script>

                                </div>
                            </div>



                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="work"
                                        placeholder="پیشە">
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="workplace"
                                        placeholder="شوێنی کار">
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="securityCode"
                                        placeholder="کۆدی ئاسایش">
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#securityCode').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>


                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="mobileNumber"
                                        placeholder="ژمارە مۆبایل">
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#mobileNumber').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>


                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="neighborhood"
                                        placeholder="کۆڵان">
                                </div>
                            </div>

                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="house"
                                        placeholder="خانوو">
                                </div>
                            </div>

                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="street"
                                        placeholder="شەقام">
                                </div>
                            </div>

                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="floor"
                                        placeholder="قات">
                                </div>
                            </div>




                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="computercode"
                                        placeholder="کۆدی کۆمپیوتەر">
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#computercode').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="font_Rabar_028">
                                    <div class="input-group date" id="datepicker3" style="margin-bottom: 15px;">
                                        <input type="text" class="font_Rabar_028 form-control"
                                            style=" font-weight:800;color: black;font-family: 'Rabar_028'; border-radius: 0px 0px 0px 0px ;"
                                            id="date" placeholder="بەروار">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white"
                                                style="border-radius: 5px 0px 0px 5px; border-right: none;">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>


                                    <script type="text/javascript">
                                        $(function() {
                                            $('#datepicker3').datepicker({
                                                dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                            });
                                        });
                                    </script>

                                </div>
                            </div>

                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="identityNumber"
                                        placeholder="ژمارەی پێناس">
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#identityNumber').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="font_Rabar_028">
                                    <div class="input-group date" id="datepicker5" style="margin-bottom: 15px;">
                                        <input type="text" class="font_Rabar_028 form-control"
                                            style=" font-weight:800;color: black;font-family: 'Rabar_028'; border-radius: 0px 0px 0px 0px ;"
                                            id="DateOfBirthform" placeholder="ڕۆژی لەدایک بوون">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white"
                                                style="border-radius: 5px 0px 0px 5px; border-right: none;">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>


                                    <script type="text/javascript">
                                        $(function() {
                                            $('#datepicker5').datepicker({
                                                dateFormat: 'yy-mm-dd' // Year-Month-Day format
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="nameofmotherfamily"
                                        placeholder="ناوی دایکی سەرۆک خێزان">
                                </div>
                            </div>





                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control font_Rabar_028" id="FoodFormNumber"
                                        placeholder="ژمارەی فۆڕمی خۆراک">
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    // Restrict input to numbers only (Arabic and English)
                                    $('#FoodFormNumber').on('input', function() {
                                        this.value = this.value.replace(
                                            /[^\u0660-\u0669\u06F0-\u06F90-9]/g,
                                            ''); // Allow Arabic and English numerals
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        @php
            // Function to convert numbers to Arabic numerals
            function convertToArabicNumerals($date)
            {
                $westernNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                $arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
                return str_replace($westernNumbers, $arabicNumbers, $date);
            }

            // Function to format date to DD-MM-YYYY and then convert to Arabic numerals
            function formatAndConvertDate($date)
            {
                // Convert the date to a DateTime object
                $dateObject = new DateTime($date);

                // Format the date to DD-MM-YYYY
                $formattedDate = $dateObject->format('d-m-Y');

                // Convert the formatted date to Arabic numerals
                return convertToArabicNumerals($formattedDate);
            }
        @endphp




        <article class="content">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr class="header">
                        <th class="font_rudawbold">انتخاب</th>
                        <th class="font_rudawbold">جێبەجێ کردن</th>
                        <th class="font_rudawbold">ژمارە</th>
                        <th class="font_rudawbold">ناوی ئەندامانی خێزان</th>
                        <th class="font_rudawbold">موالید</th>
                        <th class="font_rudawbold">پیشە</th>
                        <th class="font_rudawbold">شوێنی کار</th>
                        <th class="font_rudawbold">کۆدی ئاسایش</th>
                        <th class="font_rudawbold">ژ.مۆبایل</th>
                        <th class="font_rudawbold">کۆڵان</th>
                        <th class="font_rudawbold">خانوو</th>
                        <th class="font_rudawbold">شەقام</th>
                        <th class="font_rudawbold">قات</th>
                        <th class="font_rudawbold">ڕەچەڵەک</th>
                        <th class="font_rudawbold">کۆدی کۆمپیوتەر</th>
                        <th class="font_rudawbold">بەروار</th>
                        <th class="font_rudawbold">ژ.پێناس</th>

                     

                        <th class="font_rudawbold">ڕۆژی لەدایکبوون</th>
                        <th class="font_rudawbold">فەرمانگە</th>
                        <th class="font_rudawbold">تۆمار</th>

                        <th class="font_rudawbold">ناوی دایکی سەرۆک خێزان</th>
                        <th class="font_rudawbold">ژمارەی فۆڕمی خۆراک</th>
                        <th class="font_rudawbold">تێبینی</th>
                       
                    </tr>
                </thead>
                <tbody style="font-family: 'Rabar_028';font-size: 22px;">
                    @foreach ($invoices as $invoice)
                        <tr id="id_{{ $invoice->id }}">
                            <td><input type="checkbox" style="position: relative;top: 6px;" class="row-checkbox" data-invoice-id="{{ $invoice->id }}">
                            </td>
                            <td>
                                <a href="javascript:void(0);" action="{{ route('delete', ['id' => $invoice->id]) }}"
                                    data-user-id="{{ $invoice->id }}" class="me-3 delete-button"
                                    data-toggle="modal" data-target="#deleteModal{{ $invoice->id }}">
                                    <img src="{{ asset('assets/img/delete.svg') }}" class="me-2" alt="img">
                                </a>
                                <a class="me-3" style="margin-right: 10px"
                                    href="{{ route('edit', ['id' => $invoice->id]) }}">
                                    <img src="{{ asset('assets/img/edit.svg') }}" alt="img">
                                </a>
                            </td>
                            <td class="font_rudawbold">{{ $loop->iteration }}</td>
                            <td>
                                <ul class="font_Rabar_028">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ $family->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul class="font_Rabar_028">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ formatAndConvertDate($family->born) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul class="font_Rabar_028" style="text-align: center">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ $family->occupation }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul class="font_Rabar_028">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ $family->Workplace }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul class="font_Rabar_028">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ convertToArabicNumerals($family->security_code) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul class="font_Rabar_028">
                                    @foreach ($invoice->families as $family)
                                        <li>{{ convertToArabicNumerals($family->phone) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $invoice->neighborhood }}</td>
                            <td>{{ convertToArabicNumerals($invoice->house) }}</td>
                            <td>{{ convertToArabicNumerals($invoice->street) }}</td>
                            <td>{{ convertToArabicNumerals($invoice->floor) }}</td>
                            <td>{{ $invoice->origin }}</td>
                            <td>{{ convertToArabicNumerals($invoice->computer_code) }}</td>
                            <td>{{ formatAndConvertDate($invoice->date) }}</td>
                            <td>{{ convertToArabicNumerals($invoice->identification_number) }}</td>
                           
                            <td>{{ formatAndConvertDate($invoice->birthday) }}</td>
                            <td>{{ $invoice->office }}</td>
                            <td>{{ convertToArabicNumerals($invoice->record) }}</td>

                            <td>{{ $invoice->mother }}</td>
                            <td>{{ convertToArabicNumerals($invoice->food_form_number) }}</td>
                            <td>{{ $invoice->notice }}</td>
                          
                        </tr>


                        <div id="deleteModal{{ $invoice->id }}" class="modal">
                            <div class="modal-content modaldeletedata" style="position: relative;top: 257px">
                                <span class="close" data-dismiss="modal" aria-label="Close"
                                    aria-hidden="true">&times;</span>
                                <h2 class="font_rudawbold" style="text-align: center">سڕینەوە پشتڕاست بکەرەوە</h2>
                                <form id="deleteForm{{ $invoice->id }}"
                                    action="{{ route('delete', ['id' => $invoice->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <p class="font_Rabar_028" style="text-align: center">دڵنیای کە دەتەوێت ئەم بابەتە
                                        بسڕیتەوە؟</p>
                                    <button type="submit" class="confirmDelete noselect"
                                        data-invoice-user-id="{{ $invoice->id }}">
                                        <span class="text font_rudawbold" data-dismiss="modal" aria-label="Close"
                                            aria-hidden="true">بەڵێ، بیسڕەوە</span>
                                        <span class="icon" data-dismiss="modal" aria-label="Close"
                                            aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <div id="paginator"></div>
        </article>



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
                $('.delete-button').click(function() {
                    var userId = $(this).data('user-id');
                    $('#deleteModal' + userId).show();
                });

                $('.confirmDelete').click(function(event) {
                    event.preventDefault();

                    var userId = $(this).data('invoice-user-id');
                    var $form = $('#deleteForm' + userId);
                    var url = $form.attr('action');
                    console.log("URL for AJAX request:", url);
                    $('#deleteModal' + userId).hide();
                    $.ajax({
                        url: url,
                        type: $form.attr('method'),
                        data: $form.serialize(),
                        success: function(response) {

                            notyf.success('بەسەرکەتوویی فۆڕمەکە سڕایەوە');
                            $('#deleteModal' + userId).hide();
                            location.reload();


                        },
                        error: function(xhr, status, error) {
                            console.log(xhr, status, error);
                            notyf.error('کێشەیەک لە سڕینەوەی فۆڕمەکەدا هەیە');
                        }
                    });
                });

                $('.close').click(function() {
                    $(this).closest('.modal').hide();
                });
            });
        </script>






























        </table>
        </article>
    </div>
    <div id="pagination"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.getElementById("myTable");
            table.addEventListener("click", function(event) {
                const target = event.target;
                const row = target.closest("tr");

                if (!row || target.classList.contains("header")) return;

                const checkbox = row.querySelector(".row-checkbox");

                if (target.classList.contains("row-checkbox")) {
                    checkbox.checked = !checkbox.checked;

                } else {
                    checkbox.checked = !checkbox.checked;
                }

                if (checkbox.checked) {
                    //  uncheckAllOthers(checkbox);

                    // logRowData(row);
                } else {
                    checkbox.checked = false;
                }
            });
        });



        $("#filter_search").on("click", function() {

            if ($('#filter_inputs').css("display") == "block") {

                $(".close-img").css("display", "none");
                $(".filter-img").css("display", "block");
            } else {
                $(".close-img").css("display", "block");
                $(".filter-img").css("display", "none");
            }

        })






        $(document).ready(function() {
            const notyf = new Notyf({
                duration: 4000,
                position: {
                    x: 'left',
                    y: 'top'
                },
                dismissible: true
            });
            $('#Printbtn').click(function() {
                // Collect all checked invoice IDs
                let selectedIds = [];
                $('.row-checkbox:checked').each(function() {
                    selectedIds.push($(this).data('invoice-id'));
                });
                console.log(selectedIds);
                // Check if there are selected IDs
                if (selectedIds.length > 0) {
                    // Construct the URL for redirection
                    const url = `{{ route('print-data') }}?ids=${selectedIds.join(',')}`;

                    // Redirect to the constructed URL
                    window.location.href = url;
                } else {
                    notyf.error('تکایە لانیکەم یەک ڕیز هەڵبژێرە بۆ چاپکردن');
                }
            });
        });
    </script>

    <script>
        let currentPage = 0;
        let pages = [];
        let timeoutpagin = undefined;
        let initialData = [];

        const options = {
            tableId: 'myTable',
            currentPage: 1,
            perPage: 10,
            autoHeaders: true,
            arrowUp: '⇑',
            arrowDown: '⇓',
            previousText: '&#10094;',
            nextText: '&#10095;',
        };

        // Initialization function
        function initializeTable() {
            const table = document.getElementById(options.tableId);
            const tbody = table.getElementsByTagName('tbody')[0];

            // Populate initialData from table rows
            const rows = tbody.getElementsByTagName('tr');
            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const rowData = {
                    checkbox: row.cells[0].innerHTML.trim(),
                    actions: row.cells[1].innerHTML.trim(),
                    number: row.cells[2].textContent.trim(),
                    family_names: getULContent(row.cells[3]),

                    birthdates: getULContent(row.cells[4]),
                    occupations: getULContent(row.cells[5]),
                    workplaces: getULContent(row.cells[6]),

                    security_codes: getULContent(row.cells[7]),
                    mobile_numbers: getULContent(row.cells[8]),
                    neighborhood: row.cells[9].textContent.trim(),
                    house: row.cells[10].textContent.trim(),

                    street: row.cells[11].textContent.trim(),
                    floor: row.cells[12].textContent.trim(),
                    origin: row.cells[13].textContent.trim(),

                    computer_code: row.cells[14].textContent.trim(),
                    date: row.cells[15].textContent.trim(),
                    identification_number: row.cells[16].textContent.trim(),

                   
                    birthday: row.cells[17].textContent.trim(),
                    office: row.cells[18].textContent.trim(),
                    record: row.cells[19].textContent.trim(),

                    mother_name: row.cells[20].textContent.trim(),
                    food_form_number: row.cells[21].textContent.trim(),
                    notice: row.cells[22].textContent.trim()
                   
                };
                initialData.push(rowData);
            }

            // Load the table with initial data
            loadTable(initialData, options);

        }



        // Function to extract content from <ul> elements
        function getULContent(cell) {
            const ul = cell.querySelector('ul');
            if (ul) {
                return ul.outerHTML; // Return HTML content of <ul>
            }
            return cell.textContent.trim(); // Fallback if no <ul> found
        }

        // Calls required methods
        function loadTable(data, options) {
            paginate(data, options.perPage);
            addPaginator(options);
            showPage(options.currentPage - 1);
        }

        // Generates a set of arrays representing the organized data
        function paginate(data, perPage) {
            pages = [];
            let pageNumber = 0;

            data.forEach((row, index) => {
                if (!pages[pageNumber]) {
                    pages[pageNumber] = [];
                }

                if (pages[pageNumber].length < perPage) {
                    pages[pageNumber].push(row);
                    if (pages[pageNumber].length === perPage) {
                        pageNumber++;
                    }
                }
            });
        }


        // Generates the buttons for switching between pages
        function addPaginator(options) {
            const paginatorContainer = document.getElementById('pagination');

            paginatorContainer.innerHTML = pages.length > 1 ?
                `<button onclick="previousPage()" class="paginator-button">${options.previousText}</button>` : '';

            for (let i = 0; i < pages.length; i++) {
                const paginatorButton = `<button onclick="showPage(${i})" class="paginator-button">${i + 1}</button>`;
                paginatorContainer.innerHTML += paginatorButton;
            }

            paginatorContainer.innerHTML += pages.length > 1 ?
                `<button onclick="nextPage()" class="paginator-button">${options.nextText}</button>` : '';
        }

        function nextPage() {
            if (currentPage < pages.length - 1) {
                showPage(currentPage + 1);
            }
        }

        function previousPage() {
            if (currentPage > 0) {
                showPage(currentPage - 1);
            }
        }

        // Populates the table with the visible rows
        function showPage(page) {
            const tableBody = document.querySelector(`#${options.tableId} tbody`);
            tableBody.innerHTML = '';

            if (pages.length < 1 || page >= pages.length) return;

            const paginatorButtons = document.querySelectorAll('#pagination button');
            paginatorButtons.forEach((button, index) => {
                if (index === page + 1) {
                    button.classList.add('active-paginator-button');
                } else {
                    button.classList.remove('active-paginator-button');
                }
            });

            pages[page].forEach(record => {
                const tr = document.createElement('tr');
                for (const [key, value] of Object.entries(record)) {
                    const td = document.createElement('td');
                    if (key === 'checkbox' || key === 'actions' || key.includes('innerHTML')) {
                        td.innerHTML = value;
                    } else {
                        // Check if the value is HTML content extracted from <ul>
                        if (key === 'family_names' || key === 'birthdates' || key === 'occupations' || key ===
                            'workplaces' ||
                            key === 'security_codes' || key === 'mobile_numbers') {
                            td.innerHTML = value; // This should contain <ul> and <li> elements
                        } else {
                            td.textContent = value; // For other non-HTML content
                        }
                    }
                    tr.appendChild(td);
                }
                tableBody.appendChild(tr);
            });

            // Disable/enable pagination buttons based on current page
            paginatorButtons[paginatorButtons.length - 1].disabled = (page + 1) === pages.length;
            paginatorButtons[0].disabled = page === 0;

            currentPage = page;
        }

        // Filter function
        function filter(evt) {
            if (timeoutpagin) clearTimeout(timeoutpagin);
            timeoutpagin = setTimeout(() => {
                const searchWord = evt.target.value.toLowerCase().trim();
                const filteredData = initialData.filter(row => {
                    return Object.values(row).some(value => {
                        return String(value).toLowerCase().includes(searchWord);
                    });
                });
                loadTable(filteredData, options);
            }, 50);
        }


</script>



<script>
    function getSearchValues() {
        return {
            searchFamily: $("#NameOfEntireFamily").val().toLowerCase().trim(),
            searchWork: $("#work").val().toLowerCase().trim(),
            searchWorkplace: $("#workplace").val().toLowerCase().trim(),
            searchSecurityCode: $("#securityCode").val().toLowerCase().trim(),
            searchMobileNumber: $("#mobileNumber").val().toLowerCase().trim(),
            searchNeighborhood: $("#neighborhood").val().toLowerCase().trim(),
            searchHouse: $("#house").val().toLowerCase().trim(),
            searchStreet: $("#street").val().toLowerCase().trim(),
            searchFloor: $("#floor").val().toLowerCase().trim(),
            searchComputerCode: $("#computercode").val().toLowerCase().trim(),
            searchIdentityNumber: $("#identityNumber").val().toLowerCase().trim(),
            searchNameOfMotherFamily: $("#nameofmotherfamily").val().toLowerCase().trim(),
            searchFoodFormNumber: $("#FoodFormNumber").val().toLowerCase().trim()
        };
    }

    function getSearchDates() {
        return {
            searchDateOfBorn: $("#Dateofborn").val().trim(),
            searchDate: $("#date").val().trim(),
            searchDateOfBirthForm: $("#DateOfBirthform").val().trim()
        };
    }

    function convertToArabicNumerals(input) {
        if (!input) return '';
        const arabicDigits = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
        return String(input).replace(/\d/g, digit => arabicDigits[digit]);
    }

    function convertToStandardDateFormat(dateString) {
        if (!dateString) return '';
        const parts = dateString.split('-');
        if (parts.length !== 3) return '';
        return `${parts[2]}-${parts[1]}-${parts[0]}`;
    }

    function filterData() {
        const {
            searchFamily,
            searchWork,
            searchWorkplace,
            searchSecurityCode,
            searchMobileNumber,
            searchNeighborhood,
            searchHouse,
            searchStreet,
            searchFloor,
            searchComputerCode,
            searchIdentityNumber,
            searchNameOfMotherFamily,
            searchFoodFormNumber
        } = getSearchValues();

        const {
            searchDateOfBorn,
            searchDate,
            searchDateOfBirthForm
        } = getSearchDates();

        const convertedDateOfBorn = convertToStandardDateFormat(convertToArabicNumerals(searchDateOfBorn));
        const convertedDate = convertToStandardDateFormat(convertToArabicNumerals(searchDate));
        const convertedDateOfBirthForm = convertToStandardDateFormat(convertToArabicNumerals(searchDateOfBirthForm));

        const filteredData = initialData.filter(row => {
            return row.family_names.toLowerCase().includes(searchFamily) &&
                row.occupations.toLowerCase().includes(searchWork) &&
                row.workplaces.toLowerCase().includes(searchWorkplace) &&
                row.security_codes.toLowerCase().includes(searchSecurityCode) &&
                row.mobile_numbers.toLowerCase().includes(searchMobileNumber) &&
                row.neighborhood.toLowerCase().includes(searchNeighborhood) &&
                row.house.toLowerCase().includes(searchHouse) &&
                row.street.toLowerCase().includes(searchStreet) &&
                row.floor.toLowerCase().includes(searchFloor) &&
                row.computer_code.toLowerCase().includes(searchComputerCode) &&
                row.identification_number.toLowerCase().includes(searchIdentityNumber) &&
                row.mother_name.toLowerCase().includes(searchNameOfMotherFamily) &&
                row.food_form_number.toLowerCase().includes(searchFoodFormNumber) &&
                (!convertedDateOfBorn || row.birthdates.toLowerCase().includes(convertedDateOfBorn)) &&
                (!convertedDate || row.date.toLowerCase().includes(convertedDate)) &&
                (!convertedDateOfBirthForm || row.birthday.toLowerCase().includes(convertedDateOfBirthForm));
        });

        loadTable(filteredData, options);
    }

    function filterByColumns() {
        const inputSelectors = "#NameOfEntireFamily, #work, #workplace, #securityCode, #mobileNumber, #neighborhood, #house, #street, #floor, #computercode, #identityNumber, #nameofmotherfamily, #FoodFormNumber";
        const dateSelectors = "#Dateofborn, #date, #DateOfBirthform";

        $(inputSelectors).on("input", filterData);
        $(dateSelectors).on("focusout", filterData);

        $("#clear").on("click", function() {
            $(inputSelectors + ", " + dateSelectors + ", #myInput").val("");
            loadTable(initialData, options);
        });
    }

    // Call the function to initialize the filtering behavior
    filterByColumns();

    // Select/Deselect all checkboxes
    function toggleAllCheckboxes(source) {
        const checkboxes = document.querySelectorAll(`#${options.tableId} tbody input[type="checkbox"]`);
        checkboxes.forEach(checkbox => checkbox.checked = source.checked);
    }

    // Initialize table on page load
    window.onload = function() {
        initializeTable();
    };
</script>






    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>



</body>

</html>
