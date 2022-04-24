function validateForm(e) {
    const perdoruesi = document.getElementById('userid');
    const fjalkalimi = document.getElementById('pass');
    if (perdoruesi.value === "") {
      alert("Ju lutem shtoni perdoruesin.");
      perdoruesi.focus();
      return false;
    } else if (fjalkalimi.value === "") {
      alert("Ju lutem shtoni Fjalkalimin.");
      fjalkalimi.focus();
      return false;
    } else {
      alert("Validimi u kry me sukses");
    }
  }