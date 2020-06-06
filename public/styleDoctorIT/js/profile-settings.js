/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Template
Version      : 1.0
*/

(function($) {
    "use strict";
	
	// Pricing Options Show
	
	$('#pricing_select input[name="rating_option"]').on('click', function() {
		if ($(this).val() == 'price_free') {
			$('#custom_price_cont').remove();
			//$('#selectdaymenlabas').show();
			  var   text =  ' <select class="custom-select" name="motif" required>'+
                    '<option value="simple visite<">simple visite</option>'+
                    '<option value="ychouf radio ta3o">ychouf radio ta3o</option>'+
                   ' <option value="dja rdv">dja rdv</option>'+
                    '<option value="yharech machi srx">yharech machi srx</option>'+
                '</select>';
  var    div1 = document.createElement('div');
$(div1).addClass("form-group").attr('id', 'selectdaymenlabas')
    .html(text)
    .appendTo($("#divtoappenddd")) ; 
		}
		if ($(this).val() == 'custom_price') {
			//$('#custom_price_cont').show();
			var text2 = '<div class="form-group mb-0">'+
                   ' <textarea name="motif" class="form-control" rows="1" required></textarea>' +                    
                            '<div class="invalid-feedback">'+
                       ' Veuillez remplire ce champs.'+
                           '</div>'+
               ' </div>';


 var    div2 = document.createElement('div');
$(div2).addClass("col-md-12").attr('id', 'custom_price_cont')
    .html(text2)
    .appendTo($("#divtoappenddd")) ; 

			$('#selectdaymenlabas').remove();
		}
		else {
		}
	});
	



        
    




	// Education Add More
	
    $(".education-info").on('click','.trash', function () {
		$(this).closest('.education-cont').remove();
		return false;
    });

    $(".add-education").on('click', function () {
		
		var educationcontent = '<div class="row form-row education-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row form-row">' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="form-group">' +
							'<label>Degree</label>' +
							'<input type="text" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="form-group">' +
							'<label>College/Institute</label>' +
							'<input type="text" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="form-group">' +
							'<label>Year of Completion</label>' +
							'<input type="text" class="form-control">' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
		'</div>';
		
        $(".education-info").append(educationcontent);
        return false;
    });
	
	// Experience Add More
	
    $(".experience-info").on('click','.trash', function () {
		$(this).closest('.experience-cont').remove();
		return false;
    });

    $(".add-experience").on('click', function () {
		 var cur=$('#myTabletaii tr').length+1;
		var experiencecontent = '<tr class="experience-cont" >'+
'<td><input name="nomMedicament" type="text" class="form-control" required><div class="invalid-feedback">Veuillez remplire ce champs.</div></td>'+
'<td><input name="Duree" type="number" class="form-control" required><div class="invalid-feedback">Veuillez remplire ce champs.</div></td>'+
'<td><input name="nbrDefoisParJour" type="number" class="form-control" required><div class="invalid-feedback">Veuillez remplire ce champs.</div></td>'+
'<td><div id="pricing_select"><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="price_free123'+cur+'" name="AvantApres'+cur+'"  class="custom-control-input radionot" value="Avant" checked><label class="custom-control-label" for="price_free123'+cur+'">Avant</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="price_custom684685'+cur+'" name="AvantApres'+cur+'" class="custom-control-input radionot" value="apres" ><label class="custom-control-label" for="price_custom684685'+cur+'">Apres</label></div></div></td>'+
'<td><div class="col-12 col-md-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div></td>'+                       
                        '</tr>'
		
		;
		
        $(".experience-info").append(experiencecontent);
        return false;
    });
	
	// Awards Add More
	
    $(".awards-info").on('click','.trash', function () {
		$(this).closest('.awards-cont').remove();
		return false;
    });

    $(".add-award").on('click', function () {

        var regcontent = '<div class="row form-row awards-cont">' +
			'<div class="col-12 col-md-5">' +
				'<div class="form-group">' +
					'<label>Name Mesure</label>' +
					'<input type="text" class="form-control" required>' +
					' <div class="invalid-tooltip"> Veuillez remplire ce champs</div>'+
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-5">' +
				'<div class="form-group">' +
					'<label>Mesure</label>' +
					'<input type="text" class="form-control" required>' +
					' <div class="invalid-tooltip"> Veuillez remplire ce champs</div>'+
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".awards-info").append(regcontent);
        return false;
    });
	
	// Fichier radio Add More
	
    $(".membership-info").on('click','.trash', function () {
		$(this).closest('.membership-cont').remove();
		return false;
    });

    $(".add-membership").on('click', function () {
 var cur=$("#uldin3 :input[type=file]").length+1;

        var membershipcontent = '<div class="row form-row membership-cont">' +
			'<div class="col-12 col-md-10 col-lg-5">' +
				'<div class="form-group">' +
					'<label>Fichier radio</label>' +
					'<input type="file" name="fichier'+ cur +'" class="form-control" required>' +
					' <div class="invalid-feedback">Veuillez remplire ce champs</div>'+
				'</div>' +
			'</div>' +

				'<div class="col-12 col-md-10 col-lg-5">' +
				'<div class="form-group">' +
					'<label>Nom description Fichier radio</label>' +
					'<input type="text" name="nomFichier" class="form-control" required>' +
					' <div class="invalid-feedback">Veuillez remplire ce champs</div>'+
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".membership-info").append(membershipcontent);
        return false;
    });
	
	// Registration Add More
	
    $(".registrations-info").on('click','.trash', function () {
		$(this).closest('.reg-cont').remove();
		return false;
    });

    $(".add-reg").on('click', function () {

        var regcontent = '<div class="row form-row reg-cont">' +
			'<div class="col-12 col-md-5">' +
				'<div class="form-group">' +
					'<label>Maladies chroniques</label>' +
					'<input type="text" name="MaladiesCr" class="form-control" required >' +
					  ' <div class="invalid-feedback">Veuillez remplire ce champs</div>'+
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-5">' +
				'<div class="form-group">' +
					'<label>type</label>' +
					   '<select class="custom-select" name="type" required>'+
                                '<option value="croniques">croniques</option>'+
                                '<option value="ymou">ymou</option>'+
                                '<option value="soker">soker</option>'+
                               ' <option value="kbach">kbach</option>'+
                            '</select>'+
					' <div class="invalid-feedback">Veuillez selectioner un choix</div>'+
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".registrations-info").append(regcontent);
        return false;
    });
	
})(jQuery);