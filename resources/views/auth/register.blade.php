<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register - DOLE Household Beneficiary Tracking System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|roboto:400,500,700" rel="stylesheet" />

        <style>
            :root {
                --color-white: #FFFFFF;
                --color-light-gray: #F5F7FA;
                --color-gray: #E5E7EB;
                --color-dark-gray: #6B7280;
                --color-dole-blue: #003366;
                --color-dole-blue-light: #004C99;
                --color-dole-blue-dark: #001F3F;
                --color-dole-gold: #FFB81C;
                --color-dole-gold-light: #FFD54F;
                --color-text: #1F2937;
                --color-text-light: #4B5563;
                --color-border: #D1D5DB;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                background-color: var(--color-light-gray);
                color: var(--color-text);
                min-height: 100vh;
                overflow-x: hidden;
            }

            /* Background Pattern */
            .bg-pattern {
                position: fixed;
                inset: 0;
                z-index: 0;
                opacity: 0.05;
                background-image: 
                    linear-gradient(135deg, var(--color-dole-blue) 0%, transparent 50%),
                    linear-gradient(225deg, var(--color-dole-gold) 0%, transparent 50%);
            }

            /* Header */
            header {
                position: relative;
                z-index: 10;
                background: var(--color-dole-blue);
                padding: 1rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            .logo-icon {
                width: 50px;
                height: 50px;
                background: var(--color-white);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                border: 2px solid var(--color-dole-gold);
            }

            .logo-icon svg {
                width: 28px;
                height: 28px;
                color: var(--color-dole-blue);
            }

            .logo-text {
                display: flex;
                flex-direction: column;
            }

            .logo-text .main {
                font-size: 1.125rem;
                font-weight: 700;
                color: var(--color-white);
                letter-spacing: 0.5px;
            }

            .logo-text .sub {
                font-size: 0.75rem;
                font-weight: 400;
                color: var(--color-dole-gold);
                letter-spacing: 0.3px;
            }

            nav {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            .nav-link {
                padding: 0.625rem 1.25rem;
                border-radius: 6px;
                font-size: 0.9375rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.2s ease;
                color: var(--color-white);
            }

            .nav-link:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .nav-link-primary {
                background: var(--color-dole-gold);
                color: var(--color-dole-blue);
            }

            .nav-link-primary:hover {
                background: var(--color-dole-gold-light);
            }

            /* Main Content */
            main {
                position: relative;
                z-index: 10;
                max-width: 1400px;
                margin: 0 auto;
                padding: 2rem;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: calc(100vh - 200px);
            }

            /* Register Card Styles */
            .register-card {
                max-width: 480px;
                width: 100%;
                background: white;
                border-radius: 12px;
                padding: 2.5rem;
                box-shadow: 
                    0 1px 3px rgba(0, 0, 0, 0.1),
                    0 4px 12px rgba(0, 0, 0, 0.08);
                border: 1px solid var(--color-border);
            }

            .register-header {
                text-align: center;
                margin-bottom: 2rem;
            }

            .register-icon {
                width: 64px;
                height: 64px;
                background: var(--color-dole-blue);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1.25rem;
                border: 2px solid var(--color-dole-gold);
            }

            .register-icon svg {
                width: 32px;
                height: 32px;
                color: white;
            }

            .register-header h3 {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 0.5rem;
            }

            .register-header p {
                color: var(--color-text-light);
                font-size: 0.9375rem;
            }

            .register-form {
                display: flex;
                flex-direction: column;
                gap: 1.25rem;
            }

            .form-group {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .form-group label {
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--color-text);
            }

            .input-wrapper {
                position: relative;
                display: flex;
                align-items: center;
            }

            .input-wrapper svg {
                position: absolute;
                left: 1rem;
                width: 20px;
                height: 20px;
                color: var(--color-dark-gray);
                pointer-events: none;
            }

            .input-wrapper input {
                width: 100%;
                padding: 0.875rem 1rem 0.875rem 3rem;
                border: 1px solid var(--color-border);
                border-radius: 6px;
                font-size: 0.9375rem;
                background: var(--color-white);
                color: var(--color-text);
                transition: all 0.2s ease;
            }

            .input-wrapper input::placeholder {
                color: var(--color-dark-gray);
            }

            .input-wrapper input:focus {
                outline: none;
                border-color: var(--color-dole-blue);
                box-shadow: 0 0 0 3px rgba(0, 51, 102, 0.1);
            }

            .input-wrapper input.is-invalid {
                border-color: #EF4444;
            }

            .error-message {
                color: #EF4444;
                font-size: 0.8125rem;
                margin-top: 0.25rem;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                padding: 1rem 2rem;
                border-radius: 12px;
                font-size: 1rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.3s ease;
                cursor: pointer;
                border: none;
            }

            .btn-primary {
                background: var(--color-dole-blue);
                color: white;
                box-shadow: 0 2px 8px rgba(0, 51, 102, 0.3);
            }

            .btn-primary:hover {
                background: var(--color-dole-blue-light);
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(0, 51, 102, 0.4);
            }

            .btn-full {
                width: 100%;
                margin-top: 0.5rem;
            }

            .register-footer {
                text-align: center;
                margin-top: 1.5rem;
                padding-top: 1.5rem;
                border-top: 1px solid var(--color-border);
                font-size: 0.9375rem;
                color: var(--color-text-light);
            }

            .register-footer a {
                color: var(--color-dole-blue);
                text-decoration: none;
                font-weight: 600;
                transition: color 0.2s ease;
            }

            .register-footer a:hover {
                text-decoration: underline;
            }

            /* Footer */
            footer {
                position: relative;
                z-index: 10;
                text-align: center;
                padding: 2rem;
                font-size: 0.875rem;
                color: var(--color-text-light);
                background: var(--color-white);
                border-top: 1px solid var(--color-border);
            }
        </style>
    </head>
    <body>
        <div class="bg-pattern"></div>

        <header>
            <div class="logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="main">DOLE</span>
                    <span class="sub">Household Beneficiary Tracking</span>
                </div>
            </div>
        </header>

        <main>
            <div class="register-card">
                <div class="register-header">
                    <div class="register-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                    </div>
                    <h3>Create Account</h3>
                    <p>Register to access the beneficiary tracking system</p>
                </div>
                
                <form method="POST" action="{{ route('register') }}" class="register-form">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <div class="input-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
                        </div>
                        @error('name')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                        </div>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            <input type="password" id="password" name="password" placeholder="••••••••" required>
                        </div>
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="input-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full">
                        Create Account
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Department of Labor and Employment (DOLE). All rights reserved.</p>
            <p style="margin-top: 0.5rem; font-size: 0.8125rem;">Household Beneficiary Tracking System - Official Government Portal</p>
        </footer>
    </body>
</html>
