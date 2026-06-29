<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>madeliadesigns</title>

    <link rel="shortcut icon" href="https://madeliadesigns.com/images/brands/fo3dLCSUuNSadjsAJAGGdptbGXZIa7Jb5S-1778432057.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://madeliadesigns.com/css/k6XrbtP4vCfG.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="preload" as="style" href="https://madeliadesigns.com/build/assets/app-yVfNNLHX.css" />
    <link rel="stylesheet" href="https://madeliadesigns.com/build/assets/app-yVfNNLHX.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <style>
        /* ================================
   GLOBAL PREMIUM DARK THEME
   ================================ */

        /* Page background */
        body {
            background: radial-gradient(circle at top, #111216, #0a0b0d 60%, #000000);
            font-family: "Inter", "Poppins", sans-serif;
            color: #e6e6e9;
            overflow-x: hidden;
        }

        /* Center wrapper */
        #root {
            background: transparent !important;
        }

        /* Make guest page card glassmorphic */
        .authentication-card,
        .x-authentication-card,
        .card,
        .guest-card {
            background: rgba(20, 20, 25, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 22px;
            padding: 32px 38px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 45px rgba(0, 0, 0, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.06);
            animation: fadeInScale 0.45s ease-out;
        }

        /* Fade & Scale Animation */
        @keyframes fadeInScale {
            0% {
                opacity: 0;
                transform: scale(0.95);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Logo styling */
        .authentication-card img,
        .x-authentication-card img {
            filter: drop-shadow(0 0 12px rgba(255, 255, 255, 0.25));
            max-width: 180px;
        }

        /* Headings / Text */
        label,
        .text-xs,
        .text-sm,
        span,
        p {
            color: #cfd0d4 !important;
            font-weight: 500;
        }

        /* Form Inputs */
        input[type="email"],
        input[type="password"],
        input[type="text"],
        input[type="number"],
        input[type="search"],
        .x-input,
        input:not([type]) {
            background: linear-gradient(145deg, #1c1c22, #151517);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #ffffff;
            padding: 12px 15px;
            border-radius: 12px;
            width: 100%;
            transition: 0.25s ease;
        }

        input:focus,
        .x-input:focus {
            border-color: #7f7fff;
            box-shadow: 0 0 0 3px rgba(127, 127, 255, 0.25);
        }

        /* Placeholder */
        input::placeholder {
            color: #85858f;
        }

        /* Checkbox */
        input[type="checkbox"] {
            accent-color: #6262ff;
        }

        /* Buttons */
        button,
        .x-button,
        button[type="submit"] {
            background: linear-gradient(135deg, #4c4cff, #2020a0);
            border: none;
            padding: 12px 15px;
            width: 100%;
            font-weight: 600;
            color: #fff !important;
            border-radius: 12px;
            transition: 0.25s;
            box-shadow: 0 4px 25px rgba(90, 90, 255, 0.35);
        }

        button:hover,
        .x-button:hover {
            background: linear-gradient(135deg, #6a6aff, #3232c0);
            transform: translateY(-2px);
        }

        /* Links */
        a {
            color: #7d7dff;
            transition: 0.25s;
            font-weight: 500;
        }

        a:hover {
            color: #ffffff;
            text-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
        }

        /* Status Messages */
        .text-green-600 {
            color: #8dffbc !important;
        }

        /* Make the form spacing breathe */
        form>div {
            margin-bottom: 18px;
        }

        /* =================================================================
   BACKGROUND AMBIENT LIGHT / ORBS (optional premium effect)
   ================================================================= */
        body::before,
        body::after {
            content: "";
            position: fixed;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            filter: blur(150px);
            opacity: 0.28;
            z-index: -1;
        }

        body::before {
            top: -80px;
            left: -120px;
            background: #4c4cff;
        }

        body::after {
            bottom: -120px;
            right: -120px;
            background: #a737ff;
        }
    </style>

</head>

<body x-data class="is-header-blur">
    <div id="root" class="flex min-h-100vh grow bg-slate-50 dark:bg-navy-900">
        <main class="grid w-full grid-cols-1 grow place-items-center">
            <div class="w-full max-w-[26rem] p-4 sm:px-5">
    <div class="text-center">
        <img src="https://madeliadesigns.com/images/brands/I9uMBss51oRgkCJSSWlcQGTPz9r4vqvquN-1778432057.png" alt="Logo" style="margin: 0 auto;">
        <div class="mt-4">
          <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
            Welcome Back
          </h2>
          <p class="text-slate-400 dark:text-navy-300">
            Please sign in to continue
          </p>
        </div>
      </div>

    <div class="card mt-5 rounded-lg p-5 lg:p-7">
        <form id="admin-login-form">
            <div>
                <label class="block" for="email">Email</label>
                <span class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent block w-full mt-1" id="email" placeholder="Email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username">
                  </span>
            </div>

            <div class="mt-4">
                <label class="block" for="password">Password</label>
                <span class="relative mt-1.5 flex">
                <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent block w-full mt-1" placeholder="Password" id="password" type="password" name="password" required="required" autocomplete="current-password">
                </span>
            </div>
            
            <div class="flex items-center justify-between mt-4 space-x-2">
                <label class="inline-flex items-center space-x-2">
                 <input type="checkbox" class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent" id="remember_me" name="remember">
                  <span class="line-clamp-1">Remember me</span>
                </label>
                <a class="text-xs transition-colors text-slate-400 line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                    Forgot your password?
                </a>
            </div>
              
              <button id="login-btn" type="submit" class="mt-5 btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" style="background: linear-gradient(to bottom, #0077cc 0%, #004c99 100%)">
    Log in
</button>
                        
        </form>
    </div>
</div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="/js/config.js?v=5"></script>
    <script src="/js/auth.js?v=3"></script>
    <script>
        document.getElementById('admin-login-form')?.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = document.getElementById('login-btn');
            btn.innerText = 'Verifying...';
            btn.disabled = true;

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const res = await fetch(`${API_BASE_URL}/admin/login`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password })
                });

                if (res.ok) {
                    const data = await res.json();
                    Auth.adminLogin(data.user || {email: email}, data.token);
                    window.location.href = '/admin/dashboard';
                } else {
                    const err = await res.json();
                    alert(err.detail || 'Login Failed. Invalid Admin Credentials.');
                }
            } catch (err) {
                console.error(err);
                alert('Connection to backend failed.');
            } finally {
                btn.innerText = 'Log in';
                btn.disabled = false;
            }
        });
    </script>
</body>

</html>
