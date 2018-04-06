@extends('layouts/main/base/base')
@section('title')
    Training| Ayushya Ayurvedav
@endsection



@section('body')
    <div class="training">
        <!-- Basic Introduction of Ayurveda -->

        <div class=" panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
            <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
            <div class="panel panel-info panel_info">
                <div class="panel-heading panel_heading" role="tab" id="heading1">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                           aria-expanded="true" aria-controls="collapse1">
                            Basic Introduction of Ayurveda (2 weeks, 20 hours per week)
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                        <div id="exTab3" class="container">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#1a" data-toggle="tab">Theory</a>
                                </li>
                                <li>
                                    <a href="#2a" data-toggle="tab">Reference Books</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    I. Definition:
                                    <ol>
                                        <li>Ayush and Ayurveda</li>
                                        <li>Health and disease</li>
                                        <li>Sharira and Deha</li>
                                        <li>Purush</li>
                                        <li>Mana and Atma</li>
                                    </ol>
                                    II. History of Ayurveda:
                                    <ol>
                                        <li>Celestial and historical period, chronology of Ayurveda according to
                                            different schools, modern period
                                        </li>
                                        <li>Eight branches and eighteen branches of Ayurveda</li>
                                        <li>Brihatrayi and Laghutrayi</li>
                                        <li>Chronological development of Charaka Samhita, Sushruta Samhita and Kashyapa
                                            Samhita
                                        </li>
                                        <li>Nepal and Ayurveda: Kashyapa Samhita, Saushruta Nighantu, Chandra Nighantu,
                                            Nepal Nighantu; Singha Durbar VaidyaKhana; Festival-Culture and Ayurveda;
                                            Jiva Narayana taila, Mimiya, Jesthavasadi Churna, Kasturadi Goli, Rohitaka
                                            and Laligurans, Lapsi
                                        </li>
                                    </ol>

                                    III. Fundamental principles
                                    <ol>
                                        <li>Panchamahabhuta: general introduction, origin and properties</li>
                                        <li>Tridosha: general introduction, properties and functions; classification,
                                            locations, specific properties and functions
                                        </li>
                                        <li>Dhatu and upadhatu: Rasa, Rakta, Mamsa, Meda, Asthi, Majja, Sukra and their
                                            formation, guna, karma and pramana; Stanya and Aartava, Tvaka
                                        </li>
                                        <li>Mala and dhatu mala: Aahara mala: Purisha, Mutra, Sweda and their properties
                                            and functions; Dhatu mala: samkhya and pramana
                                        </li>
                                        <li>Deha Prakriti</li>
                                        <li>Loka-Purusha samanya</li>
                                        <li>Ahara-Agni and Ahara Paka</li>
                                        <li>Kostha and Koshthanga</li>
                                        <li>Marma</li>
                                        <li>Srotas, Shira, Dhamani, Snayu, Kandara, Kurcha, Jala, Kala</li>
                                        <li>Kriyakala (trividha and shatkriyakala)</li>
                                        <li>Oja and Immunity</li>
                                        <li>Mana and Triguna</li>
                                    </ol>

                                    IV. How to live healthy life
                                    <ol>
                                        <li>Dincharya (daily schedule), Ratricharya (night schedule), Ritucharya
                                            (seasonal schedule)
                                        </li>
                                        <li>Triupastambha: Ahara, Nidra and Bramacharya</li>
                                        <li>Sadvritta (behavior and code)</li>
                                        <li>Vega (urges)</li>
                                        <li>Upavasa (fasting)</li>
                                        <li>Yoga and Exercise</li>
                                        <li>Rasayana (immunomodulator and rejuvenation)</li>
                                    </ol>

                                    V. Disease
                                    <ol>
                                        <li>Etiological factor (Ahara, vihara; Kala, Indriyartha samyoga and
                                            Pragyaparadha; Bhuta and Dosha)
                                        </li>
                                        <li>Pancha nidana</li>
                                        <li>Kriyakala (Trividha and Shatvidha kriyakala)</li>
                                        <li>Roga Pariksha (Trividha, Shadvidha, Astavidha)</li>
                                        <li>Rogi Pariksha (Dashvidha Pariksha)</li>
                                        <li>Ama, Avarana and Roga</li>
                                        <li>Chikitsa-chatuspada</li>
                                        <li>Principle of treatment: Samsamana, Samshodhana, Nidanaparivarjana;
                                            Daivavyapashraya, Yuktivyapashraya, Shastrapranidhana; Upakrama (dwividha
                                            and shadvidha); Pathya-apathya
                                        </li>
                                    </ol>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <ol>
                                        <li>Psycho Pathology in Indian Medicine Dr. S.P. Gupt</li>
                                        <li>Ayurvediya Padarth Vigyan Dr. Ayodhya Prasad Achal</li>
                                        <li>History of Indian Medicine (1-3 part) - Dr. Girindra Nath Mukhopadhyaya</li>
                                        <li>History of Medicine in India - Acharya Priyavrata Sharma</li>
                                        <li>Science and Philosphy of Indian Medicine - Dr. K.N. Udupa</li>
                                        <li>Ayurvedic Medicine Past and Present - Pt. Shiv Sharma</li>
                                        <li>Sharir Rachana Vigyanana (English) : Vaidya P.G. Athwale</li>
                                        <li>Clinical Anatomy in Ayurveda : Prof. D.G. Thatte and Prof Suresh Chandra
                                        </li>
                                        <li>Sharir Rachna Vigyan (English) : Prof. D.G. Thatte</li>
                                        <li>Ayurvedic Human Anatomy : Prof.-Dr. Giridhar M. Kanthi</li>
                                        <li>Sharira Kriya Vigyana (Pt. 1-2) - Acharya Purnchandra Jain</li>
                                        <li>Abhinava Sharira Kriya Vigyana - Dr. Shiv Kumar Gaur</li>
                                        <li>Swasthvritta Samucchya - Pt. Rajeshwardutt Shastri</li>
                                        <li>Yoga and Ayurveda - Dr. Ramkumar Jain</li>
                                        <li>Swasthvirtta Vigyan - Dr. Ram Harsh Singh</li>
                                        <li>Hathayoga Pradeepika - Swatmaram Yogendra</li>
                                        <li>Swasthavrittama - Dr. Shiv Kumar Gaur</li>
                                        <li>Biogenic Secrets of Food in Ayurveda - Dr. L.P. Gupa</li>
                                        <li>Yoga & Yogic Chikitsa - Ram Harsh Singh</li>
                                        <li>The Foundations of Contemporary Yoga - R.H. Singh</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Basic Panchakarma-->
            <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                <div class="panel panel-info panel_info">
                    <div class="panel-heading panel_heading" role="tab" id="heading4">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Basic Panchakarma (6 weeks, 20 hours per week)
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                        <div class="panel-body">
                            <div id="exTab3" class="container">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a href="#1d" data-toggle="tab">Theory</a>
                                    </li>
                                    <li>
                                        <a href="#2d" data-toggle="tab">Reference Books</a>
                                    </li>
                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1d">
                                        <ol type="I">
                                            <li>INTRODUCTION
                                                <ol type="1">
                                                    <li>Introduction to Panchakarma, their importance and utility in the
                                                        treatment.
                                                    </li>
                                                    <li>Relation of Panchakarma with Shodhana therapy (purification
                                                        therapy).
                                                    </li>
                                                    <li>Three fold Karma -
                                                        <ol type="i">
                                                            <li>Purva karma (Pre operative procedure): Dipana-Pachana,
                                                                Snehana and Swedana
                                                            </li>
                                                            <li>Pradhana karma (Operative procedure)</li>
                                                            <li>Pashchat karma (Post operative procedure)</li>
                                                        </ol>
                                                    </li>
                                                    <li>Usefulness of Shodhana (purification therapy) according to the
                                                        seasons.
                                                    </li>
                                                    <li>General precautions (pariharya vishaya) during Panchakarma.</li>
                                                    <li>Relevance of Panchakarma in present era.</li>
                                                    </ul>
                                                    </li>
                                                    <li>SNEHANA
                                                        <ol type="i">
                                                            <li>Types of Sneha (according to origin) - Sarpi, Taila,
                                                                Vasa and Majja
                                                            </li>
                                                            <li>Types of Snehana (according to use) - Bahya and
                                                                Abhyantara (external and internal oleation).
                                                            </li>
                                                            <li>Knowledge of Achcha sneha, Pravicharana sneha, Sadya
                                                                sneha, Shodhana, Shamana and Brimhana Sneha, Hrasiyasi,
                                                                Hrasva, Madhyama and Uttama Sneha
                                                            </li>
                                                            <li>Indications and contraindications for Snehana</li>
                                                            <li>Bahirparimarjana Chikitsa (External oleation therapy)-
                                                                <ol type="a">
                                                                    <li> Abhyanga</li>
                                                                    <li> Mardana</li>
                                                                    <li> Utsadana</li>
                                                                    <li> Padhaghata</li>
                                                                    <li> Shirobhyanga</li>
                                                                    <li> Shirodhara</li>
                                                                    <li> Pichu</li>
                                                                    <li> Karna Purana</li>
                                                                    <li> Akshi Tarpana</li>
                                                                    </ul>
                                                                    </li>
                                                                    </ul>
                                                                    </li>

                                                                    <li>SWEDANA
                                                                        <ol type="i">
                                                                            <li>Swedana dravyas and their properties.
                                                                            </li>
                                                                            <li>Ten Types of Niragni Sweda and Different
                                                                                types of Sagni Sweda
                                                                            </li>
                                                                            <li>Knowledge of Shodhananga and Shamana
                                                                                Sweda.
                                                                            </li>
                                                                            <li>Indication and contra- indications of
                                                                                swedana.
                                                                            </li>
                                                                            <li>Detailed Knowledge about utility of
                                                                                <ol style="list-style-type:disc">
                                                                                    <li> Patra pinda Sweda</li>
                                                                                    <li> Shashtika Shalipinda Sweda</li>
                                                                                    <li> Valuka Sweda</li>
                                                                                    <li> Ishtika Sweda</li>
                                                                                    <li> Nadi Sweda</li>
                                                                                    <li> Bashpa Sweda</li>
                                                                                    <li> Avagaha Sweda</li>
                                                                                    <li> Upanaha Sweda</li>
                                                                                    <li> External vasti</li>
                                                                                    <li> Pichu</li>
                                                                                </ol>
                                                                            </li>
                                                                            <li>Features of Samyak Yoga (Proper
                                                                                Sudation), Atiyoga (Excessive Sudation),
                                                                                Hinayoga (Inadequate Sudation) and
                                                                                Vyapat of Swedana and their Management
                                                                            </li>
                                                                            <li>Diet and regimens during and after
                                                                                Swedana
                                                                            </li>
                                                                        </ol>
                                                                    </li>
                                                                    <li>Introduction to Bahirparimarjana Chikitsa: Lepa,
                                                                        Gandusha, Kavala, Udvartana, Udgharsana
                                                                    </li>
                                                                </ol>
                                    </div>
                                    <div class="tab-pane" id="2d">
                                        <ol type="a">
                                            <li>Charaka Samhita with commentary of Ayurveda Dipika by Chakrapanidatta &
                                                Jalpakalpa taruby Gangadhara Edn-1 Vol-I-V Agnivesha
                                            </li>
                                            <li>Sushruta Samhita with the Nibandha Sangraha commentary of Dalhana &
                                                Nyayachandrika Panjika of Gayadasa on Nidanasthan Edn-VI Vol-I Sushruta
                                            </li>
                                            <li>Ashtanga Hridaya with Sarvanga Sundara & Ayurveda rasayana commentaries
                                                Edn-VIII Vol-I Vaghbhata
                                            </li>
                                            <li>Ayurvediya Panchakarma Chikitsa Edn-I Vol-I Dr Mukundilal Dwivedi</li>
                                            <li>Panchakarma Vijnana Edn-I Vol-I Dr Haridas Shreedhar Kasture</li>
                                            <li>Illustrated Panchakarma Edn-I Vol-I Dr.G Srinivasa Acharya</li>
                                            <li>Clinical Panchkarma (English) Second Edition 2008 Dr. P.Yadaiah</li>
                                            <li>Prayogika Panchkarma (Hindi) Second Edition 2007 Dr. P. Yadaiah</li>
                                            <li>Vivida Vyadhiyome Panchkarma (Hindi) First Edition 2007 Dr. P. Yadaiah
                                            </li>
                                            <li>The Panchkarma Treatment of Ayurveda with Kerala Specialties Revised
                                                Edition 2008 Dr. T.L. Devaraj
                                            </li>
                                            <li>Panchkarma Therapy Second Edition 2005 Dr. R.H. Singh</li>
                                            <li>Principles and practice of vasti 2006 Dr. Vasudevan Nampoothiri and Dr.
                                                L. Mahadevan
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advance Panchakarma -->
                <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                    <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                    <div class="panel panel-info panel_info">
                        <div class="panel-heading panel_heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Advance Panchakarma (6 weeks, 20 hours per week)
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body">
                                <div id="exTab3" class="container">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="#1e" data-toggle="tab">Theory</a>
                                        </li>
                                        <li>
                                            <a href="#2e" data-toggle="tab">Reference Books</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="1e">
                                            <ol type="I">
                                                <li>INTRODUCTION
                                                    <ol type="a">
                                                        <li>Introduction to Panchakarma, their importance and utility in
                                                            the treatment.
                                                        </li>
                                                        <li>Relation of Panchakarma with Shodhana therapy (purification
                                                            therapy).
                                                        </li>
                                                        <li>Three fold Karma -
                                                            <ol type="i">
                                                                <li>Poorva karma (pre operative procedure):- General
                                                                    knowledge, importance and utility of Poorva karma
                                                                    (Pachana, Deepana, Snehana, & Swedana)
                                                                </li>
                                                                <li>Pradhana karma (Operative procedure)</li>
                                                                <li>Pashchat karma (Post operative procedure)</li>
                                                            </ol>
                                                        </li>
                                                        <li>Usefulness of Shodhana (purification therapy) ac</li>
                                                        cording to the seasons.
                                                        <li>General precautions (pariharya vishaya) during
                                                            Panchakarma.
                                                        </li>
                                                        <li>Relevance of Panchakarma in present era.</li>
                                                        <li>Specifications of Panchakarma theatre and necessary
                                                            equipments
                                                        </li>
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li>VAMANA
                                                    <ol type="a">
                                                        <li>Introduction & Significance of Vamana karma.</li>
                                                        <li>Kostha nirnaya and Agni pariksha in Vamana karma.</li>
                                                        <li>Indications and Contraindications for Vamana.</li>
                                                        <li>General properties of Vamaka Dravyas
                                                            <ol type="i">
                                                                <li>Purva karma: Snehana & Swedana, Diet regimen prior
                                                                    to Vamana Karma, Preparation of formulation for
                                                                    Vamana Karma, Dose & Method of Administration.
                                                                </li>
                                                                <li>Pradhana karma: Administration of drugs and
                                                                    Observation, Assessment of Vegas, Upavegas and
                                                                    Matra. Knowledge of Laingiki, Antiki and Maniki
                                                                    Shuddhi, Features of Samyak yoga (Proper Shuddhi),
                                                                    Atiyoga (Excessive Shuddhi), Ayoga (Inadequate
                                                                    Shuddhi) and their management.
                                                                </li>
                                                                <li>Pashchat karma: Vyapats & their management,
                                                                    Samsarjana krama (Peyadi,Tarpana and Rasa
                                                                    Samsarjana), Pariharya vishaya & Parihara Kala
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li>VIRECHANA KARMA
                                                    <ol type="a">
                                                        <li>Introduction & Significance of Virechana karma.</li>
                                                        <li>Introduction, Importance, Utility & Classification of
                                                            Virechana Karma.
                                                        </li>
                                                        <li>Knowledge of Anulomana, Sramsana, Bhedana, Rechana karma
                                                            with examples.
                                                        </li>
                                                        <li>General properties of Virechana Dravyas.</li>
                                                        <li>Knowledge of Virechana kalpanas, their properties, dose,
                                                            anupana and method of administration.
                                                        </li>
                                                        <li>Knowledge of Koshta Nirnaya and Agni vivechana.</li>
                                                        <li>Indications & Contra-indications for Virechana</li>
                                                        <li>Virechana Vidhi (Procedure for Virechana)
                                                            <ol type="i">
                                                                <li>Poorva karma: Snehana & Swedana, Diet regimen prior
                                                                    to Virechan Karma.
                                                                </li>
                                                                <li>Pradhana karma: Administration of drugs and Anupana,
                                                                    Observation, Assessment of Vegas, Upavegas and
                                                                    Matra. Knowledge of Laingiki, Antiki and Maniki
                                                                    Shuddhi, Features of Samyak yoga (Proper Shuddhi),
                                                                    Atiyoga (Excessive Shuddhi), Hinayoga (Inadequate
                                                                    Shuddhi) and their management.
                                                                </li>
                                                                <li>Pashchat karma: Vyapats & their management,
                                                                    Samsarjana krama (Peyadi, Tarpana and Rasa
                                                                    Samsarjana), Pariharya vishaya & Parihara kala.
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li>VASTI
                                                    <ol type="a">
                                                        <li>Introduction & Significance of Vasti karma.</li>
                                                        <li>Types of Vasti based on Karma, Sankhyas, Adhisthan &
                                                            Matra.
                                                        </li>
                                                        <li>Knowledge of different Vasti yantras, their significance and
                                                            utility.
                                                        </li>
                                                        <li>Indications & Contra-indications for Anuvasana Vasti and
                                                            Asthapana Vasti.
                                                        </li>
                                                        <li>Knowledge of Anuvasanopayogi and Asthapanopayogi dravyas.
                                                        </li>
                                                        <li>Adimistration of Vasti:
                                                            <ol type="i">
                                                                <li>Purvakarma (Pre-operative procedure): Preparation of
                                                                    Vasti dravyas Fixation of dose, Preparation of
                                                                    Patient.
                                                                </li>
                                                                <li>Pradhana karma (Operative procedure): Vasti
                                                                    Pranidhana vidhi (Administration of Asthapana,
                                                                    Anuvasana and Matra Vasti), Observation of Vasti
                                                                    pratyagamana, Samyakyoga, Atiyoga, Hinayoga
                                                                    lakshanas and their management.
                                                                </li>
                                                                <li>Paschat karma (post operative procedure): Pariharya
                                                                    vishaya, Parihara Kala, Diet regimen after Vasti.
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li>Detailed knowledge of Vasti Vyapats and their management.
                                                        </li>
                                                        <li>Study of following Vishishta Vastis: Piccha Vasti, Yapana
                                                            Vasti, Madhutailika Vasti, Erandamooladi Niruha Vasti,
                                                            Kshara Vasti, Vaitarana Vasti, Lekhana Vasti, Brimhana
                                                            Vasti, Vataghna Vasti, Pittaghna Vasti and Kaphaghna Vasti.
                                                        </li>
                                                        <li>Knowledge of Uttara Vasti, Importance of Uttara Vasti,
                                                            Uttara Vasti Yantra, dravyas and their dosage in Uttara
                                                            Vasti.
                                                        </li>
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li>NASYA
                                                    <ol type="a">
                                                        <li>Introduction & Significance of Nasya karma.</li>
                                                        <li>Knowledge about dravyas (Medicines) used for Nasya karma,
                                                        </li>
                                                        <li>Classification of Nasya in detail</li>
                                                        <li>Indications and contraindications of Nasya</li>
                                                        <li>Knowledge of dosage of Dravyas (Medicines) and time of
                                                            administration in different type of Nasya.
                                                        </li>
                                                        <li>Nasya Procedure
                                                            <ol type="i">
                                                                <li>Purvakarma (Pre-operative procedure): Prepartation
                                                                    of Patient.
                                                                </li>
                                                                <li>Pradhana Karma (Operative procedure): Admnisitration
                                                                    of Nasya.
                                                                </li>
                                                                <li>Paschat Karma (post operative procedure): Parihara
                                                                    Kala, Diet regimen after Nasya.
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li>Detailed Knowledge of features of Samyakyoga (Proper), Ayoga
                                                            (Inadequate), Atiyoga (Excessive) of Nasya and their
                                                            management.
                                                        </li>
                                                        <li>Pathya-Apathya during Nasya karma</li>
                                                        <li>Administration of Navana, Marsha, Pratimarsha, Avapidaka,
                                                            Dhmapana and Dhooma Nasyas
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li>RAKTA MOKSHANA
                                                    <ol type="a">
                                                        <li>Introduction & Significance of Raktamokshana.</li>
                                                        <li>Different techniques of Raktamokshana</li>
                                                        <li>Indications and contraindications of Raktamokshana</li>
                                                        <li>Rakta mokshana karmukta (Mode of action of Rakta mokshana)
                                                        </li>
                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                        <div class="tab-pane" id="2e">
                                            <ol type="a">
                                                <li>Caraka Samhita with commentary of Ayurveda Dipika by Chakrapanidatta
                                                    & Jalpakalpa taruby Gangadhara Edn-1 Vol-I-V Agnivesha
                                                </li>
                                                <li>Sushrutha Samhita with the Nibhandha Samgraha commentary of Dalhana
                                                    & Nyayachandrika panjika of Gayadasa on nidanasthan Edn-VI Vol-I
                                                    Sushruta
                                                </li>
                                                <li>Ashtanga Hrudaya with Sarvanga sundara & Ayurveda rasayana
                                                    commentaries
                                                </li>
                                                <li>Edn-VIII Vol-I Vaghbhata</li>
                                                <li>Ayurvediya Panchakarma chikitsa Edn-I Vol-I Dr Mukundilal Dwivedi
                                                </li>
                                                <li>Panchakarma Vijnana Edn-I Vol-I Dr Haridas Shreedhar Kasture</li>
                                                <li>Illustrated Panchakarma Edn-I Vol-I Dr.G Srinivasa Acharya</li>
                                                <li>Clinical Panchkarma (English) Second Edition 2008 Dr. P.Yadaiah</li>
                                                <li>Prayogika panchkarma (Hindi) Second Edition 2007 Dr. P. Yadaiah</li>
                                                <li>Vivida Vyadhiyome Panchkarma (Hindi) First Edition 2007 Dr. P.
                                                    Yadaiah
                                                </li>
                                                <li>The Panchkarma Treatment of Ayurveda with Kerala Specialties Revised
                                                    Edition 2008 Dr. T.L. Devaraj
                                                </li>
                                                <li>Panchkarma Therapy Second Edition 2005 Dr. R.H. Singh</li>
                                                <li>Principles and practice of vasti 2006 Dr. Vasudevan Nampoothiri and
                                                    Dr. L. Mahadevan
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Advance Cooking -->
                    <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                        <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                        <div class="panel panel-info panel_info">
                            <div class="panel-heading panel_heading" role="tab" id="heading7">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Ayurvedic Cooking (3 weeks, 24 hours per week)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading7">
                                <div class="panel-body">
                                    <div id="exTab3" class="container">
                                        <ul class="nav nav-pills">
                                            <li class="active">
                                                <a href="#1g" data-toggle="tab">Theory</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content clearfix">
                                            <div class="tab-pane active" id="1g">
                                                <ol type="I">
                                                    <li> Food and diet
                                                        <ol type="a">
                                                            <li> Definition, Properties of food and their
                                                                Panchabhautikatwa
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li> Introduction, knowledge of guna-karma of following groups of
                                                        Annapana varga:-
                                                        <ol type="a">
                                                            <li> Jala, Dugdha, Madhu, Ikshu, Taila, Madya, Mutra</li>
                                                            <li> Sukadhanya, Simbidhanya, Phala, Shaka, Mansa, Lavana,
                                                                Kritanna (Processed food)
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li> Astavidha ahara ayatana and Right method of eating</li>
                                                    <li> Food and our body, Food according to Prakriti, Season,
                                                        Vikriti
                                                    </li>
                                                    <li> Taste and its importance</li>
                                                    <li> Fasting</li>
                                                    <li> Preservation and safety of food</li>
                                                    <li> Agni, Aharapaka and Ahara Parinamkar bhava</li>
                                                    <li> Pathya and apathya</li>
                                                    <li> Upakalpana/recipes: Concept of Pathya Apathya. Manda, Peya,
                                                        Vilepi, Yavagu, Anna, Yush, Krishara, Mansa rasa, Vesavar, Dadhi
                                                        and Takra.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Herbs and raw materials of medicine-->
                        <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                            <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                            <div class="panel panel-info panel_info">
                                <div class="panel-heading panel_heading" role="tab" id="heading2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapse2" aria-expanded="false"
                                           aria-controls="collapse2">
                                            Ayurvedic Herbs and Pharmacology (4 weeks, 20 hours per week)
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse " role="tabpanel"
                                     aria-labelledby="heading2">
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
                                                        <li>DravyagunaShastra : Lakshana and fundamental principles of
                                                            Dravyaguna, Introduction of Sapta padartha – (Dravya, Rasa,
                                                            Guna, Virya, Vipaka, Prabhava and Karma)
                                                        </li>
                                                        <li>Dravya : Classification of dravya according to
                                                            Chetan-achetan (Living – Non Living), Utpatti (Origin), Yoni
                                                            (Mode of Origin), Rasa, Virya, Vipaka, Prayoga (Use), Dosha
                                                            karma (Action on Dosha)
                                                        </li>
                                                        <li>Guna : Definition and Classification of Guna. Detailed
                                                            knowledge of Gurvadi gunas
                                                        </li>
                                                        <li>Rasa : 6 Rasas (Madhura, Amla, Lavana, Katu, Tikta, and
                                                            Kashaya) and Panchabhautik origin, Guna and Karma of Rasa,
                                                            Use of Rasa in diet and medicine (Rasa seven Kramah).
                                                        </li>
                                                        <li>Vipaka : Types of Vipaka (Dvividha-Trividha, Panchavidha),
                                                            Guna and karma of Vipaka, Differences between Rasa and
                                                            Vipaka, Avasthapaka and Vipaka.
                                                        </li>
                                                        <li>Virya : Nature of Virya, Numbers of Virya (Dwividha
                                                            &Ashtavidha), Virya karmani (Effects of Virya)
                                                        </li>
                                                        <li>Prabhava : Effects of Prabhava, Samanyapratyarabdha,
                                                            Vichitrapratyarabdha
                                                        </li>
                                                        <li>Karma : Nirukti, lakshana, swaroopa and bheda of karma
                                                            (Etymological derivation, definition, nature and types of
                                                            action). Karma according to ancient and modern views.
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
                                                        <li>Introduction, Guna, Karma and uses of following jantava
                                                            dravya (drugs of animal origin).
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
                                                        <li>Collection of minimum 10 herbarium specimen from field
                                                            visit.
                                                        </li>
                                                        <li>Compilation on a particular herbs not less than 25 pages
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div class="tab-pane" id="3b">
                                                    <ol type="1">
                                                        <li>Abhinav Buti Darpan (Vol.1-2) - Vd. Roop Lal Vaishya</li>
                                                        <li>Aushadha Vigyna Shastra - Acharya Pt. Vishvanatha Dwivedi
                                                        </li>
                                                        <li>Bhaishajyaguna Vigyana - Dr. Alakhnarayan Singh</li>
                                                        <li>Bhav Prakash Nigantu (English) - Shreekanthamurti</li>
                                                        <li>Bhav Prakash Nighantu - With Vd. Krishna Chandra Chunekar
                                                            commentary
                                                        </li>
                                                        <li>Classical Uses of Medicinal Plants - Acharya Priyavrata
                                                            Sharma
                                                        </li>
                                                        <li>Dravyaguna Vigyana - Dr. Gyanendra Pandey</li>
                                                        <li>Dravyaguna Vigyana(Vol. 1-2) - Acharya Yadavji Tikram Ji
                                                        </li>
                                                        <li>Dravyaguna Vigyana (Vol. 1-5) - Acharya Priyavrata Sharma
                                                        </li>
                                                        <li>Dravyaguna Vijyana - Dr. A.P. Deshpande</li>
                                                        <li>Dravyagunavijnana basic Principles - Prof. D.S. Lucas</li>
                                                        <li>Materia Medica - Acharya Ghosh</li>
                                                        <li>Nighantu Adarsh (Vol. 1-2) - Vd. Bapa Lal</li>
                                                        <li>System of Plant Nomenclature in Ayurveda - Dr. Gyanendra
                                                            Panday
                                                        </li>
                                                        <li>Vanoaushadi Darshika - Thakur Balwant Singh</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ayurvedic medicine (3 weeks, 24 hours per week) -->

                            <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                                <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                                <div class="panel panel-info panel_info">
                                    <div class="panel-heading panel_heading" role="tab" id="heading3">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapse3" aria-expanded=""
                                               aria-controls="collapse3">
                                                Ayurvedic Pharmacy (4 weeks, 20 hours per week)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="heading3">
                                        <div class="panel-body">
                                            <div id="exTab3" class="container">
                                                <ul class="nav nav-pills">
                                                    <li class="active">
                                                        <a href="#1c" data-toggle="tab">Theory</a>
                                                    </li>
                                                    <li>
                                                        <a href="#2c" data-toggle="tab">Practical</a>
                                                    </li>
                                                    <li>
                                                        <a href="#3c" data-toggle="tab">Reference Books</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content clearfix">
                                                    <div class="tab-pane active" id="1c">
                                                        <ol type="I">
                                                            <li>Derivation, history and chronological (kramika vikasa)
                                                                development of Bhaishjyakalpana. Concept of Aushadha and
                                                                Bheshaja.
                                                            </li>
                                                            <li>Fundamental principles of Bhaishjyakalpana.</li>
                                                            <li>Rules of taking fresh and dry drugs, Grahyatva and
                                                                Agrahyatwa of plant material. Collection, storage and
                                                                preservation methods of different Aushadhi dravyas.
                                                                Examination methods, Preservation and Saviryata avadhi
                                                                (potency period) of different Aushadhi kalpanas.
                                                            </li>

                                                            <li>Kashaya yoni- Pancha vidha kashaya kalpana
                                                                <ol type="a">
                                                                    <li>Swarasa- Ardraka, Tulasi, Vasa</li>
                                                                    <li>Kalka- Nimba, Rasona</li>
                                                                    <li>Kwatha- Punarnavastaka, Rasna saptaka</li>
                                                                    <li>Hima- Dhanyaka, Sarivadi</li>
                                                                    <li>Phanta- Panchakola</li>
                                                                </ol>
                                                            </li>
                                                            <li>Panch kashaya Yonayah
                                                                <ol type="a">
                                                                    <li>Churna- Sitopaladi, Hingwashtaka</li>
                                                                    <li>Arka- Ajamoda, Yavani</li>
                                                                    <li>Avaleha- Chyavanaprashavaleha, Vasavaleha</li>
                                                                    <li>Ghana- Guduchi, Kutaja</li>
                                                                    <li>Satva- Amrita, Ardraka</li>
                                                                    <li>Kshirapaka- Arjuna, Rasona</li>
                                                                    <li>Vati- Lavangadi, Chitrakadi</li>
                                                                    <li>Varti- Phala, Chandrodaya</li>
                                                                    <li>Guggulu kalpana- Simhanad, Yogaraj</li>
                                                                    <li>Sandhana Kalpana- Arjunarishta,
                                                                        Dashamularishta
                                                                    </li>
                                                                    <li>Sneha kalpana- Jatyadi Ghrita, Mahanarayana
                                                                        taila
                                                                    </li>
                                                                </ol>
                                                            </li>

                                                            <li>Pathya Kalpana - Concept of Pathya Apathya. Manda, Peya,
                                                                Vilepi, Yavagu, Anna, Yusha, Krishara, Mamsa rasa,
                                                                Vesavar, Kamblika, Dadhi and Takra.
                                                            </li>

                                                            <li>Bahya kalpana (Formulations used for External
                                                                Applications)-
                                                                <ol type="a">
                                                                    <li>Lepa: Methods of preparation and mode of
                                                                        application- Siktha Taila, Gandhak Malahara
                                                                    </li>
                                                                    <li>Upanaha, Shatadhouta and Sahastradhouta Ghrita
                                                                    </li>
                                                                    <li>Netrakalpa (Opthalmic preparations): Seka,
                                                                        Anjana, Ashchyotana, Tarpana
                                                                    </li>
                                                                    <li>Nasya kalpana: Classification of Nasya, Method
                                                                        of preparation, properties and therapeutic uses
                                                                        of Navana, Avapidana, Dhmapana, Dhuma and
                                                                        Pratimarsha nasya,
                                                                    </li>
                                                                    <li>Mukha kalpana: Method of preparation, properties
                                                                        and therapeutic uses of Gandusha, Kavall,
                                                                        Manjana (tooth powder).
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>Vasti kalpana- Classification, Method of preparation of
                                                                vasti dravya. Types of Vasti. Therapeutic properties and
                                                                uses of Vasti kalpana.
                                                            </li>
                                                        </ol>
                                                    </div>
                                                    <div class="tab-pane" id="2c">
                                                        <ol type="1">
                                                            Method of preparation, therapeutic uses, dose and anupana of
                                                            the following
                                                            <li>Swarasa- Ardraka swarasa, Tulasi swarasa</li>
                                                            <li>Kalka - Nimba kalka, Rasona kalka.</li>
                                                            <li>Kwatha - Punarnavastaka kwatha, Rasna saptaka kwatha,
                                                                Kulattha kwath.
                                                            </li>
                                                            <li>Hima- Dhanyaka hima, Sarivadi hima</li>
                                                            <li>Phanta- Panchakola phanta, Yasthimadhu Phanta.</li>
                                                            <li>Churna- Sitopaladi Churna, Hingwashtaka Churna</li>
                                                            <li>Gutika- Chitrakadi Gutika, Sanjivani Vati</li>
                                                            <li>Satva- Amrita satva, Ardraka satva</li>
                                                            <li>Kshirapaka- Arjuna kshirapaka, Rasona kshirapaka</li>
                                                            <li>Sneha Kalpana – Jatyadi taila, Panchaguna taila</li>

                                                        </ol>
                                                    </div>
                                                    <div class="tab-pane" id="3c">
                                                        <ol type="1">
                                                            <li>Ayurvediya Rasa Shastra - Prof. Siddhi Nandan Mishra
                                                            </li>
                                                            <li>Paka Darpana - Dr. Indradev Tripathi</li>
                                                            <li>Pratyaksha Aushadh Nirmanam - Acharya Vishwanath
                                                                Dwivdei
                                                            </li>
                                                            <li>Bhaishjyakalpana Vigyanam - Dr. Ambikadatta Shastri</li>
                                                            <li>Rasa Hridaya Tantra (English) - Prof. Harishankar
                                                                Sharma
                                                            </li>
                                                            <li>Rasa Bhaishajya Kalpana Vigyan - Vaidya Santosh Kumar
                                                                Khandal
                                                            </li>
                                                            <li>Rasa Ratna Samuchchaya - Dattattreya Ananta Kulkarni
                                                                Krit Hindi Vyakhya.
                                                            </li>
                                                            <li>Rasendra Sara Sangraha - Vaidya Satyarth Prakash</li>
                                                            <li>Sharangdhar Samhita - Dr. Avadh Bihari Agnihotri</li>
                                                            <li>Bharatiya Bhaishajya Kalpana Vigyana - Vishwanath,
                                                                Gananath Dwivedi
                                                            </li>
                                                            <li>Bhaishjya Kalpana Vigyan - Siddhi Nandan Mishra</li>
                                                            <li>Rasa Shastra (English) - Prof. Damodar Joshi</li>
                                                            <li>Rasa Ratna Samuchchaya (English) - Prof. Damodar Joshi
                                                            </li>
                                                            <li>Ayurvedic formulary of India- Part I and II</li>
                                                            <li>Pharmacopic standards for Ayurvedic formulation
                                                                published by CCRAS, Publication of Govt. of India.
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- concept of diagnosis and treatment in Ayurveda -->
                                <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                                    <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
                                    <div class="panel panel-info panel_info">
                                        <div class="panel-heading panel_heading" role="tab" id="heading6">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#collapse6" aria-expanded="false"
                                                   aria-controls="collapse6">
                                                    Concept of Diagnosis and treatment in Ayurveda (4 weeks, 24 hours
                                                    per week)
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="heading6">
                                            <div class="panel-body">
                                                <div id="exTab3" class="container">
                                                    <ul class="nav nav-pills">
                                                        <li class="active">
                                                            <a href="#1f" data-toggle="tab">Theory</a>
                                                        </li>
                                                        <li>
                                                            <a href="#2f" data-toggle="tab">Practical</a>
                                                        </li>
                                                        <li>
                                                            <a href="#3f" data-toggle="tab">Reference Books</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content clearfix">
                                                        <div class="tab-pane active" id="1f">
                                                            <ol type="I">
                                                                <li>Dosha Dushyadi Vigyanam
                                                                    <ol type="1">
                                                                        <li> Definition and importance of Roganidana
                                                                        </li>
                                                                        <li> Lakshana of dosha prakopa and dosha kshaya,
                                                                            dhatu kshaya and vriddhi
                                                                        </li>
                                                                        <li> Dosha dhatu ashraya ashrayee bhava.</li>
                                                                        <li> Agni and Ama, Sama and nirama dosha, dushya
                                                                            lakshanas, Dosha paka and dhatu paka
                                                                            lakshana.
                                                                        </li>
                                                                        <li> Detailed study of sroto dushti and kha
                                                                            vaigunya.
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li> Vyadhi Vigyanam
                                                                    <ol type="1">
                                                                        <li> Definition and classification of Vyadhi
                                                                        </li>
                                                                        <li> Samanyaja and Nanatmaja vikara.
                                                                            Nidanarthakara vyadhi, Sharirika, Manasika
                                                                            and Agantuja vyadhi
                                                                        </li>
                                                                        <li> Definition and classification of
                                                                            Vyadhikshamatva.
                                                                        </li>
                                                                        <li> Concept of Satmya, Asatmya and Viruddha
                                                                            ahara.
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li> Nidana Panchaka and ShatKriyakala Vigyanam
                                                                    <ol type="1">
                                                                        <li> Importance of Nidana panchaka – Hetu, Purva
                                                                            rupa, Rupa, Upashyaya and Samprapti
                                                                        </li>
                                                                        <li> Shat kriyakala.</li>
                                                                        <li> Relationship between Nidana Panchaka and
                                                                            Shat Kriyakala.
                                                                        </li>
                                                                        <li> Upadrava</li>
                                                                        <li> General diagnostic principles of Anukta
                                                                            vyadhi (Cha Viman IV)
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li> Pariksha Vigyanam
                                                                    <ol type="1">
                                                                        <li> Difference between roga and rogi
                                                                            pariksha.
                                                                        </li>
                                                                        <li> Importance and knowledge of Aptopadeshadi,
                                                                            Dharshanadi Trividha, Chaturvidha and
                                                                            Shadvidha Pariksha.
                                                                        </li>
                                                                        <li> Importance and Knowledge of Ashtasthan
                                                                            Pariksha.
                                                                        </li>
                                                                        <li> Importance and Knowledge of Dashavidha
                                                                            pariksha.
                                                                        </li>
                                                                        <li> Importance and methods of history taking,
                                                                            clinical examination and knowledge of
                                                                            Ancillary investigations.
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li> Chikitsa and Bheshaja, Knowledge about Chikitsa
                                                                    Chatushpada
                                                                </li>
                                                                <li> Roga-anutpattikara chikitsa, Roga Prashamana
                                                                    Chikitsa (doshapratyanika, vyadhipratyanika,
                                                                    ubhayapratyanika)
                                                                </li>
                                                                <li> Detailed description of Dvividhopakrama (Santarpana
                                                                    and Apatarpana) and Shadavidhopakrama (Rukshna,
                                                                    Snehana, Swedana, Stambhana, Langhana and Brimhana)
                                                                </li>
                                                                <li> Detailed description of Shodhana, Shamana and
                                                                    Nidana Parivarjana
                                                                </li>
                                                                <li> Definition and Knowledge of Pathya- Apathya with
                                                                    examples of diseases of various systems
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane" id="2f">
                                                            <ol type="1">
                                                                <li> Introduction and demonstration of clinical methods
                                                                    (General and Systemic Examinations).
                                                                </li>
                                                                <li> Practical demonstration of examination of Roga
                                                                    based on Pancha Nidan
                                                                </li>
                                                                <li> Demonstration of instruments used for clinical
                                                                    examination
                                                                </li>
                                                                <li> Practical records of clinical examination of at
                                                                    least 5 cases.
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane" id="3f">
                                                            <ol type="1">
                                                                <li> Madhav Nidan with Madhukosha commentary Part 1 – 2
                                                                    Pt. Yadunandan Upadhyaya
                                                                </li>
                                                                <li> Nadi Vigyanam Vidyotini Hindi Tika</li>
                                                                <li> Rogi Pariksha Vidhi Acharya Priyavrata Sharma</li>
                                                                <li> Ayurvediya Nidan Evam Chikitsa Ke Siddhanta Prof.
                                                                    Ram Harsh Singh
                                                                </li>
                                                                <li> Clinical methods in Ayurveda K. R . S. Murthy</li>
                                                                <li> Bhaishajya Ratnawali - Kaviraj Ambikadutta
                                                                    Shastri
                                                                </li>
                                                                <li> Yogratnakar (English) - Dr. Nirmal Saxsena</li>
                                                                <li> Chakradutta (English) - Acharya Priyavrat Sharma
                                                                </li>
                                                                <li> Kayachikitsa - Prof. Shiv Charan Dhyani</li>
                                                                <li> Sidha Bheshaj Manimala - Ram Krishna Bhatt</li>
                                                                <li> Pathya-Apathya-Vinirnaya - Vishwanath Kaviraj</li>
                                                                <li> Ayurvediya Pathyapathya Vijnana - Dr. Badri Prasad
                                                                    Shah
                                                                </li>
                                                                <li> Ayurvediya Panchkarma Vijana - Dr. Haridas Shridhar
                                                                    Kasture
                                                                </li>
                                                                <li> Panchakarma Chikitsa - Prof. Divakar Ojha</li>
                                                                <li> Holistic Principle of Ayurvedic Medicine - Prof.
                                                                    Ram Harsh Singh
                                                                </li>
                                                                <li> Kayachikitsa - Prof. Ram Harsh Singh</li>
                                                                <li> Psychopathology in Indian Medicine - Dr. Satyapal
                                                                    Gupt
                                                                </li>
                                                                <li> Hathayoga Pradeepika -</li>
                                                                <li> Rasayan and Vajikarana - Vd. Upadhyaya (Jaipur)
                                                                </li>
                                                                <li> Science of Longetivity by Ayurveda - Prof. Subhash
                                                                    Ranade
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
