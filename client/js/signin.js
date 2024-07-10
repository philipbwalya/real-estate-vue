Vue.createApp({
  data() {
    return {
      email: "",
      password: "",

      // formSubmitted: false,
    };
  },
  methods: {
    handleSubmit() {
      if (!this.password) {
        alert("password not matching with confirm password");
        return;
      }
      const data = new URLSearchParams({
        email: this.email,
        password: this.password,
      });
      var url = "./../backend/signin.php";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          const res = JSON.parse(xhttp.responseText);
          console.log(res);
          if (res.status) {
            // this.formSubmitted = true;
            swal("Success", res.message, "success", {
              button: false,
            });
            this.resetForm();
            window.location.href = "./index.php";
          } else if (res.Incorrect_message) {
            swal({
              title: "Failed",
              text: res.Incorrect_message,
              icon: "warning",
              button: true,
            });
            return;
          } else if (res.NotFound) {
            swal({
              title: "Error",
              text: res.NotFound,
              icon: "error",
              button: true,
            });
            return;
          } else if (res.Incomplete) {
            swal({
              title: "Error",
              text: res.Incomplete,
              icon: "error",
              button: true,
            });
            return;
          } else {
            console.log("error");
            swal({
              title: "Error",
              text: "Unknown error",
              icon: "error",
              button: true,
            });
            return;
          }
        }
      };
      xhttp.open("POST", url, true);
      xhttp.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
      );
      xhttp.send(data.toString());
    },
    resetForm() {
      (this.email = ""), (this.password = "");
    },
  },
}).mount("#signin");
