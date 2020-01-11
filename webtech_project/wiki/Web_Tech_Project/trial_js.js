<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>

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

var database=firebase.database()

function set_data()
{
  let entry_email=document.getElementById("email");
  let entry_name=document.getElementById("name");
  let entry_password=document.getElementById("password");
  database.ref('users/'+entry_email).set({
    user_email:entry_email,
    user_name:entry_name,
    user_password:entry_password
  });

}

