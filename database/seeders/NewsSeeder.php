<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        News::create([
            'categories_id'=> "1",
            'title'=> "Integer pellentesque, ipsum sed commodo porttitor.",
            'subtitle' => "Quisque pretium lectus non sapien ullamcorper, eu fermentum elit finibus. Pellentesque neque augue, rutrum vel felis et, elementum ultrices risus.",
	        'description' => "Phasellus aliquam ante eget erat pharetra, a facilisis neque tempor. Cras porttitor nunc sem. Aenean a luctus ante, non ornare dolor. Cras euismod, dolor vitae commodo vestibulum, lacus sapien scelerisque tellus, nec congue nisi erat id sapien. Pellentesque molestie luctus efficitur.",
	        'image' => "bitcoin.jpg"
        ]);

        News::create([
            'categories_id'=> "1",
            'title'=> "Etiam non metus commodo, scelerisque eros vitae, lacinia mi.",
            'subtitle' => "Suspendisse eleifend mattis nibh in ornare. Nullam porta odio nunc. Nullam molestie blandit mauris, sed rutrum tortor. Mauris sit amet ipsum non ante congue hendrerit.",
	        'description' => "Vivamus porta felis dui, nec consequat tortor sodales sed. Phasellus dictum augue vitae quam maximus, sed finibus augue commodo. Ut vulputate libero at ante pretium, quis mollis arcu aliquet. Morbi velit erat, commodo sed euismod id, commodo ut lacus. Vivamus fermentum sem at magna pellentesque, non ullamcorper massa aliquet.",
	        'image' => "dolar.jpg"
        ]);

        News::create([
            'categories_id'=> "1",
            'title'=> "Sed rhoncus nibh lectus, vitae consectetur arcu pulvinar vitae.",
            'subtitle' => "Mauris placerat in eros vel placerat. Praesent vulputate, risus vel eleifend commodo, quam nulla euismod magna, at pellentesque nisi quam ut est. ",
	        'description' => "In eget eros elementum turpis gravida lobortis sed nec ligula. Nullam ante ex, rhoncus ut sodales mattis, luctus ut leo. Donec ornare vestibulum quam, et sagittis velit dapibus nec. Proin rhoncus maximus lacus nec imperdiet. Aenean eu arcu erat. Donec blandit consequat ex, a pellentesque purus bibendum molestie.",
	        'image' => "cuentas.jpg"
        ]);

        News::create([
            'categories_id'=> "2",
            'title'=> "Praesent imperdiet tellus a elit aliquet, a viverra odio ultrices.",
            'subtitle' => "Cras tincidunt a ligula vitae tincidunt. In egestas dignissim orci, scelerisque blandit leo ullamcorper at. Nulla scelerisque porttitor dolor. ",
	        'description' => "Fusce vel leo efficitur mauris semper pulvinar. Nunc enim velit, aliquam ut est sed, sagittis auctor ligula. Donec pretium velit id blandit imperdiet. Curabitur quis sollicitudin lectus. Sed at aliquam quam, id finibus justo. Pellentesque porta interdum nisl, sed luctus leo varius non.",
	        'image' => "fulbo.jfif"
        ]);

        News::create([
            'categories_id'=> "2",
            'title'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            'subtitle' => "Phasellus vitae risus ut felis luctus hendrerit in ac ipsum. Phasellus consequat tortor sed felis efficitur, quis condimentum nibh commodo.",
	        'description' => "Nulla condimentum tortor feugiat leo maximus lobortis. Fusce dignissim lorem mi, non aliquam magna tincidunt ac. Proin euismod finibus massa vel placerat. Nam tincidunt nisl eu ultricies elementum. Ut ac lobortis lectus, vulputate cursus justo. Suspendisse ut libero blandit.",
	        'image' => "motocross.jfif"
        ]);

        News::create([
            'categories_id'=> "2",
            'title'=> "Nulla fermentum mauris vitae massa lobortis condimentum.",
            'subtitle' => "Nulla at massa sollicitudin, lacinia sapien non, ornare ligula. Donec id lacinia risus, nec lacinia metus. Duis nec maximus risus, vitae tempus risus.",
	        'description' => "Nunc non euismod erat. Pellentesque nec enim non sem pretium fermentum et at leo. Fusce sed sollicitudin lectus. Aliquam velit mauris, fermentum ut fringilla facilisis, hendrerit sit amet leo. Aliquam at turpis sagittis dui lacinia euismod. Quisque laoreet fermentum neque ut hendrerit.",
	        'image' => "fulbo2.jpeg"
        ]);

        News::create([
            'categories_id'=> "2",
            'title'=> "Vivamus efficitur, nulla non semper ullamcorper, ligula felis.",
            'subtitle' => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a diam eget lectus elementum commodo ut ut erat.",
	        'description' => "Maecenas tempus et dui a lacinia. Integer auctor bibendum eleifend. Morbi quis metus nec enim aliquet vehicula. Duis felis purus, feugiat sit amet mauris ac, blandit venenatis nibh. Aliquam ullamcorper nisl turpis, sit amet tempor sapien porttitor et. Mauris tempus magna quis risus tincidunt aliquet.",
	        'image' => "Ciclismo.jpg"
        ]);

        News::create([
            'categories_id'=> "2",
            'title'=> "Maecenas a euismod nunc, sed posuere quam.",
            'subtitle' => "Maecenas ornare lacinia sapien nec ullamcorper. Nulla ut dolor eu lorem feugiat luctus vel a risus. Etiam vel erat ut lacus fringilla consequat.",
	        'description' => "Nam ultricies, purus et maximus iaculis, erat dolor semper nibh, at viverra magna ante et libero. Donec non ultricies ligula, vitae ornare diam. Aenean quis lobortis justo. Curabitur at placerat felis. Nulla facilisi. Donec vel bibendum ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	        'image' => "celebracion.jpg"
        ]);

        News::create([
            'categories_id'=> "3",
            'title'=> "Sed gravida id ante at interdum. Pellentesque ac gravida urna",
            'subtitle' => " Duis sit amet facilisis dui. Maecenas nulla ipsum, blandit sed urna non, hendrerit faucibus odio.",
	        'description' => "Aliquam id ultricies quam. Suspendisse ut lacinia velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent faucibus in enim et congue. Mauris lacus nulla, posuere facilisis facilisis eget, iaculis nec est. Pellentesque tempor, ante nec bibendum venenatis.",
	        'image' => "cine.jpg"
        ]);

        News::create([
            'categories_id'=> "3",
            'title'=> "Vestibulum leo urna, semper nec imperdiet id, pharetra sed magna.",
            'subtitle' => "Aenean et lacus mi. Donec dapibus venenatis fermentum. Phasellus vel viverra libero. In aliquam vulputate tortor eu commodo.",
	        'description' => "Praesent imperdiet tellus a elit aliquet, a viverra odio ultrices. Cras tincidunt a ligula vitae tincidunt. In egestas dignissim orci, scelerisque blandit leo ullamcorper at. Nulla scelerisque porttitor dolor, ut lacinia ipsum venenatis ac. Fusce vel leo efficitur mauris semper pulvinar.",
	        'image' => "stranger.jpg"
        ]);

        News::create([
            'categories_id'=> "3",
            'title'=> "Morbi magna purus, sagittis sit amet enim id.",
            'subtitle' => "Curabitur volutpat euismod augue ac rutrum. Nulla ullamcorper dignissim consequat. Phasellus urna sem, luctus eget lectus vitae, vestibulum pretium sem.",
	        'description' => "Vivamus facilisis ullamcorper pellentesque. Nam in ante volutpat, malesuada sapien in, volutpat enim. Duis hendrerit tincidunt rutrum. Proin pretium sed sem sed tempor. Sed at feugiat lorem. Fusce congue, dui ac accumsan laoreet, metus purus efficitur lacus, non finibus augue diam pellentesque dolor.",
	        'image' => "pinocho.png"
        ]);

        News::create([
            'categories_id'=> "3",
            'title'=> "Pellentesque ullamcorper, neque quis interdum sollicitudin.",
            'subtitle' => "Nunc at tempor urna, nec scelerisque magna. Donec ut dolor ac tortor cursus blandit. Nullam vel orci vitae erat faucibus sodales eget non eros.",
	        'description' => "Fusce dignissim purus vel massa lacinia, ac vulputate est pretium. Cras vehicula mi non aliquam dignissim. Aliquam venenatis, tellus at ultrices rhoncus, lectus enim lacinia lorem, sodales viverra ex lorem a arcu. Nulla ullamcorper egestas tellus ut maximus. Donec volutpat, ante ut porttitor lacinia, leo diam fringilla neque.",
	        'image' => "neflis.jpg"
        ]);

        News::create([
            'categories_id'=> "4",
            'title'=> "Ut vitae neque id arcu hendrerit cursus eget et enim.",
            'subtitle' => "Ut condimentum finibus tellus vel congue. In porttitor libero odio, et dignissim purus varius eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
	        'description' => "Suspendisse imperdiet scelerisque justo in dignissim. Maecenas at risus ornare, porttitor ex sit amet, laoreet urna. Nunc mollis tellus eget orci pretium, non ornare dolor dignissim. Proin malesuada id risus non malesuada. Sed sollicitudin pulvinar erat quis pulvinar. Duis at velit tempor, consequat velit quis, pellentesque turpis.",
	        'image' => "firma.jpg"
        ]);

        News::create([
            'categories_id'=> "4",
            'title'=> "Duis purus odio, elementum in vestibulum in, posuere at mi.",
            'subtitle' => "Mauris fringilla dapibus est ac gravida. Cras rhoncus nunc magna, eu ultrices sem blandit non.",
	        'description' => "Aenean eu tempor odio. Vestibulum vel magna justo. Praesent ullamcorper posuere pellentesque. Fusce cursus bibendum orci et mattis. Nam non tellus nec quam tempus imperdiet at nec mauris. Fusce ac euismod leo, sed luctus libero. Nunc risus metus, placerat sed sagittis sit amet, tristique rutrum urna.",
	        'image' => "reunion.jpg"
        ]);

        News::create([
            'categories_id'=> "4",
            'title'=> "Quisque cursus nisi at nisi pulvinar tincidunt.",
            'subtitle' => "Donec vestibulum magna vitae massa posuere, id porta lectus laoreet. Cras vitae lacinia eros.",
	        'description' => "Etiam nec sollicitudin tortor. Phasellus sit amet aliquam ipsum. Praesent vitae lacus sed quam luctus posuere. Donec orci orci, aliquam a laoreet vitae, molestie in urna. Aenean molestie lectus non quam pellentesque, quis fermentum lectus hendrerit. Integer gravida tellus ipsum, blandit porttitor purus imperdiet non.",
	        'image' => "carlos.jpg"
        ]);

        News::create([
            'categories_id'=> "4",
            'title'=> "Nullam aliquet vestibulum est eget blandit. ",
            'subtitle' => "Aliquam placerat pulvinar dictum. Phasellus sem felis, faucibus eu mauris non, consequat ultrices magna. Vivamus sagittis purus massa, id porttitor dui pharetra.",
	        'description' => "Fusce sit amet diam nec velit tincidunt mattis sit amet facilisis orci. Integer at tempor purus, ut ultricies lorem. Cras consectetur enim risus, porttitor mollis lorem rhoncus et. Praesent et risus lacus. Donec dignissim fermentum erat vitae mattis. Quisque ornare mollis metus, sit amet consectetur sapien euismod et.",
	        'image' => "rusia.jpg"
        ]);

        News::create([
            'categories_id'=> "4",
            'title'=> "Cras fermentum pretium mi, vel euismod sapien ultricies eget.",
            'subtitle' => "Vivamus consequat volutpat lectus id tristique. Nullam iaculis, sem non convallis aliquam, purus neque sodales augue, interdum rhoncus nulla odio sit amet turpis.",
	        'description' => "Morbi eget imperdiet massa. Etiam semper id metus at blandit. Fusce dignissim est leo, nec dapibus dui pretium non. Maecenas posuere, est nec molestie convallis, justo libero ultrices neque, vel mattis est mi eget arcu. Praesent turpis erat, dapibus et eleifend eu, pellentesque ut ex.",
	        'image' => "cochinilla.jpg"
        ]);

        News::create([
            'categories_id'=> "5",
            'title'=> "Morbi iaculis lacus ac leo finibus, nec elementum magna placerat.",
            'subtitle' => "Nullam pulvinar at libero sit amet luctus. Nulla ut urna gravida, commodo lorem a, pulvinar tellus.",
	        'description' => "Duis id enim dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam felis turpis, lacinia tincidunt vehicula in, euismod in sem. Nunc eget ex eleifend, ultrices nunc in, convallis mi. Praesent vulputate arcu ut dolor euismod malesuada.",
	        'image' => "doctor.jpg"
        ]);

        News::create([
            'categories_id'=> "5",
            'title'=> "Phasellus rhoncus sapien luctus ligula condimentum.",
            'subtitle' => "Etiam convallis leo ut dolor tincidunt efficitur. Vestibulum vestibulum felis lectus, eget ornare quam egestas quis. Nam consectetur pharetra nunc.",
	        'description' => "Nullam feugiat mauris a nunc accumsan, at aliquam odio consequat. Vestibulum feugiat bibendum tincidunt. Sed quis turpis id ex feugiat hendrerit sed eu eros. Suspendisse turpis purus, luctus a justo a, commodo lacinia lectus. Fusce eget sem non mi faucibus molestie id nec justo.",
	        'image' => "covid.jpg"
        ]);

        News::create([
            'categories_id'=> "6",
            'title'=> "Nunc hendrerit ipsum orci, vel dapibus urna lobortis vitae",
            'subtitle' => "Mauris non lacinia ipsum, vitae rhoncus enim. Aenean dictum in eros a vulputate. Fusce luctus, ipsum eget hendrerit ultrices, elit diam placerat risus, sit amet.",
	        'description' => "Nam ac vehicula urna, id tincidunt ante. Vestibulum sed interdum augue. Nulla et lorem mollis, condimentum diam sed, vulputate risus. Praesent lorem ligula, fringilla non dui rhoncus, finibus consequat felis. Duis tempus urna nibh. Morbi commodo orci eget quam luctus, eget faucibus nulla eleifend.",
	        'image' => "apple.jpg"
        ]);

        News::create([
            'categories_id'=> "6",
            'title'=> "Vivamus at augue ut leo accumsan fringilla.",
            'subtitle' => "In et mauris odio. Aenean et ornare dolor, non volutpat mauris. Vivamus facilisis dignissim velit, vitae mollis est suscipit et. Proin fringilla sapien ac tristique vehicula.",
	        'description' => "Nam posuere iaculis ipsum in dictum. Maecenas blandit lacinia erat, id efficitur turpis consectetur sit amet. Etiam at ipsum eu elit varius fermentum. Ut sem enim, posuere quis lobortis eu, ultricies a ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ut magna id tortor fermentum placerat.",
	        'image' => "ciberataques.jpg"
        ]);

        News::create([
            'categories_id'=> "6",
            'title'=> "Donec non magna scelerisque, volutpat turpis sit amet.",
            'subtitle' => " Phasellus sed tincidunt libero. Mauris quis turpis dignissim justo pulvinar tincidunt eget ut velit. Nam blandit auctor elementum. Nunc vulputate, libero at.",
	        'description' => "Fusce ante ligula, facilisis in felis a, interdum iaculis risus. Suspendisse suscipit arcu vitae massa porttitor sodales. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam id ultrices lacus, in accumsan mi. Vestibulum dapibus massa vitae dui pharetra tempus.",
	        'image' => "virtual.jpg"
        ]);

        News::create([
            'categories_id'=> "6",
            'title'=> "Morbi feugiat elit tortor, id tristique orci sollicitudin.",
            'subtitle' => "Nunc tempor lectus non euismod viverra. Fusce ac bibendum lectus. Suspendisse a sagittis purus. Sed eget efficitur massa. Duis arcu magna, porta non mauris id.",
	        'description' => "Fusce egestas orci id pellentesque facilisis. Sed elementum nisi dictum, tincidunt orci ut, vestibulum metus. Aliquam mattis tincidunt vulputate. In eget pretium libero, in vehicula magna. Sed convallis commodo nisl id malesuada. Ut efficitur, enim a iaculis iaculis, tellus urna condimentum tortor, et gravida tortor ipsum viverra elit.",
	        'image' => "elon.jpg"
        ]);

        News::create([
            'categories_id'=> "7",
            'title'=> "Nunc tempor augue eget augue feugiat, ultricies convallis",
            'subtitle' => "Sapien ultrices. Integer non porttitor eros. Nullam condimentum augue mauris, posuere mattis tellus dictum ac.",
	        'description' => "Mauris metus ante, ultricies nec convallis eu, imperdiet et lacus. Pellentesque lobortis blandit elit, a feugiat ipsum auctor et. Praesent facilisis eleifend consequat. Duis et orci lobortis, efficitur massa non, efficitur felis.",
	        'image' => "playa.jpeg"
        ]);

        News::create([
            'categories_id'=> "7",
            'title'=> "Cras sit amet lobortis odio. Pellentesque in sapien neque.",
            'subtitle' => "Curabitur semper arcu vitae posuere interdum. Nullam convallis, risus sed accumsan auctor, lectus urna iaculis magna, porta ultricies quam purus eu neque.",
	        'description' => "Mauris a lacinia felis. Aenean tincidunt euismod faucibus. Pellentesque mollis dignissim lectus vel tincidunt. Vestibulum sem ipsum, viverra non libero quis, blandit varius metus. Integer faucibus metus in ex pretium, ac semper urna convallis. Suspendisse convallis faucibus scelerisque.",
	        'image' => "montaña.jpg"
        ]);
    }
}
