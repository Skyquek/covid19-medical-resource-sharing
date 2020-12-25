function chgName(target){
    var label = target.id;
    label = label.replace('_', ' ');
    $('#updateCategoryName').val(label);
}

function deleteCategory(target) {
    var label = target.name;
    $('#deleteCategoryName').val(label);
}

function listItems(target) {
    var site = "listCategory.php?" + target.value;
    location.replace(site);
}