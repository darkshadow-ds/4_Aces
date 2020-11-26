<head>
    <style type="text/css">
        #op1,
        #op2,
        #op3,
        #op4,
        #op5,
        #op6,
        #op7,
        #op8,
        #op9,
        #op10,
        #op11,
        #op12,
        #op13
        {
            display:none;
        }   
    </style>
</head>


<div class="input-field">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" list="careers" name="career" id="career" placeholder="Field of Interest" value="<?php echo $career; ?>" reqiured />
 
    <datalist id="careers">
        <option id="o1" value="Architecture and Engineering">
        <option id="o2" value="Arts,Culture and Entertainment">
        <option id="o3" value="Business,Management and Administration">
        <option id="o4" value="Communications">
        <option id="o5" value="Community and Social Services">
        <option id="o6" value="Education">
        <option id="o7" value="Science and Technology">
        <option id="o8" value="Installation,Repair and Maintenance">
        <option id="o9" value="Farming,Fishing and Forestry">
        <option id="o10" value="Government">
        <option id="o11" value="Health and Medicine">
        <option id="o12" value="Law and Public Policy">
        <option id="o13" value="Sales">
    </datalist>
</div>

<div class="input-field centered" id="op1">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op1" list="archEngg" />
    <datalist id="archEngg">
        <option value="Architect">
        <option value="Civil engineer">
        <option value="Landscape Architect">
        <option value="Sustainable designer">
        <option value="Biomedical engineer">
        <option class="student" value="Pursuing B.Arch">    
    </datalist>
</div>

<div class="input-field centered" id="op2">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op2" list="arts" />
    <datalist id="arts">
        <option value="Singer/Songwriter/Music Producer">
        <option value="Art curator">
        <option value="Graphic designer">
        <option value="Fashion designer">
        <option value="Photographer">
        <option value="Animator">  
        <option class="student" value="Pursuing Arts">     
    </datalist>
</div>

<div class="input-field centered" id="op3">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op3" list="BBA" />
    <datalist id="BBA">
        <option value="Human resources Manager">
        <option value="Marketing assistant">
        <option value="Accountant">
        <option value="Secretary">
        <option value="Real estate agent">
        <option value="Business development manager">  
        <option class="student" value="Pursuing BBA/MBA">
    </datalist>
</div>

<div class="input-field centered" id="op4">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op4" list="Comm" />
    <datalist id="Comm">
        <option value="Journalist">
        <option value="Copywriter">
        <option value="Public relations specialist">
        <option value="Meeting/event planner">
        <option value="Social media manager">
        <option class="student" value="Pursuing Mass Comm.">    
    </datalist>
</div>

<div class="input-field centered" id="op5">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op5" list="SSer" />
    <datalist id="SSer">
        <option value="School counselor">
        <option value="Speech pathologist">
        <option value="Rehabilitation counselor">
        <option value="Licensed clinical social worker">
        <option value="Child welfare social worker">
        <option value="Palliative and hospice care worker">
        <option class="student" value="Part of NCC/NSS">    
    </datalist>
</div>  

<div class="input-field centered" id="op6">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op6" list="Edu" />
    <datalist id="Edu">
        <option value="School teacher">
        <option value="College professor">
        <option value="Coaching teacher">
        <option value="Sports Teacher">    
        <option value="Home Tutor">
        <option class="student" value="Student">
    </datalist>
</div>

<div class="input-field centered" id="op7">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op7" list="SciTech" />
    <datalist id="SciTech">
        <option value="Archeologist">
        <option value="Software engineer">
        <option value="Laboratory technician">
        <option value="Microbiologist">
        <option value="Physicist">
        <option class="student" value="Pursuing Technical Courses">    
    </datalist>
</div>

<div class="input-field centered" id="op8">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op8" list="main" />
    <datalist id="main">
        <option value="Auto mechanic">
        <option value="Landscaper and groundskeeper">
        <option value="Plumber">    
    </datalist>
</div>

<div class="input-field centered" id="op9">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op9" list="farm" />
    <datalist id="farm">
        <option value="Agricultural worker">
        <option value="Animal breeder">
        <option value="Nursery worker">
        <option value="Forest and conservation worker">
        <option class="student" value="Pursuing Agro-Engineering">    
    </datalist>
</div>

<div class="input-field centered" id="op10">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op10" list="govt" />
    <datalist id="govt">
        <option value="Research Associate">
        <option value="IT Consultant">
        <option value="Government school staff">   
    </datalist>
</div>

<div class="input-field centered" id="op11">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op11" list="med" />
    <datalist id="med">
        <option value="Anesthesiologist">
        <option value="Dental assistant">
        <option value="Nurse">
        <option value="Veterinarian">
        <option value="Physical therapist">
        <option class="student" value="Pursuing MBBS">      
    </datalist>
</div>

<div class="input-field centered" id="op12">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op12" list="law" />
    <datalist id="law">
        <option value="Public administrator">
        <option value="Paralegal">
        <option value="Lawyer">
        <option value="Labor relations specialist">
        <option class="student" value="Pursuing LLB">  
    </datalist>
</div>

<div class="input-field centered" id="op13">
    <i class="centered fas fa-laptop-house"></i>
    <input type="text" placeholder="Further Refining" name="op13" list="sales" />
    <datalist id="sales">
        <option value="Sales associate">
        <option value="sales development rep">
        <option value="Account executive">
        <option value="Regional sales manager">
        <option value="VP of sales">
        <option value="Trainee"> 
    </datalist>
</div>



<script type="text/javascript">
    var career=document.getElementById("career");
    const o1=document.getElementById("careers").options[0].value;
    const o2=document.getElementById("careers").options[1].value;
    const o3=document.getElementById("careers").options[2].value;
    const o4=document.getElementById("careers").options[3].value;
    const o5=document.getElementById("careers").options[4].value;
    const o6=document.getElementById("careers").options[5].value;
    const o7=document.getElementById("careers").options[6].value;
    const o8=document.getElementById("careers").options[7].value;
    const o9=document.getElementById("careers").options[8].value;
    const o10=document.getElementById("careers").options[9].value;
    const o11=document.getElementById("careers").options[10].value;
    const o12=document.getElementById("careers").options[11].value;
    const o13=document.getElementById("careers").options[12].value;

    career.onchange=function(){
       if(this.value==o1){
            $("#op1").slideDown();
       }else{
            $("#op1").slideUp().remove();
        }
       if(this.value==o2){
            $("#op2").slideDown();
       }else{
            $("#op2").slideUp().remove();
       }
       if(this.value==o3){
            $("#op3").slideDown();
       }else{
            $("#op3").slideUp().remove();
       }
       if(this.value==o4){
           $("#op4").slideDown();
       }else{
           $("#op4").slideUp().remove();
       }
       if(this.value==o5){
           $("#op5").slideDown();
       }else{
           $("#op5").slideUp().remove();
       }
       if(this.value==o6){
           $("#op6").slideDown();
       }else{
           $("#op6").slideUp().remove();
       }
       if(this.value==o7){
           $("#op7").slideDown();
       }else{
           $("#op7").slideUp().remove();
       }
       if(this.value==o8){
           $("#op8").slideDown();
       }else{
           $("#op8").slideUp().remove();
       }
       if(this.value==o9){
           $("#op9").slideDown();
       }else{
           $("#op9").slideUp().remove();
       }
       if(this.value==o10){
           $("#op10").slideDown();
       }else{
           $("#op10").slideUp().remove();
       }
       if(this.value==o11){
           $("#op11").slideDown();
       }else{
           $("#op11").slideUp().remove();
       }
       if(this.value==o12){
           $("#op12").slideDown();
       }else{
           $("#op12").slideUp().remove();
       }
       if(this.value==o13){
            $("#op13").slideDown();
       }else{
            $("#op13").slideUp().remove();
       }
    };   
    
    // if($('input[name^="op"]').val()==$('option[class="student"]').val()){
    //     $("#org").slideDown();
    // }
    $('input[name="op1"]').change(function(){
        if($("#archEngg option[value='" + $('input[name="op1"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op2"]').change(function(){
        if($("#arts option[value='" + $('input[name="op2"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op3"]').change(function(){
        if($("#BBA option[value='" + $('input[name="op3"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op4"]').change(function(){
        if($("#Comm option[value='" + $('input[name="op4"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op5"]').change(function(){
        if($("#SSer option[value='" + $('input[name="op5"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op6"]').change(function(){
        if($("#Edu option[value='" + $('input[name="op6"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op7"]').change(function(){
        if($("#SciTech option[value='" + $('input[name="op7"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });    

    $('input[name="op9"]').change(function(){
        if($("#farm option[value='" + $('input[name="op9"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

      

    $('input[name="op11"]').change(function(){
        if($("#med option[value='" + $('input[name="op11"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

    $('input[name="op12"]').change(function(){
        if($("#law option[value='" + $('input[name="op12"]').val() + "']").attr('class')==="student"){
                $("#org").slideDown();
        }else{
            $("#org").slideUp().remove();
       }
    });   

</script>