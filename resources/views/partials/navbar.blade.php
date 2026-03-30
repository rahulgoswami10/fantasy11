<nav class="navbar">

    {{-- LEFT PART --}}
    <div class="nav-left">
        <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="Logo">
        <span class="brand">Footyscore</span>
    </div>


    {{-- CENTER : SEARCH BAR --}}
    <div class="nav-center">
        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search teams, matches, leagues....">
        </div>
    </div>

    {{-- RIGHT PART --}}
    <div class="nav-right">
        <button class="signin-btn">Sign In</button>
        <button class="wallet-btn">₹0</button>
        <img src="{{ asset('assets/images/user.png') }}" class="avatar">
    </div>
</nav>
