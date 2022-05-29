# kueku-website

Contribution :

- Alfitra Fadjri
- Arya Ridho Fadillah
- Fozan Bebe Moreno
- Zhafran Panggomgomi
- Zulfadli

Composer untuk diinstal :

- composer require laravel/socialite

File ENV yang harus diubah atau ditambah:

- Sesuaikan bagian ini untuk menjalankan Composer socialite
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.gmail.com
  MAIL_PORT=587
  MAIL_USERNAME=emailkalian
  MAIL_PASSWORD=passwordkalian
  MAIL_ENCRYPTION=ssl
  MAIL_FROM_ADDRESS="emailkalian"
  MAIL_FROM_NAME="${APP_NAME}"

- Tambahkan bagian ini untuk google socialite :
  GOOGLE_CLIENT_ID= 916192286182-c2buend0cs4b9krphanuq11auakt2dbl.apps.googleusercontent.com
  GOOGLE_CLIENT_SECRET= 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
  GOOGLE_CLIENT_REDIRECT= http://localhost:8000/auth/google/callback
