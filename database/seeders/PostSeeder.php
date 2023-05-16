<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::create([
            'id_user' => 1,
            'sampul' => 'gambar1.jpg',
            'post_title' => 'Gojo VS Sukuna : Pertarungan anti klimaks?',
            'post_subtitle' => 'Final battle yang telah ditunggu sama banyak orang selama
                                ini untuk membuktikan siapa yang terkuat antara Gojo atau Sukuna?',
            'konten' => '24 Desember, pertarungan antara Penyihir terkuat saat ini Satoru Gojo dengan skin Toji
                        dan Kutukan terkuat saat ini Ryomen Sukuna dengan skin Megumi. Final battle yang telah
                        ditunggu sama banyak orang selama ini untuk membuktikan siapa yang terkuat antara Gojo atau Sukuna?

                        Gege Akutami kayaknya tahu akan hal yang ramai di sosial media dengan itu Gege membuat panel Mei Mei
                        lagi buat Judi sabung Gojo Sukuna. Soalnya siapa yang nggak nungguin battle dua orang ini? Walaupun
                        pengennya Sukuna skin Yuji tapi skin Megumi tidak buruk juga. Ayo kalian pasang siapa nih, Gojo apa Sukuna?

                        Buruan pasang di situs slot Meimei.',
        ]);
    }
}
