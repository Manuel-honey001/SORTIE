# SORTIE
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFTER SCHOOL</title>
  <style>
    body {
      background: linear-gradient(120deg, #e0e7ff 0%, #f5f7fa 100%);
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #22223b;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .container {
      max-width: 600px;
      margin: 60px auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 8px 32px rgba(44, 62, 80, 0.10);
      padding: 40px 32px;
      transition: box-shadow 0.3s;
    }

    .container:hover {
      box-shadow: 0 12px 40px rgba(44, 62, 80, 0.18);
    }

    .affiche {
      text-align: center;
      margin: 32px auto;
    }

    .affiche-img {
      width: 100%;
      max-width: 700px;
      height: auto;
      border-radius: 18px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    }

    h1 {
      color: #2563eb;
      font-size: 2.7em;
      letter-spacing: 2px;
      margin-bottom: 18px;
      font-weight: 700;
      text-align: center;
      text-shadow: 0 2px 8px #e0e7ff;
    }

    h2 {
      color: #1e293b;
      font-size: 1.6em;
      margin-bottom: 16px;
      font-weight: 600;
      text-align: center;
    }

.cta-button {
  display: inline-block;
  background: linear-gradient(90deg, #2563eb 60%, #1e40af 100%);
  color: #fff;
  padding: 12px 36px;
  border-radius: 8px;
  text-decoration: none;
  font-size: 1.15em;
  font-weight: 600;
  box-shadow: 0 2px 8px rgba(37,99,235,0.08);
  transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
}

.cta-button:hover {
  background: linear-gradient(90deg, #1e40af 60%, #2563eb 100%);
  transform: scale(1.07);
  box-shadow: 0 6px 24px rgba(37,99,235,0.18);
}

.after, .after1, .after2 {
  font-size: 1.13em;
  line-height: 1.7;
  margin-bottom: 22px;
  text-align: center;
  font-family: Georgia, 'Times New Roman', Times, serif;
  padding: 12px 10px;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
  transition: box-shadow 0.2s, transform 0.2s;
}

.after {
  background: linear-gradient(90deg, #fbbf24 0%, #e66e37 100%);
  color: #22223b;
  font-weight: 500;
}

.after1 {
  background: #f3f4f9;
  color: #4b5563;
}

.after2 {
  background: linear-gradient(90deg, #a7f3d0 0%, #6cfb64 100%);
  color: #065f46;
  font-weight: 600;
}

.after:hover, .after1:hover, .after2:hover {
  box-shadow: 0 6px 24px rgba(44, 62, 80, 0.13);
  transform: translateY(-2px) scale(1.02);
}

strong {
  color: #2563eb;
  font-weight: 700;
}

@media (max-width: 700px) {
  .container {
    max-width: 95vw;
        padding: 18px 4vw;
      }

      h1 {
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 2em;
        padding: 10px 18px;
      }

      h2 {
        font-size: 1.2em;
      }

      .cta-button {
        font-size: 1em;
        padding: 10px 18px;
      }
    }
  </style>
</head>
<body>

  <div class="affiche">
    <img src="images/affiche-after-school.jpg" alt="Affiche After School" class="affiche-img">
  </div>

  <div class="container">
    <h1>AFTER SCHOOL</h1>

    <p class="after">
        Envie de déstresser, de chiller ? Chope ton ticket dès maintenant pour participer
        à la première édition de : <br>
        <strong>l'AFTER SCHOOL, ce 21 JUIN 2025 de 08H à 21H</strong> à
        l'espace <strong>DAYENA SONGON</strong>
      </p>
  
      <p class="after1">
        <strong>Dans le CHILL PACK :</strong> Transport aller-retour (car climatisé),
        nourriture + boisson, accès aux jeux.
      </p>
  
      <p class="after2">
        AFTER SCHOOL ! ZÉRO STRESS, 100% CHILL
      </p>
  
      <p style="text-align: center;">
        <a href="https://manuel-honey001.github.io/after-school-site/" class="cta-button">Inscription</a>
    </p>
  </div>

</body>
</html>
  
