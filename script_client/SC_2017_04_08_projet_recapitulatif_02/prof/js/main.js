var questionnaire = {
    question: 0,
    nb_question: 999,
    reponses: [],
    is_correction: false,
    bonnes_reponses: 0
};

// Fonctions
function is_last_question(quizz) {
    $.ajax({
        url: "quizz.php",
        type: 'GET',
        data: {question: quizz.question + 1},
        dataType: 'JSON',
        success: function (data_json) {
            if (data_json.question === undefined) {
                quizz.nb_question = quizz.question;
            }
        },
        async: false
    });
}
function get_question(quizz) {
    $.ajax({
        url: "quizz.php",
        type: 'GET',
        data: {question: quizz.question},
        dataType: 'JSON',
        success: function (data_json) {
            $('#questions h2').text(data_json.question);

            for (var i = 1, max = data_json.propositions.length; i <= max; i++) {
                $('#proposition' + i).text(data_json.propositions[i - 1]);
                $('#rep' + i).prop('checked', false);
            }

            var rep = quizz.reponses[quizz.question - 1];
            $('#rep' + rep).prop('checked', true);
        }
    });
}
function get_correction(quizz) {
    $.get("quizz.php", {question: quizz.question}, function (data) {
        var data_json = JSON.parse(data);
        $('#questions h2').text(data_json.question);

        for (var i = 1, max = data_json.propositions.length; i <= max; i++) {
            $('#proposition' + i).text(data_json.propositions[i - 1]);
            $('#p_' + i).removeClass('correct').removeClass('error');
            $('#rep' + i).prop('checked', false).prop('readonly', true);
        }

        var rep = quizz.reponses[quizz.question - 1];
        var correct = '' + data_json.correct;

        $('#rep' + rep).prop('checked', true);
        $('#p_' + correct).addClass('correct');

        if (rep === correct) {
            quizz.bonnes_reponses++;
        } else {
            $('#p_' + rep).addClass('error');
        }
    });
}
function check_limits(quizz) {
    is_last_question(quizz);

    // Si première question
    if (quizz.question <= 1) {
        quizz.question = 1;
        $('#previous').attr("disabled", true).addClass("disabled");
        $('#next').attr("disabled", false).removeClass("disabled");
        $('#confirm').attr("disabled", true).addClass("disabled");
    }
    // Si dernière question
    else if (quizz.question >= quizz.nb_question) {
        quizz.question = quizz.nb_question;
        $('#previous').attr("disabled", false).removeClass("disabled");
        $('#next').attr("disabled", true).addClass("disabled");
        $('#confirm').attr("disabled", false).removeClass("disabled");
        $('#exit').attr("disabled", false).removeClass("disabled");
    }
    // Sinon
    else {
        $('#previous').attr("disabled", false).removeClass("disabled");
        $('#next').attr("disabled", false).removeClass("disabled");
        $('#confirm').attr("disabled", true).addClass("disabled");
    }
}
function update_datas(quizz) {
    check_limits(quizz);
    if (quizz.is_correction) {
        get_correction(quizz);
    } else {
        get_question(quizz);
    }
}

// Events
$(':radio').on('click', {QUIZZ: questionnaire}, function (e) {
    var rep = $(':checked').val();
    e.data.QUIZZ.reponses[e.data.QUIZZ.question - 1] = rep;
});
$('#start').on('click', {QUIZZ: questionnaire}, function (e) {
    $(this).hide();
    $('#exit').hide();
    $('#quizz').show();
    e.data.QUIZZ.question = 1;
    update_datas(e.data.QUIZZ);
});
$('#previous').on('click', {QUIZZ: questionnaire}, function (e) {
    e.data.QUIZZ.question--;
    update_datas(e.data.QUIZZ);
});
$('#next').on('click', {QUIZZ: questionnaire}, function (e) {
    e.data.QUIZZ.question++;
    update_datas(e.data.QUIZZ);
});
$('#confirm').on('click', {QUIZZ: questionnaire}, function (e) {
    for (var i = 0; i < e.data.QUIZZ.nb_question; i++) {
        if (!e.data.QUIZZ.reponses[i]) {
            e.data.QUIZZ.question = (i + 1);
            $('#quizz').addClass('error');
            $('#message span').text('Veuillez répondre à cette question');
            update_datas(e.data.QUIZZ);
            return;
        }
    }
    $('#quizz').removeClass('error');
    $(this).hide();
    $('#message').hide();
    $('#previous').hide();
    $('#exit').show();
    $('#exit').attr("disabled", true).addClass("disabled");
    $('#next').attr("disabled", false).removeClass("disabled");

    e.data.QUIZZ.question = 1;
    e.data.QUIZZ.is_correction = true;
    get_correction(e.data.QUIZZ);
});
$('#exit').on('click', {QUIZZ: questionnaire}, function (e) {
    var nb_bonnes_reponses = e.data.QUIZZ.bonnes_reponses;
    $('body').html('<h3>Quizz terminé : vous avez obtenu ' + nb_bonnes_reponses + ' bonne' + (nb_bonnes_reponses > 1 ? 's' : '') + ' réponse' + (nb_bonnes_reponses > 1 ? 's' : '') + '<br/>A bientôt.</h3>');
});