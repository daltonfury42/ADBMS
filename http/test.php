<?php  ?>

<script>
$('input[name="optionsRadios"]').on('change', function(){
    if ($(this).val()=='update') {
         
        //change to "show update"
         $("#cont").text("show update");
        
    } else  {
       
        $("#cont").text("show Overwritten");
    }
});
</script>


<label class="radio inline">
    <input id="up_radio" type="radio" name="optionsRadios" value="update" checked>
    Update
</label>
<label class="radio inline">
    <input id="ov_radio" type="radio" name="optionsRadios" value="overwritten">  
    Overwritten
</label>
    
<p id="cont">
    sth. here
</p>

