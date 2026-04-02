<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Advocate System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .legal-navy { background-color: #0F172A; }
        .gold-accent { color: #B45309; }
        .gold-bg { background: linear-gradient(135deg, #B45309 0%, #D97706 100%); }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-0 md:p-6">

    <div class="flex flex-col md:flex-row w-full max-w-[1100px] min-h-[700px] bg-white md:rounded-2xl md:shadow-2xl overflow-hidden">
        
        <div class="hidden md:flex md:w-1/2 legal-navy p-16 flex-col justify-between text-white relative">
            <div class="z-10">
                <div class="flex items-center gap-3 mb-12">
                    <div class="w-10 h-10 gold-bg rounded-lg flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">Advocate<span class="text-amber-500">System</span></span>
                </div>
                <h1 class="text-4xl font-bold leading-tight mb-6">Securing the future of Indian Jurisprudence.</h1>
                <p class="text-slate-400 text-lg leading-relaxed">Integrated GST billing, automated case tracking, and AI-powered document generation in one secure vault.</p>
            </div>

            <div class="z-10 space-y-8">
                <div class="flex items-center gap-4 text-sm text-slate-300">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-slate-900" src="https://ui-avatars.com/api/?name=RS&background=B45309&color=fff" alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-slate-900" src="https://ui-avatars.com/api/?name=AK&background=0F172A&color=fff" alt="User">
                    </div>
                    <span>Joined by 2,000+ Advocates this month</span>
                </div>
                <div class="pt-6 border-t border-white/10 flex items-center justify-between text-xs text-slate-500 uppercase tracking-widest">
                    <span>ISO 27001 Certified</span>
                    <span>256-bit Encryption</span>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-20 flex flex-col justify-center">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-slate-900">Sign In</h2>
                <p class="text-slate-500 mt-2">Access your firm's dashboard</p>
            </div>

            <div class="flex gap-8 border-b border-slate-100 mb-8">
                <button onclick="toggleAuth('email')" id="emailTab" class="pb-4 text-sm font-bold border-b-2 border-slate-900 text-slate-900 transition-all">Email Address</button>
                <button onclick="toggleAuth('otp')" id="otpTab" class="pb-4 text-sm font-medium text-slate-400 hover:text-slate-600 transition-all">Mobile OTP</button>
            </div>

            <form method="POST" action="?controller=auth&action=loginPost" class="space-y-6">
                <div id="inputField">
                    <label class="block text-sm font-semibold text-slate-700 mb-2" for="credential">Email Address</label>
                    <input type="email" name="email" id="credential" required
                        class="w-full px-4 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all placeholder:text-slate-400 bg-slate-50 focus:bg-white"
                        placeholder="advocate@highcourt.in">
                </div>

                <div id="passwordField">
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-semibold text-slate-700" for="password">Password</label>
                        <a href="#" class="text-sm font-bold text-amber-700 hover:text-amber-800">Forgot?</a>
                    </div>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-slate-900 focus:border-transparent transition-all placeholder:text-slate-400 bg-slate-50 focus:bg-white"
                            placeholder="••••••••">
                        <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="w-4 h-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900">
                    <label for="remember" class="ml-2 text-sm text-slate-600">Remember this firm</label>
                </div>

                <button type="submit" 
                    class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-4 rounded-xl transition-all shadow-lg active:scale-[0.99] flex items-center justify-center gap-2">
                    Login to System
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </form>

            <div class="mt-8 pt-8 border-t border-slate-100">
                <button class="w-full flex items-center justify-center gap-3 px-4 py-3.5 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors font-semibold text-slate-700">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5" alt="Google">
                    Continue with Google Workspace
                </button>
            </div>

            <p class="text-center mt-8 text-slate-500 text-sm">
                New to the system? <a href="#" class="text-slate-900 font-bold hover:underline">Create an Account</a>
            </p>
        </div>
    </div>

    <script>
        function toggleAuth(type) {
            const input = document.getElementById('credential');
            const label = document.querySelector('label[for="credential"]');
            const passField = document.getElementById('passwordField');
            const emailTab = document.getElementById('emailTab');
            const otpTab = document.getElementById('otpTab');

            if (type === 'otp') {
                label.innerText = 'Mobile Number';
                input.type = 'tel';
                input.name = 'mobile';
                input.placeholder = '+91 XXXXX XXXXX';
                passField.style.display = 'none';
                otpTab.className = 'pb-4 text-sm font-bold border-b-2 border-slate-900 text-slate-900 transition-all';
                emailTab.className = 'pb-4 text-sm font-medium text-slate-400 hover:text-slate-600 transition-all';
            } else {
                label.innerText = 'Email Address';
                input.type = 'email';
                input.name = 'email';
                input.placeholder = 'advocate@highcourt.in';
                passField.style.display = 'block';
                emailTab.className = 'pb-4 text-sm font-bold border-b-2 border-slate-900 text-slate-900 transition-all';
                otpTab.className = 'pb-4 text-sm font-medium text-slate-400 hover:text-slate-600 transition-all';
            }
        }
    </script>
</body>
</html>