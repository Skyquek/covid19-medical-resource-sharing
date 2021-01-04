function chgName(target){
    var label = target.id;
    label = label.replace('_', ' ');
    $('#updateCategoryName').val(label);
    $('#updateCategoryID').val(target.name);
}

function deleteCategory(target) {
    var label = target.name;
    $('#deleteCategoryName').val(label);
    $('#deleteCategoryID').val(target.id);
}

function listItems(target) {
    var site = "listCategory.php?id=" + target.value;
    location.replace(site);
}