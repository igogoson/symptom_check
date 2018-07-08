
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