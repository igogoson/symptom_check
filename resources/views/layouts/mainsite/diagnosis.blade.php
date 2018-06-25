
@extends('layouts.mainsite.diadnosePartial')

@section('header')


    <link rel="stylesheet" type="text/css" href="{{asset('symptom_selector/selector.css_v=1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('symptom_selector/fontawesome/assets/css/font-awesome.min.css')}}" />
    <script src="{{asset('libs/jquery-1.12.2.min.js')}}"></script>
    <script src="{{asset('libs/json2.js')}}"></script><!-- json for ie7 -->
    <script src="{{asset('libs/jquery.imagemapster.min.js_v=1.1')}}"></script>
    <script src="{{asset('libs/typeahead.bundle.js')}}"></script>

    <script src="{{asset('symptom_selector/selector.js_v=3.3')}}"></script>



    <script type="text/javascript">

        var userToken = '@include('token')';


        $(document).ready(function () {
            $("#symptomSelector").symptomSelector(
                {
                    mode: "diagnosis",
                    webservice: "https://healthservice.priaid.ch",
                    language: "en-gb",
                    specUrl: "sample_specialisation_page",
                    accessToken: userToken
                });
        });
    </script>

    @endsection
@section('content')
<span></span>
<hr>
    <table class="container-table">
        <font size="+5">
        <tr>
            <td valign="middle" colspan="2" class="td-header box-white bordered-box width50"><h4 class="header" id="selectSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">1</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="selectedSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">2</span></h4></td>
            <td valign="middle" class="td-header bordered-box box-white width25"><h4 class="header" id="possibleDiseasesTitle"><span class="badge pull-left badge-primary visible-lg margin5R">3</span></h4></td>
        </tr>
        <tr>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomSelector"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="selectedSymptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="diagnosisList"></div></td>
        </tr>

        </font>
    </table>

    @endsection



