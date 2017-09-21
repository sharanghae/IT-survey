


	$(document).ready(function(){

		$('#kpop').addClass("active");
		$.ajax({url:"load.php?genre=kpop" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})
		
	});


    
	$('#kpop').click(function(){
    	$('#kpop').addClass("active");
    	$('#rnb').removeClass("active");
    	$('#opm').removeClass("active");
    	$('#rock').removeClass("active");
    	$('#lovesong').removeClass("active");
    	$.ajax({url:"load.php?genre=kpop" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})

	});

	$('#rnb').click(function(){
    	$('#kpop').removeClass("active");
        $('#rnb').addClass("active");
        $('#opm').removeClass("active");
        $('#rock').removeClass("active");
        $('#lovesong').removeClass("active");
        $.ajax({url:"load.php?genre=rnb" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})

	});

	$('#opm').click(function(){
        $('#kpop').removeClass("active");
        $('#rnb').removeClass("active");
        $('#opm').addClass("active");
        $('#rock').removeClass("active");
        $('#lovesong').removeClass("active");
        $.ajax({url:"load.php?genre=opm" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})

	});

	$('#rock').click(function(){
        $('#kpop').removeClass("active");
        $('#rnb').removeClass("active");
        $('#opm').removeClass("active");
        $('#rock').addClass("active");
        $('#lovesong').removeClass("active");
        $.ajax({url:"load.php?genre=rock" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})

	});

	$('#lovesong').click(function(){
        $('#kpop').removeClass("active");
        $('#rnb').removeClass("active");
        $('#opm').removeClass("active");
        $('#rock').removeClass("active");
        $('#lovesong').addClass("active");
        $.ajax({url:"load.php?genre=lovesong" ,success:function(result){
              document.getElementById('bodyof').innerHTML = result;
		}})

	});


    


	









