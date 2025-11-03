<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بەشی چاپکردنی فۆڕم - موختاری گەڕەک</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/auth/assets/img/1.png') }}">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            direction: rtl;
            margin: 5px;

            box-sizing: border-box;
            font-size: 14px;

        }

        .table {
            margin-bottom: unset;
            border-color: rgb(208 208 208) !important;
        }

        .topinfo {
            display: flex;
            justify-content: space-between;

        }

        @media (min-width: 768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: unset !important;
            }
        }

        .topinfo .photos div {
            width: 5rem;
            height: 7rem;
            background-color: #ededed;
            border-radius: 15px;
            margin: 0 8px;

        }

        .topinfo .photos {
            display: flex;
            align-items: center;
            margin-right: 1rem;

        }

        .topinfo .inf {
            width: 22rem;
        }

        .topinfo .inf .bottomtext {
            display: flex;
            justify-content: space-between;

            margin-top: 15px;

        }

        .topinfo .inf .bottomtext span {
            margin-right: 3px;


        }

        .information {
            margin: 15;
        }

        .topinfo .toptext {
            color: red;
            font-size: 18px;
        }

        .topinfo .toptext span {
            margin-right: 20px;
        }

        .information .bottominfo {
            display: flex;
            margin: 10px;

        }

        .information .bottominfo p:not(:first-child) {
            margin-right: 50px;

        }

        .information .bottominfo p:not(:first-child) {
            color: red;
        }

        .information .bottominfo span {
            margin-right: 8px;
        }

        #tablesubinfo span {
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

        #additionalinfo span,
        #additionalinforight span {
            margin-right: 10;
        }

        table tr:first-child {
            background: green;
        }

        table tr,
        table th {
            text-align: center;
            font-size: 14px;
        }



        table th:first-child {
            background-color: rgb(126 126 126);
            color: white;
        }



        table thead tr th {
            background-color: rgb(0, 135, 108) !important;
            color: white !important;
            font-weight: bold;

        }

        p {
            margin-bottom: 0;
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


        @media print {
            .page-break {
                page-break-before: always;
            }

            /* Optional: If you want each invoice to also end with a page break */
            .page-break-after {
                page-break-after: always;
            }

            /* Adjustments to ensure no content is cut off in the margin */
            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>


</head>

<body>
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


    <div class="continer">

        <div class="information">
            <div class="topinfo">
                <div class="inf">
                    <p class="toptext font_rudawbold">موختاری گەڕەکی<span>( {{ $formData['muxtar'] }} )</span></p>
                    <div class="bottomtext font_Rabar_028">
                        <p>کۆڵانی : <span>{{ convertToArabicNumerals($formData['kolan']) }}</span> </p>
                        <p>خانوی : <span>{{ convertToArabicNumerals($formData['house']) }}</span> </p>
                        <p>شەقام : <span>{{ convertToArabicNumerals($formData['street']) }}</span> </p>
                    </div>
                    <div>
                        <p style="margin-top: 10;" class="font_Rabar_028">قاتی :<span> {{ $formData['floor'] }}</span>
                        </p>
                    </div>
                </div>

                <div class="photos">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                </div>
            </div>


            <div class="bottominfo font_Rabar_028">
                <p>ڕەچەڵەک : <span>{{ $formData['origin'] }}</span> </p>
                <p>بەروار : <span> {{ formatAndConvertDate($formData['date']) }} </span> </p>
                <p>کۆدی کۆمپیوتەر : <span>( {{ convertToArabicNumerals($formData['computercode']) }} )</span> </p>
            </div>

            <table class="table table-bordered border-black">
                <thead class="font_rudawbold">
                    <tr>
                        <th scope="col">ژ</th>
                        <th scope="col">ناوی ئەندامانی خێزان</th>
                        <th scope="col">موالید</th>
                        <th scope="col">پیشە</th>
                        <th scope="col">شوێنی کار</th>
                        <th scope="col">کۆدی ئاسایش</th>
                        <th scope="col">ژ.مۆبایل</th>


                    </tr>
                </thead>
                <tbody class="font_Rabar_028" style="font-size: 22px">


                    @foreach ($formData['familyMembers'] as $index => $member)
                        <tr style="font-size: 22px">
                            <th scope="row" style="font-size: 22px">{{ $index + 1 }}</th>
                            <td>{{ $member['name'] }}</td>
                            <td>{{ formatAndConvertDate($member['birthDate']) }}</td>
                            <td>{{ $member['occupation'] }}</td>
                            <td>{{ $member['workplace'] }}</td>
                            <td>{{ convertToArabicNumerals($member['securityCode']) }}</td>
                            <td>{{ convertToArabicNumerals($member['mobileNumber']) }}</td>
                        </tr>
                    @endforeach



                </tbody>

            </table>
            <div class="d-flex font_Rabar_028"
                style="border: 1px solid rgb(208 208 208); border-top: unset; padding: 5px;font-size: 17px">
                <div id="additionalinforight">
                    <p>ژ.پێناس : <span>{{ convertToArabicNumerals($formData['identification_number']) }}</span> </p>
                    <p>ڕۆژی لەدایک بوون : <span>{{ formatAndConvertDate($formData['birthday']) }}</span> </p>
                    <p>فەرمانگە : <span>{{ $formData['office'] }}</span> </p>
                    <p>تۆمار : <span>{{ $formData['record'] }}</span> </p>
                    <p>لاپەڕە : <span>{{ convertToArabicNumerals($lastPage) }}</span> </p>
                </div>
                <div id="additionalinfo">
                    <p> ناوی دایکی سەرۆک خێزان <span style="color: red;">( {{ $formData['mother'] }} )</span> </p>
                    <p>ژمارەی فۆڕمی خۆراک<span style="color: red;">(
                            {{ convertToArabicNumerals($formData['foodFormNumber']) }} )</span> </p>
                    <p>تێبینی: <br>&nbsp; <span style="line-height:3;">{{ $formData['notes'] }}</span>
                    </p>
                </div>

            </div>

        </div>
    </div>













    </div>








    <script>
        // Open the print dialog when the page loads
        window.onload = function() {
            window.print();
        };

        // Automatically redirect after printing
        window.onafterprint = function() {
            window.history.back(); // Go back to the previous page
        };
    </script>


</body>

</html>
