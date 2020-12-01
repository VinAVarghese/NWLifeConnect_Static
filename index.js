const connect = document.querySelector('#connectSection');
const nextSteps = document.querySelector('#nextStepsSection');
const report = document.querySelector('#reportSection');
const scrollHere = document.querySelector('#scrollHere');

// Toggling Section Views // 
const selectConnect = () => {
    connect.classList.toggle("hidden");
    nextSteps.setAttribute('class', 'hidden');
    report.setAttribute('class', 'hidden');
    scrollHere.scrollIntoView({behavior: "smooth"});
}   
const selectNS = () => {
    nextSteps.classList.toggle("hidden");
    connect.setAttribute('class', 'hidden');
    report.setAttribute('class', 'hidden');
    scrollHere.scrollIntoView({behavior: "smooth"});
}   
const selectReport = () => {
    report.classList.toggle("hidden");
    nextSteps.setAttribute('class', 'hidden');
    connect.setAttribute('class', 'hidden');
    scrollHere.scrollIntoView({behavior: "smooth"});
}   

// Form Vaildation //
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          event.preventDefault();
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();

// PHP Function //
const phpSubmit = () => {
  let name = document.getElementById('name').value;
  if(name === "") return console.log("Form post stopped");;
  let updating = document.getElementById('updating').value;
  let address = document.getElementById('address').value;
  let apt = document.getElementById('apt').value;
  let city = document.getElementById('city').value;
  let zip = document.getElementById('zip').value;
  let email = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;
  let birthday = document.getElementById('birthday').value;
  let age = document.getElementById('age').value;
  let occupation = document.getElementById('occupation').value;
  let attendance = document.getElementById('attendance').value;
  let invitedBy = document.getElementById('invitedBy').value;
  let nextStepRelationship = document.getElementById('nextStepRelationship').value;
  let readyToServe = document.getElementById('readyToServe').value;
  let nextStepOther = document.getElementById('nextStepOther').value;
  let otherContent = document.getElementById('otherContent').value;
  let pAndPraise = document.getElementById('pAndPraise').value;
  $.ajax({
    type: "POST",
    url: "/index.php",
    data: { 
      name : name,
      updating : updating, 
      address : address, 
      apt : apt, 
      city : city, 
      zip : zip, 
      email : email, 
      phone : phone, 
      birthday : birthday, 
      age : age, 
      occupation : occupation, 
      attendance : attendance, 
      invitedBy : invitedBy, 
      nextStepRelationship : nextStepRelationship, 
      readyToServe : readyToServe, 
      nextStepOther : nextStepOther, 
      otherContent : otherContent, 
      pAndPraise : pAndPraise
    },
    success: function (res){
      console.log(res);
      res.status(200)
    }
  })
}