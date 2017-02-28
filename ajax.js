$(document).ready(function () {
            $("#submit").click(function (event) {
               event.preventDefault();

                console.log('Bjr');
					var texteHaut = $('#test').val();	
					var texteBas = $('#test1').val();	
					var colorHaut = $('#color').val();
					var colorBas = $('#color1').val();

				if(texteHaut !== "" || texteBas !== "")
				{
					$.post('affMeme.php',{'texteHaut':texteHaut, 'texteBas':texteBas, 'colorHaut':colorHaut, 'colorBas':colorBas},function(data)
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
				
					$.post('enrMeme.php',{'auteur':auteur, 'nomMeme':nomMeme, 'texteHaut':texteHaut, 'texteBas':texteBas, 'colorHaut':colorHaut, 'colorBas':colorBas},function(data)
					{
					
					});
				
            });

            
 });