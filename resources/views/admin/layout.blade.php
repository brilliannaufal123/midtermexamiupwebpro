<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  {{-- Top bar: sosial media --}}
  <div class="bg-white border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex justify-end items-center">
        <div class="flex gap-4 py-2 text-slate-500">
          <a href="#" class="hover:text-slate-700" aria-label="Facebook">
            <x-css-facebook class="h-4 w-4" />
          </a>
          <a href="#" class="hover:text-slate-700" aria-label="Twitter">
            <x-css-twitter class="h-4 w-4" />
          </a>
          <a href="#" class="hover:text-slate-700" aria-label="Instagram">
            <x-css-instagram class="h-4 w-4" />
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- NAVBAR ADMIN --}}
  <header class="sticky top-0 z-30 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex h-16 items-center justify-between gap-6">

        {{-- Brand / Judul --}}
        <a href="{{ route('admin.home') }}" class="flex items-center gap-3">
          <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-emerald-600 text-white">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c4 0 10 2.5 10 8.5S16 22 12 22 2 18 2 10.5 8 2 12 2z"/>
            </svg>
          </span>
          <h1 class="text-lg md:text-xl font-semibold text-slate-800">
            <span class="text-emerald-600">IBNESINA</span> • Dental Clinic
          </h1>
        </a>

        {{-- Menu (desktop) --}}
        <nav class="hidden md:flex items-center gap-1" aria-label="Admin primary">
          <a href="{{ route('admin.home') }}"
             class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.home') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:text-emerald-700 hover:bg-emerald-50' }}">
            Home
          </a>
          <a href="{{ route('admin.jadwaldokter') }}"
             class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.jadwaldokter*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:text-emerald-700 hover:bg-emerald-50' }}">
            Doctor
          </a>
          <a href="{{ route('admin.pasien') }}"
             class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.pasien*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:text-emerald-700 hover:bg-emerald-50' }}">
            Patient
          </a>
          <a href="{{ route('admin.pengobatan') }}"
             class="inline-flex items-center rounded-xl px-3 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.pengobatan*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:text-emerald-700 hover:bg-emerald-50' }}">
            Schedule
          </a>

          {{-- Logout (desktop) --}}
          @if (Route::has('logout'))
            <form method="POST" action="{{ route('logout') }}" class="ml-2">
              @csrf
              <button type="submit"
                class="inline-flex items-center rounded-xl border border-rose-200 bg-white px-3 py-2 text-sm font-medium text-rose-700 hover:bg-rose-50">
                EXIT
              </button>
            </form>
          @else
            <a href="/logout"
               class="ml-2 inline-flex items-center rounded-xl border border-rose-200 bg-white px-3 py-2 text-sm font-medium text-rose-700 hover:bg-rose-50">
              EXIT
            </a>
          @endif
        </nav>

        {{-- Toggle (mobile) --}}
        <button id="nav-toggle"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-emerald-50"
                aria-label="Open menu" aria-expanded="false">
          <svg id="nav-icon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"/>
          </svg>
        </button>
      </div>
    </div>

    {{-- Panel Mobile --}}
    <div id="mobile-nav" class="md:hidden hidden border-t border-slate-200 py-3">
      <nav class="mx-auto max-w-7xl px-6 flex flex-col gap-1" aria-label="Mobile">
        <a href="{{ route('admin.home') }}"
           class="rounded-xl px-3 py-2 text-sm font-medium
                  {{ request()->routeIs('admin.home') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-700' }}">
          Home
        </a>
        <a href="{{ route('admin.jadwaldokter') }}"
           class="rounded-xl px-3 py-2 text-sm font-medium
                  {{ request()->routeIs('admin.jadwaldokter*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-700' }}">
          Doctor
        </a>
        <a href="{{ route('admin.pasien') }}"
           class="rounded-xl px-3 py-2 text-sm font-medium
                  {{ request()->routeIs('admin.pasien*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-700' }}">
          Patient
        </a>
        <a href="{{ route('admin.pengobatan') }}"
           class="rounded-xl px-3 py-2 text-sm font-medium
                  {{ request()->routeIs('admin.pengobatan*') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-700' }}">
          Schedule
        </a>

        {{-- Logout (mobile) --}}
        <div class="mt-2">
          @if (Route::has('logout'))
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit"
                      class="w-full rounded-xl border border-rose-200 bg-white px-3 py-2 text-sm font-medium text-rose-700 hover:bg-rose-50">
                EXIT
              </button>
            </form>
          @else
            <a href="/logout"
               class="block w-full rounded-xl border border-rose-200 bg-white px-3 py-2 text-center text-sm font-medium text-rose-700 hover:bg-rose-50">
              EXIT
            </a>
          @endif
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
