$(document).ready(function() {
    $("#work-window").load('./snippets/index.php');
    // Set up nav bar functionality
    $("#home").click(function (e) {
        setActive('home');
        $("#work-window").load('./snippets/index.php');
    });
    $("#add-problem").click(function (e) {
        setActive('add-problem');
        $("#work-window").load('./snippets/addproblem.php');
        setupAddProblem();
    });
});

function ajaxRequest(type, url, data, responseFunction) {
    $.ajax({
        type: type,
        url: url,
        data: data,
        success: function (result) {
            window[responseFunction](result);
        }
    });
}

function setActive(nav) {
    $(".navbar li").removeClass("active");
    $("#" + nav).addClass("active");
}

function setupAddProblem() {
    ajaxRequest('GET', '../requests/addproblemview.php', {}, 'buildTypes');
    $(document).on("click", "#addSubmit", function(){
        ajaxRequest('POST', '../requests/addproblemadd.php', {
            'questionType' : $("#problem-type").val(),
            'description' : $("#problem-text").val(),
            'answera' : $("#answera").val(),
            'answerb' : $("#answerb").val(),
            'answerc' : $("#answerc").val(),
            'answerd' : $("#answerd").val(),
            'correctAnswer' : $("#correct-answer").val()
    }, 'problemAdded');
    });
}

function buildTypes(response) {
    $.each(JSON.parse(response), function(key, value) {
        $('#problem-type')
            .append($("<option></option>")
                .attr("value",value[0])
                .text(value[1]));
    });
}

function problemAdded(response) {
    console.log(response);
}