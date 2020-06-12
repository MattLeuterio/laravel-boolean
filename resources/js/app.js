require('./bootstrap');

$(document).ready(function () {
    
    console.log('js ok, solo section studenti');
    
    // Setup
    const filter = $('#filter'),
          apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders',
          containerStudent = $('.students'),
          qaCta = $('.qa-cta');
          
          
    // qaCta.click( function() {
    //     let thisAnswer = $(this).parents('.question').next('.answer').children('.answer-p');
    //     thisAnswer.addClass('active');



    // });
          

    //console.log(apiUrl);

    const source = $('#student-template').html();
    const template = Handlebars.compile(source);

    filter.on('change', function() {
        let gender = $(this).val();

        console.log(gender);

        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender
            }
        })
        .done(function(res){
            if(res.response.length > 0) {
                console.log(res.response);
                
                //clean
                containerStudent.html('');

                for(let i = 0; i < res.response.length; i++) {
                    let item = res.response[i];

                    var context = {
                        slug: item.slug,
                        img: item.img,
                        nome: item.nome,
                        eta: item.eta,
                        assunzione: (item.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: item.azienda,
                        ruolo: item.ruolo,
                        descrizione: item.descrizione
                    }

                    var output = template(context);
                    containerStudent.append(output);
                }

            } else {
                console.log(res.error);
                
            }

            console.log(res);
            
        })
        .fail(function(){
            console.log('API error');
            
        })
        
    });

    
}); //<-- End Doc Ready