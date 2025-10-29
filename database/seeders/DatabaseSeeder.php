<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder utama di sini.
     */
    public function run(): void
    {
        // ✅ Panggil seeder lain biar otomatis jalan juga
        $this->call([
            ProjectSeeder::class,
            BlogSeeder::class,
        ]);

        // ✅ Isi data dummy untuk Experience
        Experience::insert([
            [
                'title' => 'Coordinator of Advice & Mentoring Department',
                'company' => 'O-Week 2025',
                'description' => 'Mengatur dan memimpin tim mentoring untuk membantu mahasiswa baru beradaptasi.',
                'start_date' => '2024-11-08',
                'end_date' => '2025-08-19',
                'icon' => 'fa-users',
            ],
            [
                'title' => 'Event Division',
                'company' => 'Infinity',
                'description' => 'Membuat konsep acara dan mengelola pelaksanaan event mantai.',
                'start_date' => '2024-11-22',
                'end_date' => '2025-12-20',
                'icon' => 'fa-calendar-alt',
            ],
            [
                'title' => 'Student Academic',
                'company' => 'Informatics Student Union',
                'description' => 'Membantu mahasiswa dalam kegiatan akademik dan pengembangan diri.',
                'start_date' => '2024-09-19',
                'end_date' => '2025-07-20',
                'icon' => 'fa-graduation-cap',
            ],
            [
                'title' => 'Coordinator of Event Division',
                'company' => 'Faith Diversity Unity Buddha',
                'description' => 'Membuat konsep acara dan mengelola pelaksanaan event.',
                'start_date' => '2025-07-30',
                'end_date' => '2026-06-01',
                'icon' => 'fa-lightbulb',
            ],
            [
                'title' => 'Event Division',
                'company' => 'Entrance 3.0',
                'description' => 'Mendesain konsep kompetisi akademik dan mengatur alur acara.',
                'start_date' => '2024-09-01',
                'end_date' => '2025-06-30',
                'icon' => 'fa-briefcase',
            ],
            [
                'title' => 'Event Coordinator',
                'company' => 'Google Developer Groups UC',
                'description' => 'Membuat dan mengelola acara untuk kegiatan Google Developer Groups.',
                'start_date' => '2025-09-15',
                'end_date' => '2026-06-30',
                'icon' => 'fa-code',
            ],
            [
                'title' => 'Treasurer',
                'company' => 'Informatics Student Union',
                'description' => 'Mengeksekusi anggaran dan mengelola keuangan organisasi.',
                'start_date' => '2025-06-20',
                'end_date' => '2026-06-20',
                'icon' => 'fa-wallet',
            ],
            [
                'title' => 'Secretary',
                'company' => 'O-Week 2026',
                'description' => 'Mengelola administrasi dan dokumentasi kegiatan O-Week 2026.',
                'start_date' => '2025-09-25',
                'end_date' => '2026-08-20',
                'icon' => 'fa-file-alt',
            ],
        ]);
    }
}
