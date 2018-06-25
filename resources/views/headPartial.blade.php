
<link rel="stylesheet" type="text/css" href="{{asset('symptom_selector/selector.css_v=1')}}">
<link rel="stylesheet" type="text/css" href="{{asset('symptom_selector/fontawesome/assets/css/font-awesome.min.css')}}" />
<script src="{{asset('libs/jquery-1.12.2.min.js')}}"></script>
<script src="{{asset('libs/json2.js')}}"></script><!-- json for ie7 -->
<script src="{{asset('libs/jquery.imagemapster.min.js_v=1.1')}}"></script>
<script src="{{asset('libs/typeahead.bundle.js')}}"></script>

<script src="{{asset('symptom_selector/selector.js_v=3.3')}}"></script>



<script type="text/javascript">

    var userToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InRlc3RAcHJpYWlkLmNvbSIsInJvbGUiOiJVc2VyIiwiaHR0cDovL3NjaGVtYXMueG1sc29hcC5vcmcvd3MvMjAwNS8wNS9pZGVudGl0eS9jbGFpbXMvc2lkIjoiMTI0IiwiaHR0cDovL3NjaGVtYXMubWljcm9zb2Z0LmNvbS93cy8yMDA4LzA2L2lkZW50aXR5L2NsYWltcy92ZXJzaW9uIjoiMTA3IiwiaHR0cDovL2V4YW1wbGUub3JnL2NsYWltcy9saW1pdCI6Ijk5OTk5OTk5OSIsImh0dHA6Ly9leGFtcGxlLm9yZy9jbGFpbXMvbWVtYmVyc2hpcCI6IlByZW1pdW0iLCJodHRwOi8vZXhhbXBsZS5vcmcvY2xhaW1zL2xhbmd1YWdlIjoiZGUtY2giLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIyMDk5LTEyLTMxIiwiaHR0cDovL2V4YW1wbGUub3JnL2NsYWltcy9tZW1iZXJzaGlwc3RhcnQiOiIyMDAwLTAxLTAxIiwiaXNzIjoiaHR0cHM6Ly9hdXRoc2VydmljZS5wcmlhaWQuY2giLCJhdWQiOiJodHRwczovL2hlYWx0aHNlcnZpY2UucHJpYWlkLmNoIiwiZXhwIjoxNTI5NjU5MjY4LCJuYmYiOjE1Mjk2NTIwNjh9.L0oiuEfeUzwt6HzIqU32s5ggZGzj84lx4-Zfzr1EJTA';


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