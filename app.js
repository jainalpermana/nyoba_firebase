var btn = document.getElementById("btn");
var heading = document.getElementById("heading");

var headingRef = firebase.database().ref().child("heading");

headingRef.on('value', function(datasnapshot){
	document.getElementById("heading").innerHTML = datasnapshot.val();
});

function tesclick() {

	var firebaseRef = firebase.database().ref();

	var tes = document.getElementById("tes").value;

	firebaseRef.child("Text").set(tes);
	//firebaseRef.push().set(tes);
}

var rootRef = firebase.database().ref().child("Users");

rootRef.on("child_added", snap => {
	var name = snap.child("Name").val();
	var email = snap.child("Email").val();
	$("#table").append("<tr><td>"+name+"</td><td>"+email+"</td></tr>");
});