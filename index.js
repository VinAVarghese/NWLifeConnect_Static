const connect = document.querySelector('#connectSection');
const nextSteps = document.querySelector('#nextStepsSection');
const report = document.querySelector('#reportSection');
const fullName = document.querySelector('#fullName')

// Toggling Section Views // 
const selectConnect = () => {
    connect.classList.toggle("hidden")
    nextSteps.setAttribute('class', 'hidden')
    report.setAttribute('class', 'hidden')
    fullName.scrollIntoView();
}   
const selectNS = () => {
    nextSteps.classList.toggle("hidden")
    connect.setAttribute('class', 'hidden')
    report.setAttribute('class', 'hidden')
    fullName.scrollIntoView();
}   
const selectReport = () => {
    report.classList.toggle("hidden")
    nextSteps.setAttribute('class', 'hidden')
    connect.setAttribute('class', 'hidden')
    fullName.scrollIntoView();
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
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();

