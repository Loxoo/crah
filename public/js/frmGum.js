$(document).ready(function(){
	$('#btn_valider_cuid').click(function(){
		if(!$('#cuid').val()) {
			alert('Veuillez renseigner votre identifiant !');
			return false;
		}
		
		$.ajax({
			
			type: 'POST',
			url: "ajaxLdap.php",
			dataType: "json",
			data : { 
				"cuid" : $('#cuid').val()
			}, 
			success : function (r) {
				if(!r.uid) {
					alert('Erreur lors d\'appel au LDAP !')
				}
				
				$('#nom').val(r.snNormalize);
				$('#prenom').val(r.givenNameNormalize);
				$('#telephone').val(r.telephoneNumber.replace('+33 ','0'));
				$('#mail').val(r.mail);
			},
			error : function(r) {
				alert('Erreur lors d\'appel au LDAP !')
			}
		});
	});
	
	if($('#cuid').val()) {
		$('#btn_valider_cuid').click();
	}
	
	$('#do').change(function() {
		if($(this).val()) {
			getUniteTraitement($(this).val());
		}
	});

	if ($('#do').val()) {
		getUniteTraitement($('#do').val());		
	}
	
	$('#id_origine_vrille').change( function() {
		$('#ligneBoutique').hide();
		if ($(this).val() == '43') {
			$('#ligneBoutique').show();
		}
		
	});
	
	$('#btn_valider').click(function() {
		champsManquant = '';
		format = '';
		var filtreTel = /^0[0-9]{9}$/;
		var filtreCP = /^\d{5}$/;
		
		//SALARIE
		if(!$('#cuid_salarie').val()) {
			champsManquant += '- CU-ID\n';
		}
		
		if(!$('#mail_salarie').val()) {
			champsManquant += '- mail\n';
		} else if( !chk($('#mail_salarie').val())) {
			format += 'mail non valide \n';
		}
		
		//contact
		if(!$('#nom_contact').val()) {
			champsManquant += '- nom\n';
		}
		
		if(!$('#prenom_contact').val()) {
			champsManquant += '- prenom\n';
		}
		
		
		if (!$('#tel_contact').val() || !filtreTel.test($('#tel_contact').val()) ) { 
			format += 'telephone non valide\n';
		}
		
		if(!$('#cp_contact').val()) {
			champsManquant += '- code postal\n';
		}
		
		if(!$('#ville_contact').val()) {
			champsManquant += '- ville\n';
		}
		
		if(!$('input[name="type_pb"]:checked', '#frmGUM').val()) {
			champsManquant += '- Type de probleme\n';
		}
		
		if(!$('input[name="offre"]:checked', '#frmGUM').val()) {
			champsManquant += '- offre\n';
		}
		
		if(!$('#nd_concerne').val()) {
			champsManquant += '- ND\n';
		} else if (!filtreTel.test($('#nd_concerne').val()) ) { 
			format += 'ND non valide\n';
		}
		
		if (champsManquant != '') {
			alert('Vous devez renseigner les champs suivants :\n'+champsManquant);
		}
		
		if (format != '') {
			alert(format);
		}
		
		if (champsManquant == '' && format == '') {
			$('#frmGUM').submit();			
		}
		
	});
	
});

function getUniteTraitement(idDirection) {

	$.ajax({
		type: 'POST',
		url: "ajaxUniteGUMByDO.php",
		dataType: "json",
		data : { 
			"do" : idDirection
		},
		success : function (r) {
			if(!r[0]) {
				$('#divUniteTraitement').html('Aucune unité de traitement disponible.');
			} else {
				select = '<select name="unite_traitement" id="unite_traitement" >';
				for(var i in r) {
					select += '<option value="'+r[i].id_unite_traitement+'">'+r[i].libelle+'</option>';
				}
				
				select += '</select>';
				
				$('#divUniteTraitement').html(select);
			}
			
		},
		error : function(r) {
			alert('Erreur lors de la récupération des unité de traitements !')
		}
	});

}