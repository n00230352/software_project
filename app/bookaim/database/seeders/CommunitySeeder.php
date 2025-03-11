<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;
use Carbon\Carbon;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Community::insert([
            ['name' => 'Bright Future Learning Center', 'info' => ' Bright Future Learning Center is a community-driven initiative in a rural area of Africa, providing books and educational resources to children. With donated books and a range of volunteer-led activities, it aims to support childrens reading skills and foster their creativity in an encouraging and enjoyable environment.', 'location' => '15 Umoja Crescent, Near Riruta Health Center, Kenya'],
            ['name' => 'Radiant Horizons Education Center', 'info' => ' Radiant Horizons Education Center is a community-based learning space in Accra, focused on providing educational opportunities for children. The center offers access to donated books, educational materials, and after-school programs that encourage literacy and creativity. Volunteers and local educators work together to support childrens academic development in an inclusive and positive setting.', 'location' => ' 48 Riverside Street, Next to City Park,
            Kibera, Ghana'],
            ['name' => 'Pathways Learning Center', 'info' => ' Pathways Learning Center is a community-oriented educational facility that provides children with access to books, educational resources, and engaging learning programs. The center focuses on developing reading, writing, and critical thinking skills through interactive activities and collaborative projects. It creates an inclusive and encouraging environment where children can explore new ideas and grow academically.', 'location' => '25 Maple Street, Near Riverside Market, Dar es Salaam, Tanzania'],
            ['name' => 'Hope Springs Learning Center', 'info' => 'Hope Springs Learning Center is a community-based educational facility that aims to inspire children through access to books, learning materials, and interactive programs. The center focuses on nurturing curiosity, creativity, and academic growth in a positive and supportive environment. Local educators and volunteers help guide children in building literacy skills and exploring new subjects with hands-on activities and collaborative learning.', 'location' => ' 19 Sunrise Avenue, Near Greenfield Community Hall, Lusaka, Zambia'],
            ['name' => 'Rising Stars Education Centre', 'info' => 'Rising Stars Education Centre is committed to providing children with the opportunity to unlock their full academic potential. The centre offers access to books, hands-on learning resources, and after-school programs designed to enhance literacy, creativity, and critical thinking. By fostering a supportive environment, the centre helps children develop skills that will guide them on their educational journey.', 'location' => '63 Blue Nile Street, Near City Hall, Kigali, Rwanda'],
            ['name' => 'The Learning Hub', 'info' => ' The Learning Hub is a community-based educational space designed to offer children access to a range of books, resources, and engaging programs. Focused on literacy, creativity, and learning through play, the centre aims to spark curiosity and a love for learning. Volunteers and local educators work together to create a positive environment where children can thrive and develop the skills needed for their future.', 'location' => ' 47 Palm Avenue, Opposite Riverside Park, Johannesburg, South Africa']
        ]);
    }
}
