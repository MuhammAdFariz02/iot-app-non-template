<!-- layouts/topbar.blade.php -->
<div class="topbar bg-light p-2">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span>Selamat Datang, 
                {{-- {{ Auth::user()->name ?? 'User' }} --}}
            </span>
        </div>
        <div>
            <a href="#" class="btn btn-outline-primary btn-sm">Notifikasi</a>
            <a href="#" class="btn btn-outline-secondary btn-sm">Profil</a>
        </div>
    </div>
</div>
