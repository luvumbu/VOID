

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Table</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Title */
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-top: 20px;
        }

        /* Form styles */
        form {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form fields */
        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"],
        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #2980b9;
        }

        /* Button for adding columns */
        #addColumnBtn {
            background-color: #27ae60;
            margin-top: 10px;
        }

        #addColumnBtn:hover {
            background-color: #2ecc71;
        }

        /* Columns container */
        .column {
            margin-bottom: 20px;
        }

        /* Error messages */
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Preformatted text for SQL output */
        pre {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-family: 'Courier New', Courier, monospace;
            color: #2c3e50;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            input[type="text"],
            select,
            input[type="submit"],
            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Créer une nouvelle table dans la base de données</h1>

    <form action="config/config_form_creation_table_bdd.php" method="POST">
        <label for="main_table_name">Nom de la table :</label>
        <input type="text" id="main_table_name" name="main_table_name" required><br><br>

        <div id="columns">
            <div class="column">
                <label for="column_name_1">Nom de la colonne :</label>
                <input type="text" name="column_name[]" required><br><br>

                <label for="column_type_1">Type de la colonne :</label>
                <select name="column_type[]" required>
                    <option value="INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY">INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY</option>
                    <option value="VARCHAR(255) NOT NULL">VARCHAR(255) NOT NULL</option>
                    <option value="TEXT NOT NULL">TEXT NOT NULL</option>
                    <option value="LONGTEXT NOT NULL">LONGTEXT NOT NULL</option>
                    <option value="DATE NOT NULL">DATE NOT NULL</option>
                    <option value="TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP">TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP</option>
                </select><br><br>
            </div>
        </div>

        <button type="button" id="addColumnBtn">Ajouter une colonne</button><br><br>

        <input type="submit" value="Créer la table">
    </form>

    <script>
        document.getElementById("addColumnBtn").addEventListener("click", function() {
            var columnDiv = document.createElement("div");
            columnDiv.classList.add("column");
            
            // Création de l'input pour le nom de la colonne
            var labelName = document.createElement("label");
            labelName.textContent = "Nom de la colonne :";
            columnDiv.appendChild(labelName);

            var inputName = document.createElement("input");
            inputName.type = "text";
            inputName.name = "column_name[]";
            inputName.required = true;
            columnDiv.appendChild(inputName);

            columnDiv.appendChild(document.createElement("br"));
            columnDiv.appendChild(document.createElement("br"));

            // Création du select pour le type de la colonne
            var labelType = document.createElement("label");
            labelType.textContent = "Type de la colonne :";
            columnDiv.appendChild(labelType);

            var selectType = document.createElement("select");
            selectType.name = "column_type[]";
            selectType.required = true;

            // Options du select
            var option1 = document.createElement("option");
            option1.value = "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
            option1.textContent = "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
            selectType.appendChild(option1);

            var option2 = document.createElement("option");
            option2.value = "VARCHAR(255) NOT NULL";
            option2.textContent = "VARCHAR(255) NOT NULL";
            selectType.appendChild(option2);

            var option3 = document.createElement("option");
            option3.value = "TEXT NOT NULL";
            option3.textContent = "TEXT NOT NULL";
            selectType.appendChild(option3);

            var option4 = document.createElement("option");
            option4.value = "LONGTEXT NOT NULL";
            option4.textContent = "LONGTEXT NOT NULL";
            selectType.appendChild(option4);

            var option5 = document.createElement("option");
            option5.value = "DATE NOT NULL";
            option5.textContent = "DATE NOT NULL";
            selectType.appendChild(option5);

            var option6 = document.createElement("option");
            option6.value = "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";
            option6.textContent = "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";
            selectType.appendChild(option6);

            columnDiv.appendChild(selectType);

            columnDiv.appendChild(document.createElement("br"));
            columnDiv.appendChild(document.createElement("br"));

            // Ajouter le nouveau champ à la liste
            document.getElementById("columns").appendChild(columnDiv);
        });
    </script>
</body>
</html>
