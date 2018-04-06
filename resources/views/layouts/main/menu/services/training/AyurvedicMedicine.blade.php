@extends('layouts/main/base/base')
@section('title')
    Ayurvedic Pharmacy | Ayushya Ayurveda
@endsection

@section('body')

    <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
        <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
        <div class="panel panel-info panel_info">
            <div class="panel-heading panel_heading" role="tab" id="heading3">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                       aria-expanded="" aria-controls="collapse3">
                        Ayurvedic Pharmacy (4 weeks, 20 hours per week)
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3">
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
                                    <li>Derivation, history and chronological (kramika vikasa) development of
                                        Bhaishjyakalpana. Concept of Aushadha and Bheshaja.
                                    </li>
                                    <li>Fundamental principles of Bhaishjyakalpana.</li>
                                    <li>Rules of taking fresh and dry drugs, Grahyatva and Agrahyatwa of plant material.
                                        Collection, storage and preservation methods of different Aushadhi dravyas.
                                        Examination methods, Preservation and Saviryata avadhi (potency period) of
                                        different Aushadhi kalpanas.
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
                                            <li>Sandhana Kalpana- Arjunarishta, Dashamularishta</li>
                                            <li>Sneha kalpana- Jatyadi Ghrita, Mahanarayana taila</li>
                                        </ol>
                                    </li>

                                    <li>Pathya Kalpana - Concept of Pathya Apathya. Manda, Peya, Vilepi, Yavagu, Anna,
                                        Yusha, Krishara, Mamsa rasa, Vesavar, Kamblika, Dadhi and Takra.
                                    </li>

                                    <li>Bahya kalpana (Formulations used for External Applications)-
                                        <ol type="a">
                                            <li>Lepa: Methods of preparation and mode of application- Siktha Taila,
                                                Gandhak Malahara
                                            </li>
                                            <li>Upanaha, Shatadhouta and Sahastradhouta Ghrita</li>
                                            <li>Netrakalpa (Opthalmic preparations): Seka, Anjana, Ashchyotana,
                                                Tarpana
                                            </li>
                                            <li>Nasya kalpana: Classification of Nasya, Method of preparation,
                                                properties and therapeutic uses of Navana, Avapidana, Dhmapana, Dhuma
                                                and Pratimarsha nasya,
                                            </li>
                                            <li>Mukha kalpana: Method of preparation, properties and therapeutic uses of
                                                Gandusha, Kavall, Manjana (tooth powder).
                                            </li>
                                        </ol>
                                    </li>
                                    <li>Vasti kalpana- Classification, Method of preparation of vasti dravya. Types of
                                        Vasti. Therapeutic properties and uses of Vasti kalpana.
                                    </li>
                                </ol>
                            </div>
                            <div class="tab-pane" id="2c">
                                <ol type="1">
                                    Method of preparation, therapeutic uses, dose and anupana of the following
                                    <li>Swarasa- Ardraka swarasa, Tulasi swarasa</li>
                                    <li>Kalka - Nimba kalka, Rasona kalka.</li>
                                    <li>Kwatha - Punarnavastaka kwatha, Rasna saptaka kwatha, Kulattha kwath.</li>
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
                                    <li>Ayurvediya Rasa Shastra - Prof. Siddhi Nandan Mishra</li>
                                    <li>Paka Darpana - Dr. Indradev Tripathi</li>
                                    <li>Pratyaksha Aushadh Nirmanam - Acharya Vishwanath Dwivdei</li>
                                    <li>Bhaishjyakalpana Vigyanam - Dr. Ambikadatta Shastri</li>
                                    <li>Rasa Hridaya Tantra (English) - Prof. Harishankar Sharma</li>
                                    <li>Rasa Bhaishajya Kalpana Vigyan - Vaidya Santosh Kumar Khandal</li>
                                    <li>Rasa Ratna Samuchchaya - Dattattreya Ananta Kulkarni Krit Hindi Vyakhya.</li>
                                    <li>Rasendra Sara Sangraha - Vaidya Satyarth Prakash</li>
                                    <li>Sharangdhar Samhita - Dr. Avadh Bihari Agnihotri</li>
                                    <li>Bharatiya Bhaishajya Kalpana Vigyana - Vishwanath, Gananath Dwivedi</li>
                                    <li>Bhaishjya Kalpana Vigyan - Siddhi Nandan Mishra</li>
                                    <li>Rasa Shastra (English) - Prof. Damodar Joshi</li>
                                    <li>Rasa Ratna Samuchchaya (English) - Prof. Damodar Joshi</li>
                                    <li>Ayurvedic formulary of India- Part I and II</li>
                                    <li>Pharmacopic standards for Ayurvedic formulation published by CCRAS, Publication
                                        of Govt. of India.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
