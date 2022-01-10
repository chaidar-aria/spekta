var ctx = document.getElementById("userchart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
        ],
        borderColor: [
          "rgba(255,99,132,1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
  },
});

$("#editekskul").bootstrapDualListbox({
  // see next for specifications
});

$(".js-example-basic-multiple").select2({
  maximumSelectionLength: 2,
});

$(document).ready(function () {
  $("#tabeltolak").DataTable();
  $("#tabelverval").DataTable();
  $("#tabelmember").DataTable();
  $("#tabelaccount").DataTable();
  $("#tabeluangmasuk").DataTable();
  $("#tabeluangkeluar").DataTable();
  $("#tabelekskul").DataTable();
  $("#tabelpembina").DataTable();
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
var check = function () {
  if (
    document.getElementById("password").value ==
    document.getElementById("confirm_password").value
  ) {
    document.getElementById("message").style.color = "green";
    document.getElementById("message").innerHTML = "SESUAI";
  } else {
    document.getElementById("message").style.color = "red";
    document.getElementById("message").innerHTML = "TIDAK SESUAI";
  }
};

function validasi(form) {
  if (form.password.value.length < 8) {
    Swal.fire({
      icon: "warning",
      title: "PERINGATAN !",
      text: "Password harus terdiri dari angka, huruf besar, huruf kecil, dan minimal 8 karakter ",
      showConfirmButton: false,
      timer: 2000,
    });
    return false;
  }
}

// timeout before a callback is called

let timeout;

// traversing the DOM and getting the input and span using their IDs

let password = document.getElementById("password");
let strengthBadge = document.getElementById("StrengthDisp");

// The strong and weak password Regex pattern checker

let strongPassword = new RegExp(
  "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})"
);
let mediumPassword = new RegExp(
  "((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))"
);

function StrengthChecker(PasswordParameter) {
  // We then change the badge's color and text based on the password strength

  if (strongPassword.test(PasswordParameter)) {
    strengthBadge.style.backgroundColor = "green";
    strengthBadge.textContent = "KUAT";
  } else if (mediumPassword.test(PasswordParameter)) {
    strengthBadge.style.backgroundColor = "blue";
    strengthBadge.textContent = "SEDANG";
  } else {
    strengthBadge.style.backgroundColor = "red";
    strengthBadge.textContent = "LEMAH";
  }
}

// Adding an input event listener when a user types to the  password input

password.addEventListener("input", () => {
  //The badge is hidden by default, so we show it

  strengthBadge.style.display = "block";
  clearTimeout(timeout);

  //We then call the StrengChecker function as a callback then pass the typed password to it

  timeout = setTimeout(() => StrengthChecker(password.value), 500);

  //Incase a user clears the text, the badge is hidden again

  if (password.value.length !== 0) {
    strengthBadge.style.display != "block";
  } else {
    strengthBadge.style.display = "none";
  }
});