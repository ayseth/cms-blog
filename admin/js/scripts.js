tinymce.init({
    selector: 'textarea'
});

//to check all boxes on posts.php
$(document).ready(function () {

    $('#selectAllBoxes').click(function (event) {
        if (this.checked) {
            $('.checkBoxes').each(function () {
                this.checked = true;
            });
        } else {

            $('.checkBoxes').each(function () {
                this.checked = false;
            });

        }
    })
});
