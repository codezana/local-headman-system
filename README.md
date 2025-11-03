# 🚀 Local Headman Management System  

### 💡 Description  
This system was developed on demand using modern technology.  
It replaces manual work by saving time, preventing data loss, and improving accuracy.

---

### ⚙️ Tech Stack  
- **Backend:** Laravel (Server-Side Rendering)  
- **Database:** MySQL  
- **Auth:** Laravel Sanctum  
- **Tools:** XAMPP / Laragon / VS Code  

---

### 📦 Features  
✅ Fast registration, searching, and printing  
🧩 Main parts include:  
1️⃣ **Add** – Easily enter data.  
2️⃣ **Form** – Unified, modern design.  
3️⃣ **Print** – Generate family forms quickly.  
4️⃣ **Edit/Delete** – Fix or remove data anytime.  
5️⃣ **Search** – Find families by form number or name.  

---

### 🧠 How to Run  
```bash
# install dependencies
composer install

# create and configure environment file
cp .env.example .env

# run database migrations
php artisan migrate

# seed default data (optional)
php artisan db:seed

# start local development server
php artisan serve
