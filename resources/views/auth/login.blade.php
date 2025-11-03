<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="چوونەژوورەوە - موختاری گەڕەک">
    <title>چوونەژوورەوە - موختاری گەڕەک</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/1.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/auth/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/auth/jquery.min.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('assets/css/auth/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/all.min.css') }}">


    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

   
   <style>
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



    .font_rudawbold{
        font-family: 'rudawbold';
        direction: rtl;
        font-size: 18px;
        text-align: justify;
        line-height:1.5;
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



    .font_Rabar_028{
        font-family: 'Rabar_028';
        direction: rtl;
        font-size: 18px;
        text-align: justify;
        line-height:1.5;
    }


   
</style>
    
</head>

<body class="account-page" >

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">

                    <div class="login-userset">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                  
                            <div class="login-userheading">
                                <h3 class="font_rudawbold" style="color: #01919C">چوونە ژوورەوە</h3>
                                <h4 class="font_Rabar_028" style="color: #075d63"
                                >
                                تکایە بچۆرە ناو ئەکاونتەکەتەوە 🤖</h4>
                            </div>



                            <div class="form-login">
                                <label class="font_Rabar_028" style="font-size: 16px">ناوی بەکارهێنەر یا ناونیشانی ئیمەیڵ</label>
                                <div class="form-addons">
                                    <input type="text" style="font-family: 'Times New Roman', Times, serif"
                                        id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>


                                    @error('email')
                                        <span class="invalid-feedback " role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-login">
                                <label class="font_Rabar_028" style="font-size: 16px">وشەی نهێنی</label>
                                <div class="pass-group">
                                    <div style="position: relative;">
                                    <input id="password" type="password"
                                        style="font-family: 'Times New Roman', Times, serif"
                                        class="pass-input @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    <span class="fas toggle-password fa-eye-slash"></span> </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert" style="display: block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   
                                    @enderror
                                </div>
                            </div>



                          
                            <div class="form-login form-login1"
                                style="justify-content: center;
                            display: flex;
                            height: 138px;">
                                <button class="btn btn-login font_rudawbold" type="submit" id="loginButton"
                                    style="position: relative; width: max-content; height: max-content;">چوونە ژوورەوە</button>
                            </div>
                            <div class="signinform text-center">
                                <h4> All Right Reseved <a href="https://www.facebook.com/sulicore2025" class="hover-a"
                                        target="_blank">Suli Core</a> &copy;</h4>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="login-img">
                    <img src="{{ asset('assets/img/muxtar.svg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var hasInteracted = false;
            var initialPosition = {};

            // Store the initial position of the button
            initialPosition = $('#loginButton').position();

            $('#email, #password').on('input', function() {
                if ($('#email').val() && $('#password').val()) {
                    hasInteracted = true;
                    $('#loginButton').stop(true, true).css({
                        'left': 0,
                        'top': 0
                    });
                } else {
                    hasInteracted = false;

                }
            });

          
        });
    </script>










    <script src="{{ asset('assets/js/auth/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/auth/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/auth/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/auth/script.js') }}"></script>
</body>

</html>
