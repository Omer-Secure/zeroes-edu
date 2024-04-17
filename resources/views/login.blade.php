@extends('main')
@section('con')
    <!-- partial:index.partial.html -->
    <div class="login-body">
        <div class="login-form">
            <div class="form-title">
                Login form
            </div>
            <div class="form-input">
                <label for="username">Username</label>
                <input type="text" id="username" value="{{ $username }}">
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" id="password" value="{{ $password }}">
            </div>
            <div class="captcha">
                <label for="captcha-input">Enter Captcha</label>
                <div class="preview"></div>
                <div class="captcha-form">
                    <input type="text" id="captcha-form" placeholder="Enter captcha text">
                    <button class="captcha-refresh">
                        <i class="fa fa-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="form-input">
                <button id="login-btn">Login</button>
            </div>
        </div>
    </div>



    <script>
        (function() {
            const fonts = ["cursive", "sans-serif", "serif", "monospace"];
            let captchaValue = "";

            function generateCaptcha() {
                let value = btoa(Math.random() * 1000000000);
                value = value.substr(0, 5 + Math.random() * 5);
                captchaValue = value;
            }

            function setCaptcha() {
                let html = captchaValue
                    .split("")
                    .map((char) => {
                        const rotate = -20 + Math.trunc(Math.random() * 30);
                        const font = Math.trunc(Math.random() * fonts.length);
                        return `<span
        style="
          transform:rotate(${rotate}deg);
          font-family:${fonts[font]}
        "
      >${char}</span>`;
                    })
                    .join("");
                document.querySelector(".login-form .captcha .preview").innerHTML = html;
            }

            function initCaptcha() {
                document
                    .querySelector(".login-form .captcha .captcha-refresh")
                    .addEventListener("click", function() {
                        generateCaptcha();
                        setCaptcha();
                    });
                generateCaptcha();
                setCaptcha();
            }
            initCaptcha();

            document
                .querySelector(".login-form #login-btn")
                .addEventListener("click", function() {
                    let inputCaptchaValue = document.querySelector(
                        ".login-form .captcha input"
                    ).value;
                    let username = document.querySelector("#username").value;
                    let password = document.querySelector("#password").value;
                    if (inputCaptchaValue === captchaValue && (username === "{{$username}}" && password === "{{$password}}")) {
                        swal("", "Logging In!", "success");
                    } else {
                        swal("Invalid captcha");
                    }
                });
        })();
    </script>
@endsection
