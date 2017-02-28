$(document).ready(function () {
            $("#submit").click(function (event) {
               event.preventDefault();

                console.log('Bjr');
					var texteHaut = $('#test').val();	
					var texteBas = $('#test1').val();	
					var colorHaut = $('#color').val();
					var colorBas = $('#color1').val();
					var tailleHaut = $('#tailleHaut').val();
					var tailleBas = $('#tailleBas').val();
					var rotationHaut = $('#rotation').val();
					var rotationBas = $('#rotation1').val();
					var leftPhraseHaut = $('#left').val();
					var topPhraseHaut = $('#top').val();
					var leftPhraseBas = $('#left1').val();
					var topPhraseBas = $('#top1').val();

				if(texteHaut !== "" || texteBas !== "")
				{
					$.post('affMeme.php',{'topPhraseBas':topPhraseBas,
										  'leftPhraseBas':leftPhraseBas, 
										  'topPhraseHaut':topPhraseHaut, 
										  'leftPhraseHaut':leftPhraseHaut, 
										  'rotationBas':rotationBas, 
										  'rotationHaut':rotationHaut,
										  'tailleBas':tailleBas,
										  'tailleHaut':tailleHaut,
										  'texteHaut':texteHaut,
										   'texteBas':texteBas,
										    'colorHaut':colorHaut,
										    'colorBas':colorBas},function(data)
					{
					$('#image').attr('src', 'data:image/jpeg;base64,'+ data);
					});
				}
				else
				{
					$('#recupAjax').text('Veuillez saisir une blague');
				}
            });

            $("#submit1").click(function (e) {
               e.preventDefault();
               	var texteHaut = $('#test').val();	
					var texteBas = $('#test1').val();	
					var colorHaut = $('#color').val();
					var colorBas = $('#color1').val();
					var auteur = $('#auteur').val();
					var nomMeme = $('#nomMeme').val();
					var tailleHaut = $('#tailleHaut').val();
					var tailleBas = $('#tailleBas').val();
					var rotationHaut = $('#rotation').val();
					var rotationBas = $('#rotation1').val();
					var leftPhraseHaut = $('#left').val();
					var topPhraseHaut = $('#top').val();
					var leftPhraseBas = $('#left1').val();
					var topPhraseBas = $('#top1').val();
				
					$.post('enrMeme.php',{'auteur':auteur, 
										'nomMeme':nomMeme, 
										'topPhraseBas':topPhraseBas,
										  'leftPhraseBas':leftPhraseBas, 
										  'topPhraseHaut':topPhraseHaut, 
										  'leftPhraseHaut':leftPhraseHaut, 
										  'rotationBas':rotationBas, 
										  'rotationHaut':rotationHaut,
										  'tailleBas':tailleBas,
										  'tailleHaut':tailleHaut,
										  'texteHaut':texteHaut,
										   'texteBas':texteBas,
										    'colorHaut':colorHaut,
										    'colorBas':colorBas},function(data)
					{
					
					});
				
            });

            
 });