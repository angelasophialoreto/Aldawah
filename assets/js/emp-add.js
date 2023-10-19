let form_num = 1;
const form_length = 5;

$("#form-next").on("click", ()=>{
    form_num = (form_num < form_length ) ? form_num + 1 : form_num ;
    form_page_manager();
});
$("#form-prev").on("click", ()=>{
    form_num = (form_num > 1 ) ? form_num - 1 : form_num ;
    form_page_manager();
});

function form_page_manager() {
    for(let i = 1; i <= form_length; i++) $(`#form-${i}`).addClass("hidden");

    $(`#form-${form_num}`).removeClass("hidden");
    $(`#form-${form_num} .first`).focus();

    if(form_num === form_length) $("#form-next").html("Submit");
    else $("#form-next").html("Next");

    if(form_num === 1) $("#form-prev").addClass("hidden");
    else $("#form-prev").removeClass("hidden");
}