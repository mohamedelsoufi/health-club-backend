<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $icons = ['fas fa-thumbs-up', 'fas fa-trophy', 'fas fa-briefcase', 'fas fa-users'];
        $title_ar = ['مواقع رئيسية', 'مدربين مؤهلين', 'صالة رياضية عالية المجهزة', 'الإحساس بالانتماء للمجتمع'];
        $title_en = ['Prime Locations', 'Qualified Trainers', 'High Equipped Gym', 'A Sense Of Community '];
        $description_ar = ['<p>عندما نتوسع ، نختار فقط المواقع الرئيسية والأكثر أهمية لسهولة الوصول والرحابة.</p>',
            '<p>كن لائقا مع الأفضل! مدربونا المؤهلون موجودون هنا لإرشادك في كل خطوة على الطريق. من خطط التمارين الشخصية إلى التدريب الخبير ، سنساعدك على تحقيق أهداف لياقتك وتحويل جسمك.</p>',
            '<p>احصل على استعداد للتعرق! تم تجهيز مركز اللياقة البدنية لدينا بالكامل بأحدث الأجهزة والمعدات لمساعدتك في الوصول إلى أهداف لياقتك بشكل أسرع.</p>',
            '<p>لا يتعلق TFC فقط بجعلك في حالة جيدة وتحفيزك على بناء الجسم ، ولكن بدلاً من ذلك ، نفضل التركيز على حالة ذهنية صحية وتعزيز بيئة إيجابية بين الأعضاء والموظفين</p>'];
        $description_en = ['<p>Whenever we expand, we solely select the most prime and paramount locations for ease of accessibility and spaciousness.</p>',
            '<p>Get fit with the best! Our qualified trainers are here to guide you every step of the way. From personalized workout plans to expert coaching, we\'ll help you achieve your fitness goals and transform your body.</p>',
            '<p>Get ready to sweat! Our fitness center is fully equipped with the latest state-of-the-art machines and equipment to help you reach your fitness goals faster.</p>',
            '<p>TFC is not just about getting you in shape and motivating you to body-build, but rather, we prefer to focus on a healthy state of mind and fostering a positive environment between members and staff</p>'];

        for ($f = 0; $f < 4; $f++) {
            Feature::create([
                'ar'=>[
                    'title' => $title_ar[$f],
                    'description' => $description_ar[$f],
                ],
                'en'=>[
                    'title' => $title_en[$f],
                    'description' => $description_en[$f],
                ],
                'icon' => $icons[$f],
                'status' => 1
            ]);
        }
    }
}
