@extends('layouts/main/base/base')
@section('title')
    Basic Panchakarma | Ayushya Ayurveda
@endsection

@section('body')
    <div class="training">
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
                <div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading4">
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
                                                        <li>Types of Sneha (according to origin) - Sarpi, Taila, Vasa
                                                            and Majja
                                                        </li>
                                                        <li>Types of Snehana (according to use) - Bahya and Abhyantara
                                                            (external and internal oleation).
                                                        </li>
                                                        <li>Knowledge of Achcha sneha, Pravicharana sneha, Sadya sneha,
                                                            Shodhana, Shamana and Brimhana Sneha, Hrasiyasi, Hrasva,
                                                            Madhyama and Uttama Sneha
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
                                                                        <li>Swedana dravyas and their properties.</li>
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
                                                                        <li>Features of Samyak Yoga (Proper Sudation),
                                                                            Atiyoga (Excessive Sudation), Hinayoga
                                                                            (Inadequate Sudation) and Vyapat of Swedana
                                                                            and their Management
                                                                        </li>
                                                                        <li>Diet and regimens during and after Swedana
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
                                        <li>Vivida Vyadhiyome Panchkarma (Hindi) First Edition 2007 Dr. P. Yadaiah</li>
                                        <li>The Panchkarma Treatment of Ayurveda with Kerala Specialties Revised Edition
                                            2008 Dr. T.L. Devaraj
                                        </li>
                                        <li>Panchkarma Therapy Second Edition 2005 Dr. R.H. Singh</li>
                                        <li>Principles and practice of vasti 2006 Dr. Vasudevan Nampoothiri and Dr. L.
                                            Mahadevan
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

@endsection
