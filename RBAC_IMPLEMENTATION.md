# RBAC Implementation Guide - Laravel 13

## Penjelasan Implementasi

Implementasi RBAC di project ini terdiri dari beberapa komponen:

### 1. **Model Users dan Roles**
- **Users Model** memiliki relasi `belongsTo` dengan Roles
- Tersedia method:
  - `role()` - mendapatkan relasi role
  - `hasRole($roleName)` - cek apakah user punya role tertentu
  - `getRoleName()` - mendapatkan nama role user

### 2. **Middleware CheckRole**
- File: `app/Http/Middleware/CheckRole.php`
- Mengecek apakah user memiliki role yang diizinkan
- Digunakan di route dengan: `middleware(['role:staff,manager'])`
- Jika tidak punya akses, akan menampilkan 403 error

### 3. **DashboardController**
- File: `app/Http/Controllers/DashboardController.php`
- Redirect user ke dashboard sesuai role mereka:
  - **staff** → /staff
  - **supervisor** → /supervisor
  - **manager** → /manager
  - **direktur** → /direktur
  - **finance** → /finance

### 4. **Routes dengan Role Protection**
- Setiap route sudah dilindungi dengan middleware `role:nama_role`
- Contoh: `middleware(['auth', 'verified', 'role:staff'])`

---

## Cara Penggunaan

### Di Blade View (Cek Role)

```blade
@if(Auth::user()->hasRole('staff'))
    <p>Ini tampilan untuk Staff</p>
@endif

@if(Auth::user()->hasRole('manager'))
    <p>Ini tampilan untuk Manager</p>
@endif

<!-- Atau gunakan method getRoleName() -->
@switch(Auth::user()->getRoleName())
    @case('staff')
        <p>Dashboard Staff</p>
        @break
    @case('manager')
        <p>Dashboard Manager</p>
        @break
    @case('direktur')
        <p>Dashboard Direktur</p>
        @break
    @case('finance')
        <p>Dashboard Finance</p>
        @break
@endswitch
```

### Menggunakan Helper Trait di Controller

```php
use App\Traits\RoleHelper;

class MyController extends Controller
{
    use RoleHelper;

    public function myMethod()
    {
        if (RoleHelper::hasRole('staff')) {
            // Lakukan sesuatu untuk staff
        }

        if (RoleHelper::hasAnyRole(['manager', 'direktur'])) {
            // Lakukan sesuatu untuk manager atau direktur
        }

        $currentRole = RoleHelper::getCurrentRole();
    }
}
```

### Mengecek Role di Authorization Policy

```php
public function update(User $user, Submission $submission)
{
    return $user->hasRole('manager') || $user->hasRole('direktur');
}
```

### Di Route (Middleware)

```php
// Hanya staff yang bisa akses
Route::get('/staff', function() {
    return view('staff.dashboard');
})->middleware(['auth', 'verified', 'role:staff']);

// Bisa multiple role
Route::get('/approve', function() {
    return view('approval');
})->middleware(['auth', 'verified', 'role:manager,direktur,finance']);
```

---

## Flow Login

1. User login melalui Laravel Breeze
2. User di-redirect ke `/dashboard`
3. `DashboardController@index` mengecek role user
4. Redirect ke route sesuai role (staff, manager, dll)
5. Route dilindungi oleh middleware `role` yang memverifikasi akses

---

## Menambah Role Baru

Jika ingin menambah role baru (misalnya 'admin'):

1. **Tambahkan di database** melalui seeder atau migration
2. **Update switch di DashboardController**:
   ```php
   case 'admin':
       return redirect()->route('admin');
   ```
3. **Buat route untuk admin**:
   ```php
   Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
       Route::get('/admin', function() {
           return view('admin.dashboard');
       })->name('admin');
   });
   ```
4. **Buat view di** `resources/views/admin/dashboard.blade.php`

---

## Troubleshooting

### Error 403: Anda tidak memiliki akses
- Pastikan role user di database sudah benar
- Verifikasi nama role sama dengan yang di middleware
- Cek relasi user-roles di database

### User tidak ter-redirect ke dashboard yang benar
- Pastikan user memiliki `id_roles` yang valid
- Pastikan table `roles` memiliki data dengan nama role yang sesuai
- Clear cache: `php artisan cache:clear`

### Middleware tidak berfungsi
- Pastikan middleware sudah terdaftar di `bootstrap/app.php`
- Pastikan nama middleware di route sesuai dengan alias: `'role'`

---

## Security Notes

✅ **Sudah Aman:**
- Authorization check di middleware
- Role validation di database
- Protected by auth middleware

⚠️ **Pastikan:**
- Selalu gunakan middleware `role` untuk route sensitif
- Jangan simpan permission di session, selalu query database
- Gunakan Policy untuk action-level authorization
- Validate role di server, jangan andalkan client-side
