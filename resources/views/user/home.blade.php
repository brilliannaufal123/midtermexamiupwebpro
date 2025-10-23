@extends('user.layout')

@section('title', 'Home')

@section('content')

    {{-- =========================
             HERO (Jumbotron)
    ========================== --}}
    <section class="relative bg-gray-900/90 text-white">
        <img src="{{ asset('jumbotron.jpg') }}" alt="Clinic lobby"
                 class="absolute inset-0 h-[680px] w-full object-cover opacity-60">
        <div class="relative mx-auto max-w-7xl px-6 pt-28 pb-24 sm:pb-36">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-medium text-emerald-100 ring-1 ring-emerald-300/40">
                    <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2c4 0 10 2.5 10 8.5S16 22 12 22 2 18 2 10.5 8 2 12 2z"/></svg>
                    IBNESINA • Dental Clinic
                </p>
                <h1 class="mt-5 font-title text-4xl font-extrabold leading-tight sm:text-5xl md:text-6xl">
                    Advanced Dental Care, <span class="text-emerald-300">Personalized</span> for You
                </h1>
                <p class="mt-4 text-base/7 text-slate-100 sm:text-lg">
                    From routine check-ups to cosmetic dentistry, our specialists deliver hospital-grade standards with a human touch—safety, clarity, and comfort in every visit.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                                <a
                                    href="{{ Route::has('admin.pengobatan') ? route('admin.pengobatan') : (Route::has('login') ? route('login') : url('#')) }}"
                        class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 px-6 py-3 text-sm font-medium text-white shadow-lg shadow-emerald-600/30 transition-all hover:translate-y-[-1px] hover:shadow-teal-600/40 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-400">
                        <span>Book Appointment</span>
                        <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                    </a>
                    <a
                        href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}"
                        class="inline-flex items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-6 py-3 text-sm font-medium text-white backdrop-blur transition hover:bg-white/15">
                        Create Account
                    </a>
                </div>

                <div class="mt-8 flex flex-wrap gap-5 text-xs text-slate-200">
                    <div class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        ISO-grade sterilization
                    </div>
                    <div class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v8m-4-4h8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Same-day procedures
                    </div>
                    <div class="inline-flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 6l-2 4-4 .5 3 3-.9 4 3.9-2 3.9 2-.9-4 3-3-4-.5-2-4z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Board-certified dentists
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================
             TRUST METRICS
    ========================== --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 sm:py-16">
            <dl class="grid grid-cols-2 gap-6 sm:grid-cols-4">
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-center">
                    <dt class="text-xs uppercase tracking-widest text-slate-600">Patients Served</dt>
                    <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">25K+</dd>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-center">
                    <dt class="text-xs uppercase tracking-widest text-slate-600">Avg. Rating</dt>
                    <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">4.9/5</dd>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-center">
                    <dt class="text-xs uppercase tracking-widest text-slate-600">Specialists</dt>
                    <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">12</dd>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-center">
                    <dt class="text-xs uppercase tracking-widest text-slate-600">Years of Care</dt>
                    <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">10+</dd>
                </div>
            </dl>
        </div>
    </section>

    {{-- =========================
             SERVICES GRID
    ========================== --}}
    <section class="relative bg-gradient-to-b from-emerald-50 to-white">
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-24 -left-24 h-80 w-80 rounded-full bg-emerald-200/60 blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 h-96 w-96 rounded-full bg-teal-200/50 blur-3xl"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-3xl font-bold text-slate-900 sm:text-4xl">Comprehensive Services</h2>
                <p class="mt-3 text-slate-600">Clear explanations, transparent pricing, and modern equipment across all treatments.</p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $services = [
                        ['title'=>'General Check-Up','desc'=>'Routine exams, scaling, and preventive care to keep your smile healthy.','icon'=>'M12 21c-4.97 0-9-3.582-9-8 0-4.418 4.03-8 9-8s9 3.582 9 8-4.03 8-9 8z'],
                        ['title'=>'Orthodontics','desc'=>'Braces & clear aligners customized for comfort and results.','icon'=>'M4 12h16M4 16h16M4 8h16'],
                        ['title'=>'Root Canal Therapy','desc'=>'Advanced endodontic treatment to save natural teeth with minimal pain.','icon'=>'M12 3v18M3 12h18'],
                        ['title'=>'Cosmetic Dentistry','desc'=>'Whitening, veneers, and smile makeovers—subtle to dramatic.','icon'=>'M12 17l-3.5 2.1 1-4.2L6 11l4.3-.4L12 7l1.7 3.6L18 11l-3.5 3.9 1 4.2z'],
                        ['title'=>'Pediatric Care','desc'=>'Gentle, kid-friendly dentistry with parent guidance and education.','icon'=>'M5 12l5 5L20 7'],
                        ['title'=>'Implants & Surgery','desc'=>'Computer-guided implants and minor oral surgery with fast recovery.','icon'=>'M5 12h14M12 5v14'],
                    ];
                @endphp

                @foreach($services as $s)
                    <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="{{ $s['icon'] }}" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-slate-900">{{ $s['title'] }}</h3>
                        <p class="mt-1 text-sm text-slate-600">{{ $s['desc'] }}</p>
                        <a href="{{ url('#') }}" class="mt-4 inline-flex items-center text-sm font-medium text-emerald-700 hover:text-emerald-800">
                            Learn more
                            <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================
             HOW IT WORKS
    ========================== --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-3xl font-bold text-slate-900 sm:text-4xl">Your Visit, Simplified</h2>
                <p class="mt-3 text-slate-600">Three clear steps—no surprises.</p>
            </div>

            <ol class="mt-10 grid gap-6 sm:grid-cols-3">
                @php
                    $steps = [
                        ['n'=>'01','title'=>'Book','desc'=>'Schedule online and pick your preferred dentist and time.'],
                        ['n'=>'02','title'=>'Consult','desc'=>'Arrive, relax, and discuss your goals with our specialist.'],
                        ['n'=>'03','title'=>'Treat','desc'=>'Get your treatment plan, pricing, and the care you deserve.'],
                    ];
                @endphp
                @foreach($steps as $st)
                    <li class="relative rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <span class="font-title text-4xl font-extrabold text-emerald-600">{{ $st['n'] }}</span>
                        <h3 class="mt-2 text-lg font-semibold text-slate-900">{{ $st['title'] }}</h3>
                        <p class="mt-1 text-sm text-slate-600">{{ $st['desc'] }}</p>
                    </li>
                @endforeach
            </ol>

            <div class="mt-8 text-center">
                        <a
                            href="{{ Route::has('user.pengobatan') ? route('user.pengobatan') : (Route::has('login') ? route('login') : url('#')) }}"
                    class="inline-flex items-center justify-center rounded-2xl bg-emerald-600 px-6 py-3 text-sm font-medium text-white shadow-lg hover:bg-emerald-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500">
                    Start Booking
                </a>
            </div>
        </div>
    </section>

    {{-- =========================
             TEAM (Dentists)
    ========================== --}}
    <section class="bg-gradient-to-b from-white to-emerald-50">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-3xl font-bold text-slate-900 sm:text-4xl">Meet Our Specialists</h2>
                <p class="mt-3 text-slate-600">Board-certified, research-active, and patient-first.</p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $docs = [
                        ['name'=>'Dr. Alya Putri, Sp.Ort','role'=>'Orthodontist','img'=>'images/doctor-1.jpg'],
                        ['name'=>'Dr. Rafi Mahendra, Sp.KG','role'=>'Endodontist','img'=>'images/doctor-2.jpg'],
                        ['name'=>'Dr. Nisa Karim, Sp.BM','role'=>'Oral & Maxillofacial','img'=>'images/doctor-3.jpg'],
                    ];
                @endphp

                @foreach($docs as $d)
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img src="{{ asset($d['img']) }}" alt="{{ $d['name'] }}" class="h-56 w-full object-cover">
                        <div class="p-5">
                            <h3 class="text-base font-semibold text-slate-900">{{ $d['name'] }}</h3>
                            <p class="mt-0.5 text-sm text-slate-600">{{ $d['role'] }}</p>
                            <div class="mt-3 flex items-center gap-2 text-xs text-slate-500">
                                <svg class="h-4 w-4 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Hospital privileges • Sedation certified
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================
             TESTIMONIALS
    ========================== --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-3xl font-bold text-slate-900 sm:text-4xl">Patients Say</h2>
                <p class="mt-3 text-slate-600">Real experiences from real people.</p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @php
                    $quotes = [
                        ['q'=>'Everything was explained clearly. Fast, painless, and spotless clinic.','a'=>'Nadine, Routine Care'],
                        ['q'=>'I wore aligners for 6 months—results beyond expectations!','a'=>'Agus, Orthodontics'],
                        ['q'=>'Root canal felt nothing like the horror stories—truly modern.','a'=>'Rico, Endodontics'],
                    ];
                @endphp
                @foreach($quotes as $q)
                    <figure class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <blockquote class="text-sm text-slate-700">“{{ $q['q'] }}”</blockquote>
                        <figcaption class="mt-3 text-xs font-medium text-slate-600">— {{ $q['a'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================
             INSURANCE / PARTNERS
    ========================== --}}
    <section class="bg-gradient-to-b from-emerald-50 to-white">
        <div class="mx-auto max-w-7xl px-6 py-12 sm:py-16">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-2xl font-bold text-slate-900 sm:text-3xl">Accepted Insurance & Partners</h2>
                <p class="mt-2 text-sm text-slate-600">We help you verify benefits and minimize out-of-pocket surprises.</p>
            </div>

            <div class="mt-8 grid grid-cols-2 items-center gap-6 sm:grid-cols-4">
                @foreach([1,2,3,4] as $i)
                    <div class="flex items-center justify-center rounded-xl border border-slate-200 bg-white p-6">
                        <img src="{{ asset('images/partner-'.$i.'.png') }}" alt="Partner {{ $i }}" class="h-8 opacity-80">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================
             CTA BAND
    ========================== --}}
    <section class="relative">
        <div class="mx-auto max-w-7xl px-6 py-12">
            <div class="relative overflow-hidden rounded-3xl border border-emerald-200 bg-gradient-to-r from-emerald-500 to-teal-600">
                <div class="absolute -right-12 -top-12 h-56 w-56 rounded-full bg-emerald-300/30 blur-3xl"></div>
                <div class="relative px-8 py-8 sm:px-10 sm:py-10">
                    <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-center">
                        <div>
                            <h3 class="font-title text-2xl font-semibold text-white">Ready for Your Smile Check?</h3>
                            <p class="mt-1 text-sm text-emerald-50">Register or sign in to view available slots and instant pricing.</p>
                        </div>
                        <div class="flex gap-3">
                            <a
                                href="{{ Route::has('login') ? route('login') : url('#') }}"
                                class="inline-flex items-center justify-center rounded-2xl bg-white px-5 py-3 text-sm font-medium text-emerald-700 hover:bg-emerald-50">
                                Sign In
                            </a>
                            <a
                                href="{{ Route::has('register.page') ? route('register.page') : (Route::has('register') ? route('register') : url('#')) }}"
                                class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-emerald-900/20 px-5 py-3 text-sm font-medium text-white ring-1 ring-white/30 hover:bg-emerald-900/30">
                                Get Started
                                <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================
             FAQ (Accessible, no JS)
    ========================== --}}
    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="font-title text-3xl font-bold text-slate-900 sm:text-4xl">FAQ</h2>
                <p class="mt-3 text-slate-600">Clear answers before your visit.</p>
            </div>

            <div class="mx-auto mt-8 max-w-3xl space-y-3">
                @php
                    $faqs = [
                        ['q'=>'Do you accept walk-ins?','a'=>'We recommend booking online to secure a slot. Limited walk-ins are accommodated based on availability.'],
                        ['q'=>'Is pricing transparent?','a'=>'Yes. You will receive an itemized estimate before treatment begins.'],
                        ['q'=>'Do treatments hurt?','a'=>'We use modern anesthesia and gentle techniques. Most patients report little to no discomfort.'],
                        ['q'=>'Can I pay cashless with insurance?','a'=>'Yes, for partnered insurers. Our team verifies benefits before treatment.'],
                    ];
                @endphp

                @foreach($faqs as $f)
                    <details class="group rounded-2xl border border-slate-200 bg-slate-50 p-5 open:bg-white open:shadow-sm">
                        <summary class="flex cursor-pointer list-none items-center justify-between">
                            <span class="text-sm font-semibold text-slate-900">{{ $f['q'] }}</span>
                            <span class="ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white text-slate-700 ring-1 ring-slate-200 transition group-open:rotate-45">
                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 6v12M6 12h12" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm text-slate-600">{{ $f['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================
             CONTACT & HOURS
    ========================== --}}
    <section class="bg-gradient-to-b from-white to-emerald-50">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">Contact & Location</h3>
                    <p class="mt-1 text-sm text-slate-600">IBNESINA Dental Clinic</p>
                    <p class="mt-1 text-sm text-slate-600">Jl. Contoh Sehat No. 10, Surabaya</p>
                    <div class="mt-4 space-y-2 text-sm">
                        <a href="tel:+6281374347841" class="inline-flex items-center gap-2 text-emerald-700 hover:text-emerald-800">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 0 0 2.25-2.25v-1.192a1.5 1.5 0 0 0-1.09-1.447l-3.721-1.06a1.5 1.5 0 0 0-1.49.38l-.766.766a12.06 12.06 0 0 1-5.372-5.372l.766-.766a1.5 1.5 0 0 0 .38-1.49L6.139 3.59A1.5 1.5 0 0 0 4.692 2.5H3.5A1.25 1.25 0 0 0 2.25 3.75V6.75z"/></svg>
                            +62 813-7434-7841
                        </a>
                        <a href="mailto:fitria@gmail.com" class="block text-emerald-700 hover:text-emerald-800">
                            fitria@gmail.com
                        </a>
                        <a href="https://maps.google.com/?q=IBNESINA Dental Clinic" target="_blank" rel="noopener"
                             class="block text-emerald-700 hover:text-emerald-800">
                            Open in Google Maps
                        </a>
                    </div>

                    <h4 class="mt-6 text-sm font-semibold text-slate-900">Opening Hours</h4>
                    <dl class="mt-2 grid grid-cols-2 gap-x-6 gap-y-1 text-sm text-slate-700">
                        <dt>Mon–Fri</dt><dd class="text-right">08:00–20:00</dd>
                        <dt>Sat</dt><dd class="text-right">09:00–18:00</dd>
                        <dt>Sun</dt><dd class="text-right">Closed</dd>
                    </dl>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-3">
                    {{-- Placeholder map/image for privacy & performance --}}
                    <img src="{{ asset('images/map-placeholder.png') }}" alt="Map to clinic"
                             class="h-[320px] w-full rounded-xl object-cover">
                </div>
            </div>
        </div>
    </section>

@endsection
