<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        //  Home pages
        $join_member_now = Page::create([
            'identifier' => 'join_member_now',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 1,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>انضم الآن!</p><p>احصل على خصم 40٪</p>',
                'description' => '<p>احصل على عرضنا الفلاش المتاح الآن ليومين فقط !! اشترك في عضويتنا لمدة 6 أشهر واحصل على 3 أشهر إضافية مجانًا! .</p>',
            ],
            'en' => [
                'title' => '<p>JOIN MEMBER NOW! <br>GET 40% OFF</p>',
                'description' => '<p>Catch our flash offer now available for only two days!! Subscribe to our 6 months membership and get an additional 3 months for free! .</p>',
            ],
        ]);
        $join_member_now->file()->create([
            'path' => 'seeder/page1.jpg',
            'type' => 'image'
        ]);

        $opening_hours = Page::create([
            'identifier' => 'opening_hours',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 1,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>ساعات العمل!</p>',
                'description' => '<ul>
	<li>أيام العمل :&nbsp; كل يوم</li>
	<li>من&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 06:00 صباحاً</li>
	<li>إلى&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 02:00 صباحاً</li>
</ul>',
            ],
            'en' => [
                'title' => '<p>OPENING HOURS!</p>',
                'description' => '<ul>
	<li>WEEKDAYS :&nbsp; Everyday</li>
	<li>FROM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 06:00 AM</li>
	<li>TO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 02:00 AM</li>
</ul>',
            ],
        ]);
        $opening_hours->file()->create([
            'path' => 'seeder/page1.jpg',
            'type' => 'image'
        ]);

        $about_our_gym = Page::create([
            'identifier' => 'about_our_gym',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 1,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>عن نادينا</p>',
                'description' => '<p>مرحبًا بكم في صالة الألعاب الرياضية لدينا! نحن ملتزمون بمساعدتك على تحقيق أهداف لياقتك في بيئة ترحيبية وداعمة. تقدم منشآتنا أحدث المعدات لتدريب القلب والأوعية الدموية والقوة ، بالإضافة إلى مجموعة واسعة من فصول اللياقة البدنية الجماعية بقيادة مدربين على دراية وتحفيز. يتوفر مدربونا الشخصيون المعتمدون لتقديم التوجيه والدعم الفردي لمساعدتك في الوصول إلى أهداف اللياقة البدنية الفردية الخاصة بك. بالإضافة إلى عروض اللياقة لدينا ، نقدم لك أيضًا مجموعة من خدمات السبا وخطط التغذية للحصول على تجربة لياقة وعافية كاملة.</p>',
            ],
            'en' => [
                'title' => '<p>ABOUT OUR GYM</p>',
                'description' => '<p>Welcome to our gym! We are dedicated to helping you achieve your fitness goals in a welcoming and supportive environment. Our facility offers state-of-the-art equipment for cardiovascular and strength training, as well as a wide range of group fitness classes led by knowledgeable and motivating instructors. Our certified personal trainers are available to provide one-on-one guidance and support to help you reach your individual fitness goals. In addition to our fitness offerings, we also provide you with a range of spa services and nutrition plans for a full fitness and wellness experience.</p>',
            ],
        ]);
        $about_our_gym->file()->create([
            'path' => 'seeder/about.jpg',
            'type' => 'image'
        ]);

        $video = Page::create([
            'identifier' => 'video',
            'has_link' => 0,
            'has_title' => 0,
            'has_sub_title' => 0,
            'has_description' => 0,
            'has_image' => 1,
            'has_video' => 1,
        ]);
        $video->file()->create([
            'path' => 'seeder/slider3.jpg',
            'type' => 'image'
        ]);
        $video->file()->create([
            'path' => 'seeder/international_Womens_Day-Video.mp4',
            'type' => 'file'
        ]);

        $our_classes = Page::create([
            'identifier' => 'our_classes',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 0,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>فصولنا</p>',
                'description' => '<p>تعال وانضم إلينا واستمتع واستمتع</p>',
            ],
            'en' => [
                'title' => '<p>OUR CLASSES</p>',
                'description' => '<p>Come Join Us, Enjoy and have Fun</p>',
            ],
        ]);

        $branch_view = Page::create([
            'identifier' => 'branch_view',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 0,
            'has_image' => 1,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>فرع النيل فيو</p>',
            ],
            'en' => [
                'title' => '<p>Nile View Branch</p>',
            ],
        ]);
        $branch_view->file()->create([
            'path' => 'seeder/slider2.jpg',
            'type' => 'image'
        ]);

        $our_trainers = Page::create([
            'identifier' => 'our_trainers',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 1,
            'has_description' => 0,
            'has_image' => 0,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>مدربينا</p>',
                'sub_title' => 'تعرف على مدربينا',
            ],
            'en' => [
                'title' => '<p>OUR TRAINERS</p>',
                'sub_title' => 'Meet Our Coaches',
            ],
        ]);

        $get_fit_in_less = Page::create([
            'identifier' => 'get_fit_in_less',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 1,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>احصل على لياقتك في أقل من أسبوعين مع FITX</p>',
                'description' => '<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien</p>',
            ],
            'en' => [
                'title' => '<p>GET FIT IN LESS 2 WEEKS WITH FITX</p>',
                'description' => '<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien</p>',
            ],
        ]);
        $get_fit_in_less->file()->create([
            'path' => 'seeder/slider3.jpg',
            'type' => 'image'
        ]);

        $our_gallery = Page::create([
            'identifier' => 'our_gallery',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 1,
            'has_description' => 0,
            'has_image' => 0,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>معرض الصور</p>',
                'sub_title' => 'كن جزءًا من عائلة TFC.',
            ],
            'en' => [
                'title' => '<p>Our Gallery</p>',
                'sub_title' => 'Be Part Of TFC Family.',
            ],
        ]);

        $our_package = Page::create([
            'identifier' => 'our_package',
            'has_link' => 0,
            'has_title' => 1,
            'has_sub_title' => 0,
            'has_description' => 1,
            'has_image' => 0,
            'has_video' => 0,
            'ar' => [
                'title' => '<p>باقاتنا</p>',
                'description' => '<p>سواء كنت قد بدأت للتو رحلة لياقتك أو تتطلع إلى نقل التدريبات الخاصة بك إلى المستوى التالي ، فلدينا باقات مختلفة لتختار منها الأنسب لاحتياجاتك وخطة لياقتك.</p>',
            ],
            'en' => [
                'title' => '<p>OUR PACKAGES</p>',
                'description' => '<p>Whether you\'re just starting your fitness journey or looking to take your workouts to the next level, we have different packages for you to select the one most suitable for your needs and fitness plan.</p>',
            ],
        ]);
    }
}
