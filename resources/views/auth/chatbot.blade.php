<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/image/chatbot.png') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/chatbot.css') }}">
    
    <title>chatbot</title>
</head>
        <style>
                .custom-hover {
                    background-color: #198754 !important; /* Normal Success Green */
                    border-color: #198754 !important;
                    transition: background-color 0.3s ease-in-out; /* Smooth transition */
                }

                .custom-hover:hover {
                    background-color:rgb(55, 255, 0) !important; /* Yellow-Green on Hover */
                    border-color:rgb(9, 174, 28) !important;
                    color: #fff !important; /* Keep text white */
                }
                #delayed-navbar {
                        opacity: 0;
                        transition: opacity 1s ease-in-out; /* Smooth fade-in effect */
                    }
                    .accountCard {
                            position: relative; /* Needed for absolute positioning inside */
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            padding: 20px;
                        }

                        .profile-btn, .exit-btn {
        font-weight: bold;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 150px; /* Ensures both buttons have the same width */
    }

    .profile-btn {
        background-color: #28a745; /* Green */
        color: white !important;
    }

    .profile-btn:hover {
        background-color: #218838; /* Darker Green */
    }

    .exit-btn {
        background-color: #dc3545; /* Red */
        color: white !important;
    }

    .exit-btn:hover {
        background-color: #c82333; /* Darker Red */
    }

    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px; /* Space between buttons */
        margin-top: 10px; /* Adjust margin if needed */
    }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.getElementById("delayed-navbar").style.opacity = "1";
    }, 7000); // 7-second delay before showing
});
        </script>

<body>
  
    <div class="container-fluid-mg-left-0">
            <nav id="delayed-navbar" class="navbar navbar-dark fixed-top fade" style="background: #000080; height: 30px; margin-right: 25px; margin-left: 25px; border-top-right-radius: 10px; border-top-left-radius: 10px; padding: 0px;">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <!-- Navbar Brand Before the Icon -->
                    <p class="navbar-brand me-2" style="font-size: 15px; padding-top: 0px; color: white;">Davao del Sur State College</p>

                    <!-- Toggler Icon -->
                            <button 
                                class="navbar-toggler btn btn-success active ms-auto text-white px-3 py-2 d-flex align-items-center gap-2 custom-hover" 
                                type="button" 
                                data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasDarkNavbar" 
                                aria-controls="offcanvasDarkNavbar" 
                                aria-label="Toggle navigation">
                                <i class="fas fa-robot me-2"></i>
                                
                            </button>
                        </div>
                    </nav>
                
        
        
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end text-white" style="background: grey" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome! <a href="{{ url('/profile') }}" class=" profile-link active" style="text-decoration:none; text-align:center; color: white;">
                    {{ Auth::user()->name }}
                     </a></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            /div>
                        <div class="offcanvas-body" style="align-items: center;">
                     <img class="SH-cover" src="{{ asset('assets/image/SH-cover.png') }}" alt="">
            <div class="accountCard justify-content-center">
    <div class="button-container"> 
        <!-- Go to Profile Button -->
            <a href="{{ url('/profile') }}" class="profile-btn">
                 <i class="fas fa-user me-2"></i> Go to Profile
                    </a>

                        <!-- Exit (Logout) Button -->
                            <form class="shutdown d-inline-block" method="POST" action="{{ route('logout') }}">
                                 @csrf
                                     <a class="exit-btn" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                          <i class="fas fa-sign-out-alt me-2"></i> Exit
                                     </a>
                            </form>
                         </div>
                    </div>
        
        
        <script src="https://cdn.botpress.cloud/webchat/v0/inject.js"></script>
        <script>
        window.botpressWebChat.init({
            "composerPlaceholder": "Chat with HanBot!",
            "botConversationDescription": "Student Handbook",
            "botId": "32c57a3b-13f8-4ef0-9925-aee7553a5d1e",
            "hostUrl": "https://cdn.botpress.cloud/webchat/v0",
            "messagingUrl": "https://messaging.botpress.cloud",
            "clientId": "32c57a3b-13f8-4ef0-9925-aee7553a5d1e",
            "webhookId": "38cd2fd0-a430-4d1b-a53a-01b40f2ce3fa",
            "lazySocket": true,
            "themeName": "galaxy",
            "botName": "HandBot",
            
            "frontendVersion": "v0",
            
            // Set the width of the WebChat container and layout to 100% (Full Screen)
            "containerWidth": "100%25",
            "layoutWidth": "100%25",
                "stylesheet": "https://webchat-styler-css.botpress.app/prod/code/c634d2c7-c54a-468e-bcf6-ca0c692e2a16/v44155/style.css",
            "enableConversationDeletion": true,
            // Hide the widget and disable animations
            "hideWidget": true,
            "disableAnimations": true,
        });
            // Opens up the Chatbot by default
            // This lets users start chatting with the Chatbot without needing to click any buttons or menus.
            window.botpressWebChat.onEvent(
                function () {
                    window.botpressWebChat.sendEvent({ type: "show" });
                },
                ["LIFECYCLE.LOADED"]
            );
        </script>
         </div>
    </div>
</body>
</html>