
<! After School day><html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFTER SCHOOL - Sortie Plage</title>
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #03396c;
    }.container {
  max-width: 700px;
  margin: 40px auto;
  background: #ffffffcc;
  border-radius: 18px;
  box-shadow: 0 8px 28px rgba(0,0,0,0.15);
  padding: 30px;
}

.affiche {
  text-align: center;
  margin-bottom: 20px;
}

.affiche-img {
  width: 100%;
  max-width: 700px;
  border-radius: 14px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.2);
}

h1 {
  font-size: 2.8em;
  color: #ff6f61;
  text-align: center;
  margin-bottom: 10px;
}

h2 {
  font-size: 1.6em;
  text-align: center;
  color: #045f94;
  margin-bottom: 20px;
}

.countdown {
  text-align: center;
  font-size: 1.5em;
  font-weight: bold;
  color: #0b3c5d;
  margin: 20px auto;
  padding: 12px;
  border-radius: 10px;
  background: #e0f7fa;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.info-block {
  font-size: 1.15em;
  line-height: 1.6;
  background: linear-gradient(90deg, #f9e79f, #f7dc6f);
  padding: 16px;
  border-radius: 10px;
  margin-bottom: 20px;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.info-secondary {
  background: #e8f8f5;
  color: #117864;
}

.info-highlight {
  background: linear-gradient(to right, #c3f3ff, #9ae6f2);
  color: #0b3c5d;
  font-weight: 600;
}

.cta-button {
  display: block;
  width: fit-content;
  margin: 0 auto;
  background: linear-gradient(to right, #00c6ff, #0072ff);
  color: white;
  padding: 14px 36px;
  border-radius: 30px;
  text-decoration: none;
  font-size: 1.2em;
  box-shadow: 0 6px 20px rgba(0,114,255,0.3);
  transition: transform 0.2s, box-shadow 0.2s;
}

.cta-button:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 26px rgba(0,114,255,0.4);
}

@media (max-width: 700px) {
  .container {
    margin: 20px 10px;
    padding: 20px;
  }

  h1 {
    font-size: 2em;
  }

  .cta-button {
    font-size: 1em;
    padding: 10px 24px;
  }
}

  </style>
</head>
<body>
  <div class="affiche">
    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Affiche After School plage" class="affiche-img">
  </div>  <div class="container">
    <h1>AFTER SCHOOL</h1>
    <h2>Sortie plage - 21 Juin 2025</h2><div class="countdown" id="countdown"></div>

<div class="info-block">
  Le <strong>collège des délégués de la licence 2 de GÉOGRAPHIE</strong> organise la <strong>1ère Édition</strong> de <br>
  <strong>AFTER SCHOOL - Au bord de l'eau</strong>, de <strong>08H à 21H</strong> à l'<strong>ESPACE DAYENA, Songon</strong>.
</div>

<div class="info-block info-secondary">
  <strong>DRESS CODE :</strong> BLANC <br>
  Venez avec votre plus beau look détente plage !
</div>

<div class="info-block info-highlight">
  <strong>CHILL PACK :</strong> Transport aller-retour (car climatisé), nourriture + boisson, accès aux jeux.
</div>

<div class="info-block">
  AFTER SCHOOL ! <strong>ZÉRO STRESS, 100% CHILL</strong>
</div>

<div class="info-block info-secondary">
  <strong>INFOLINE :</strong><br>
  +225 0585817258<br>
  +225 0504129645
</div>

<a href="https://manuel-honey001.github.io/after-school-site/" class="cta-button">S'inscrire maintenant</a>

  </div>  <script>
    const countdown = document.getElementById('countdown');
    const eventDate = new Date("2025-06-21T08:00:00").getTime();

    const timer = setInterval(function() {
      const now = new Date().getTime();
      const distance = eventDate - now;

      if (distance < 0) {
        clearInterval(timer);
        countdown.innerHTML = "C'est le jour J !";
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      countdown.innerHTML = `${days} j ${hours} h ${minutes} min ${seconds} s avant l'évènement`;
    }, 1000);
  </script></body>
</html>
