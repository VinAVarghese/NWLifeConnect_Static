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
          // event.preventDefault();
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();