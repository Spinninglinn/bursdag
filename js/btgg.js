fetch('https://api.ipify.org?format=json')
  .then(response => response.json())
  .then(data => {
    document.getElementById("ip").innerHTML = "IP-adresse: " + data.ip;
  });

  console.log;