<?php $__env->startSection('style'); ?>
<style>
    .cities p {
        background-color: #eee;
        color: black;
        margin: 20px;
        padding: 20px;
        text-align: left;
    }
    h1 { color: white;

        background: rgba(19,92,135,0.5);

     }

</style>

<?php $__env->startSection('content'); ?>
    <div style="margin-top: 100px">
        <img src="<?php echo e(asset('dist/images/chill.jpg')); ?>" width="1670" height="600">

        <br> <br>

        <h1>Childre Clinic</h1>

        <div class="cities">
        <p>
            Easier treatment provides all the medical services and care your child needs from the first moments, where the pediatrician begins the cases and the child's development is monitored, while providing the necessary vaccinations for the first days, in addition to the examination and follow-up services for children’s diseases for different ages: <br>
            Comprehensive examination after birth.
            <br>
            Vaccinations
            <br>
            Measure and follow the yellow for newborns.
            <br>
            Breastfeeding problems.
            <br>
            Respiratory and digestive system diseases for newborns.
            <br>
            Bronchitis and pneumonia.
            <br>
            Treating child allergy and asthma.
            <br>
            Chronic cough.
            <br>
            Rheumatic fever on the heart.
            <br>
            Constipation, diarrhea and vomiting.
            <br>
        <hr>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/pages/Children.blade.php ENDPATH**/ ?>