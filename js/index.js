"use strict";
(function() {

    const handleCalc = () => {
        console.log('handle calc');
        const a1 = jQuery('.a1');
        const a2 = jQuery('.a2');
        const a3 = jQuery('.a3');   
        const a4 = jQuery('.a4'); 
        const a5 = jQuery('.a5'); 
        const a6 = jQuery('.a6');   
        const a7 = jQuery('.a7'); 
        const a8 = jQuery('.a8'); 
        const a9 = jQuery('.a9'); 
        const a10 = jQuery('.a10');   
        
        const d1 = jQuery('.d1');
        const d2 = jQuery('.d2');
        const d3 = jQuery('.d3');
        const d4 = jQuery('.d4');
        const d5 = jQuery('.d5');
        const d6 = jQuery('.d6');
                 
        const resultPlaceholder = jQuery('.result_placeholder');
        const calculate_btn = jQuery('.calculate_btn');

        calculate_btn.click(function(event) {
            event.preventDefault();
            const a1_val = !isNaN(parseFloat(a1.val())) ? parseFloat(a1.val()) : 0;
            const a2_val = !isNaN(parseFloat(a2.val())) ? parseFloat(a2.val()) : 0;
            const a3_val = !isNaN(parseFloat(a3.val())) ? parseFloat(a3.val()) : 0;
            const a4_val = !isNaN(parseFloat(a4.val())) ? parseFloat(a4.val()) : 0;
            const a5_val = !isNaN(parseFloat(a5.val())) ? parseFloat(a5.val()) : 0;
            const a6_val = !isNaN(parseFloat(a6.val())) ? parseFloat(a6.val()) : 0;
            const a7_val = !isNaN(parseFloat(a7.val())) ? parseFloat(a7.val()) : 0;
            const a8_val = !isNaN(parseFloat(a8.val())) ? parseFloat(a8.val()) : 0;
            const a9_val = !isNaN(parseFloat(a9.val())) ? parseFloat(a9.val()) : 0;
            const a10_val = !isNaN(parseFloat(a10.val())) ? parseFloat(a10.val()) : 0;
                        
            const d1_val = !isNaN(parseFloat(d1.val())) ? parseFloat(d1.val()) : 0;
            const d2_val = !isNaN(parseFloat(d2.val())) ? parseFloat(d2.val()) : 0;
            const d3_val = !isNaN(parseFloat(d3.val())) ? parseFloat(d3.val()) : 0;
            const d4_val = !isNaN(parseFloat(d4.val())) ? parseFloat(d4.val()) : 0;
            const d5_val = !isNaN(parseFloat(d5.val())) ? parseFloat(d5.val()) : 0;
            const d6_val = !isNaN(parseFloat(d6.val())) ? parseFloat(d6.val()) : 0;

			const rezultat_avere_neta = a1_val + a2_val + a3_val + a4_val + a5_val + a6_val + a7_val + a8_val + a9_val + a10_val - d1_val - d2_val - d3_val - d4_val - d5_val - d6_val;
		 	const rezultat_formatat = rezultat_avere_neta.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
			const rezultat_afisat = "<div class='rezultat_final'>Avere personala netă: <br><h2>"+rezultat_formatat+" € </h2></div>" ;			
			
		
            resultPlaceholder.html(rezultat_afisat);
            
        })
    }

    jQuery(document).ready(function() {
        handleCalc();
    });
})()
