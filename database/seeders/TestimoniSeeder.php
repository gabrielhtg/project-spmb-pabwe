<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            "Sapta W. Manurung:WhatsApp Image 2023-12-10 at 23.09.32 - Sapta Manurung.jpeg:els:2018:Bank Permata:Saya Sapta W Manurung dari prodi Teknik Elektro Angkatan 2018 sangat bersyukur telah menjadi bagian dari Institut Teknologi Del. Pengalaman belajar di sana tidak hanya memberikan pengetahuan yang kuat dalam bidang saya, tetapi juga membentuk saya menjadi individu yang siap menghadapi dunia profesional. Dengan dosen-dosen berkompeten dan lingkungan inklusif, saya merasa sangat siap untuk tantangan karier. Pada saat ini saya bekerja Permata Bank, dan menurut saya pegetahuan saya sangat bermanfaat selama di dunia kerja saya.",
            "Irfan Siregar:IMG_3247 - Irfan Jumadin Siregar.jpg:iss:2019:Jakarta :Saya bersyukur bisa menjalani perjalanan kuliah di IT Del. Lingkungan akademis yang kondusif dan dosen yang berpengalaman membuat pengalaman belajar saya sangat berharga. Dengan fasilitas modern dan kurikulum yang relevan, IT Del benar-benar memberikan bekal yang kuat untuk menghadapi dunia industri teknologi.",
            "Theresia Mega Rumapea::ifs:2019:PT Bank Central Asia:Sangat bagus untuk mendidik anak muda sekarang untuk fokus belajar Dan menjauhi trend kekinian karena menerapkan kesetaraan social di lingungan asrama.Selain itu Dan Masih banyak benefit lainnya",
            "Gabryella Apriani Sinaga:IMG_20230222_092131 - Gabryella Apriani S.jpg:ifs:2019:Jakarta:Kuliah di IT Del sangat baguss, sistem pembelajarannya, fasilitasnya, dosen, dan diajarkan tidak hanya ilmu melainkan moral dan budi pekerti yang baik ",
            "Abdullah Ubaid:abdullah - Del Community.png:ifs:2018:IT Del:Bagus",
            "Dwita Soave Natio Marbun:IMG_3064 - Dwita Soave.jpeg:mrs:2016:Jakarta:Del ngajarin kita jadi orang yang tough dan tidak mudah menyerah",
            "Leo::ce3:2019:Pt visidata :Menyenangkan dan penuh tantangan ",
            "Jenny Hutasoit::ifs:2017:CIMB Niaga:aturan yg mengikat membuat siswa-siswi menjadi disiplin, perkembangan mental dan bertanggung jawab",
            "Judah Michael Parluhutan Sitorus::ifs:2019:PT. Bank Central Asia Tbk:Sangat memberi kesan dalam berbagai cara.",
            "Daniel simamora::if4:2019:PT. Dayak Membangun Pratama:Selama saya kuliah di IT Del saya sangat senang dengan budaya tegur sapa nya. Hal kecil itu yang menjadi nilai plus dari mahasiswa IT DEL",
            "Michael Isaac Parmonangan Siagian:20231019_173629 - Michael Siagian.jpg:els:2015:PT PLN (Persero) Unit Pelaksana Pelayanan Pelanggan Sumba:Semua kegiatan di luar kelas selama berkuliah asik dan memorable, segala yg diajarkan disana juga terpakai dalam dunia kerja, baik itu softskill ataupun hardskill. Nothing was wasted.",
            "Yohana Sihombing:WhatsApp Image 2023-12-07 at 10.31.55 - Yohana Sihombing.jpeg:if4 :2019:PT Bank Mandiri Tbk:Pintar manage waktu, support segala hal tentang pembelajaran, lingkungan bersih dan nyaman",
            "Ester bangun::els:2019:PT BCA Tbk:great",
            "Pratiwi Sibarani::if3:2019:Perusahaan IT bidang Ticketing:Selama 3 tahun berkuliah di Institut Teknologi Del, banyak pengalaman menarik dan pengetahuan baru yang sangat bermanfaat yang menjadi fondasi bagi saya di dalam dunia kerja. Penanaman nilai disiplin dan sopan santun yang saya terima selama perkuliahan, menjadi beberapa hal yang sangat penting dan memberi pengaruh dalam proses bekerja di dunia industri sekarang ini. Saya bersyukur bisa berkuliah dan menyelesaikan perkuliahan saya di Institut Teknologi Del.",
            "Julius Samosir::if3:2019:PwC Indonesia:Menarik, bermanfaat dan bermartabat!",
            "Ando Sitinjak::els:2020:-:Sangat menjanjikan",
            "Amsal Sinambela:IMG_20220129_183948 - Amsal Sinambela.jpg:els:2018:IT Del:Belajar dengan pengembangan karakter",
            "Owen Pardede:6d8a2602-972d-469a-8813-6e85f1fe36e3 - Timothy Owen.jpg:ifs:2018:CMA CGM Inland Service:Keren",
            "Dean Efraim:IMG-20230401-WA0024 - Dean Efraim.jpg:ifs:2018:Metrodata :Sejauh ini sih tidak menyenangkan",
            "January Onefrans Panjaitan::if3:2014:OY! Indonesia:have a good place to study ya. ",
            "Riski Simanjuntak:IMG-20231210-WA0108 - Riski Yan.jpg:ifs:2019:Astra Graphia Information Technology:Selama kuliah, yang paling bermanfaat selain ilmu yang didapat adalah adanya sistem keasramaan yang mengharuskan mahasiswa bisa memanajemen waktu sebaik mungkin. Hal itu sangat bermanfaat di dalam dunia kerja sehingga bisa mengatur waktu dalam mengerjakan tugas yang diterima. ",
            'Daniel Fernandez Lumbanraja:Daniel - Daniel Fernandez Lumbanraja.png:ifs:2019:Mitra Integrasi Informatika:"Institut Teknologi Del memiliki Dosen pengajar yang berkualitas, Biaya kuliah terjangkau dan kesempatan kerja dengan karir yang baik terbuka lebar. Saya bangga menjadi alumni Institut Teknologi Del untuk mewakili dari beribu-ribu alumni. Banyak sekali pelajaran yg saya dapatkan. Dan tentunya,  nilai 3M yang diajarkan kepada Mahasiswa sangat bermanfaat dalam membentuk karakter saya. "',
            "Arta:IMG20231209161808 - Arta Hutapea.jpg:ce3:2019:PT Indonesia Indicator :Dari sudut pandang saya sebagai mahasiswa menurut saya aturan terlalu ketat, banyak tekanan, dll. Tapi menyenangkan, banyak ilmu yang didapat baik itu soft kill&hard kill. ",
            "Patricia Melissa Yolanda Sibarani:IMG_6980 - Patricia Sibarani.jpeg:ifs:2019:-:Berkuliah di IT Del merupakan tempat belajar dan bertumbuh yang sangat baik. Bukan hanya belajar,  namun mengajarkan cara mandiri dan membagi waktu untuk kehidupan bekerja nantinya dengan sistem berasrama. Mekanisme pembelajaran, porsi dan kesulitan tugas, dan kualitas pengajar membantu mahasiswa lebih aktif dan berkembang.",
            "Missyolin Eunike Rungguni Samosir:missyolin - Missyolin Eunike.jpeg:ifs:2021:Huawei Summer Camp 2023:Nilai - nilai yang diajarkan oleh kampus ini, yaitu MarTuhan, Marroha, dan Marbisuk berperan penting dalam kehidupan studi saya di kampus IT Del. Kampus ini mendukung mahasiswanya untuk mengembangkan potensi dan diri mereka melalui kehidupan di kampus, kehidupan di asrama, dan melalui kesempatan-kesempatan yang diberikan. ",
            "Putra Patakkas Gabe Harianja:20230604_100627 - Putra harianja.jpg:ifs:2018:Blibli.com:Keren sih, setelah masuk dunia kerja sedikit sadar walaupun banyak yang harus diperbaiki dan disempurnakan tapi untuk masuk dunia kerja masih namanya masih mampu bersaing dengan kampus kampus yang udah ngetop dari dulu. Tapi in the end tetap masih banyak banget kurangnya sih wkwk",
            "Jevania:jevania_linkedin - Jevania.png:iss:2020:Apple Developer Academy:Being one of the students at Institut Teknologi Del is an extraordinary journey filled with opportunities for growth and excellence. Studying here has been a transformative experience that played a pivotal role in enabling me to join the Apple Developer Academy in my second year. The faculty's unwavering commitment to academic and personal development, combined with a vibrant array of organizational activities, creates an environment that fosters innovation. At IT Del, you're not just a student; you're part of a community dedicated to shaping future leaders in technology. From engaging lectures to dynamic organizational events, every aspect of the institute is geared towards cultivating well-rounded individuals ready to make a lasting impact in the tech world. If you're passionate about carving your path in the ever-evolving tech landscape, Institut Teknologi Del is the place to be!!",
            "Jhonathan Harry D Simatupang::ifs:2017:Ifabula:Diasaramakan jadi tertib, Fan fokus kuliah ",
            "Lidia Kesvina Pasaribu::ce3:2020:PT. Mandiri Persero (Tbk):Selama berkuliah di del, saya memiliki banyak pengalaman, sebelumnya saya sudah pernah tinggal di asram, akan tetapi asrama tempat saya dulu berbeda dengan asrama di IT Del. Selain itu saya sangat senang dan bersyukur bisa berkuliah di IT Del karena saya menjumpai orang-orang yang memberikan banyak pelajaran kepada saya terkhususnya dari teman-teman saya. Dan saya juga bersyukur karena puji tuhan saya langsung diberikan pekerjaan kurang lebih saya mencari pekerjaan selama 2 bulan.",
            "Enrico Hezkiel Sirait:UnBraw - Enrico Sirait.jpg:ifs:2021:Universitas Brawijaya:Studi di Institut Teknologi Del memberikan saya pelajaran-pelajaran tak hanya dalam segi akademik namun juga dalam segi berkarakter dan sosial. Dosen-dosen di Institut Teknologi Del mengayomi dan juga terbuka untuk berdiskusi kepada mahasiswa-mahasiswa. Kampus ini unik karena menerapkan budaya 3M",
            "Dian Permata Sari Sitanggang:1B21FA39-86A5-486E-83FE-D19726B1240E - Zlappp Zuppa.jpeg:if3:2019:BTPN:Perkuliahan di IT Del cukup untuk menjadi bekal di dunia pekerjaan dengan setiap matakuliah dan praktikum yang dikerjakan",
            "Dohar Josua N::ifs:2016:Home Credit Indonesia:Baik dan berkesan. IT Del membantu meningkatkan keterampilan akademis dan interpersonal saya.",
            "Handy Sonflow Sitepu:1700244504324 - Handy Sonflow.jpg:ifs:2019:PT.Tress Solution:Proses Pembeajaran dan hidup berasrama selama perkuliahan menjadikan hal ini sebagai hal yg berbeda dari kebanyakan perguruan tinggi terutama perguruan tinggi swasta yang belum tentu kita bisa dapatkan di tempat lainnya. Tentunya ada kelebihan dan kekurangan dalam menganut sistem seperti ini tapi tetap ambil sisi positifnya saja.",
            "Ryan Andika::els:2018:PT Indomobil Finance Indonesia:Perkuliahan baik, tapi keasramaan sering kali membuat aturan baru tanpa diadakan diskusi dengan pihak kemahasiswaan ataupun perwakilan mahasiswa sehingga sering terjadi kesalahpahaman",
            "Bungaran M.Pakpahan::ifs:2019:PT.Bank Central Asia:Suasana kuliahnya mantap",
            "Hotma Aruan::if3:2019:Blibli.com:Berkuliah di IT Del merupakan salah satu kesempatan yang patut saya syukuri dengan segala fasilitas dan dosen yang kompeten di bidangnya sehingga setelah lulus ilmu yang didapat dapat diimplementasikan di dunia pekerjaan",
        ];

        foreach ($data as $item) {
            $dataArray = explode(":", $item);

            if (empty($dataArray[1]))
            {
                $ava = 'def-ava.jpg';
            } else{
                $ava = $dataArray[1];
            }

            Testimoni::create([
                'nama_mahasiswa' => $dataArray[0],
                'photo' => 'assets/img/testimoni/'.$ava,
                'prodi' => $dataArray[2],
                'angkatan' => $dataArray[3],
                'deskripsi' => $dataArray[5],
                'kategori_mahasiswa' => 'Alumni',
            ]);

            usleep(25000);
        }
    }
}
