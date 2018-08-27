$(function() {

    $.validator.setDefaults({
        highlight: function(element) {
            $(element)
                .closest('.form-control')
                .addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-control')
                .removeClass('is-invalid');
        }
    });

    $.validator.addMethod( "telefonas", function( value, element ) {
	return this.optional( element ) || /^\+[0-9]+$/i.test( value );
}, "Tik skaiciai" );

    $("#kontaktu-forma").validate({
        rules: {
            vardas: {
                required: true,
                nowhitespace: true,
                lettersonly: true
            },
            email: {
                required: true,
                email: true,
                pattern: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/
            },
            tema: {
                required: true
            },
            pranesimas: {
                required: true,
                minWords: 3
            }
        },
        messages: {
            vardas: {
                required: 'Prasome ivesti savo varda.',
                nowhitespace: 'Prasome pasalinti tarpus.',
                lettersonly: 'Prasome vesti tik raides.'
            },
            email: {
                required: 'Prasome ivesti savo el. pasta.',
                email: 'Prasome ivesti <b>tinkama</b> el. pasta.',
                pattern: 'Prasome ivesti <b>tinkama</b> el. pasta.'
            },
            tema: {
                required: 'Prasome ivesti tema.'
            },
            pranesimas: {
                required: 'Prasome ivesti pranesima.',
                minWords: 'Pranesimas turi buti, sudarytas is nemaziau kaip 3 zodziu !'
            }
        }
    });

    $("#apmokejimas-forma").validate({
        rules: {
            vardas: {
                required: true
            },
            pavarde: {
                required: true
            },
            elpastas: {
                required: true,
                email: true,
                pattern: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/
            },
            adresas: {
                required: true
            },
            pastokodas: {
                required: true
            },
            telefonas: {
                required: true,
                telefonas: true,
                pattern: /(86|\+3706)\d{3}\d{4}/
            }
        },
        messages: {
            vardas: {
                required: 'Prasome ivesti varda.'
            },
            pavarde: {
                required: 'Prasome ivesti pavarde.'
            },
            elpastas: {
                required: 'Prasome ivesti el. pasta.',
                email: 'Prasome ivesti <b>tinkama</b> el. pasta.',
                pattern: 'Prasome ivesti <b>tinkama</b> el. pasta.'
            },
            adresas: {
                required: 'Prasome ivesti adresa.'
            },
            pastokodas: {
                required: 'Prasome ivesti pasto koda.'
            },
            telefonas: {
                required: 'Prasome ivesti telefono numeri.',
                telefonas: 'Jusu numerio formatas turi buti +3706XXXXXXX',
                pattern: 'Prasome ivesti <b>tinkama</b> telefono numeri.'
            }
        }
    });

});
