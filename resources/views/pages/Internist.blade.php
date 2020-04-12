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
        <img  src="{{asset('dist/images/net.jpg')}}" width="1670" height="600">

        <br><br>
        <p>
            The internal medicine clinics provide a more specialized quality service through a selection of international talents with the best Western certifications such as the Canadian and American Board and European fellowships. The internal department consists of several units specializing in the diagnosis and treatment of rheumatism and rheumatology, diseases of the elderly, kidneys, hematology, as well as incurable and infectious diseases. <br>
        </p>

        <div class="cities">
            <h3>Divided into specialized units: </h3>
            <p>1- Gastroenterology and liver disease unit.<br>
                2- Thoracic disease Unit.<br>
                3- Neurology Unit. <br>
                4- Endocrinology and Diabetes Unit.<br>
                5- Rheumatology and Immunology Unit.<br>
                6- Kidney and dialysis unit. <br>
                7 - Dermatology Unit.<br>
                8- Psychiatric Clinic.

            </p>
        </div>

        <div class="cities">
            <h3>Details of the following specialized units:</h3>
            <p>First:<br> The intensive care unit, one of the finest care units in the region, competing globally, in terms of system, results and advanced modern technology. It is expanding continuously thanks to the reputation that was received.<br><br>
                Second:<br> Specialized outpatient clinics, which include most of the specialties of internal medicine. <br><br>
                Third:<br> internal departments to follow-up cases, where most cases are being diagnosed and treated.<br><br>
                Fourth:<br> Emergency of Internal Medicine, and it operates 24 hours with excellent efficiency.<br><br>
                Fifth: <br>Cardiology Unit, in which all heart and vascular conditions are diagnosed and treated.<br><br>
                Sixth:<br> The digestive and liver diseases unit. It is equipped with the latest upper and lower endoscopy devices, biliary canal endoscopy and pancreatic canal, and the removal of bile duct stones without surgery.<br><br>
                Seventh:<br> The Unit of Thoracic Diseases and Asthma in where breathing difficulties, bronchial asthma, bronchospasm extend, bronchospasm tightness, respiratory insufficiency and others are being diagnosed and treated.<br><br>
                Eighth:<br> Rheumatology Unit, which diagnoses and treats various rheumatic diseases, especially joint diseases such as rheumatoid, lupus erythematosus, coarseness of the cartilage and its erosion, also rheumatism of muscles and surrounding ligaments.<br><br>
                Ninth: <br>endocrine and Diabetes unit. It investigates cases of rise and fall of diabetes, along with its complications, pituitary, thyroid diseases, adrenal glands, erectile dysfunction, as well as obesity, weight loss, delayed growth and early puberty.<br><br>

                In the Department of Internal Medicine, all the cases of disease and health that a person can be exposed to internally is being treated, and the great pride of this section is the therapeutic successes that brought it too high credibility in the Kingdom and this is a confidence that we cherish.
            </p><br>
        </div>
        <br>
        <div>
            <br>
            <hr>
        </div>
    </div>
@endsection
