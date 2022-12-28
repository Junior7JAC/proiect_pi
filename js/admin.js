//On button click (edit button) get the value and console log it
$(document).on('click', '#edit_btn', function() {
    //Get the value of the id attribute of the button
    var id = this.dataset.id;
    var name = this.dataset.name;
    var description = this.dataset.description;
    var price = this.dataset.price;
    var category = this.dataset.category;

    //pre-fill the form with the values
    $('#edit_id').val(id);
    $('#edit_name').val(name);
    $('#edit_description').val(description);
    $('#edit_price').val(price);
    $('#edit_category').val(category);
});
//On button click (delete button) get the value and console log it
$(document).on('click', '#delete_btn', function() {
    //Get the value of the id attribute of the button
    var id = this.dataset.id;

    //pre-fill the form with the values
    $('#delete_id').val(id);
});


