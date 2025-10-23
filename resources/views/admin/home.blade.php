@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

  {{-- =========================
       HERO (Admin)
  ========================== --}}
  <section class="relative bg-gray-900/90 text-white">
    <img src="{{ asset('jumbotron.jpg') }}" alt="Clinic lobby"
         class="absolute inset-0 h-[480px] w-full object-cover opacity-60">
    <div class="relative mx-auto max-w-7xl px-6 pt-20 pb-14 sm:pt-24 sm:pb-20">
      <div class="max-w-3xl">
        <p class="inline-flex items-center gap-2 rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-medium text-emerald-100 ring-1 ring-emerald-300/40">
          <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c4 0 10 2.5 10 8.5S16 22 12 22 2 18 2 10.5 8 2 12 2z"/>
          </svg>
          IBNESINA • Admin Dashboard
        </p>
        <h1 class="mt-4 font-title text-3xl font-extrabold leading-tight sm:text-4xl md:text-5xl">
          Operational Overview <span class="text-emerald-300">at a Glance</span>
        </h1>
        <p class="mt-3 text-sm sm:text-base text-slate-100">
          Kelola jadwal dokter, data pasien, dan penjadwalan klinik dengan standar rumah sakit internasional—aman, cepat, transparan.
        </p>

        <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center">
          <a href="{{ route('admin.jadwaldokter') }}"
             class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 px-5 py-3 text-sm font-medium text-white shadow-lg shadow-emerald-600/30 hover:translate-y-[-1px] hover:shadow-teal-600/40 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-400">
            Kelola Jadwal
            <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
          </a>
          <a href="{{ route('admin.pasien') }}"
             class="inline-flex items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-5 py-3 text-sm font-medium text-white backdrop-blur transition hover:bg-white/15">
            Data Pasien
          </a>
          <a href="{{ route('admin.pengobatan') }}"
             class="inline-flex items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-5 py-3 text-sm font-medium text-white backdrop-blur transition hover:bg-white/15">
            Penjadwalan
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- =========================
       KPI / TRUST METRICS
  ========================== --}}
  <section class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-8 sm:py-10">
      <dl class="grid grid-cols-2 gap-4 sm:grid-cols-4">
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center">
          <dt class="text-xs uppercase tracking-widest text-slate-600">Total Pasien</dt>
          <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">{{ $patientsCount ?? '—' }}</dd>
          <dd class="mt-1 text-xs text-slate-500">Semua pasien aktif</dd>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center">
          <dt class="text-xs uppercase tracking-widest text-slate-600">Dokter Aktif</dt>
          <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">{{ $activeDoctors ?? '—' }}</dd>
          <dd class="mt-1 text-xs text-slate-500">Siap menerima pasien</dd>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center">
          <dt class="text-xs uppercase tracking-widest text-slate-600">Janji Hari Ini</dt>
          <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">{{ $appointmentsToday ?? '—' }}</dd>
          <dd class="mt-1 text-xs text-slate-500">Semua layanan</dd>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center">
          <dt class="text-xs uppercase tracking-widest text-slate-600">Perawatan Bulan Ini</dt>
          <dd class="mt-2 font-title text-3xl font-extrabold text-slate-900">{{ $treatmentsThisMonth ?? '—' }}</dd>
          <dd class="mt-1 text-xs text-slate-500">Ringkasan klinik</dd>
        </div>
      </dl>
    </div>
  </section>

  {{-- =========================
       ADMIN SHORTCUTS
  ========================== --}}
  <section class="bg-gradient-to-b from-emerald-50 to-white">
    <div class="mx-auto max-w-7xl px-6 py-10 sm:py-14">
      <div class="grid gap-6 md:grid-cols-3">
        <a href="{{ route('admin.jadwaldokter') }}"
           class="group flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
          <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h10" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <div>
            <h3 class="text-base font-semibold text-slate-900">Jadwal Dokter</h3>
            <p class="mt-0.5 text-sm text-slate-600">Kelola shift, kuota, dan ruangan.</p>
          </div>
        </a>

        <a href="{{ route('admin.pasien') }}"
           class="group flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
          <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 14a4 4 0 1 0-8 0v4h8v-4zM12 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <div>
            <h3 class="text-base font-semibold text-slate-900">Data Pasien</h3>
            <p class="mt-0.5 text-sm text-slate-600">Profil, riwayat, dan berkas.</p>
          </div>
        </a>

        <a href="{{ route('admin.pengobatan') }}"
           class="group flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
          <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 6v12M6 12h12" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <div>
            <h3 class="text-base font-semibold text-slate-900">Penjadwalan</h3>
            <p class="mt-0.5 text-sm text-slate-600">Buat janji & kelola antrian.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  {{-- =========================
       TODAY SCHEDULE (optional data-aware)
  ========================== --}}
  <section class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-10 sm:py-14">
      <div class="flex items-end justify-between gap-4">
        <div>
          <h2 class="font-title text-2xl font-bold text-slate-900 sm:text-3xl">Jadwal Dokter • Hari Ini</h2>
          <p class="mt-1 text-sm text-slate-600">Ringkasan slot praktik & ketersediaan.</p>
        </div>
        <a href="{{ route('admin.jadwaldokter') }}"
           class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700">
          Lihat Semua
        </a>
      </div>

      @php
        // Jika controller belum mengirim data, fallback ke contoh
        $rows = (isset($todaySchedules) && count($todaySchedules)) ? $todaySchedules : [
          (object)['doctor'=>'drg. Alya Putri, Sp.Ort', 'service'=>'Orthodontics', 'time'=>'10:00–12:00', 'status'=>'Open'],
          (object)['doctor'=>'drg. Rafi Mahendra, Sp.KG', 'service'=>'Endodontics', 'time'=>'13:00–15:00', 'status'=>'Limited'],
          (object)['doctor'=>'drg. Nisa Karim, Sp.BM', 'service'=>'Surgery Consult', 'time'=>'15:30–17:00', 'status'=>'Full'],
        ];
      @endphp

      <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white">
        <div class="overflow-x-auto">
          <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-700">
              <tr>
                <th scope="col" class="px-4 py-3 text-left font-semibold">Dokter</th>
                <th scope="col" class="px-4 py-3 text-left font-semibold">Layanan</th>
                <th scope="col" class="px-4 py-3 text-left font-semibold">Waktu</th>
                <th scope="col" class="px-4 py-3 text-left font-semibold">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
              @foreach($rows as $r)
                <tr class="hover:bg-emerald-50/40">
                  <td class="px-4 py-3">{{ $r->doctor ?? $r->dokter ?? $r['doctor'] ?? $r['dokter'] ?? '-' }}</td>
                  <td class="px-4 py-3">{{ $r->service ?? $r->layanan ?? $r['service'] ?? $r['layanan'] ?? '-' }}</td>
                  <td class="px-4 py-3">{{ $r->time ?? ($r->start_time ?? '') . (isset($r->end_time) ? '–'.$r->end_time : '') }}</td>
                  <td class="px-4 py-3">
                    @php $status = strtolower($r->status ?? ''); @endphp
                    <span class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-medium
                      @if($status==='open') bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200
                      @elseif($status==='limited') bg-amber-100 text-amber-700 ring-1 ring-amber-200
                      @else bg-slate-100 text-slate-700 ring-1 ring-slate-200 @endif">
                      {{ $r->status ?? '—' }}
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        {{-- Footer action --}}
        <div class="flex items-center justify-between px-4 py-3 text-xs text-slate-500">
          <span>Perbarui jadwal untuk akurasi ketersediaan.</span>
          <a href="{{ route('admin.jadwaldokter') }}" class="inline-flex items-center gap-1 text-emerald-700 hover:text-emerald-800">
            Kelola Jadwal
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- =========================
       INFO CARDS (Optional)
  ========================== --}}
  <section class="bg-gradient-to-b from-white to-emerald-50">
    <div class="mx-auto max-w-7xl px-6 pb-16 sm:pb-20">
      <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="text-base font-semibold text-slate-900">Penjadwalan</h3>
          <p class="mt-1 text-sm text-slate-600">
            Pembagian waktu berbasis rencana kerja dengan pembagian pelaksanaan terperinci.
          </p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="text-base font-semibold text-slate-900">Konsultasi</h3>
          <p class="mt-1 text-sm text-slate-600">
            Interaksi personal antara klinik dan pasien untuk menentukan kebutuhan perawatan.
          </p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-6">
          <h3 class="text-base font-semibold text-slate-900">Pengobatan Gigi</h3>
          <p class="mt-1 text-sm text-slate-600">
            Tindakan menggunakan alat, teknik, dan bahan sesuai standar keselamatan.
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection
