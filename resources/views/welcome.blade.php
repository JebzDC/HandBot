<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                window.location.href = '{{ route("login") }}';
            }, 3000); // 3000ms = 3 seconds
        });
    </script>
</head>
<body>
<x-guest-layout>
    <style>
        .links {
            position: relative;
            text-align: center;
            font-weight: bold;
            font-size: .8rem;
            margin-bottom:10px;
        }
        a {
            color: #800000;
            border: none;
            background-color: transparent;
            font-size: .8rem;
            font-weight: bold;
            margin-top: 0px;
            text-decoration: none;
            padding-top: 0%;
        }
        a:hover {
            text-decoration: underline;
            color: #000080;
            cursor: pointer;
        }

        .double-border {
            position: relative;
            padding-bottom: 15px;
        }

        .double-border::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 15px;
            background: linear-gradient(to right, navy 50%, maroon 50%);
        }
    </style>

    <div class="double-border">
        <form method="POST" action="">
        <img src="{{ asset('assets/image/SH-cover.png') }}" alt="" class="signup_SH2 img-fluid card-img-overlay">
        
        </form>
    </div>

    <footer class="flex items-center justify-center text-sm text-black dark:text-white/70" style="margin-top:15px">
        <img src="{{ asset('assets/image/dssc_logo.png') }}" alt="Icon" style="height:30px; margin-right:10px;">
        <h1>DAVAO DEL SUR STATE COLLEGE 2024</h1>
    </footer>
</x-guest-layout>
</body>
</html>


