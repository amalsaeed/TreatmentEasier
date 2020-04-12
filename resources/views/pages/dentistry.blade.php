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
        <img  src="https://www.nbn.org.il/wp-content/uploads/2010/05/dental_35220901_1908.jpg" width="1670" height="600">


        <br>
        <br>
        <p> The department to provide the patient with an attractive and healthy smile. The department offers modern technologies with all the means and amenities as well as the distinctive services provided to the patient and works to achieve the desired goal.
            Due to the development of dentistry and the need to control and treat dental diseases, the hospital has provided the finest techniques used in oral, dental and maxillofacial treatments by a group of experienced and qualified consultants and specialists providing the highest level of services and developing confidence with the patient. Take care of sterilization services and use the latest equipment.
            <br>
            <br>
        </p>

        <div class="cities">
            <h3>The Department consists of the following specialized units :</h3>
            <p> 1- Outpatient Clinics.<br>
                2- Surgery.<br>
                3- Dental implants.<br>
            </p>
        </div>

        <div class="cities">
            <h3> The following cases are treated in the department :</h3>
            <p>
                - Conservative treatment of dental necrosis of fill and treatment of roots.<br>
                - Fixed teeth fittings crowns and bridges dental implants.<br>
                - Fittings mobile teeth complete sets and "plastic and metal".<br>
                - Medicine and treatment of children's teeth under general anesthesia or local.<br>
                - Treatment of periodontal disease.<br>
                - Oral and maxillofacial surgery: fractures, tumors, and deformities.<br>
                - Oral and Maxillofacial Surgery: Emergency cases of fractures and bruises of the face and jaw.<br>
                - Preventive measures to prevent dental caries for adults and children.<br>
                - Treatment of oral tumors.<br>
            </p>
        </div>
    </div>
@endsection
