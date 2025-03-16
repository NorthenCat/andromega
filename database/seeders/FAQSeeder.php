<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apa itu jasa konsultan IT?',
                'answer' => 'Jasa konsultan IT adalah layanan profesional yang membantu perusahaan dalam merencanakan, mengimplementasikan, dan mengoptimalkan infrastruktur teknologi informasi. Kami memberikan solusi untuk masalah IT dan membantu meningkatkan efisiensi operasional perusahaan Anda.'
            ],
            [
                'question' => 'Mengapa perusahaan membutuhkan konsultan IT?',
                'answer' => 'Konsultan IT memberikan keahlian teknis yang mungkin tidak dimiliki secara internal, membantu mengoptimalkan biaya IT, meningkatkan keamanan data, dan memastikan perusahaan menggunakan teknologi yang paling efektif untuk mencapai tujuan bisnis.'
            ],
            [
                'question' => 'Layanan apa saja yang ditawarkan oleh konsultan IT?',
                'answer' => 'Kami menawarkan berbagai layanan seperti audit infrastruktur IT, perencanaan strategis teknologi, implementasi sistem baru, keamanan siber, migrasi ke cloud, pengembangan aplikasi, dan dukungan teknis berkelanjutan.'
            ],
            [
                'question' => 'Bagaimana cara kerja konsultan IT?',
                'answer' => 'Kami memulai dengan memahami kebutuhan bisnis Anda, melakukan penilaian terhadap infrastruktur IT yang ada, mengembangkan strategi dan solusi yang sesuai, mengimplementasikan solusi tersebut, dan memberikan dukungan berkelanjutan.'
            ],
            [
                'question' => 'Berapa biaya untuk jasa konsultan IT?',
                'answer' => 'Biaya bervariasi tergantung pada ruang lingkup proyek, kompleksitas, dan durasi. Kami menawarkan model harga fleksibel termasuk pembayaran per proyek, retainer bulanan, atau kontrak jangka panjang. Hubungi kami untuk mendapatkan penawaran yang disesuaikan.'
            ],
            [
                'question' => 'Berapa lama waktu yang diperlukan untuk melihat hasil dari konsultasi IT?',
                'answer' => 'Hal ini bervariasi berdasarkan jenis proyek. Beberapa hasil seperti peningkatan keamanan dapat terlihat segera, sementara transformasi digital yang lebih besar mungkin membutuhkan waktu 3-12 bulan untuk melihat manfaat penuhnya.'
            ],
            [
                'question' => 'Apakah konsultan IT dapat bekerja dengan bisnis kecil hingga menengah?',
                'answer' => 'Ya, kami menyediakan layanan konsultasi IT untuk bisnis dari semua ukuran. Solusi kami dapat disesuaikan untuk memenuhi kebutuhan dan anggaran bisnis kecil hingga menengah.'
            ],
            [
                'question' => 'Apa perbedaan antara layanan IT terkelola dan konsultasi IT?',
                'answer' => 'Layanan IT terkelola fokus pada operasi IT sehari-hari seperti pemantauan jaringan dan dukungan pengguna. Konsultasi IT lebih strategis, membantu perusahaan membuat keputusan jangka panjang tentang infrastruktur dan strategi IT mereka.'
            ],
            [
                'question' => 'Bagaimana konsultan IT membantu dalam transformasi digital?',
                'answer' => 'Kami membantu merencanakan dan mengimplementasikan strategi transformasi digital, mengotomatisasi proses, mengembangkan solusi digital baru, dan memastikan integrasi yang lancar dengan sistem yang ada untuk meningkatkan efisiensi dan daya saing.'
            ],
            [
                'question' => 'Apakah konsultan IT menyediakan pelatihan untuk staf?',
                'answer' => 'Ya, kami menawarkan program pelatihan komprehensif untuk memastikan tim Anda dapat menggunakan teknologi baru secara efektif. Pelatihan dapat disesuaikan berdasarkan tingkat keterampilan dan peran spesifik dalam organisasi.'
            ],
            [
                'question' => 'Bagaimana cara memilih konsultan IT yang tepat?',
                'answer' => 'Pertimbangkan pengalaman mereka di industri Anda, kualifikasi teknis, referensi dari klien sebelumnya, kemampuan komunikasi, dan apakah mereka memahami tujuan bisnis Anda. Penting juga untuk mencari konsultan yang dapat menjelaskan konsep teknis dengan cara yang mudah dipahami.'
            ],
            [
                'question' => 'Apakah data perusahaan kami aman saat bekerja dengan konsultan IT?',
                'answer' => 'Ya, kami mengutamakan keamanan data dan mematuhi standar keamanan industri. Kami menandatangani perjanjian kerahasiaan (NDA) dan menerapkan protokol keamanan ketat untuk melindungi informasi sensitif klien.'
            ],
            [
                'question' => 'Apa manfaat dari menggunakan layanan cloud yang direkomendasikan oleh konsultan IT?',
                'answer' => 'Layanan cloud menawarkan skalabilitas, pengurangan biaya infrastruktur, akses dari mana saja, pemulihan bencana yang ditingkatkan, dan kemampuan untuk tetap terbarui dengan teknologi terbaru. Kami membantu memilih dan mengimplementasikan solusi cloud yang tepat untuk kebutuhan bisnis Anda.'
            ],
            [
                'question' => 'Bagaimana konsultan IT membantu meningkatkan keamanan siber?',
                'answer' => 'Kami melakukan penilaian kerentanan, mengimplementasikan solusi keamanan terbaik, mengembangkan kebijakan keamanan, melatih staf tentang praktik terbaik, dan menyediakan pemantauan berkelanjutan untuk mendeteksi dan merespons ancaman keamanan.'
            ],
            [
                'question' => 'Apakah konsultan IT dapat membantu dalam pemulihan data setelah kehilangan data atau serangan?',
                'answer' => 'Ya, kami menyediakan layanan pemulihan data dan memiliki protokol respons insiden untuk membantu bisnis memulihkan data dan operasi mereka setelah kehilangan data atau serangan siber. Kami juga membantu mengembangkan rencana cadangan dan pemulihan bencana.'
            ]
        ];

        // Insert all FAQs into database
        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
