$(document).ready(function() {
    $(document).foundation();

    $('#owl-example').owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        lazyLoad: true
    });
});


function gerechtToevoegen(event) {

    document.write('hoi');

    event.preventDefault();
}

function filmToevoegen(event) {

    var titel = $('#filmtitel').val(),
        genre = $('#filmgenre').val(),
        speelduur = $('#filmspeelduur').val(),
        regisseur = $('#filmregisseur').val(),
        taalversie = $('#filmtaalversie').val(),
        dried = $('#filmdried').val(),
        omschrijving = $('#filmomschrijving').val(),
        filmposter = $('#filmposter').val(),
        trailer = $('#filmtrailer').val(),
        imdb = $('#filmimdb').val();

    $.ajax({
        type: "POST",
        url: "/bontekoe9/medewerker/filmtvgn",
        data: {
            titel: titel,
            genre: genre,
            speelduur: speelduur,
            regisseur: regisseur,
            taalversie: taalversie,
            dried: dried,
            omschrijving: omschrijving,
            filmposter: filmposter,
            trailer: trailer,
            imdb: imdb
        }
    }).success(function(data) {
        $('.response').html('<div data-alert class="alert-box success" id="alert">Toegevoegd<a class="close">&times;</a></div>')
    }).error(function() {
        alert('fail');
    });

    event.preventDefault();
}

$('#zoekterm').bind('input propertychange', function() {
    var zoekterm = $('#zoekterm').val();

    $.ajax({
        type: "POST", 
        url: "/bontekoe9/bioscoop/filmzkn",
        dataType: "json",
        data: {zoekterm: zoekterm}
    }).success(function(data) {
    
        $('#filmResponse, #filmOverzicht').html('');
        $.each(data, function(index, value) {
            $('#filmOverzicht').append('<tr><td>' + data[index]['id'] + '</td><td>' + data[index]['titel'] + '</td><td><form action="/bontekoe9/medewerker/uitvoeren" method="post"><input type="hidden" value="' + data[index]['id'] + '" name="verwijderen"/><input type="submit" class="button small alert" value="verwijderen"></form></td><td><a href="/bontekoe9/bioscoop/films/' + data[index]['id'] + '" class="button small info left">Wijzigen</a></td></tr>')
            $('#filmResponse').append('<li class="text-center" ><span class="small-text">' + data[index]['titel'] + '</span><a href="/bontekoe9/bioscoop/films/' + data[index]['id'] + '"><img src="' + data[index]['filmposter'] + '"></a></li>');
        })
    });
});

$('#datum').datepicker({dateFormat: 'yy-mm-dd'});
$('#datm').datepicker({dateFormat: 'dd-mm-yy'});

$('#datum').change(function() {
    var d = new Date($('#datum').val());

    var dag = d.getDay();

    switch (dag) {
        case 3:
            $('#tijdstip').html('');
            $('#tijdstip').append('<option value="15:00:00">15:00</option>');
            break;
        case 6:
            $('#tijdstip').html('');
            $('#tijdstip').append('<option value="11:00:00">11:00</option><option value="14:00:00">14:00</option>');
            break;
        case 0:
            $('#tijdstip').html('');
            $('#tijdstip').append('<option value="11:00:00">11:00</option><option value="14:00:00">14:00</option>');
            break;
        default:
            $('#tijdstip').html('');
            $('#tijdstip').append('<option value="20:30:00">20:30</option><option value="23:00:00">23:00</option>');
    };
});
