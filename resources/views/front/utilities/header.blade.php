<header>
    <a href="{{ route('/') }}" class="header_h1">gloss shinhira</a>
    <div class="header_icon">
        @if(Auth::guard('members')->check())            
        <p>ようこそ　{{ Auth::guard('members')->user()->name }}さん</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="#" class="fa-solid fa-door-open" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>            
            </form>
        @else
            <a href="{{ route('member_regist') }}" class="fa-solid fa-user"></a>
        @endif
        <a href="" class="fa-solid fa-phone-flip"></a>
        @if(Auth::guard('members')->check())            
            <a href="{{ route('reserve') }}" class="fa-regular fa-calendar"></a>
        @endif
    </div>
</header>