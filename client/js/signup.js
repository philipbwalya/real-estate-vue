Vue.createApp({
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      phone: "",
      password: "",
      confirm_password: "",
      remember: false,
      formSubmitted: false,
    };
  },
  methods: {
    handleSubmit() {
      if (this.password !== this.confirm_password) {
        alert("password not matching with confirm password");
        return;
      }
      const data = new URLSearchParams({
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        phone: this.phone,
        remember: this.remember,
        password: this.password,
      });
      var url = "./../backend/signup.php";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          const res = JSON.parse(xhttp.responseText);
          console.log(res);
          if (res.status) {
            this.formSubmitted = true;
            swal("Success", res.success, "success", {
              button: false,
            });
            this.resetForm();
            window.location.href = "./signin.php";
          } else if (res.existmessage) {
            swal({
              title: "Failed",
              text: res.existmessage,
              icon: "warning",
              button: true,
            });
            return;
          } else if (res.error) {
            swal({
              title: "Error",
              text: res.error,
              icon: "error",
              button: true,
            });
            return;
          } else {
            console.log("error:", res.error);
            swal({
              title: "Error",
              text: res.error || "Unknown error",
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
      (this.first_name = ""),
        (this.last_name = ""),
        (this.email = ""),
        (this.phone = ""),
        (this.password = ""),
        (this.confirm_password = ""),
        (this.remember = false);
    },
  },
}).mount("#signup");
