$("#btn-emp").on("click", function(e) {
    $("#form-admin").addClass("hidden");
    $("#form-emp").removeClass("hidden");
});
$("#btn-admin").on("click", function(e) {
    $("#form-emp").addClass("hidden");
    $("#form-admin").removeClass("hidden");
});

$("#btn-a-sign-in").on("click", login);
$("#btn-e-sign-in").on("click", login);

function login(e){
    const type = $(this).data("acc_type");
    console.log({type});
    if(type === 'a'){
        goto_page('admin');
    }else{
        goto_page('employee');
    }
}

function forgotPass(e){
    const modal_body = `
        Wag mo kasi kalimutan, try mo alalahanin!
    `;

    show_modal({
        title : "Forgot Password",
        body : modal_body,
        buttons : ["Sige"]
    },function(ans){

    });
}