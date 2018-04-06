@extends('layouts/main/base/base')
@section('title')
    Ayurvedic Herbs and Pharmacology | Ayushya Ayurveda
@endsection

@section('body')
    <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
        <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
        <div class="panel panel-info panel_info">
            <div class="panel-heading panel_heading" role="tab" id="heading2">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                       aria-expanded="false" aria-controls="collapse2">
                        Ayurvedic Herbs and Pharmacology (4 weeks, 20 hours per week)
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                    <div id="exTab3" class="container">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1b" data-toggle="tab">Theory</a>
                            </li>
                            <li>
                                <a href="#2b" data-toggle="tab">Practical</a>
                            </li>
                            <li>
                                <a href="#3b" data-toggle="tab">Reference Books</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b">
                                <ol type="I">
                                    <li>DravyagunaShastra : Lakshana and fundamental principles of Dravyaguna,
                                        Introduction of Sapta padartha – (Dravya, Rasa, Guna, Virya, Vipaka, Prabhava
                                        and Karma)
                                    </li>
                                    <li>Dravya : Classification of dravya according to Chetan-achetan (Living – Non
                                        Living), Utpatti (Origin), Yoni (Mode of Origin), Rasa, Virya, Vipaka, Prayoga
                                        (Use), Dosha karma (Action on Dosha)
                                    </li>
                                    <li>Guna : Definition and Classification of Guna. Detailed knowledge of Gurvadi
                                        gunas
                                    </li>
                                    <li>Rasa : 6 Rasas (Madhura, Amla, Lavana, Katu, Tikta, and Kashaya) and
                                        Panchabhautik origin, Guna and Karma of Rasa, Use of Rasa in diet and medicine
                                        (Rasa seven Kramah).
                                    </li>
                                    <li>Vipaka : Types of Vipaka (Dvividha-Trividha, Panchavidha), Guna and karma of
                                        Vipaka, Differences between Rasa and Vipaka, Avasthapaka and Vipaka.
                                    </li>
                                    <li>Virya : Nature of Virya, Numbers of Virya (Dwividha &Ashtavidha), Virya karmani
                                        (Effects of Virya)
                                    </li>
                                    <li>Prabhava : Effects of Prabhava, Samanyapratyarabdha, Vichitrapratyarabdha</li>
                                    <li>Karma : Nirukti, lakshana, swaroopa and bheda of karma (Etymological derivation,
                                        definition, nature and types of action). Karma according to ancient and modern
                                        views.
                                        <ol>
                                            <li>Dipana</li>
                                            <li>Pachana</li>
                                            <li>Samshodhana</li>
                                            <li>Samshamana</li>
                                            <li>Rechana</li>
                                            <li>Lekhana</li>
                                            <li>Grahi</li>
                                            <li>Sthambhana</li>
                                            <li>Rasayana</li>
                                            <li>Vajikarana</li>
                                            <li>Balya</li>
                                            <li>Brimhana</li>
                                            <li>Langhana</li>
                                            <li>Medhya</li>
                                            <li>Hridya</li>
                                            <li>Mutravirechaniya</li>
                                            <li>Swedana</li>
                                            <li>Snehana</li>
                                            <li>Vamana</li>
                                            <li>Virechana</li>
                                            <li>Sirovirechanopaga</li>
                                            <li>Asthapanopaga</li>
                                            <li>Anuvasanopaga</li>
                                            <li>Vedanasthapana</li>
                                            <li>Shothahara</li>
                                            <li>Jvarahara</li>
                                            <li>Swashara</li>
                                            <li>Kasahara</li>
                                            <li>Kushthagna</li>
                                            <li>Vranaropana</li>
                                        </ol>
                                    </li>

                                    <li>Brief information about Nighantus
                                        <ul style="list-style-type:none">
                                            <li>1. Saushruta Nighantu</li>
                                            <li>2. Chandra Nighantu</li>
                                            <li>3. Nepali Nighantu</li>
                                            <li>4. Dhanwantari Nighantu</li>
                                            <li>5. Shodhala Nighantu</li>
                                            <li>6. Kaiyyadeva Nighantu</li>
                                            <li>7. Bhavaprakasha Nighantu</li>
                                            <li>8. Raja Nighantu</li>
                                        </ul>
                                    </li>
                                    <li>Detailed knowledge of following drugs
                                        <ol type="1">
                                            <li>Amalaki</li>
                                            <li>Ardraka-sunthi</li>
                                            <li>Arjuna</li>
                                            <li>Ashwagandha</li>
                                            <li>Asthishrinkhala</li>
                                            <li>Bala</li>
                                            <li>Bhumyamalki</li>
                                            <li>Bibhitaka</li>
                                            <li>Bhringaraj</li>
                                            <li>Daruharidra</li>
                                            <li>Eranda</li>
                                            <li>Gokshura</li>
                                            <li>Guduchi</li>
                                            <li>Guggulu</li>
                                            <li>Haridra</li>
                                            <li>Haritaki</li>
                                            <li>Kanchanara</li>
                                            <li>Kantakari</li>
                                            <li>Kapikacchu</li>
                                            <li>Katuki</li>
                                            <li>Kiratatikta</li>
                                            <li>Kumari</li>
                                            <li>Mandukaparni</li>
                                            <li>Manjishtha</li>
                                            <li>Maricha</li>
                                            <li>Meshashringi</li>
                                            <li>Nirgundi</li>
                                            <li>Parijata</li>
                                            <li>Pippali</li>
                                            <li>Purnarnava</li>
                                            <li>Rasna</li>
                                            <li>Rasona</li>
                                            <li>Sarpagandha</li>
                                            <li>Shatavari</li>
                                            <li>Shigru</li>
                                            <li>Tagara</li>
                                            <li>Tulasi</li>
                                            <li>Vacha</li>
                                            <li>Vasa</li>
                                            <li>Yasthimadhu</li>
                                        </ol>
                                    </li>
                                    <li>Introduction, Guna, Karma and uses of following jantava dravya (drugs of animal
                                        origin).
                                        <ol type="1">
                                            <li>Kasturi</li>
                                            <li>Mukta</li>
                                            <li>Pravala</li>
                                            <li>Shankha</li>
                                            <li>Varatika</li>
                                        </ol>
                                    </li>
                                    <li>Mineral ores, knowledge of guna-karma of following groups
                                        <ol type="1">
                                            <li>Abhraka</li>
                                            <li>Makshika</li>
                                            <li>Shilajatu</li>
                                            <li>Tamra (Copper)</li>
                                            <li>Loha (Iron)</li>
                                            <li>Yashada (Zinc).</li>
                                            <li>Vajra (Diamond)</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                            <div class="tab-pane" id="2b">
                                <ol type="1">
                                    <li>Collection of minimum 10 herbarium specimen from field visit.</li>
                                    <li>Compilation on a particular herbs not less than 25 pages</li>
                                </ol>
                            </div>
                            <div class="tab-pane" id="3b">
                                <ol type="1">
                                    <li>Abhinav Buti Darpan (Vol.1-2) - Vd. Roop Lal Vaishya</li>
                                    <li>Aushadha Vigyna Shastra - Acharya Pt. Vishvanatha Dwivedi</li>
                                    <li>Bhaishajyaguna Vigyana - Dr. Alakhnarayan Singh</li>
                                    <li>Bhav Prakash Nigantu (English) - Shreekanthamurti</li>
                                    <li>Bhav Prakash Nighantu - With Vd. Krishna Chandra Chunekar commentary</li>
                                    <li>Classical Uses of Medicinal Plants - Acharya Priyavrata Sharma</li>
                                    <li>Dravyaguna Vigyana - Dr. Gyanendra Pandey</li>
                                    <li>Dravyaguna Vigyana(Vol. 1-2) - Acharya Yadavji Tikram Ji</li>
                                    <li>Dravyaguna Vigyana (Vol. 1-5) - Acharya Priyavrata Sharma</li>
                                    <li>Dravyaguna Vijyana - Dr. A.P. Deshpande</li>
                                    <li>Dravyagunavijnana basic Principles - Prof. D.S. Lucas</li>
                                    <li>Materia Medica - Acharya Ghosh</li>
                                    <li>Nighantu Adarsh (Vol. 1-2) - Vd. Bapa Lal</li>
                                    <li>System of Plant Nomenclature in Ayurveda - Dr. Gyanendra Panday</li>
                                    <li>Vanoaushadi Darshika - Thakur Balwant Singh</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
