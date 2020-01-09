$(document).ready(function () {
    let questionType = $('#questionType');
    let questionTypeValue;
    let typeValue = $('#typeValue');
    questionType.change(function () {
        questionTypeValue = questionType.val();
        typeValue.val(questionTypeValue);
    });
});