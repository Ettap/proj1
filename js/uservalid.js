// JavaScript Document

              function optionSelect() {
                var selected = $( "select" ).val().toString;
                var from = selected,
                    to = "USD",
                    value = $("income").val();

                $.get( 'https://openexchangerates.org/api/latest.json', {
                    app_id: '3a43b77ceddc4e609181d29cc0ce35f9'
                }, function ( data ) {
                    console.log( data.rates.selected );
                } );
              }
