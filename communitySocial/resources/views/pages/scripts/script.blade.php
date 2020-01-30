
<script type="text/javascript">

	$(function(){

		$('#image').hide();
    	$('#video').hide();
    	$('#document').hide();
        $('.pa2').hide();
        

    	$("#media").change(function(){

        	if($(this).val() =="Image"){

        		$('#image').show('slow');
        		$('#video').hide('slow');
        		$('#document').hide('slow');

        	}
        	else if($(this).val() =="Vidéo"){

        		$("#video").show('slow');
        		$('#image').hide('slow');
        		$('#document').hide('slow');
        	}
        	else if($(this).val() =="Document"){

        		$('#document').show('slow');
        		$("#video").hide('slow');
        		$('#image').hide('slow');
        	}
            else{

                $('#document').hide('slow');
                $("#video").hide('slow');
                $('#image').hide('slow');

            }
        })

        $('.lien_2').click(function(){
            $('.pa1').hide();
            $('.pa2').show();
            //alert('hello');
        });

	});

</script>

