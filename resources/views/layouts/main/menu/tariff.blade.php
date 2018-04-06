@extends('layouts/main/base/base')
@section('title')
Tariff | Ayushya Ayurveda
@endsection

@section('body')
<div class="new_table">
    <div id="new_table1"></div>
    <div id="new_table3"></div>
    <div id="new_table4"></div>
    <div id="new_table5"></div>
    <div id="new_table7"></div>
    <div id="new_table6"></div>
    <div id="new_table8"></div>
    <div id="new_table9"></div>
    <div id="new_table88"></div>
    <div id="new_table99" ></div>
</div>
<script type="text/javascript">
    // table1
    var heading1=["Set","Quantity","Price($)"];
    var items1=[
        {
            Set:"Breakfast set",
            Quantity:1,
            Price:4
        },
        {
            Set:"Lunch set",
            Quantity:1,
            Price:5
        },
        {

            Set:"Dinner set",
            Quantity:1,
            Price:5
        }
    ]
    // table
    var heading2=["Snehana","Duration","Price($)"];
    var items2=[

        {
            snehana:"Shirodhara",
            duration:"45 mins",
            Price:30
        },
        {
            snehana:"Shirovasti",
            duration:"45 mins",
            Price:35
        },
        {
            snehana:"Pichu",
            duration:"45 mins",
            Price:25
        },
        {
            snehana:"Vasti",
            duration:"45 mins",
            Price:20
        },
        {
            snehana:"Pishichil",
            duration:"60 mins",
            Price:50
        },
        {
            snehana:"Poultice",
            duration:"1 time",
            Price:15
        },
        {
            snehana:"Mardana",
            duration:"60 mins",
            Price:20
        },
        {
            snehana:"Gandusha /Kawal",
            duration:"1 time",
            Price:12
        },
        {
            snehana:"Akshitarpana",
            duration:"1 time",
            Price:12
        },
        {
            snehana:"Nasatarpana",
            duration:"1 time",
            Price:12
        },
        {
            snehana:"Karnapurana",
            duration:"1 time",
            Price:12
        }
    ]
    // table3
    var heading3=["Abhyanga","Time","Price($)"];
    var items3=[
        {
            Abhyanga:"Whole Body 				Relaxation Abhyanga",
            Time:"60 mins",
            Price:15
        },
        {
            Abhyanga:"Whole Body Synchronized Cleansing Abhyanga",
            Time:"60 mins",
            Price:20
        },
        {
            Abhyanga:"Whole Body Cleansing Abhyanga",
            Time:"90 mins",
            Price:25
        },
        {
            Abhyanga:"Mardana",
            Time:"60 mins",
            Price:30
        },
        {
            Abhyanga:"Ubatan Abhyanga ",
            Time:"60 mins",
            Price:25
        },
        {
            Abhyanga:"Ubatan with oil (fat reducing) and steam bath",
            Time:"90 mins",
            Price:35
        },
        {
            Abhyanga:"Relaxation Shira (Head) Abhyanga",
            Time:"30 mins",
            Price:10
        },
        {
            Abhyanga:"Relaxation Merudanda (Spinal) Abhyanga",
            Time:"30 mins",
            Price:10
        },
        {
            Abhyanga:"Relaxation Pada (Foot) Abhyanga",
            Time:"30 mins",
            Price:10
        },
        {
            Abhyanga:"Relaxation Mukha (Facial) Abhyanga",
            Time:"30 mins",
            Price:10
        },
        {
            Abhyanga:"Facial Beauty PacakageHerbal Mask)",
            Time:"60 mins",
            Price:15
        }
    ]

    // table4
    var heading4=["Sweda","Time","Price($)"];
    var items4=
        [
            {
                Sweda:"Whole Body Herbal Steam Bath",
                Time:"30 mins",
                Price:15
            },
            {
                Sweda:"Patra Potali Pinda Sweda (Bolus Sudation)",
                Time:"60 mins",
                Price:25
            },
            {
                Sweda:"Shastika Shali Pinda Sweda",
                Time:"60 mins",
                Price:30
            },
            {
                Sweda:"Mash Pinda Sweda",
                Time:"60 mins",
                Price:30
            },
            {
                Sweda:"Nadi Sweda",
                Time:"15 mins",
                Price:6
            },
            {
                Sweda:"Avagaha",
                Time:"30 mins",
                Price:25
            },
            {
                Sweda:"Baluka sweda",
                Time:"30 mins",
                Price:15
            },
            {
                Sweda:"Ita sweda",
                Time:"30 mins",
                Price:20
            }
        ]

    // table5
    var heading5=["Yoga & Meditation","Time","Price($)"];
    var items5=
        [
            {
                Yoga:"Yoga /Meditation /Pranayama",
                Time:"60 mins",
                Price:12
            },
            {
                Yoga:"Trataka",
                Time:"1 time",
                Price:5
            },
            {
                Yoga:"Kunjala",
                Time:"1 time",
                Price:6
            },
            {
                Yoga:"Shankha Prakshalana",
                Time:"1 time",
                Price:20
            },
            {
                Yoga:"Vasti",
                Time:"1 time",
                Price:8
            },
            {
                Yoga:"Yoga nidra",
                Time:"60 mins",
                Price:15
            }
        ]
    // table7
    var heading7=["Particulars","Time","Price($)"];
    var items7=
        [
            {
                Time:"1 hour",
                Particulars:"Head and foot massage",
                Price:30
            },
            {
                Time:"1 hour",
                Particulars:"Head, shoulder and spinal massage",
                Price:30
            },
            {
                Time:"1 hour",
                Particulars:"Spinal program (pichu, massage and nadi sweda)",
                Price:35
            },
            {
                Time:"2 hours",
                Particulars:"Whole body massage, Steam bath, Shirodhara",
                Price:60
            },
            {
                Time:"3 hours",
                Particulars:"Shirodhara, Head massage, Pranayama, Yoganidra",
                Price:80
            },
            {
                Time:"3 hours",
                Particulars:"Whole body massage, Steam bath, Shirodhara",
                Price:80
            },
            {
                Time:"3 hours",
                Particulars:"Ubatan abhyanga, Facial Beauty Package (Herbal Mask), Steam bath",
                Price:80
            },
            {
                Time:"1 day",
                Particulars:"Program I",
                Price:100
            },
            {
                Time:"1 day",
                Particulars:"Program II",
                Price:150
            },
            {
                Time:"3 days",
                Particulars:"Program I",
                Price:350
            },
            {
                Time:"3 days",
                Particulars:"Program II",
                Price:450
            },
            {
                Time:"5 days",
                Particulars:"Program I",
                Price:450
            },
            {
                Time:"5 days",
                Particulars:"Program II",
                Price:600
            },
            {
                Time:"7 days",
                Particulars:"Program I",
                Price:650
            },
            {
                Time:"7 days",
                Particulars:"Program II",
                Price:720
            }
        ]
    // table6
    var heading6=["Types of Room","1-8 nights ($)","9-15 nights ($)","16-22 nights ($)","<22 nights ($)"]
    var items6=
        [
// {
// 	Room:" ",
// 	_16N:"($)",
// 	_714N:"($)",
// 	_1421N:"($)",
// 	greater21:"($)"
// },
        {
            Room:"Common (4 single bed in a room)",
            _16N:10,
            _714N:9,
            _1421N:7,
            greater21:5
        },
        {
            Room:"Single A (1 single bed in a room)",
            _16N:15,
            _714N:14,
            _1421N:12,
            greater21:10
        },

        {
            Room:"Single B (1 double bed in a room)",
            _16N:20,
            _714N:19,
            _1421N:17,
            greater21:15
        },

        {
            Room:"Special (1 double bed in a room)",
            _16N:25,
            _714N:24,
            _1421N:22,
            greater21:20
        }
    ]
    // table8
    var items8=
        [
            {
                Classical:"30 Days",
                Treatment:2400,
                Fooding:420,
                Common:290,
                A:435,
                B:580,
                Special:725
            },
            {
                Classical:"22 Days",
                Treatment:1950,
                Fooding:308,
                Common:252,
                A:357,
                B:462,
                Special:567
            },
            {
                Classical:"15 Days",
                Treatment:1400,
                Fooding:210,
                Common:196,
                A:266,
                B:336,
                Special:406
            },
            {
                Classical:"8 Days",
                Treatment:750,
                Fooding:112,
                Common:90,
                A:120,
                B:150,
                Special:180
            }
        ]
    // table9
    var items9=
        [
            {
                Classical:"30 Days",
                Common:3210,
                A:3355,
                B:3500,
                Special:3645
            },
            {
                Classical:"22 Days",
                Common:2560,
                A:2665,
                B:2770,
                Special:2875
            },
            {
                Classical:"15 Days",
                Common:1856,
                A:1962,
                B:1996,
                Special:2066
            },
            {
                Classical:"8 Days",
                Common:938,
                A:968,
                B:998,
                Special:1028
            }
        ]



    var table1='<table class="table1">'
    table1+='<thead>';
    table1+='<tr>';
    for(var i=0;i<heading1.length;i++){
        table1+='<th scope="col">'+heading1[i]+'</th>';
    }
    table1+='</tr>';
    table1+='</thead>';
    for(var i=0;i<items1.length;i++){
        table1+='<tr>';
        table1+='<td scope="row" data-label="Set">'+items1[i].Set+'</td>';
        table1+='<td data-label="Quantity">'+items1[i].Quantity+'</td>';
        table1+='<td data-label="Price($)">'+items1[i].Price+'</td>';
        table1+='</tr>';
    }
    table1+='</table>';
    document.getElementById('new_table1').innerHTML=table1;



    var table3='<table class="table2" border="1" bordercolor="#ddd">'
    table3+='<thead>';
    table3+='<tr>';
    for(var i=0;i<heading3.length;i++){
        table3+='<th>'+heading3[i]+'</th>';
    }
    table3+='</tr>';
    table3+='</thead>';
    for(var i=0;i<items3.length;i++){
        table3+='<tr>';
        table3+='<td width="60%">'+items3[i].Abhyanga+'</td>';
        table3+='<td width="20%">'+items3[i].Time+'</td>';
        table3+='<td width="20%">'+items3[i].Price+'</td>';
        table3+='</tr>';
    }
    table3+='</table>';
    document.getElementById('new_table3').innerHTML=table3;

    var table4='<table class="table2" border="1" bordercolor="#ddd">'
    table4+='<thead>';
    table4+='<tr>';
    for(var i=0;i<heading4.length;i++){
        table4+='<th>'+heading4[i]+'</th>';
    }
    table4+='</tr>';
    table4+='</thead>';
    for(var i=0;i<items4.length;i++){
        table4+='<tr>';
        table4+='<td width="60%">'+items4[i].Sweda+'</td>';
        table4+='<td width="20%">'+items4[i].Time+'</td>';
        table4+='<td width="20%">'+items4[i].Price+'</td>';
        table4+='</tr>';
    }
    table4+='</table>';
    document.getElementById('new_table4').innerHTML=table4;

    var table5='<table class="table2" border="1" bordercolor="#ddd">'
    table5+='<thead>';
    table5+='<tr>';
    for(var i=0;i<heading5.length;i++){
        table5+='<th>'+heading5[i]+'</th>';
    }
    table5+='</tr>';
    table5+='</thead>';
    for(var i=0;i<items5.length;i++){
        table5+='<tr>';
        table5+='<td width="60%">'+items5[i].Yoga+'</td>';
        table5+='<td width="20%">'+items5[i].Time+'</td>';
        table5+='<td width="20%">'+items5[i].Price+'</td>';
        table5+='</tr>';
    }
    table5+='</table>';
    document.getElementById('new_table5').innerHTML=table5;

    var table7='<table class="table2" border="1" bordercolor="#ddd">'
    table7+='<thead>';
    table7+='<tr>';
    for(var i=0;i<heading7.length;i++){
        table7+='<th>'+heading7[i]+'</th>';
    }
    table7+='</tr>';
    table7+='</thead>';
    for(var i=0;i<items7.length;i++){
        table7+='<tr>';
        table7+='<td width="60%">'+items7[i].Particulars+'</td>';
        table7+='<td width="20%">'+items7[i].Time+'</td>';
        table7+='<td width="20%">'+items7[i].Price+'</td>';
        table7+='</tr>';
    }
    table5+='</table>';
    document.getElementById('new_table7').innerHTML=table7;

    var table6='<table class="table2" border="1" bordercolor="#ddd">'
    table6+='<thead>';
    table6+='<tr>';
    for(var i=0;i<heading6.length;i++){
        table6+='<th>'+heading6[i]+'</th>';
    }
    table6+='</tr>';
    table6+='</thead>';
    for(var i=0;i<items6.length;i++){
        table6+='<tr>';
        table6+='<td width="40%">'+items6[i].Room+'</td>';
        table6+='<td width="15%">'+items6[i]._16N+'</td>';
        table6+='<td width="15%">'+items6[i]._714N+'</td>';
        table6+='<td width="15%">'+items6[i]._1421N+'</td>';
        table6+='<td width="15%">'+items6[i].greater21+'</td>';
        table6+='</tr>';
    }
    table6+='</table>';
    document.getElementById('new_table6').innerHTML=table6;


    var table88='<table id="rt1" class="rt cf" border="1" bordercolor="#ddd">'
    table88+='<thead class="cf">';
    table88+='<tr>';
    table88+='<th>Classical Panchakarma</th>';
    table88+='<th>Treatment ($)</th>';
    table88+='<th>Fooding ($)</th>';
    table88+='<th>Common Room ($)</th>';
    table88+='<th>Single A ($)</th>';
    table88+='<th>Single B ($)</th>';
    table88+='<th>Special Room ($)</th>';
    table88+='</tr>';
    table88+='</thead>';
    for(var i=0;i<items8.length;i++){
        table88+='<tr>';
        table88+='<td>'+items8[i].Classical+'</td>';
        table88+='<td>'+items8[i].Treatment+'</td>';
        table88+='<td>'+items8[i].Fooding+'</td>';
        table88+='<td>'+items8[i].Common+'</td>';
        table88+='<td>'+items8[i].A+'</td>';
        table88+='<td>'+items8[i].B+'</td>';
        table88+='<td>'+items8[i].Special+'</td>';
        table88+='</tr>';
    }
    table88+='</table>';
    document.getElementById('new_table88').innerHTML=table88;



    var table8='<table class="table2"  border="1" bordercolor="#ddd">'
    table8+='<thead>';
    table8+='<tr>';
    table8+='<th rowspan="2" width="15%">Classical Panchakarma</th>';
    table8+='<th rowspan="2 width="14%"">Treatment<br/>($)</th>';
    table8+='<th rowspan="2" width="14%">Fooding<br/>($)</th>';
    table8+='<th colspan="4" width="14%">Accommodation</th>';
    table8+='</tr>';
    table8+='<tr>';
    table8+='<th width="14%">Common Room<br/>($)</th>';
    table8+='<th width="14%">Single A<br/>($)</th>';
    table8+='<th width="14%">Single B<br/>($)</th>';
    table8+='<th width="14%">Special Room<br/>($)</th>';
    table8+='</tr>';
    table8+='</thead>';
    for(var i=0;i<items8.length;i++){
        table8+='<tr>';
        table8+='<td width="15%">'+items8[i].Classical+'</td>';
        table8+='<td width="14%">'+items8[i].Treatment+'</td>';
        table8+='<td width="14%">'+items8[i].Fooding+'</td>';
        table8+='<td width="14%">'+items8[i].Common+'</td>';
        table8+='<td width="14%">'+items8[i].A+'</td>';
        table8+='<td width="14%">'+items8[i].B+'</td>';
        table8+='<td width="14%">'+items8[i].Special+'</td>';
        table8+='</tr>';
    }
    table8+='</table>';
    document.getElementById('new_table8').innerHTML=table8;

    var table99='<table id="rt1" class="rt cf" border="1" bordercolor="#ddd">'
    table99+='<thead  class="cf">';
    table99+='<tr>';
    table99+='<th>Classical Panchakarma</th>';
    table99+='<th>Common Room($)</th>';
    table99+='<th>Single A($)</th>';
    table99+='<th>Single B($)</th>';
    table99+='<th>Special Room($)</th>';
    table99+='</tr>';
    table99+='</thead>';
    for(var i=0;i<items9.length;i++){
        table99+='<tr>';
        table99+='<td>'+items9[i].Classical+'</td>';
        table99+='<td>'+items9[i].Common+'</td>';
        table99+='<td>'+items9[i].A+'</td>';
        table99+='<td>'+items9[i].B+'</td>';
        table99+='<td>'+items9[i].Special+'</td>';
        table99+='</tr>';
    }
    table99+='</table>';
    document.getElementById('new_table99').innerHTML=table99;
</script>


@endsection
