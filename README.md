# Setup del Progetto

Segui questi passaggi per configurare correttamente l'ambiente di sviluppo:

1. **Installa le dipendenze PHP**  
   Apri il terminale e lancia il comando:
    composer install

2. Configura il file .env
Duplica il file .env.example e rinominalo in .env.

3. Crea il database
Crea un database MySQL utilizzando uno dei seguenti strumenti:

phpMyAdmin in XAMPP
MySQL in locale (utilizza Table Plus o Beekeeper Studio)

4. Configura il database in .env
Modifica il file .env con i dettagli del tuo database appena creato:

DB_PORT=  
DB_DATABASE=  
DB_USERNAME=  
DB_PASSWORD=  

5. Genera la chiave di applicazione
Esegui il seguente comando nel terminale:
php artisan key:generate

6. Installa le dipendenze JavaScript
Esegui il comando per installare le dipendenze JavaScript:
npm install

7. Avvia il server di sviluppo
Apri un terminale e esegui:
npm run dev

8. Avvia il server PHP
In un altro terminale, esegui:
php artisan serve

9. Pulisci e importa i dati con Laravel Scout
Esegui i seguenti comandi per aggiornare l'indice di ricerca:
php artisan scout:flush "App\Models\Article"
php artisan scout:import "App\Models\Article"

10. Esegui le migrazioni del database
Lancia il comando per eseguire le migrazioni:
php artisan migrate

11. Crea il link per la cartella di storage
Crea il link simbolico per lo storage:
php artisan storage:link

12. Configura l'email tramite Mailtrap
Crea un account su Mailtrap e vai nella sezione Email Testing.
Seleziona Laravel 9 nelle Integrations. Copia le credenziali fornite e incollale nel file .env come segue:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@example.com
MAIL_FROM_NAME="${APP_NAME}"

Seguendo questi passaggi, dovresti essere in grado di configurare e far partire correttamente il progetto.