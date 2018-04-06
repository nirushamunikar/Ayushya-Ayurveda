@extends('layouts/main/base/base')
@section('title')
    Concept of Diagnosis and treatment in Ayurveda | Ayushya Ayurveda
@endsection

@section('body')
   <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
      <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
      <div class="panel panel-info panel_info">
         <div class="panel-heading panel_heading" role="tab" id="heading6">
            <h4 class="panel-title">
               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                  aria-expanded="false" aria-controls="collapse6">
                  Concept of Diagnosis and treatment in Ayurveda (4 weeks, 24 hours per week)
               </a>
            </h4>
         </div>
         <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
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
                                 <li> Definition and importance of Roganidana</li>
                                 <li> Lakshana of dosha prakopa and dosha kshaya, dhatu kshaya and vriddhi</li>
                                 <li> Dosha dhatu ashraya ashrayee bhava.</li>
                                 <li> Agni and Ama, Sama and nirama dosha, dushya lakshanas, Dosha paka and dhatu paka
                                    lakshana.
                                 </li>
                                 <li> Detailed study of sroto dushti and kha vaigunya.</li>
                              </ol>
                           </li>
                           <li> Vyadhi Vigyanam
                              <ol type="1">
                                 <li> Definition and classification of Vyadhi</li>
                                 <li> Samanyaja and Nanatmaja vikara. Nidanarthakara vyadhi, Sharirika, Manasika and
                                    Agantuja vyadhi
                                 </li>
                                 <li> Definition and classification of Vyadhikshamatva.</li>
                                 <li> Concept of Satmya, Asatmya and Viruddha ahara.</li>
                              </ol>
                           </li>
                           <li> Nidana Panchaka and ShatKriyakala Vigyanam
                              <ol type="1">
                                 <li> Importance of Nidana panchaka – Hetu, Purva rupa, Rupa, Upashyaya and Samprapti
                                 </li>
                                 <li> Shat kriyakala.</li>
                                 <li> Relationship between Nidana Panchaka and Shat Kriyakala.</li>
                                 <li> Upadrava</li>
                                 <li> General diagnostic principles of Anukta vyadhi (Cha Viman IV)</li>
                              </ol>
                           </li>
                           <li> Pariksha Vigyanam
                              <ol type="1">
                                 <li> Difference between roga and rogi pariksha.</li>
                                 <li> Importance and knowledge of Aptopadeshadi, Dharshanadi Trividha, Chaturvidha and
                                    Shadvidha Pariksha.
                                 </li>
                                 <li> Importance and Knowledge of Ashtasthan Pariksha.</li>
                                 <li> Importance and Knowledge of Dashavidha pariksha.</li>
                                 <li> Importance and methods of history taking, clinical examination and knowledge of
                                    Ancillary investigations.
                                 </li>
                              </ol>
                           </li>
                           <li> Chikitsa and Bheshaja, Knowledge about Chikitsa Chatushpada</li>
                           <li> Roga-anutpattikara chikitsa, Roga Prashamana Chikitsa (doshapratyanika,
                              vyadhipratyanika, ubhayapratyanika)
                           </li>
                           <li> Detailed description of Dvividhopakrama (Santarpana and Apatarpana) and
                              Shadavidhopakrama (Rukshna, Snehana, Swedana, Stambhana, Langhana and Brimhana)
                           </li>
                           <li> Detailed description of Shodhana, Shamana and Nidana Parivarjana</li>
                           <li> Definition and Knowledge of Pathya- Apathya with examples of diseases of various
                              systems
                           </li>
                        </ol>
                     </div>
                     <div class="tab-pane" id="2f">
                        <ol type="1">
                           <li> Introduction and demonstration of clinical methods (General and Systemic
                              Examinations).
                           </li>
                           <li> Practical demonstration of examination of Roga based on Pancha Nidan</li>
                           <li> Demonstration of instruments used for clinical examination</li>
                           <li> Practical records of clinical examination of at least 5 cases.</li>
                        </ol>
                     </div>
                     <div class="tab-pane" id="3f">
                        <ol type="1">
                           <li> Madhav Nidan with Madhukosha commentary Part 1 – 2 Pt. Yadunandan Upadhyaya</li>
                           <li> Nadi Vigyanam Vidyotini Hindi Tika</li>
                           <li> Rogi Pariksha Vidhi Acharya Priyavrata Sharma</li>
                           <li> Ayurvediya Nidan Evam Chikitsa Ke Siddhanta Prof. Ram Harsh Singh</li>
                           <li> Clinical methods in Ayurveda K. R . S. Murthy</li>
                           <li> Bhaishajya Ratnawali - Kaviraj Ambikadutta Shastri</li>
                           <li> Yogratnakar (English) - Dr. Nirmal Saxsena</li>
                           <li> Chakradutta (English) - Acharya Priyavrat Sharma</li>
                           <li> Kayachikitsa - Prof. Shiv Charan Dhyani</li>
                           <li> Sidha Bheshaj Manimala - Ram Krishna Bhatt</li>
                           <li> Pathya-Apathya-Vinirnaya - Vishwanath Kaviraj</li>
                           <li> Ayurvediya Pathyapathya Vijnana - Dr. Badri Prasad Shah</li>
                           <li> Ayurvediya Panchkarma Vijana - Dr. Haridas Shridhar Kasture</li>
                           <li> Panchakarma Chikitsa - Prof. Divakar Ojha</li>
                           <li> Holistic Principle of Ayurvedic Medicine - Prof. Ram Harsh Singh</li>
                           <li> Kayachikitsa - Prof. Ram Harsh Singh</li>
                           <li> Psychopathology in Indian Medicine - Dr. Satyapal Gupt</li>
                           <li> Hathayoga Pradeepika -</li>
                           <li> Rasayan and Vajikarana - Vd. Upadhyaya (Jaipur)</li>
                           <li> Science of Longetivity by Ayurveda - Prof. Subhash Ranade</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                        </div>
                     </div>


@endsection
