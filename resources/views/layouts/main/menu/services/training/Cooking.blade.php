@extends('layouts/main/base/base')
@section('title')
    Ayurvedic Cooking | Ayushya Ayurveda
@endsection

@section('body')
   <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
      <!--id="accordion" matra vayo vane chai tala ko kholda mathi ko collpase hudai janxa-->
      <div class="panel panel-info panel_info">
         <div class="panel-heading panel_heading" role="tab" id="heading7">
            <h4 class="panel-title">
               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                  aria-expanded="false" aria-controls="collapse7">
                  Ayurvedic Cooking (3 weeks, 24 hours per week)
               </a>
            </h4>
         </div>
         <div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">
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
                                 <li> Definition, Properties of food and their Panchabhautikatwa</li>
                              </ol>
                           </li>
                           <li> Introduction, knowledge of guna-karma of following groups of Annapana varga:-
                              <ol type="a">
                                 <li> Jala, Dugdha, Madhu, Ikshu, Taila, Madya, Mutra</li>
                                 <li> Sukadhanya, Simbidhanya, Phala, Shaka, Mansa, Lavana, Kritanna (Processed food)
                                 </li>
                              </ol>
                           </li>
                           <li> Astavidha ahara ayatana and Right method of eating</li>
                           <li> Food and our body, Food according to Prakriti, Season, Vikriti</li>
                           <li> Taste and its importance</li>
                           <li> Fasting</li>
                           <li> Preservation and safety of food</li>
                           <li> Agni, Aharapaka and Ahara Parinamkar bhava</li>
                           <li> Pathya and apathya</li>
                           <li> Upakalpana/recipes: Concept of Pathya Apathya. Manda, Peya, Vilepi, Yavagu, Anna, Yush,
                              Krishara, Mansa rasa, Vesavar, Dadhi and Takra.
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
