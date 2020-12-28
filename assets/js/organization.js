function chgName(target){
    var label = target.id;
    label = label.replace('_', ' ');
    $('#updateorganizationType').val(label);
}

function deleteOrganization(target) {
    var label = target.name;
    $('#deleteorganizationType').val(label);
}

function listAgent(target) {
    var site = "listAgentRegister.php?" + target.value;
    location.replace(site);
}