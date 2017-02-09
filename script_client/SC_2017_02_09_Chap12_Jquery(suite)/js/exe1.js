$(document).ready(function () {
    var get = document.getElementById('get');
    var set = document.getElementById('set');

    get.addEventListener('click', function () {
        var inputs = [];

        inputs.push( $(':input[type=text]').val() );
        inputs.push( $(':input[type=number]').val() );
        inputs.push( $(':input[type=email]').val() );
        inputs.push( $(':input[type=url]').val() );
        inputs.push( $(':input[type=tel]').val() );
        inputs.push( $(':input[type=date]').val() );
        inputs.push( $(':input[type=color]').val() );
        inputs.push( $(':input[type=range]').val() );
        inputs.push( $(':input[type=hidden]').val() );
        inputs.push( $(':input[type=password]').val() );
        inputs.push( $(':input[type=search]').val() );
        inputs.push( $(':checkbox[value=1]:checked').val() );
        inputs.push( $(':checkbox[value=2]:checked').val() );
        inputs.push( $(':radio[name=radio]:checked').val() );
        inputs.push( $('textarea').val() );
        inputs.push( $('select').val() );
        inputs.push( $('datalist').val() );
        console.log(inputs);


    });
    set.addEventListener('click', function () {
        var inputs = [];

        inputs.push( $(':input[type=text]').val('bob') );
        inputs.push( $(':input[type=number]').val('606') );
        inputs.push( $(':input[type=email]').val('bob@bob.com') );
        inputs.push( $(':input[type=url]').val('www.bob.com') );
        inputs.push( $(':input[type=tel]').val(606606606) );
        inputs.push( $(':input[type=date]').val('1966-06-06') );
        inputs.push( $(':input[type=color]').val() );
        inputs.push( $(':input[type=range]').val() );
        inputs.push( $(':input[type=hidden]').val() );
        inputs.push( $(':input[type=password]').val() );
        inputs.push( $(':input[type=search]').val() );
        inputs.push( $(':checkbox[value=1]:checked').val() );
        inputs.push( $(':checkbox[value=2]:checked').val() );
        inputs.push( $(':radio[name=radio]:checked').val() );
        inputs.push( $('textarea').val() );
        inputs.push( $('select').val() );
        inputs.push( $('datalist').val() );
        console.log(inputs);


    });

});