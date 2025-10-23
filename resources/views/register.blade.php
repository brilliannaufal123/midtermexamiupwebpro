<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register • IBNESINA Dental Clinic</title>

  {{-- Tailwind (Vite) --}}
  @vite('resources/css/app.css')

  {{-- Fonts (Unbounded + Montserrat) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Unbounded:wght@500;700;800&display=swap" rel="stylesheet">

  <style>
    body{ font-family: 'Montserrat', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial }
    .font-title{ font-family: 'Unbounded', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-emerald-50 to-white text-slate-800 selection:bg-emerald-200">

  {{-- ====== AUTH NAVBAR (logo left, contact right) ====== --}}
  <header class="sticky top-0 z-10 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex h-16 items-center justify-between gap-6">

  {{-- Left: Logo/brand --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2">
          <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-emerald-600 text-white">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c4 0 10 2.5 10 8.5S16 22 12 22 2 18 2 10.5 8 2 12 2z"/>
            </svg>
          </span>
          <span class="font-title text-lg md:text-xl tracking-wide text-slate-900">
            <span class="text-emerald-600">IBNESINA</span> • Dental Clinic
          </span>
        </a>

  {{-- Right: Actions (Sign In / Create Account only) --}}
        <div class="flex items-center gap-4 text-sm text-slate-600">
          <div class="hidden sm:flex items-center gap-2">
            <a href="{{ Route::has('login') ? route('login') : url('#') }}"
               class="inline-flex items-center justify-center rounded-2xl border border-emerald-200 bg-white px-4 py-2 text-sm font-medium text-emerald-700 hover:bg-emerald-50">
              Sign In
            </a>
            <a href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}"
               class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 px-4 py-2 text-sm font-medium text-white shadow shadow-emerald-500/20 hover:shadow-teal-600/30">
              Create Account
            </a>
          </div>
          <div class="flex sm:hidden items-center gap-1">
            <a href="{{ Route::has('login') ? route('login') : url('#') }}" class="inline-flex items-center justify-center rounded-md p-2 hover:bg-emerald-50" aria-label="Sign In">
              <svg class="h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12h14M12 5v14" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}" class="inline-flex items-center justify-center rounded-md p-2 hover:bg-emerald-50" aria-label="Create Account">
              <svg class="h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- Decorative blobs --}}
  <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-24 -left-24 h-[28rem] w-[28rem] rounded-full blur-3xl opacity-40 bg-gradient-to-br from-emerald-200 via-teal-200 to-lime-200"></div>
    <div class="absolute -bottom-16 -right-16 h-[32rem] w-[32rem] rounded-full blur-3xl opacity-30 bg-gradient-to-tr from-teal-200 via-emerald-200 to-cyan-200"></div>
  </div>

  {{-- Flash messages --}}
  <div class="max-w-lg mx-auto px-6 mt-6 space-y-3" aria-live="polite" aria-atomic="true">
    @if (session('berhasil'))
      <div class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-800">
        <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
        <p><span class="font-semibold">Success:</span> {{ session('berhasil') }}</p>
      </div>
    @endif

    @if (session('gagal'))
      <div class="flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-rose-800">
        <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M21 12c0 4.971-4.029 9-9 9s-9-4.029-9-9 4.029-9 9-9 9 4.029 9 9z"/></svg>
        <p><span class="font-semibold">Error:</span> {{ session('gagal') }}</p>
      </div>
    @endif

    @if ($errors->any())
      <div class="rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-amber-800">
        <p class="font-semibold">Please check your inputs:</p>
        <ul class="mt-1 space-y-0.5 list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>

  {{-- ====== REGISTER CARD ====== --}}
  <main class="relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid place-items-center min-h-[78vh] py-10">
        <div class="w-full max-w-2xl">
          <div class="relative rounded-3xl border border-slate-200 bg-white shadow-xl">
            <div aria-hidden class="absolute -top-10 -right-10 h-40 w-40 rounded-full bg-gradient-to-br from-emerald-200 to-teal-200 blur-2xl"></div>

            <div class="p-8 sm:p-10 relative z-10">
              <h1 class="font-title text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900">Create a New Account</h1>
              <p class="mt-2 text-sm text-slate-600">Register to manage appointments, patient data, and clinic services.</p>

              <form method="POST" action="{{ route('register') }}" class="mt-8 grid gap-5 sm:grid-cols-2">
                @csrf

                {{-- NIK --}}
                <div class="sm:col-span-1">
                  <label for="nik" class="mb-2 block text-sm font-medium text-slate-700">NIK</label>
                  <input id="nik" name="nik" type="text" inputmode="numeric" pattern="[0-9]*"
                         class="block w-full rounded-2xl border border-slate-300 bg-white py-3 px-4 text-slate-900 placeholder-slate-400 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                         placeholder="16 digit NIK" value="{{ old('nik') }}" />
                  @error('nik') <p class="mt-1 text-xs text-rose-600">{{ $message }}</p> @enderror
                </div>

                {{-- Nama --}}
                <div class="sm:col-span-1">
                  <label for="name" class="mb-2 block text-sm font-medium text-slate-700">Full Name</label>
                  <input id="name" name="name" type="text" autocomplete="name"
                         class="block w-full rounded-2xl border border-slate-300 bg-white py-3 px-4 text-slate-900 placeholder-slate-400 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                         placeholder="Full name" value="{{ old('name') }}" />
                  @error('name') <p class="mt-1 text-xs text-rose-600">{{ $message }}</p> @enderror
                </div>

                {{-- Alamat --}}
                <div class="sm:col-span-2">
                  <label for="alamat" class="mb-2 block text-sm font-medium text-slate-700">Address</label>
                  <input id="alamat" name="alamat" type="text" autocomplete="street-address"
                         class="block w-full rounded-2xl border border-slate-300 bg-white py-3 px-4 text-slate-900 placeholder-slate-400 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                         placeholder="Full address" value="{{ old('alamat') }}" />
                  @error('alamat') <p class="mt-1 text-xs text-rose-600">{{ $message }}</p> @enderror
                </div>

                {{-- No. HP --}}
                <div class="sm:col-span-1">
                  <label for="no_hp" class="mb-2 block text-sm font-medium text-slate-700">Phone Number</label>
                  <input id="no_hp" name="no_hp" type="tel" inputmode="tel"
                         class="block w-full rounded-2xl border border-slate-300 bg-white py-3 px-4 text-slate-900 placeholder-slate-400 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                         placeholder="08xxxxxxxxxx" value="{{ old('no_hp') }}" />
                  @error('no_hp') <p class="mt-1 text-xs text-rose-600">{{ $message }}</p> @enderror
                </div>

                {{-- Password --}}
                <div class="sm:col-span-1">
                  <div class="flex items-center justify-between">
                    <label for="password" class="mb-2 block text-sm font-medium text-slate-700">Password</label>
                  </div>
                  <div class="relative">
          <input id="password" name="password" type="password" autocomplete="new-password" required
                           class="block w-full rounded-2xl border border-slate-300 bg-white py-3 pl-4 pr-12 text-slate-900 placeholder-slate-400 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
            placeholder="Minimum 8 characters" />
          <button type="button" id="toggle-pass" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500 hover:text-slate-700" aria-label="Show password">
                      <svg id="eye" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M1.5 12S5.25 4.5 12 4.5 22.5 12 22.5 12 18.75 19.5 12 19.5 1.5 12 1.5 12z"/>
                        <circle cx="12" cy="12" r="3.25"/>
                      </svg>
                    </button>
                  </div>
                  @error('password') <p class="mt-1 text-xs text-rose-600">{{ $message }}</p> @enderror
                </div>

                {{-- Actions --}}
                <div class="sm:col-span-2 flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-between">
                  <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-2xl border border-emerald-200 bg-white px-5 py-3 font-medium text-emerald-700 hover:bg-emerald-50">
                    Already have an account?
                  </a>
                  <div class="flex gap-3">
             
                    <button type="submit"
                            class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 px-5 py-3 font-medium text-white shadow-lg shadow-emerald-500/25 transition-all hover:shadow-teal-600/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500">
                      <span>Register</span>
                      <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <p class="mt-6 text-center text-xs text-slate-500">
            By registering, you agree to our
            <a href="#" class="underline decoration-emerald-400/60 hover:text-slate-700">Privacy Policy</a>
            &
            <a href="#" class="underline decoration-emerald-400/60 hover:text-slate-700">Terms of Service</a>.
          </p>
        </div>
      </div>
    </div>
  </main>

  {{-- Tiny JS: password toggle --}}
  <script>
    (function(){
      const btn = document.getElementById('toggle-pass');
      const input = document.getElementById('password');
      const eye = document.getElementById('eye');
      btn?.addEventListener('click', () => {
        const isPwd = input.getAttribute('type') === 'password';
        input.setAttribute('type', isPwd ? 'text' : 'password');
        eye.innerHTML = isPwd
          ? '<path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.585 10.585A3.25 3.25 0 0 0 12 15.25 3.25 3.25 0 0 0 15.25 12c0-.386-.07-.755-.198-1.095M9.04 5.66A10.73 10.73 0 0 1 12 4.5c6.75 0 10.5 7.5 10.5 7.5a19.67 19.67 0 0 1-4.01 5.017M6.664 7.283A19.84 19.84 0 0 0 1.5 12s3.75 7.5 10.5 7.5c1.58 0 3.02-.325 4.31-.88"/>'
          : '<path stroke-linecap="round" stroke-linejoin="round" d="M1.5 12S5.25 4.5 12 4.5 22.5 12 22.5 12 18.75 19.5 12 19.5 1.5 12 1.5 12z"/><circle cx="12" cy="12" r="3.25"/>';
      });
    })();
  </script>
</body>
</html>
