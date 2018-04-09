//contact form -->

$(document).ready(function() {
	$("#envoyer").click(function() {
		valid=true; 
			if($("#nom").val()==""){
				$("#nom").css("border-color","#FF0000");
				$("#nom").next(".error-message").text("Veuillez entrer un nom");
				valid=false;
			}
			else{
				$("#nom").css("border-color","#00FF00");
				$("#nom").next(".error-message").text("");
			}
			
			if($("#mail").val()==""){
				$("#mail").css("border-color","#FF0000");
				$("#mail").next(".error-message").text("Veuillez entrer un email valide");
				valid=false;
			}
			else{
				if(!$("#mail").val().match(/^[a-zA-Z0-9\-_.]+@[a-zA-Z0-9\-_.]+\.[a-z]{2,3}$/i)){
					$("#mail").css("border-color","#FF0000");
					$("#mail").next(".error-message").text("Veuillez entrer un email valide");		
				}
				else{
					$("#mail").css("border-color","#00FF00");
					$("#mail").next(".error-message").text("");
				}
			}
			if($("#sujet").val()==""){
				$("#sujet").css("border-color","#FF0000");
				$("#sujet").next(".error-message").text("Veuillez entrer un sujet");
				valid=false;
			}
			else{
				$("#sujet").css("border-color","#00FF00");
				$("#sujet").next(".error-message").text("");
			}
			
			if($("#message").val()==""){
				$("#message").css("border-color","#FF0000");
				$("#message").next(".error-message").text("Veuillez entrer un message");
				valid=false;
			}
			else{
				$("#message").css("border-color","#00FF00");
				$("#message").next(".error-message").text("");
			}
			return valid;
	});
});

