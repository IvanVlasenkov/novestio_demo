<aside class="main-sidebar col-md-3 card-body" id="main-aside">

    <!-- Sidebar -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="aside-main">{{ __('messages.aside_w1') }}</li>
            <hr class="mb-1">
            <li class="aside-slave py-1">
                <a href="{{ route('demo') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#demo-icon"></use></svg>   
                    <span class="aside-label">{{ __('messages.demo') }}</span>
                </a>
            </li>
            <li class="aside-slave py-1">
                <a href="{{ route('start') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#strat-icon"></use></svg> 
                    <span class="aside-label">{{ __('messages.start') }}</span>
                </a>
            </li>
            <li class="aside-slave py-1">
                <a href="{{ route('profi') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#profi-icon"></use></svg> 
                    <span class="aside-label">{{ __('messages.profi') }}</span>
                </a>
            </li>
            <li class="aside-slave py-1">
                <a href="{{ route('helpme') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#helpme-icon"></use></svg> 
                    <span class="aside-label">{{ __('messages.helpme') }}</span>
                </a>
            </li>
            <li class="aside-slave py-1">
                <a href="{{ route('vip') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vip-icon"></use></svg> 
                    <span class="aside-label">{{ __('messages.vip') }}</span>
                </a>
            </li>
            
            <li class="aside-main pt-3">{{ __('messages.aside_w2') }}</li>
            <hr class="mb-1">
            <li class="aside-slave py-1">
                <a href="{{ route('gallery') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gallery-icon"></use></svg> 
                    <span class="aside-label">{{ __('messages.gallery') }}</span>
                    </a>
            </li>
            <li class="aside-slave py-1">
                <a href="{{ route('profile') }}">
                    <svg class="aside-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#profile-icon"></use></svg>  
                    <span class="aside-label">{{ __('messages.profile') }}</span>
                </a>
            </li>
        </ul>
    </nav>

</aside>