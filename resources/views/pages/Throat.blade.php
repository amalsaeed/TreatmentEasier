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
        <img  src="https://www.daralshifa.com/media/255234bc-98fe-4f0f-9088-abc94c0af888/N2D4ew/Departments/Department_Banners/ent.jpg" width="1670" height="600">


        <br>
        <br>
        <p>
            The department provides surgical and therapeutic services for children and adults with nasal, ear, or throat disorders. These include cases that accept medical treatment or Methods of surgery, emergencies and wounds.<br>
            <br>
            <br>
        </p>

        <div class="cities">
            <h3>The Department consists of the following specialized units :</h3>
            <p> 1- Outpatient Clinics.<br>
                2- Operating rooms.<br>
            </p>
        </div>

        <div class="cities">
            <h3> The following cases are treated in the department :</h3>
            <p>
                - Tonsillectomy in children and adults.<br>
                - Scaling of nasal cortices.<br>
                - Perform accurate operations on the ear.<br>
                - Manufacturing hearing aids.<br>
                - Microscopic detection of chronic otitis media.<br>
                - Diagnostic endoscopes: for the nose, throat, throat, lung, and esophagus.<br>
            </p>
        </div>
    </div>
@endsection
