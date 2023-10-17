$("#dataTable").DataTable({
    "bLengthChange": false
});

function emp_edit(id) { 

}

function emp_delete(id){
    show_alert({
        title : "Delete Record",
        body : `Are you sure you want to delete <b>${id}</b> record?`,
        buttons: ["Okay", "Cancel"]
    }, function(ans){
        
    });
}