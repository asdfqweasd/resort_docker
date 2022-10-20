
//alert message 
function message() {
	var Message = "Thank you for your message:)";
	console.log(Message);
    alert(Message);
    document.getElementById("message").reset();
}


//popup message and scroll back to top
//reset the form
function popup() {
    $(".popup-overlay, .popup-content").addClass("active");
    $("html").scrollTop(0);
    document.getElementById("top").style.filter='blur(5px)';
    document.getElementById("form").reset();

};
  
//close popup message 
function remove() {
    $(".popup-overlay, .popup-content").removeClass("active");
    document.getElementById("top").style.filter='blur()';
};

