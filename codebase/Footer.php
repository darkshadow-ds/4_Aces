<footer class="bg-dark py-2 text-light">
	<small><center>© All Rights Reserved</center></small>
</footer>
<script type="text/javascript">
	
    $("#signingIn").click(function () {
	  $.ajax({
       type: "POST",
       url : "http://thefouraces-com.stackstaging.com/actions.php?process=signIn",
       data: "usernameIn=" + $("#usernameIn").val() + "&passwordIn=" + $("#passwordIn").val() +"&loginActive="+$("#loginActive").val(),
       success: function(result){
    //    alert(result);
         if(result=="1"){
            window.location.assign("http://thefouraces-com.stackstaging.com/");
         }else{
           $("#alertDivIn").html(result).show();
         }
      }
     })
	});

	$("#signingUp").click(function () {
	  $.ajax({
       type: "POST",
       url : "http://thefouraces-com.stackstaging.com/actions.php?process=signUp",
       data: "usernameUp=" + $("#usernameUp").val() + "&email=" + $("#email").val() + "&passwordUp=" + $("#passwordUp").val() +"&loginActive="+$("#loginActive").val(),
       success: function(result){
    //    alert(result);
        if(result=="1"){
          window.location.assign("http://thefouraces-com.stackstaging.com/?page=profile");
        }else{
          $("#alertDivUp").html(result).show();
        }
      }
     })
	});

	$("#profileSubmit").click(function(){
	  $.ajax({
       type: "POST",
       url : "http://thefouraces-com.stackstaging.com/actions.php?process=profileSetUp",
	   data: "fname=" + $("#fname").val() + "&lname=" + $("#lname").val() + "&career=" + $("#career").val() +"&further=" + $('input[name^="op"]').val() +"&organisation="+$("#organisation").val() +"&phone=" + $("#phone").val() +"&dob=" + $("#dob").val() +"&city=" + $("#city").val()+"&state=" + $("#state").val()+"&pin=" + $("#pin").val()+"&bio=" + $("#bio").val()+"&image=" + $("#image").val()  ,
       success: function(result){
    //    alert(result);
        if(result=="11"){
          window.location.assign("http://thefouraces-com.stackstaging.com/");
        }else{
          $("#alertDivSet").html(result).show();
        }
      }
     })
	});



</script>

</body>
</html>	