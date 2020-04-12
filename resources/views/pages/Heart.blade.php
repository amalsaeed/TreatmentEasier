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
        <img  src="https://www.francetvinfo.fr/image/75eiuo7j0-aa41/1200/450/13873899.jpg" width="1670" height="600">

        <br><br>
        <p>
            The heart is the lifeline of the human body. It is responsible for the first pumping of blood to all parts of the body from the head to the bottom of the foot and the hospital has given it special importance and attention so the hospital dedicated an integrated center for cardiovascular surgery that provides comprehensive care for patients. Different cases of illnesses caused by heart, blood vessels and arteries are treated for all ages under the supervision of consultants and specialists with experience, efficiency and equipped with the latest medical devices and equipment to become one of the most developed centers and it includes the following units: <br>

            Central Care Unit for Cardiology :<br><br>
        </p>



        <div class="cities">
            <h3>Heart Research Laboratories include:</h3>
            <p>Normal ECG and after stress and the mobile layout.<br>
                Testing and programming of cardiorespiratory regulators.<br>
                The unit of cardiac radiography, the Doppler color and the normal after stress.</p>
        </div>

        <div class="cities">
            <h3>Catheter section :</h3>
            <p> Diagnostic catheterization<br>
                Therapeutic catheterization of arterial diseases, valves and implants of heartbeats regulators.</p>
        </div>


        <div class="cities">
            <h3>Cardiac Surgery Department :</h3>
            <p>All open heart operations including arterial diseases, valves and congenital heart defe.</p>
        </div>

        <div class="cities">
            <h3>Pediatric Cardiology Department:</h3>
            <p>The normal ECG and mobile. <br>
                Radiology and Doppler for children.<br>
                Radiology and Doppler of embryos in the uterus for the early diagnosis of congenital heart defects<br>
                Catheterization of some congenital heart defects. <br>
                Cardiac surgery for children.</p><br>
        </div>

        <br>

    </div>
@endsection
