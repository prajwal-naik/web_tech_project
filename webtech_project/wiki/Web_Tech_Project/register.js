var firebaseConfig = {
  apiKey: "AIzaSyCwCR3X6zLLXaT3ni_afL97KW4lfJkMXig",
  authDomain: "webtech-project-e9217.firebaseapp.com",
  databaseURL: "https://webtech-project-e9217.firebaseio.com",
  projectId: "webtech-project-e9217", 
  storageBucket: "webtech-project-e9217.appspot.com",
  messagingSenderId: "355868813283",
  appId: "1:355868813283:web:8b1292207bdd3e65f5a2d6"
};
firebase.initializeApp(firebaseConfig);
var mydatabase=firebase.database()


function set_data()
{
  let entry_email=document.getElementById("email").value;
  let cleanEmail = entry_email.replace('.com','_dot_com'); 
  let entry_name=document.getElementById("name").value;
  let entry_password=document.getElementById("password").value;
  mydatabase.ref('users/'+cleanEmail).set({
    user_email:entry_email,
    user_name:entry_name,
    user_password:entry_password
  });
  location.replace("login_page.html")
}


function loginvalidate()
{   
    document.getElementById("login_message").innerHTML="";
    let entry_email=document.getElementById("entered_email").value;
    let cleanEmail=entry_email.replace(".com", "_dot_com");
    let entry_password=document.getElementById("entered_password").value;
    mydatabase.ref('users/').child(cleanEmail).on('value', function(snapshot){
        if(snapshot.val()==null)
        {
            //alert("user not registered");
            document.getElementById("login_message").style.color="red";
            document.getElementById("login_message").innerHTML="Register to use the website.";
        }
        else
        {
            if(snapshot.child('user_password').val()===(entry_password))
            {
                document.getElementById("login_message").innerHTML="";
                console.log("login successful");
            }
            else
            {
                console.log("failed login");
                document.getElementById("login_message").style.color="red";
                document.getElementById("login_message").innerHTML="Wrong password. Try again.";
            }
        }

    })
}