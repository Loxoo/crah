/**
 * Met à jour un champs via l'ajax
 * @param {type} method
 * @param {type} url
 * @param {type} data
 * @param {type} callback
 * @returns {undefined}
 */
function ajax(method, url, data, callback) {
//console.log(1);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: method,
        url: url,
        data: data,
        success: function (reponse) {
            //console.log('here'+reponse);
            //alert('success '+reponse);
            callback(reponse);
        },
        error: function (reponse) {
            //console.log(reponse.status);
            //Si la session à expiré on effectue une redirection
            if (reponse.status === 401) {
                location.reload();
            }
            console.log(reponse);
            //alert('error : '+reponse);
            callback(reponse);
        }
    });
}

/**
 * Animation de fondu d'une couleur vers du blanc
 * @param {type} context
 * @param {type} color
 * @returns true
 */
function colorFade(context, color) {
    var old_color = context.css('background-color');
    context.css('background-color', old_color).animate({
        backgroundColor: color,
    }, 250, function () {
        context.css('background-color', color).animate({
            backgroundColor: old_color,
        }, 1500);
    });
    //context.css('background-color', 'red');
    return true;
}

/**
 * Modifie la valeur du commentaire inscrite en html 
 * A appeler après une modification ajax
 * @param {type} value
 * @param {type} tr_context
 * @returns true
 */
function setCommentValue(value, tr_context) {
    var abbr_comment = tr_context.find('.abbr-comment');
    abbr_comment.attr('title', value);
    //change l'icone (oeil) de visibilitée du commentaire
    if (abbr_comment.children().attr('class') === 'glyphicon glyphicon-eye-close') {
        abbr_comment.children().switchClass('glyphicon-eye-close', 'glyphicon-eye-open');
    }

    return true;
}

/**
 * Modifie le bouton d'alerte lors d'une modification d'alerte
 * @param {type} button
 * @param {type} raiseValue
 * @returns {Boolean}
 */
function changeAlertButton(button, raiseValue) {
    button.removeClass();
    //console.log(button);
    switch (raiseValue) {
        case '0':
            button.addClass('btn btn-default glyphicon glyphicon-ban-circle');
            break;
        case '1':
            button.addClass('btn btn-success glyphicon glyphicon-ok');
            break;
        case '2':
            button.addClass('btn btn-danger glyphicon glyphicon-remove');
            break;
    }
    return true;
}
/**
 * Convertie une date US en date FR
 * @param {type} USformat
 * @returns {String}
 */
function dateFormatFR(USformat) {
    var date = USformat.split(' ');
    var el = date[0].split('-');
    return el[2] + "/" + el[1] + "/" + el[0];
}