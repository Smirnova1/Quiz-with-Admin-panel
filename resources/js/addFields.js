$(document).ready(function () {
    let questionType = $('#questionType');
    let questionTypeValue;
    let typeValue = $('#typeValue');
    let typeValueEdit = $('#typeValueEdit').val();
    let addOptions = $('#addOptions');
    let addOptionsEdit = $('#addOptionsEdit');
    let removeOptions = $('#removeOptions');
    let removeOptionsEdit = $('#removeOptionsEdit');
    let optionFields = $('.optionFields');
    let resetSelect = $('#resetSelect');
    let i;

    questionType.change(function () {
        questionType.attr('disabled', 'disabled');
        resetSelect.removeAttr('hidden');
        resetSelect.click(function () {
            if (confirm("The page will reload completely. Proceed?")) {
                location.reload();
            }
        });
        questionTypeValue = questionType.val();
        typeValue.val(questionTypeValue);
        if (typeValue.val() === 'text') {
            $('<div class="field"><input class="form-control" type="text" name="options[]" required />' +
                '<input name="is_correct[]" hidden value="1" >\n' + '</div>').appendTo(optionFields);
        }
        if (typeValue.val() === 'checkbox' || typeValue.val() === 'radio') {
            addOptions.removeAttr('hidden');
            i = 0;
            addOptions.click(function () {
                removeOptions.removeAttr('hidden');
                if (i < 4) {
                    $('<div class="field"><input type="text" name="options[]" required />' +
                        '<input type="hidden" name="is_correct[' + i + ']" value="0">\n' +
                        '<input id="is_correct' + i + '" type="checkbox" name="is_correct[' + i + ']" value="1">\n' +
                        '<label for="is_correct' + i + '" class="label">correct option</label>' +
                        '</div>').appendTo(optionFields);
                    i++;
                }
            });
            removeOptions.click(function () {
                $('.field').last().remove();
                i--;
            });
        }
    });

    //for edit form
    i = $("div.field").length;
    if (typeValueEdit === 'checkbox' || typeValueEdit === 'radio') {
        addOptionsEdit.removeAttr('hidden');
        removeOptionsEdit.removeAttr('hidden');
        removeOptionsEdit.click(function () {
            if (i === 1) {
                return false;
            }
            let optionForRemove = ($('.field:last > .optionId').val());
            $('<input type="hidden" name="optionsForRemove[]" value=' + optionForRemove + '>').appendTo(optionFields);
            $('.field').last().remove();
            i--;
        });
        addOptionsEdit.click(function () {
            if (i < 4) {
                $('<div class="field"><input type="text" name="options[]" required />' +
                    '<input type="hidden" name="is_correct[' + i + ']" value="0">\n' +
                    '<input name="option_id[]" hidden value="0" class="optionId">' +
                    '<input id="is_correct' + i + '" type="checkbox" name="is_correct[' + i + ']" value="1">\n' +
                    '<label for="is_correct' + i + '" class="label">correct option</label>' +
                    '</div>').appendTo(optionFields);
                i++;
            }
        });
    }
});