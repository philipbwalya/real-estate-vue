Vue.createApp({
  data() {
    return {
      navbarOpen: false,
      propertyType: "",
      buyOrSell: "",
      property: "",
    };
  },
  methods: {
    toggleNavbar() {
      this.navbarOpen = !this.navbarOpen;
    },
    requestQuote() {
      alert("Request quote clicked");
    },
  },
}).mount("#app");
