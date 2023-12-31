
/**
 * Show an alert box
 * @param {Object} content content of the alert box
 * @param {Function} callBack function to be called when alert box is closed
 */
function show_modal(content = {
    title : "", 
    body : "", 
    buttons : []
}, callBack = null) {

    const e_HOLDER = $("<div class='d-flex justify-content-center align-items-center fade-in' id='modal-holder' style='background-color: rgba(0,0,0,0.9); position: fixed; top: 0; left: 0; width: 100%; height: 100vh; z-index: 2;'></div>");
    const e_CONTAINER = $("<div class='d-flex flex-column m-5 p-4 card pop-in' id='modal-container' style='position: absolute; min-width: 300px;'></div>");
    const e_HEADER = $(`<div class='fw-bold' id='modal-header'>${content.title}<hr style='margin: 0; margin-bottom: 1rem;'/></div>`);
    const e_BODY = $(`<div class='' id='modal-body' style='margin-bottom: 1rem;'>${content.body}</div>`);
    const e_FOOTER = $("<div class='d-flex flex-row-reverse gap-2' id='modal-footer'></div>");

    if(!content.buttons) content.buttons = ["Okay"];

    const b_BUTTON1 = $(`<button class='btn btn-primary'>${content.buttons[0] ? content.buttons[0] : "Okay"}</button>`);
    const b_BUTTON2 = content.buttons[1] ? $(`<button class='btn btn-danger'>${content.buttons[1]}</button>`) : null;

    e_FOOTER.append(b_BUTTON1, b_BUTTON2);
    e_CONTAINER.append(e_HEADER, e_BODY, e_FOOTER);
    e_HOLDER.append(e_CONTAINER);
    $("body").append(e_HOLDER);


    const cleanAlert = () => {
        e_HOLDER.on("animationend", function(e) {
            e_HOLDER.remove();
        });
        e_HOLDER.removeClass("fade-in");
        e_HOLDER.addClass("fade-out");
        e_CONTAINER.addClass("pop-out");
    }


    b_BUTTON1.on("click", function(e){
        cleanAlert();

        callBack ? callBack(true) : null;
    });

    if(b_BUTTON2)
        b_BUTTON2.on("click", function(e){
            cleanAlert();

            callBack ? callBack(false) : null;
        });
}

/**
 * SAMPLE USAGE
 * 
 * 
 *  modal({
 *      title : "Deleting data",
 *      body : "Are you sure you want to delete this data?",
 *      buttons : ["yes", "no"]
 *  }, function(result){
 *      console.log(result);
 *  });
 */