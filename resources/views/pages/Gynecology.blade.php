@extends('layout.app')
@section('style')
<style>
    p{
        background-color:#eee;
        font-family: "Times New Roman", Times, serif;
        text-align: left;
        margin: 20px;
        padding: 20px;
    }
    .cities h3 {
        background-color: #333;
        color: white;
        margin: 20px;
        padding: 20px;
        text-align: left;
    }

</style>

@section('content')
    <div style="margin-top: 100px">
        <img  src="https://elitemedicalprep.com/wp-content/uploads/2019/10/OBGYN.jpg" width="1670" height="600">

        <br> <br>
        <p>
            This department is one of the major and basic departments in Al Hammadi hospitals and provides a distinguished service and a high level of advanced health care for women and their children, so it is independently equipped by a specialized women's team and highly experienced female consultants assisted by female specialists with international fellowships, professional midwives and nurses with highly professional experience. Al Hammadi hospitals have five-star hotel suites including royal suites and luxury suites where women are highly privileged, post-natal follow-up, and diagnosing plus treating the most complex women's medical conditions. <br>
            <br>
        </p>
        <br>

        <div class="cities">
            <h3>This section consists of the following specialized units:</h3>
            <p>1 - L & D rooms and operations Rooms , equipped with the latest devices to facilitate the process of delivery and reviving the child.<br>
                2 - Medical Endoscopy Unit.<br>
                3 – The unit of Radiology diagnostic tools, and includes the imaging and ultrasound service supervised by female doctors with their international certificates and experiences.
            </p>
        </div>

        <div class="cities">
            <h3> The department performs the following medical procedures:</h3>
            <p>
                - Women surgeries by traditional operations as well as by medical speculum, and used for treatment and diagnosis of diseases. <br>
                - Medical care for all pregnancies and births, including childbirth without pain. <br>
                - Early diagnosis of ectopic pregnancy and bleeding during the first months of pregnancy. <br>
                - Cervical endoscopy for the early detection of all cases of cervical inflammation and early detection of cancer.<br>
                - The cervix, either by cooling or ironing. <br>
                - Medical care and treatment of all cases of pregnant women with diabetes or heart problems, respiratory, neurological or renal or other, where special attention is given to each case. <br>
                - Treatment of infertility cases. <br>
                - Blood tests for those women who are endanger of having Down syndrome babies. <br>
                - Encourage the process of breastfeeding as much as possible.</p>
        </div>

    </div>
@endsection
