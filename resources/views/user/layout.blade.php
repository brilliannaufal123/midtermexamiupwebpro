<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')

  {{-- (Opsional) Samakan font dengan login/register --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Unbounded:wght@500;700;800&display=swap" rel="stylesheet">
  <style>
    body{ font-family:'Montserrat',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial }
    .font-title{ font-family:'Unbounded',ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial }
  </style>
</head>

<body class="bg-gray-100">

  {{-- ====== SITE NAVBAR (match login/register) ====== --}}
  <header class="sticky top-0 z-30 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex h-16 items-center justify-between gap-6">

        {{-- KIRI: Brand + Menu --}}
        <div class="flex items-center gap-6">
          {{-- Brand --}}
          <a href="{{ Route::has('home') ? route('home') : url('/') }}" class="flex items-center gap-2">
            <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-emerald-600 text-white">
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c4 0 10 2.5 10 8.5S16 22 12 22 2 18 2 10.5 8 2 12 2z"/>
              </svg>
            </span>
            <span class="font-title text-lg md:text-xl tracking-wide text-slate-900">
              <span class="text-emerald-600">IBNESINA</span> • Dental Clinic
            </span>
          </a>

          {{-- Primary Nav (desktop) --}}
          <nav class="hidden md:flex items-center gap-1" aria-label="Primary">
            <a href="{{ Route::has('home') ? route('home') : url('/') }}"
               class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:text-emerald-700 hover:bg-emerald-50">
              Home
            </a>
            <a href="{{ route('admin.jadwaldokter') }}"
               class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:text-emerald-700 hover:bg-emerald-50">
              Doctor
            </a>
            <a href="{{ route('admin.pasien') }}" 
               class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:text-emerald-700 hover:bg-emerald-50">
              Patient
            </a>
            <a href="{{ route('admin.pengobatan') }}
               class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:text-emerald-700 hover:bg-emerald-50">
              Schedule
            </a>
            <a href="#contact"
               class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:text-emerald-700 hover:bg-emerald-50">
              Contact
            </a>
          </nav>
        </div>

        {{-- KANAN: Actions --}}
        <div class="flex items-center gap-3">
          {{-- Actions (desktop) --}}
          <div class="hidden sm:flex items-center gap-2">
            <a href="{{ Route::has('login') ? route('login') : url('#') }}"
               class="inline-flex items-center justify-center rounded-xl border border-emerald-200 bg-white px-4 py-2 text-sm font-medium text-emerald-700 hover:bg-emerald-50">
              Sign In
            </a>
            <a href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}"
               class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 px-4 py-2 text-sm font-medium text-white shadow shadow-emerald-500/20 hover:shadow-teal-600/30">
              Create Account
            </a>
          </div>

          {{-- Ikon kontak (mobile) --}}
          <div class="flex sm:hidden items-center gap-1">
            <a href="tel:+6281374347841" class="inline-flex items-center justify-center rounded-md p-2 hover:bg-emerald-50" aria-label="Phone">
              <svg class="h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 0 0 2.25-2.25v-1.192a1.5 1.5 0 0 0-1.09-1.447l-3.721-1.06a1.5 1.5 0 0 0-1.49.38l-.766.766a12.06 12.06 0 0 1-5.372-5.372l.766-.766a1.5 1.5 0 0 0 .38-1.49L6.139 3.59A1.5 1.5 0 0 0 4.692 2.5H3.5A1.25 1.25 0 0 0 2.25 3.75V6.75z"/>
              </svg>
            </a>
            <a href="mailto:fitria@gmail.com" class="inline-flex items-center justify-center rounded-md p-2 hover:bg-emerald-50" aria-label="Email">
              <svg class="h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 7.5v9a2.25 2.25 0 0 1-2.25 2.25h-15A2.25 2.25 0 0 1 2.25 16.5v-9A2.25 2.25 0 0 1 4.5 5.25h15A2.25 2.25 0 0 1 21.75 7.5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="m3.375 6.75 7.294 5.099a2.25 2.25 0 0 0 2.662 0L20.625 6.75"/>
              </svg>
            </a>
          </div>

          {{-- Toggle (mobile) --}}
          <button id="nav-toggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-emerald-50" aria-label="Open menu" aria-expanded="false">
            <svg id="nav-icon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    {{-- Panel Mobile --}}
    <div id="mobile-nav" class="md:hidden hidden border-t border-slate-200 py-3">
      <nav class="flex flex-col gap-1" aria-label="Mobile">
        <a href="{{ Route::has('home') ? route('home') : url('/') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">Home</a>
        <a href="{{ route('admin.jadwaldokter') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">Doctor</a>
        <a href="{{ route('admin.pasien') }}"  class="rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">Patient</a>
        <a href="{{ route('admin.pengobatan') }}" class="rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">Schedule</a>
        <a href="#contact" class="rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">Contact</a>
        <div class="mt-2 flex items-center gap-2">
          <a href="{{ Route::has('login') ? route('login') : url('#') }}" class="flex-1 rounded-xl border border-emerald-200 bg-white px-3 py-2 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-50">Sign In</a>
          <a href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}" class="flex-1 rounded-xl bg-emerald-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-700">Create Account</a>
        </div>
      </nav>
    </div>
  </header>

  {{-- Toggle mobile menu --}}
  <script>
    (function(){
      const btn = document.getElementById('nav-toggle');
      const icon = document.getElementById('nav-icon');
      const panel = document.getElementById('mobile-nav');
      btn?.addEventListener('click', () => {
        const open = panel.classList.toggle('hidden') === false;
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        icon.innerHTML = open
          ? '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>'
          : '<path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"/>';
      });
    })();
  </script>

  @yield('content')

</body>
</html>
