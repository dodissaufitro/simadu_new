<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        SIMADU SARPRAS V
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: #1a202c;
            /* Tailwind's gray-900 */
        }

        #container {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        #bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        #content {
            position: absolute;
            inset: 0;
            z-index: 10;
            color: white;
            padding: 1.5rem 1.5rem 5rem 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            font-size: 1.125rem;
            /* 18px */
            line-height: 1.4;
        }

        #content p {
            padding: 10px;
            background: #ffff;
            text-align: justify;
            color: black;
            border-radius: 10px;
            box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
            font-size: 2rem;
            max-width: 100%;
            margin-bottom: 6rem;
            background-color: rgba(255, 255, 255, 0.904);
            backdrop-filter: blur(100px);
            -webkit-backdrop-filter: blur(50px);
        }

        #daam-text {
            position: absolute;
            top: 4rem;
            left: 5rem;
            color: #fbbf24;
            /* yellow-400 */
            font-weight: 800;
            font-size: 4rem;
            line-height: 1;
            user-select: none;
            font-family: 'Montserrat', sans-serif;
            z-index: 11;
        }

        #hex-shape {
            position: absolute;
            top: 3.5rem;
            left: 1rem;
            width: 10rem;
            height: 5.8rem;
            transform: rotate(-15deg);
            z-index: 9;
        }

        #login-btn {
            position: absolute;
            bottom: 4rem;
            left: 3rem;
            background-color: #06b6d4;
            /* cyan-400 */
            border-radius: 5px;
            color: black;
            font-weight: 700;
            font-size: 1.25rem;
            padding: 0.5rem 1.5rem;
            border-radius: 0.125rem;
            cursor: pointer;
            z-index: 11;
            transition: background-color 0.3s ease;
        }

        #login-btn:hover {
            background-color: #0e7490;
            /* darker cyan */
            color: white;
        }

        #logos-left {
            position: absolute;
            top: 1rem;
            left: 1rem;
            display: flex;
            gap: 0.75rem;
            z-index: 11;
            align-items: center;
        }

        #logos-left img {
            height: 3.5rem;
            width: auto;
            object-fit: contain;
        }

        #logo-right {
            position: absolute;
            top: 1rem;
            right: 1rem;
            height: 3.5rem;
            width: 3.5rem;
            object-fit: contain;
            z-index: 11;
        }

        @media (max-width: 640px) {
            #content {
                font-size: 1rem;
                /* 16px */
                padding: 1rem 1rem 4rem 1rem;
            }

            #content p {
                max-width: 100%;
                margin-bottom: 3rem;
                padding: 5px;
                background: #ffff;
                text-align: justify;
                font-size: 1rem;
            }

            #daam-text {
                font-size: 2.5rem;
                top: 3rem;
                left: 1.5rem;
            }

            #hex-shape {
                width: 7.5rem;
                height: 4.375rem;
                top: 2rem;
                left: 0.75rem;
            }

            #login-btn {
                width: 90%;
                font-size: 1rem;
                padding: 0.4rem 1rem;
                bottom: 1rem;
                left: 1rem;
            }

            #logos-left img {
                height: 2.5rem;
            }

            #logo-right {
                height: 2.5rem;
                width: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <img alt="Modern apartment building with clean lines and blue sky background" id="bg-image"
            src="{{ asset('logo/bg_rusun.jpg') }}" />
        <div id="logos-left">
            <img alt="Logo Jakarta: official Jakarta city emblem in blue and yellow"
                src="{{ asset('logo/logo_with_bg.jpg') }}" />
            <img alt="Logo house icon in orange circle"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Coat_of_arms_of_Jakarta.svg/1200px-Coat_of_arms_of_Jakarta.svg.png" />
        </div>
        <img alt="Logo black and white rectangular logo with text" id="logo-right"
            src="{{ asset('logo/logo_with_bg.jpg') }}" />

        <div id="content">
            <p class="">
                Selamat datang pada Web SIMADU SARPRAS V. Web ini dikembangkan untuk memberikan kemudahan dan efisiensi
                bagi penghuni rumah susun dan pengelola rumah susun dalam menangani masalah pemeliharaan sarana dan
                prasarana yang ada di lingkungan rumah susun.
            </p>
        </div>
        <a href="/admin" id="login-btn" >LOGIN</a>
    </div>
</body>

</html>
