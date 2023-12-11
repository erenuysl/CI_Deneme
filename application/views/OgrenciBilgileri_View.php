<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Örneği</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Varsayılan arka plan rengi */
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            text-align: center;
            width: 100%; /* Formun genişliğini 100% olarak ayarla */
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: calc(100% - 16px); /* 16px kenar boşluğunu çıkararak form alanlarını eşitle */
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        .progress-bar {
            height: 10px;
            background-color: #a3f19e; /* Yeşil renk */
            margin-top: 10px;
            border-radius: 5px;
            width: 0%; /* İlk başta genişlik sıfır olacak */
            transition: width 0.5s ease;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="myForm"  action="<?php echo base_url('Ogrenci_bilgileri/save')  ?>" method="post" >
            <label for="fname">Ad:</label>
            <input type="text" id="fname" name="name" required>

            <label for="lname">Soyad:</label>
            <input type="text" id="lname" name="surname" required>

            <label for="age">Yaş:</label>
            <input type="number" id="age" name="age" required>

            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>

            <label for="gender">Cinsiyet:</label>
            <select id="gender" name="gender" required>
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
                <option value="other">Diğer</option>
            </select>

            <input type="submit" value="Gönder">
        </form>

        <div class="progress-bar" id="progressBar"></div>
    </div>

    <script>
        const form = document.getElementById("myForm");
        const progressBar = document.getElementById("progressBar");

        form.addEventListener("input", function() {
            // Form alanlarına girilen veriye göre ilerleme çubuğunu güncelle
            const filledFields = document.querySelectorAll("input:valid, select:valid").length;
            const totalFields = document.querySelectorAll("input, select").length;
            const progressPercentage = (filledFields / totalFields) * 100;

            progressBar.style.width = progressPercentage + "%";
        });
    </script>
</body>
</html>
