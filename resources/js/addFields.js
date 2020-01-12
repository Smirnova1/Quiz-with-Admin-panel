$(document).ready(function () {
    let questionType = $('#questionType');
    let questionTypeValue;
    let typeValue = $('#typeValue');
    let addOptions = $('#addOptions');
    let removeOptions = $('#removeOptions');
    let optionFields = $('.optionFields');
    let resetSelect = $('#resetSelect');

    questionType.change(function () {
        questionType.attr('disabled', 'disabled');
        resetSelect.removeAttr('hidden');

        resetSelect.click(function () {
            questionType.removeAttr('disabled');
            questionType.val('Type of question');
            addOptions.attr('hidden', 'hidden');
            removeOptions.attr('hidden', 'hidden');
            $('.field').remove();
        });

        questionTypeValue = questionType.val();
        typeValue.val(questionTypeValue);

        if (typeValue.val() === 'text') {
            $('<div class="field"><input class="form-control" type="text" name="options[]" required />' +
                '<input name="is_correct[]" hidden value="1" >\n' +
                '</div>').appendTo(optionFields);
        }

        if (typeValue.val() === 'checkbox' || typeValue.val() === 'radio') {
            addOptions.removeAttr('hidden');
            let i = 0;
            addOptions.click(function () {
                if (i > 3) {
                    return false;
                }
                removeOptions.removeAttr('hidden');
                $('<div class="field"><input type="text" name="options[]" required />' +
                    '<input type="hidden" name="is_correct[' + i + ']" value="0">\n' +
                    '<input id="is_correct' + i + '" type="checkbox" name="is_correct[' + i + ']" value="1">\n' +
                    '<label for="is_correct' + i + '" class="label">correct option</label>' +
                    '</div>').appendTo(optionFields);
                i++;
            });
        }
    });
    removeOptions.click(function () {
        $('.field:last').remove();
    });
});