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
        <img = src="https://www.everettclinic.com/sites/default/files/department_images/ophthamology.jpg" width="1670" height="600">

<br> <br>
        <p>
            Because of the importance of human sight, and from the source of this importance,
            the hospital is keen to provide the best diagnostic and therapeutic services and the most advanced,
            The integrated system of the Ophthalmology Centre provides health care services for all ages: seniors and children.
            The services are processed by specialised consultants in all eye disciplines. <br>
            <br>
        </p>

        <div class="cities">
            <h3> The following cases are treated in the department :</h3>
            <p>
                - Treatment of myopia, astigmatism (corneal aberration), and after-sight.<br>
                - eye print .<br>
                - White water removal operations.<br>
                - Corneal transplants.<br>
                - Follow-up, treatment and surgery of cases of high-pressure eye (glaucoma).<br>
                - Follow-up and treatment and surgery of cases of strabismus, laziness of the eye, and cases of blockage of lacrimal ducts and lacrimal sac.<br>

            </p>
        </div>
    </div>
@endsection
