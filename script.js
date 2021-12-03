submit_style_form = () => {
  let form_style = document.forms["style_details"];
  let formData = new FormData(form_style);
  let queryString = "flag=style_details&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

submit_line_ho = () => {
  let form_style = document.forms["line_ho"];
  let formData = new FormData(form_style);
  let queryString = "flag=line_ho&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

submit_layout = () => {
  let form_style = document.forms["layout"];
  let formData = new FormData(form_style);
  let queryString = "flag=layout&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

submit_internal_mc = () => {
  let form_style = document.forms["internal_mc"];
  let formData = new FormData(form_style);
  let queryString = "flag=internal_mc&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

submit_feeding = () => {
  let form_style = document.forms["feeding"];
  let formData = new FormData(form_style);
  let queryString = "flag=feeding&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

submit_ie = () => {
  let form_style = document.forms["ie"];
  let formData = new FormData(form_style);
  let queryString = "flag=ie&";
  for (let [name, value] of formData.entries()) {
    queryString += name + "=" + value + "&";
  }

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };

  xmlhttp.open("POST", "run.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};

form_fill = () => {
  let schedule = document.getElementById("key_schedule").value;
  let team = document.getElementById("key_team").value;

  let queryString = "schedule=" + schedule + "&team=" + team;

  // ajax request
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // let data = JSON.parse(this.responseText);
      alert(this.responseText);
      // document.getElementById("key_schedule").value = data.schedule;
    }
  };

  xmlhttp.open("POST", "fetch.php", true);
  xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlhttp.send(queryString);
};
