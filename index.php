<?php

// Eski hesabım(Niegra)kapandığı için tekrar upload ettim iyi kullanımlar.
// Coded by levis emeğe saygı yorum satırını silme.

// Methodu post olarak değiştirebilirsiniz kullanıma göre değişir.
$telno = $_GET["gsm"];

foreach (glob("servisler/*.php") as $filename)
{  
	include_once $filename;
}

	echo "Başarıyla bombalandı";

	

	
	


	
?>
       <script id="Protection">
    
    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function(e) {

        
        if (e.keyCode == 123) {
            return false;
        }

     
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            return false;
        }

     
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }

        if (e.ctrlKey && e.keyCode == 83) {
            return false;
        }

       
        if (e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
</script>