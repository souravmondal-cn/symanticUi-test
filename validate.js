$(function () {
    $('#myform').on('submit', function () {
        var requiredFields = [
            $('#username'),
            $('#useremail')
        ];
        if (!fromValidation(requiredFields)) {
            $('#alertMessage').modal('show');
            return false;
        }
        //TODO: do the other stuff
    });
});

function fromValidation(allRequiredFields) {

    var flag = [];

    $.each(allRequiredFields, function (index, element) {
        if (element.val() === "") {
            flag.push(false);
        }
    });

    if ($.inArray(false, flag) !== -1) {
        return false;
    }
    return true;
}